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