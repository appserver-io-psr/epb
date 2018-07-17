# Version 7.0.0

## Bugfixes

* None

## Features

* Refactor annotations, make them compatible with Doctrine Annotations library

# Version 6.0.1

## Bugfixes

* None

## Features

* Switch to appserver-io-psr/application ~1.0 branch

# Version 6.0.0

## Bugfixes

* None

## Features

* Add Fixture and Migration annotations
* Method descriptor interfaces from appserver-io/description to this repository

# Version 5.0.0

## Bugfixes

* None

## Features

* Add @Inject annotation
* Refactor descriptors for optimized bean initialization
* Remove session ID parameter from BeanContextInterface::lookup() method
* Remove session ID parameter from ResourceLocatorInterface::lookup() method

# Version 4.0.0

## Bugfixes

* Fixed #18 schedule annotation alias replacement bug

## Features

* Switch to latest appserver-io/lang branch ~3.0
* Remove parameters session ID and args from BeanContextInterface::newInstance() method

# Version 3.0.0

## Bugfixes

* None

## Features

* Extend SFSB descriptor with @PrePassivate + @PostActivate annotations
* Extend SSB descriptor with @PreAttach + @PostDetach annotations

# Version 2.0.0

## Bugfixes

* None

## Features

* Extend session bean descriptor with remove method information
* Add new @Remote annotation class implementation

# Version 1.4.0

## Bugfixes

* None

## Features

* Add persistence unit functionality necessary for Doctrine integration

# Version 1.3.0

## Bugfixes

* None

## Features

* Add PostActivate, PrePassivate, PostDetach and PreAttach annotation implementations

# Version 1.2.0

## Bugfixes

* None

## Features

* Added method hinting for several interface's common implementations

# Version 1.1.0

## Bugfixes

* None

## Features

* Move Descriptor implementations from appserver-io/appserver to this package

# Version 1.0.0

## Bugfixes

* None

## Features

* Switched to stable dependencies due to version 1.0.0 release

# Version 0.4.3

## Bugfixes

* None

## Features

* Remove \DateTime type hints from ScheduledExpression implementation

# Version 0.4.2

## Bugfixes

* Wrong usage of TimerServiceContext interface

## Features

* None

# Version 0.4.1

## Bugfixes

* Wrong name of ServiceResourceLocatorInterface interface file 

## Features

* None

# Version 0.4.0

## Bugfixes

* None

## Features

* Unified the interface naming conventions
* moved to new documentation schema

# Version 0.3.0

## Bugfixes

* None

## Features

* Merge with appserver-io-psr/persistencecontainerprotocol

# Version 0.2.0

## Bugfixes

* None

## Features

* Rename getLookupName() to getLookup() in Resource/EnterpriseBean annotation
* Remove unnecessary mappedName attribute from annotations

# Version 0.1.6

## Bugfixes

* None

## Features

* Add lookup attribute to AbstractBeanAnnotation
* Singleton, Stateful, Stateless + MessageDriven annotation now extend from EnterpriseBean annotation

# Version 0.1.5

## Bugfixes

* None

## Features

* Move annotations from persistence container package to this package

# Version 0.1.4

## Bugfixes

* None

## Features

* Move MethodInterface to techdivision/lang package
* Add techdivision/lang 0.1.* as composer dependency

# Version 0.1.3

## Bugfixes

* None

## Features

* Add TimedObjectInterface::DEFAULT_TIMEOUT_METHOD constant with default timeout method name
* Add TimedObjectInvokerInterface::getTimedObjectId() and TimedObjectInvokerInterface::getTimeoutMethods() methods

# Version 0.1.2

## Bugfixes

* None

## Features

* Add MethodInterface and TimedObjectInvokerInterface
* Refactor TimerInterface and TimerServiceInterface

# Version 0.1.1

## Bugfixes

* Bugfix for invalid serialize/unserialize methods in ScheduleExpression
* Add missing exeptions to TimerInterface doc block

## Features

* Add NoSuchObjectLocalException that'll be thrown if a timer is not longer available
* Switch from array to TechDivision\Storage\StorageInterface for TimerServiceInterface::getTimers() and TimerServiceInterface::getAllTimers() methods
* Add NoMoreTimeoutsException that indicates that a calendar-based timer will not result in any more timeouts
* Add bootstrap.php + phpunit.xml
* Refactor travis.yml for compatiblity with appserver-io/build process

# Version 0.1.0

## Bugfixes

* None

## Features

* Initial Release
