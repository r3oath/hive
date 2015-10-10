# Hive

A Hexagonal Architecture Framework for Laravel

### What's Hexagonal Architecture?

Hexagonal Architecture is an architecture defined by establishing a perimeter around the domain of your application and establishing adapters for input/output interactions. By establishing this isolation layer, the application becomes unaware of the nature of the things it's interacting with.

Create your application to work without either a UI or a database so you can run automated regression-tests against the application, work when the database becomes unavailable, and link applications together without any user involvement. - Alistair Cockburn

### What does Hive provide?

The Hive package provides two things. A set of interfaces that define standard patterns and perhaps a few custom ones. These are to be implemented by concrete classes in your project that fill in the missing functionality. They define the common interfaces that will be typically seen in a Hexagonal (or Ports and Adapters) project.

The second thing Hive provides is some Laravel specific concrete implementations of the said interfaces. These are designed to be as abstract as possible yet provide a decent amount of grounding for your project. None of us like repeating ourselves over and over when we develop a new project, so Hive tries to cover the most common implementations and leaves out what is naturally dictated by your project needs.

### License

The MIT License (MIT)

Copyright (c) 2015 Tristan Strathearn (r3oath@protonmail.ch)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
