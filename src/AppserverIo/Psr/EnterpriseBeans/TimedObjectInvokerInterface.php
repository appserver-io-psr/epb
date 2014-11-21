<?php
/**
 * AppserverIo\Psr\EnterpriseBeans\TimedObjectInvokerInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage EnterpriseBeans
 * @author     Johann Zelger <jz@appserver.io>
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/epb
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans;

use AppserverIo\Lang\Reflection\MethodInterface;

/**
 * Interface for timed object invokers.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage EnterpriseBeans
 * @author     Johann Zelger <jz@appserver.io>
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/epb
 * @link       http://www.appserver.io
 */
interface TimedObjectInvokerInterface
{

    /**
     * Responsible for invoking the timeout method on the target object.
     *
     * The timerservice implementation invokes this method as a callback when a timeout occurs for the
     * passed timer. The timerservice implementation will be responsible for passing the correct
     * timeout method corresponding to the <code>timer</code> on which the timeout has occurred.
     *
     * @param \TechDivision\EnterpriseBean\TimerInterface  $timer         The timer that is passed to timeout
     * @param \AppserverIo\Lang\Reflection\MethodInterface $timeoutMethod The timeout method
     *
     * @return void
     */
    public function callTimeout(TimerInterface $timer, MethodInterface $timeoutMethod = null);

    /**
     * Returns the timeout methods.
     *
     * @return \TechDivision\Storage\StorageInterface A collection of timeout methods
     **/
    public function getTimeoutMethods();


    /**
     * The globally unique identifier for this timed object invoker.
     *
     * @return string
     */
    public function getTimedObjectId();
}
