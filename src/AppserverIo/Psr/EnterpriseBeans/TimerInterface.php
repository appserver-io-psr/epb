<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\TimerInterface
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

/**
 * The Timer interface contains information about a timer that was created through the Timer Service.
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
 * @method \DateTime|null getPreviousRun()    getPreviousRun() Returns the previous run date
 * @method \DateTime      getNextExpiration() getNextExpiration() This method is similar to Timer::getNextTimeout(), except that this method does not check the timer state
 * @method \AppserverIo\Psr\EnterpriseBeans\TimerServiceInterface getTimerService() getTimerService() Returns the instance that'll be invoked when the timeout expires
 * @method \AppserverIo\Appserver\PersistenceContainer\Tasks\TimerTask getTimerTask() getTimerTask(\AppserverIo\Psr\Application\ApplicationInterface $application) Returns the task which handles the timeouts of this timer
 * @method boolean        isActive()          isActive() Returns TRUE if this timer is active, else FALSE
 * @method boolean        isAutoTimer()       isAutoTimer() Query whether this is an auto-timer or a normal programmatically created timer
 * @method boolean        isCanceled()        isCanceled() Returns TRUE if this timer is in TimerState::CANCELED state, else FALSE
 * @method boolean        isExpired()         isExpired() Returns TRUE if this timer is in TimerState::EXPIRED state, else FALSE
 * @method boolean        isInRetry()         isInRetry() Returns TRUE if this timer is in TimerState::RETRY_TIMEOUT, else returns FALSE
 * @method null           setNextTimeout()    setNextTimeout(string $next = null) Sets the next timeout of this timer
 * @method null           setPreviousRun()    setPreviousRun(\DateTime $previousRun) Sets the previous run date
 * @method null           setTimerState()     setTimerState(integer $timerState) Sets the (new) timer state
 */
interface TimerInterface
{

    /**
     * The unique identifier for this timer.
     *
     * @return string
     */
    public function getId();

    /**
     * Cause the timer and all its associated expiration notifications to be canceled.
     *
     * @return void
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function cancel();

    /**
     * Creates and schedules a TimerTask for the next timeout of this timer.
     *
     * @param boolean $newTimer TRUE if this is a new timer being scheduled, and not a re-schedule due to a timeout
     *
     * @return void
     */
    public function scheduleTimeout($newTimer);

    /**
     * Returns the first expiry of this timer.
     *
     * @return \DateTime The first expiry of this timer
     */
    public function getInitialExpiration();

    /**
     * Returns the duration (in microseconds) between timeouts.
     *
     * @return integer The duration (in microseconds) between timeouts
     */
    public function getIntervalDuration();

    /**
     * Get the number of microseconds that will elapse before the next scheduled timer expiration.
     *
     * @return int Number of microseconds that will elapse before the next scheduled timer expiration.
     * @throws \AppserverIo\Psr\EnterpriseBeans\NoSuchObjectLocalException If invoked on a timer that has expired or has been cancelled
     * @throws \AppserverIo\Psr\EnterpriseBeans\NoMoreTimeoutsException Indicates that the timer has no future timeouts
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure
     **/
    public function getTimeRemaining();

    /**
     * Get the point in time at which the next timer expiration is scheduled to occur.
     *
     * @return \DateTime Get the point in time at which the next timer expiration is scheduled to occur.
     * @throws \AppserverIo\Psr\EnterpriseBeans\NoSuchObjectLocalException If invoked on a timer that has expired or has been cancelled
     * @throws \AppserverIo\Psr\EnterpriseBeans\NoMoreTimeoutsException Indicates that the timer has no future timeouts
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure
     **/
    public function getNextTimeout();

    /**
     * Get the information associated with the timer at the time of creation.
     *
     * @return \Serializable The Serializable object that was passed in at timer creation, or null if the
     *         info argument passed in at timer creation was null.
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getInfo();

    /**
     * Get a serializable handle to the timer. This handle can be used at a later time to
     * re-obtain the timer reference.
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\TimerHandleInterface Handle of the Timer
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     **/
    public function getHandle();

    /**
     * Get the schedule expression corresponding to this timer.
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     * @throws \AppserverIo\Lang\IllegalStateException If this method is invoked while the instance is in a state that does not allow access to this method
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function getSchedule();

    /**
     * Query whether this timer is a calendar-based timer.
     *
     * @return boolean True if this timer is a calendar-based timer.
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function isCalendarTimer();

    /**
     * Query whether this timer has persistent semantics.
     *
     * @return boolean True if this timer has persistent guarantees.
     * @throws \AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException If this method could not complete due to a system-level failure.
     */
    public function isPersistent();
}
