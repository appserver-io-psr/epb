<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\TimerServiceInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Johann Zelger <jz@appserver.io>
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans;

use AppserverIo\Lang\Reflection\MethodInterface;

/**
 * The TimerService interface provides enterprise bean components with access to the
 * container-provided Timer Service. The Timer Service allows stateless session beans,
 * singleton session beans, message-driven beans, and entity beans to be registered
 * for timer callback events at a specified time, after a specified elapsed time,
 * after a specified interval, or according to a calendar-based schedule.
 *
 * @author    Johann Zelger <jz@appserver.io>
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method \AppserverIo\Storage\StorageInterface                        getScheduledTimerTasks()  getScheduledTimerTasks() Returns the scheduled timer tasks
 * @method \AppserverIo\Psr\EnterpriseBeans\TimedObjectInvokerInterface getTimedObjectInvoker()   getTimedObjectInvoker() Returns the timed object invoker handling timer invocation on timed object instances
 * @method \AppserverIo\Psr\EnterpriseBeans\ServiceExecutorInterface    getTimerServiceExecutor() getTimerServiceExecutor() Returns the timer object executor instances
 * @method boolean                                                      isScheduled()             isScheduled(string $id) Queries if the timer with the passed ID has already been scheduled
 * @method boolean                                                      isStarted()               isStarted() Queries if the timer with the passed ID has already been scheduled
 */
interface TimerServiceInterface
{

    /**
     * Create a calendar-based timer based on the input schedule expression.
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression $schedule      A schedule expression describing the timeouts for this timer
     * @param \Serializable                                       $info          Serializable info that will be made available through the newly created timers Timer::getInfo() method
     * @param boolean                                             $persistent    TRUE if the newly created timer has to be persistent
     * @param \AppserverIo\Lang\Reflection\MethodInterface        $timeoutMethod The timeout method to be invoked
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\TimerInterface The newly created Timer.
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function createCalendarTimer(ScheduleExpression $schedule, \Serializable $info = null, $persistent = true, MethodInterface $timeoutMethod = null);

    /**
     * Create an interval timer whose first expiration occurs at a given point in time and
     * whose subsequent expirations occur after a specified interval.
     *
     * @param integer       $initialExpiration The number of milliseconds that must elapse before the firsttimer expiration notification
     * @param integer       $intervalDuration  The number of milliseconds that must elapse between timer
     *      expiration notifications. Expiration notifications are scheduled relative to the time of the first expiration. If
     *      expiration is delayed(e.g. due to the interleaving of other method calls on the bean) two or more expiration notifications
     *      may occur in close succession to "catch up".
     * @param \Serializable $info              Serializable info that will be made available through the newly created timers Timer::getInfo() method
     * @param boolean       $persistent        TRUE if the newly created timer has to be persistent
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\TimerInterface The newly created Timer
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure
     **/
    public function createIntervalTimer($initialExpiration, $intervalDuration, \Serializable $info = null, $persistent = true);

    /**
     * Create a single-action timer that expires after a specified duration.
     *
     * @param integer       $duration   The number of microseconds that must elapse before the timer expires
     * @param \Serializable $info       Serializable info that will be made available through the newly created timers Timer::getInfo() method
     * @param boolean       $persistent TRUE if the newly created timer has to be persistent
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\TimerInterface The newly created Timer.
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function createSingleActionTimer($duration, \Serializable $info = null, $persistent = true);

    /**
     * Get all the active timers associated with this bean.
     *
     * @return \AppserverIo\Storage\StorageInterface A collection of Timer objects.
     *
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getTimers();

    /**
     * Returns all active timers associated with the beans in the same module in which the caller
     * bean is packaged. These include both the programmatically-created timers and
     * the automatically-created timers.
     *
     * @return \AppserverIo\Storage\StorageInterface A collection of Timer objects.
     *
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getAllTimers();

    /**
     * Creates and schedules a timer takes for the next timeout of the passed timer.
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\TimerInterface $timer    The timer we want to schedule a task for
     * @param boolean                                         $newTimer TRUE if this is a new timer being scheduled, and not a re-schedule due to a timeout
     *
     * @return void
     */
    public function scheduleTimeout(TimerInterface $timer, $newTimer);
}
