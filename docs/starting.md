# Using Hive

### Example application.

The best place to start is having a play around with the example application provided by Hive. To check it out, head over to the [example-app branch](https://github.com/r3oath/hive/tree/example-app).

### How do the interfaces interact.

Going from left to right, following a typical HTTP request, we'll have a look at what Hive provides and how it plays along with Laravel.

**Example 1 - Getting a list of books.**

`GET /books` => `BooksController` => `BookRepo` => `Response`

This first example is fairly straight forward, a user requests your `/books` resource which is passed to the `BooksController::index` method. Inside of this method you call the **BookRepo** concrete class and it returns a collection of all the books. **BookRepo** in this example is a concrete class that implements the `src/Contracts/Repos/RepoInterface`.

**Example 2 - Storing a new book.**

`POST /books` => `BooksController` => `BookRepo` => `BookFactory` => (either `createSucceeded` or `createFailed`) => `Response`

In this example, the user sends a POST request to `/books` which is passed along to your `BooksController::store` method. This method calls the `BookRepo->create(...)` method which passes along the data to the `BookFactory->make(...)`. The **BookFactory** is responsible for creating the new resource (or Instance). 

Two events can happen here, either `createSucceeded` or `createFailed` which should be self explanatory. These are defined in the `src/Contracts/Handlers` interfaces, specifically the `OnCreateInterface` which are implemented by your **BooksController**. What this does is allows the **BookFactory** to notify your controller of the outcome. Your controller then handles this how it wishes to and sends a response to your user, or whatever system made the original request.

!!! note
    The **Repo** and **Factory** will trigger various events which are defined in the `OnCreateInterface`, `OnUpdateInterface` and `OnDestroyInterface` interfaces which are to be implemented by the requesting classes to be notified of the respective events.

### Handlers

The handlers defined in the `src/Contracts/Handlers` pass along different information based on the event type. If the event is of the success type, the related **Instance** will be passed to the requesting class. Instances are generally Eloquent models that have implemented the `InstanceInterface` contract. 

On failure however, a **Message** will be passed along. The message will contain a message with a description of the failure and optionally hold reference to a **Validator** that was used to verify the information passed in by the requesting class. Both of these interfaces which can be found in the `src/Contracts/Data` directory have concrete implementations ready to go which can be found in the `src/Concrete/Data` directory.

### Commands

Commands provide a way for your application outlets to perform tasks that are not necessarily related to the **Create**, **Update** or **Destroy** patterns.

An example would be to search through all the books in your database and return a collection of all the instances that have a specific author.

Every **Command** has a respective **Handler**. For instance if you have a **SearchForAuthorCommand** that implements the `src/Contracts/Commands/CommandInterface`, you'd have a **SearchForAuthorHandler** that implements the `src/Contracts/Commands/Handlers/HandlerInterface`. When a requesting system wishes to execute the **SearchForAuthorCommand** it simply initiates the class with any relevant information and passes it to the **Bus**. 

The **Bus** which is an implementation of `src/Contracts/Commands/BusInterface` and has a concrete implementation in `src/Concrete/Commands/Bus` takes a command and intelligently finds the respective handler for it. The result of the command is then returned to the requesting class to do with it what it pleases.

### Observers

Observers and the Observatory are contracts defined in the `src/Contracts/Observers` directory. An observer is any class that wishes to be notified when either an instance is created, updated or destroyed, or any combination of those. Observers however don't request these actions, they simply get informed of the results. 

An toy example of an **Observer** would be a **EmailAuthorObserver** which emails the book author when their book has been successfully created on your system. Any observers must implement the `src/Contracts/Observers/ObserverInterface` and any combination of the **OnCreate**, **OnUpdate** or **OnDestroy** interfaces.

The **Observatory** is the orchestrator for a collection of observers that all wish the receive notifications about an instance type. A concrete implementation of an Observatory has been provided in the `src/Concrete/Observers/Observatory` class.

The observatory is notified of events by the **Repo** or the **Factory**. Once an observatory is notified of an event, it dispatches it to all it's registered Observers.
