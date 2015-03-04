<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ServiceExecutorInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans;

/**
 * Interface for executor threads.
 *
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
 * @method \AppserverIo\Storage\GenericStackable getScheduledTimers() getScheduledTimers() Returns the scheduled timers
 * @method \AppserverIo\Storage\GenericStackable getTasksToExecute()  getTasksToExecute() Returns the storage of the ID's of the tasks to be executed
 * @method null                                  schedule()           schedule(\AppserverIo\Psr\EnterpriseBeans\TimerInterface $timer) Adds the passed timer task to the schedule
 */
interface ServiceExecutorInterface
{

    /**
     * Returns the application instance.
     *
     * @return \AppserverIo\Psr\Application\ApplicationInterface The application instance
     */
    public function getApplication();
}
