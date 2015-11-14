
(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">R</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Hive</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Concrete</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:R_Hive_Concrete_Data" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Concrete/Data.html">Data</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Concrete_Data_Message" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Data/Message.html">Message</a>                    </div>                </li>                            <li data-name="class:R_Hive_Concrete_Data_Validator" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Data/Validator.html">Validator</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Concrete_Exceptions" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Concrete/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Concrete_Exceptions_DomainException" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Exceptions/DomainException.html">DomainException</a>                    </div>                </li>                            <li data-name="class:R_Hive_Concrete_Exceptions_NoSupportedHandlerFoundException" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Exceptions/NoSupportedHandlerFoundException.html">NoSupportedHandlerFoundException</a>                    </div>                </li>                            <li data-name="class:R_Hive_Concrete_Exceptions_ValidatorRulesNotSuppliedException" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Exceptions/ValidatorRulesNotSuppliedException.html">ValidatorRulesNotSuppliedException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Concrete_Factories" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Concrete/Factories.html">Factories</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Concrete_Factories_Factory" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Factories/Factory.html">Factory</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Concrete_Observers" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Concrete/Observers.html">Observers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Concrete_Observers_Observatory" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Concrete/Observers/Observatory.html">Observatory</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="namespace:" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Contracts</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:R_Hive_Contracts_Data" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Data.html">Data</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Data_MessageInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Data/MessageInterface.html">MessageInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Data_MutatorInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Data/MutatorInterface.html">MutatorInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Data_ValidatorInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Data/ValidatorInterface.html">ValidatorInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Contracts_Factories" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Factories.html">Factories</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Factories_FactoryInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Factories/FactoryInterface.html">FactoryInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Contracts_Handlers" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Handlers.html">Handlers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Handlers_OnCreateInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Handlers/OnCreateInterface.html">OnCreateInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Handlers_OnDestroyInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Handlers/OnDestroyInterface.html">OnDestroyInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Handlers_OnUpdateInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Handlers/OnUpdateInterface.html">OnUpdateInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Contracts_Instances" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Instances.html">Instances</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Instances_InstanceInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Instances/InstanceInterface.html">InstanceInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Contracts_Observers" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Observers.html">Observers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Observers_ObservatoryInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Observers/ObservatoryInterface.html">ObservatoryInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Observers_ObserverInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Observers/ObserverInterface.html">ObserverInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:R_Hive_Contracts_Repos" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="R/Hive/Contracts/Repos.html">Repos</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:R_Hive_Contracts_Repos_RepoInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Repos/RepoInterface.html">RepoInterface</a>                    </div>                </li>                            <li data-name="class:R_Hive_Contracts_Repos_SupportsObservatoryInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="R/Hive/Contracts/Repos/SupportsObservatoryInterface.html">SupportsObservatoryInterface</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "R.html", "name": "R", "doc": "Namespace R"},{"type": "Namespace", "link": "R/Hive.html", "name": "R\\Hive", "doc": "Namespace R\\Hive"},{"type": "Namespace", "link": "R/Hive/Concrete.html", "name": "R\\Hive\\Concrete", "doc": "Namespace R\\Hive\\Concrete"},{"type": "Namespace", "link": "R/Hive/Concrete/Data.html", "name": "R\\Hive\\Concrete\\Data", "doc": "Namespace R\\Hive\\Concrete\\Data"},{"type": "Namespace", "link": "R/Hive/Concrete/Exceptions.html", "name": "R\\Hive\\Concrete\\Exceptions", "doc": "Namespace R\\Hive\\Concrete\\Exceptions"},{"type": "Namespace", "link": "R/Hive/Concrete/Factories.html", "name": "R\\Hive\\Concrete\\Factories", "doc": "Namespace R\\Hive\\Concrete\\Factories"},{"type": "Namespace", "link": "R/Hive/Concrete/Observers.html", "name": "R\\Hive\\Concrete\\Observers", "doc": "Namespace R\\Hive\\Concrete\\Observers"},{"type": "Namespace", "link": "R/Hive/Contracts.html", "name": "R\\Hive\\Contracts", "doc": "Namespace R\\Hive\\Contracts"},{"type": "Namespace", "link": "R/Hive/Contracts/Data.html", "name": "R\\Hive\\Contracts\\Data", "doc": "Namespace R\\Hive\\Contracts\\Data"},{"type": "Namespace", "link": "R/Hive/Contracts/Factories.html", "name": "R\\Hive\\Contracts\\Factories", "doc": "Namespace R\\Hive\\Contracts\\Factories"},{"type": "Namespace", "link": "R/Hive/Contracts/Handlers.html", "name": "R\\Hive\\Contracts\\Handlers", "doc": "Namespace R\\Hive\\Contracts\\Handlers"},{"type": "Namespace", "link": "R/Hive/Contracts/Instances.html", "name": "R\\Hive\\Contracts\\Instances", "doc": "Namespace R\\Hive\\Contracts\\Instances"},{"type": "Namespace", "link": "R/Hive/Contracts/Observers.html", "name": "R\\Hive\\Contracts\\Observers", "doc": "Namespace R\\Hive\\Contracts\\Observers"},{"type": "Namespace", "link": "R/Hive/Contracts/Repos.html", "name": "R\\Hive\\Contracts\\Repos", "doc": "Namespace R\\Hive\\Contracts\\Repos"},
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/MessageInterface.html", "name": "R\\Hive\\Contracts\\Data\\MessageInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_getMessage", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::getMessage", "doc": "&quot;Get the human readable description of this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_attachValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::attachValidator", "doc": "&quot;Attach a validator instance to this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_hasValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::hasValidator", "doc": "&quot;Whether this message has an associated validator.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_getValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::getValidator", "doc": "&quot;Get the validator associated with this message.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_get", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::get", "doc": "&quot;Get the value for the given key.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_all", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::all", "doc": "&quot;Return all of the mutators stored values.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_values", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::values", "doc": "&quot;Get the values for all specified keys.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_has", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::has", "doc": "&quot;Check if this mutator has the given key-&gt;value pair.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_set", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::set", "doc": "&quot;Set the given key-&gt;value pair on this mutator.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_validate", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::validate", "doc": "&quot;Validate the supplied data.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_hasErrors", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::hasErrors", "doc": "&quot;Whether this validator has any errors available.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getErrors", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getErrors", "doc": "&quot;Get the errors associated with this validator.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getCreateRules", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getCreateRules", "doc": "&quot;Get the validation create rules, called when attributes are\nbeing validated for instance creation.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getUpdateRules", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getUpdateRules", "doc": "&quot;Get the validation update rules, called when attributes are\nbeing validated for instance modification.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_markAsUpdate", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::markAsUpdate", "doc": "&quot;Marks this validation request as an update.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Factories", "fromLink": "R/Hive/Contracts/Factories.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "fromLink": "R/Hive/Contracts/Factories/FactoryInterface.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html#method_make", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface::make", "doc": "&quot;Create a new instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "fromLink": "R/Hive/Contracts/Factories/FactoryInterface.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html#method_update", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface::update", "doc": "&quot;Update the given instance.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html#method_createSucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface::createSucceeded", "doc": "&quot;Called when creation succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html#method_createFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface::createFailed", "doc": "&quot;Called when creation fails.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "fromLink": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html#method_destroySucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface::destroySucceeded", "doc": "&quot;Called when destroying an instance succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "fromLink": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html#method_destroyFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface::destroyFailed", "doc": "&quot;Called when destroying an instance fails.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html#method_updateSucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface::updateSucceeded", "doc": "&quot;Called when an update succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html#method_updateFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface::updateFailed", "doc": "&quot;Called when an update fails.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Instances", "fromLink": "R/Hive/Contracts/Instances.html", "link": "R/Hive/Contracts/Instances/InstanceInterface.html", "name": "R\\Hive\\Contracts\\Instances\\InstanceInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Instances\\InstanceInterface", "fromLink": "R/Hive/Contracts/Instances/InstanceInterface.html", "link": "R/Hive/Contracts/Instances/InstanceInterface.html#method_identity", "name": "R\\Hive\\Contracts\\Instances\\InstanceInterface::identity", "doc": "&quot;Returns the id for the given instance.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Observers", "fromLink": "R/Hive/Contracts/Observers.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_registerObserver", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::registerObserver", "doc": "&quot;Register an observer wishing to receive notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_unregisterObserver", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::unregisterObserver", "doc": "&quot;Unregister an observer that no longer wishes to receive notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_getObservers", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::getObservers", "doc": "&quot;Get the list of all registered observers in this observatory.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnCreateSucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnCreateSucceeded", "doc": "&quot;Notify all observers that a create succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnCreateFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnCreateFailed", "doc": "&quot;Notify all observers that a create failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnUpdateSucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnUpdateSucceeded", "doc": "&quot;Notify all observers that an update succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnUpdateFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnUpdateFailed", "doc": "&quot;Notify all observers that an update failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnDestroySucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnDestroySucceeded", "doc": "&quot;Notify all observers that a destroy succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnDestroyFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnDestroyFailed", "doc": "&quot;Notify all observers that a destroy failed.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Observers", "fromLink": "R/Hive/Contracts/Observers.html", "link": "R/Hive/Contracts/Observers/ObserverInterface.html", "name": "R\\Hive\\Contracts\\Observers\\ObserverInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObserverInterface", "fromLink": "R/Hive/Contracts/Observers/ObserverInterface.html", "link": "R/Hive/Contracts/Observers/ObserverInterface.html#method_serial", "name": "R\\Hive\\Contracts\\Observers\\ObserverInterface::serial", "doc": "&quot;A unique string-serial that identifies this observer.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Repos", "fromLink": "R/Hive/Contracts/Repos.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface", "doc": "&quot;Represents a  instance repository.&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_all", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::all", "doc": "&quot;Returns a collection of all the instances.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_find", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::find", "doc": "&quot;Find and return the instance by the given id.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_create", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::create", "doc": "&quot;Create a new instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_update", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::update", "doc": "&quot;Update the given instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_destroy", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::destroy", "doc": "&quot;Destroy the given instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_supportsObservatory", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::supportsObservatory", "doc": "&quot;Whether this repository supports an observatory.&quot;"},
            
            {"type": "Interface", "fromName": "R\\Hive\\Contracts\\Repos", "fromLink": "R/Hive/Contracts/Repos.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "fromLink": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html#method_registerObservatory", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface::registerObservatory", "doc": "&quot;Register an observatory class that will dispatch notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "fromLink": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html#method_unregisterObservatory", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface::unregisterObservatory", "doc": "&quot;Unregister an observatory class that no longer wishes to dispatch notifications.&quot;"},
            
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Data", "fromLink": "R/Hive/Concrete/Data.html", "link": "R/Hive/Concrete/Data/Message.html", "name": "R\\Hive\\Concrete\\Data\\Message", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Message", "fromLink": "R/Hive/Concrete/Data/Message.html", "link": "R/Hive/Concrete/Data/Message.html#method___construct", "name": "R\\Hive\\Concrete\\Data\\Message::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Message", "fromLink": "R/Hive/Concrete/Data/Message.html", "link": "R/Hive/Concrete/Data/Message.html#method_attachValidator", "name": "R\\Hive\\Concrete\\Data\\Message::attachValidator", "doc": "&quot;Attach a validator instance to this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Message", "fromLink": "R/Hive/Concrete/Data/Message.html", "link": "R/Hive/Concrete/Data/Message.html#method_getMessage", "name": "R\\Hive\\Concrete\\Data\\Message::getMessage", "doc": "&quot;Get the human readable description of this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Message", "fromLink": "R/Hive/Concrete/Data/Message.html", "link": "R/Hive/Concrete/Data/Message.html#method_getValidator", "name": "R\\Hive\\Concrete\\Data\\Message::getValidator", "doc": "&quot;Get the validator associated with this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Message", "fromLink": "R/Hive/Concrete/Data/Message.html", "link": "R/Hive/Concrete/Data/Message.html#method_hasValidator", "name": "R\\Hive\\Concrete\\Data\\Message::hasValidator", "doc": "&quot;Whether this message has an associated validator.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Data", "fromLink": "R/Hive/Concrete/Data.html", "link": "R/Hive/Concrete/Data/Validator.html", "name": "R\\Hive\\Concrete\\Data\\Validator", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method___construct", "name": "R\\Hive\\Concrete\\Data\\Validator::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_getCreateRules", "name": "R\\Hive\\Concrete\\Data\\Validator::getCreateRules", "doc": "&quot;Get the validation create rules, called when attributes are\nbeing validated for instance creation.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_getErrors", "name": "R\\Hive\\Concrete\\Data\\Validator::getErrors", "doc": "&quot;Get the errors associated with this validator.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_getUpdateRules", "name": "R\\Hive\\Concrete\\Data\\Validator::getUpdateRules", "doc": "&quot;Get the validation update rules, called when attributes are\nbeing validated for instance modification.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_hasErrors", "name": "R\\Hive\\Concrete\\Data\\Validator::hasErrors", "doc": "&quot;Whether this validator has any errors available.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_markAsUpdate", "name": "R\\Hive\\Concrete\\Data\\Validator::markAsUpdate", "doc": "&quot;Marks this validation request as an update.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Data\\Validator", "fromLink": "R/Hive/Concrete/Data/Validator.html", "link": "R/Hive/Concrete/Data/Validator.html#method_validate", "name": "R\\Hive\\Concrete\\Data\\Validator::validate", "doc": "&quot;Validate the supplied data.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Exceptions", "fromLink": "R/Hive/Concrete/Exceptions.html", "link": "R/Hive/Concrete/Exceptions/DomainException.html", "name": "R\\Hive\\Concrete\\Exceptions\\DomainException", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Exceptions", "fromLink": "R/Hive/Concrete/Exceptions.html", "link": "R/Hive/Concrete/Exceptions/NoSupportedHandlerFoundException.html", "name": "R\\Hive\\Concrete\\Exceptions\\NoSupportedHandlerFoundException", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Exceptions\\NoSupportedHandlerFoundException", "fromLink": "R/Hive/Concrete/Exceptions/NoSupportedHandlerFoundException.html", "link": "R/Hive/Concrete/Exceptions/NoSupportedHandlerFoundException.html#method___construct", "name": "R\\Hive\\Concrete\\Exceptions\\NoSupportedHandlerFoundException::__construct", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Exceptions", "fromLink": "R/Hive/Concrete/Exceptions.html", "link": "R/Hive/Concrete/Exceptions/ValidatorRulesNotSuppliedException.html", "name": "R\\Hive\\Concrete\\Exceptions\\ValidatorRulesNotSuppliedException", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Exceptions\\ValidatorRulesNotSuppliedException", "fromLink": "R/Hive/Concrete/Exceptions/ValidatorRulesNotSuppliedException.html", "link": "R/Hive/Concrete/Exceptions/ValidatorRulesNotSuppliedException.html#method___construct", "name": "R\\Hive\\Concrete\\Exceptions\\ValidatorRulesNotSuppliedException::__construct", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Factories", "fromLink": "R/Hive/Concrete/Factories.html", "link": "R/Hive/Concrete/Factories/Factory.html", "name": "R\\Hive\\Concrete\\Factories\\Factory", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Factories\\Factory", "fromLink": "R/Hive/Concrete/Factories/Factory.html", "link": "R/Hive/Concrete/Factories/Factory.html#method_make", "name": "R\\Hive\\Concrete\\Factories\\Factory::make", "doc": "&quot;Create a new instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Factories\\Factory", "fromLink": "R/Hive/Concrete/Factories/Factory.html", "link": "R/Hive/Concrete/Factories/Factory.html#method_update", "name": "R\\Hive\\Concrete\\Factories\\Factory::update", "doc": "&quot;Update the given instance.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Concrete\\Observers", "fromLink": "R/Hive/Concrete/Observers.html", "link": "R/Hive/Concrete/Observers/Observatory.html", "name": "R\\Hive\\Concrete\\Observers\\Observatory", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_getObservers", "name": "R\\Hive\\Concrete\\Observers\\Observatory::getObservers", "doc": "&quot;Get the list of all registered observers in this observatory.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnCreateFailed", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnCreateFailed", "doc": "&quot;Notify all observers that a create failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnCreateSucceeded", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnCreateSucceeded", "doc": "&quot;Notify all observers that a create succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnDestroyFailed", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnDestroyFailed", "doc": "&quot;Notify all observers that a destroy failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnDestroySucceeded", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnDestroySucceeded", "doc": "&quot;Notify all observers that a destroy succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnUpdateFailed", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnUpdateFailed", "doc": "&quot;Notify all observers that an update failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_notifyOnUpdateSucceeded", "name": "R\\Hive\\Concrete\\Observers\\Observatory::notifyOnUpdateSucceeded", "doc": "&quot;Notify all observers that an update succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_registerObserver", "name": "R\\Hive\\Concrete\\Observers\\Observatory::registerObserver", "doc": "&quot;Register an observer wishing to receive notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Concrete\\Observers\\Observatory", "fromLink": "R/Hive/Concrete/Observers/Observatory.html", "link": "R/Hive/Concrete/Observers/Observatory.html#method_unregisterObserver", "name": "R\\Hive\\Concrete\\Observers\\Observatory::unregisterObserver", "doc": "&quot;Unregister an observer that no longer wishes to receive notifications.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/MessageInterface.html", "name": "R\\Hive\\Contracts\\Data\\MessageInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_getMessage", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::getMessage", "doc": "&quot;Get the human readable description of this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_attachValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::attachValidator", "doc": "&quot;Attach a validator instance to this message.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_hasValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::hasValidator", "doc": "&quot;Whether this message has an associated validator.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MessageInterface", "fromLink": "R/Hive/Contracts/Data/MessageInterface.html", "link": "R/Hive/Contracts/Data/MessageInterface.html#method_getValidator", "name": "R\\Hive\\Contracts\\Data\\MessageInterface::getValidator", "doc": "&quot;Get the validator associated with this message.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_get", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::get", "doc": "&quot;Get the value for the given key.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_all", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::all", "doc": "&quot;Return all of the mutators stored values.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_values", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::values", "doc": "&quot;Get the values for all specified keys.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_has", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::has", "doc": "&quot;Check if this mutator has the given key-&gt;value pair.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\MutatorInterface", "fromLink": "R/Hive/Contracts/Data/MutatorInterface.html", "link": "R/Hive/Contracts/Data/MutatorInterface.html#method_set", "name": "R\\Hive\\Contracts\\Data\\MutatorInterface::set", "doc": "&quot;Set the given key-&gt;value pair on this mutator.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Data", "fromLink": "R/Hive/Contracts/Data.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_validate", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::validate", "doc": "&quot;Validate the supplied data.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_hasErrors", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::hasErrors", "doc": "&quot;Whether this validator has any errors available.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getErrors", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getErrors", "doc": "&quot;Get the errors associated with this validator.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getCreateRules", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getCreateRules", "doc": "&quot;Get the validation create rules, called when attributes are\nbeing validated for instance creation.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_getUpdateRules", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::getUpdateRules", "doc": "&quot;Get the validation update rules, called when attributes are\nbeing validated for instance modification.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Data\\ValidatorInterface", "fromLink": "R/Hive/Contracts/Data/ValidatorInterface.html", "link": "R/Hive/Contracts/Data/ValidatorInterface.html#method_markAsUpdate", "name": "R\\Hive\\Contracts\\Data\\ValidatorInterface::markAsUpdate", "doc": "&quot;Marks this validation request as an update.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Factories", "fromLink": "R/Hive/Contracts/Factories.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "fromLink": "R/Hive/Contracts/Factories/FactoryInterface.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html#method_make", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface::make", "doc": "&quot;Create a new instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Factories\\FactoryInterface", "fromLink": "R/Hive/Contracts/Factories/FactoryInterface.html", "link": "R/Hive/Contracts/Factories/FactoryInterface.html#method_update", "name": "R\\Hive\\Contracts\\Factories\\FactoryInterface::update", "doc": "&quot;Update the given instance.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html#method_createSucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface::createSucceeded", "doc": "&quot;Called when creation succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnCreateInterface.html", "link": "R/Hive/Contracts/Handlers/OnCreateInterface.html#method_createFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnCreateInterface::createFailed", "doc": "&quot;Called when creation fails.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "fromLink": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html#method_destroySucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface::destroySucceeded", "doc": "&quot;Called when destroying an instance succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface", "fromLink": "R/Hive/Contracts/Handlers/OnDestroyInterface.html", "link": "R/Hive/Contracts/Handlers/OnDestroyInterface.html#method_destroyFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnDestroyInterface::destroyFailed", "doc": "&quot;Called when destroying an instance fails.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Handlers", "fromLink": "R/Hive/Contracts/Handlers.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html#method_updateSucceeded", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface::updateSucceeded", "doc": "&quot;Called when an update succeeds.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface", "fromLink": "R/Hive/Contracts/Handlers/OnUpdateInterface.html", "link": "R/Hive/Contracts/Handlers/OnUpdateInterface.html#method_updateFailed", "name": "R\\Hive\\Contracts\\Handlers\\OnUpdateInterface::updateFailed", "doc": "&quot;Called when an update fails.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Instances", "fromLink": "R/Hive/Contracts/Instances.html", "link": "R/Hive/Contracts/Instances/InstanceInterface.html", "name": "R\\Hive\\Contracts\\Instances\\InstanceInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Instances\\InstanceInterface", "fromLink": "R/Hive/Contracts/Instances/InstanceInterface.html", "link": "R/Hive/Contracts/Instances/InstanceInterface.html#method_identity", "name": "R\\Hive\\Contracts\\Instances\\InstanceInterface::identity", "doc": "&quot;Returns the id for the given instance.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Observers", "fromLink": "R/Hive/Contracts/Observers.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_registerObserver", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::registerObserver", "doc": "&quot;Register an observer wishing to receive notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_unregisterObserver", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::unregisterObserver", "doc": "&quot;Unregister an observer that no longer wishes to receive notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_getObservers", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::getObservers", "doc": "&quot;Get the list of all registered observers in this observatory.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnCreateSucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnCreateSucceeded", "doc": "&quot;Notify all observers that a create succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnCreateFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnCreateFailed", "doc": "&quot;Notify all observers that a create failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnUpdateSucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnUpdateSucceeded", "doc": "&quot;Notify all observers that an update succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnUpdateFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnUpdateFailed", "doc": "&quot;Notify all observers that an update failed.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnDestroySucceeded", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnDestroySucceeded", "doc": "&quot;Notify all observers that a destroy succeeded.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface", "fromLink": "R/Hive/Contracts/Observers/ObservatoryInterface.html", "link": "R/Hive/Contracts/Observers/ObservatoryInterface.html#method_notifyOnDestroyFailed", "name": "R\\Hive\\Contracts\\Observers\\ObservatoryInterface::notifyOnDestroyFailed", "doc": "&quot;Notify all observers that a destroy failed.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Observers", "fromLink": "R/Hive/Contracts/Observers.html", "link": "R/Hive/Contracts/Observers/ObserverInterface.html", "name": "R\\Hive\\Contracts\\Observers\\ObserverInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Observers\\ObserverInterface", "fromLink": "R/Hive/Contracts/Observers/ObserverInterface.html", "link": "R/Hive/Contracts/Observers/ObserverInterface.html#method_serial", "name": "R\\Hive\\Contracts\\Observers\\ObserverInterface::serial", "doc": "&quot;A unique string-serial that identifies this observer.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Repos", "fromLink": "R/Hive/Contracts/Repos.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface", "doc": "&quot;Represents a  instance repository.&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_all", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::all", "doc": "&quot;Returns a collection of all the instances.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_find", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::find", "doc": "&quot;Find and return the instance by the given id.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_create", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::create", "doc": "&quot;Create a new instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_update", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::update", "doc": "&quot;Update the given instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_destroy", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::destroy", "doc": "&quot;Destroy the given instance.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\RepoInterface", "fromLink": "R/Hive/Contracts/Repos/RepoInterface.html", "link": "R/Hive/Contracts/Repos/RepoInterface.html#method_supportsObservatory", "name": "R\\Hive\\Contracts\\Repos\\RepoInterface::supportsObservatory", "doc": "&quot;Whether this repository supports an observatory.&quot;"},
            
            {"type": "Class", "fromName": "R\\Hive\\Contracts\\Repos", "fromLink": "R/Hive/Contracts/Repos.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "fromLink": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html#method_registerObservatory", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface::registerObservatory", "doc": "&quot;Register an observatory class that will dispatch notifications.&quot;"},
                    {"type": "Method", "fromName": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface", "fromLink": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html", "link": "R/Hive/Contracts/Repos/SupportsObservatoryInterface.html#method_unregisterObservatory", "name": "R\\Hive\\Contracts\\Repos\\SupportsObservatoryInterface::unregisterObservatory", "doc": "&quot;Unregister an observatory class that no longer wishes to dispatch notifications.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


