<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Description\StatefulSessionBeanDescriptorInterface
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
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans\Description;

/**
 * Interface for a stateful session bean descriptor.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface StatefulSessionBeanDescriptorInterface extends SessionBeanDescriptorInterface
{

    /**
     * The array with the post detach callback method names.
     *
     * @return array The post detach callback method names
     */
    public function getPostDetachCallbacks();

    /**
     * The array with the pre attach callback method names.
     *
     * @return array The pre attach callback method names
     */
    public function getPreAttachCallbacks();

    /**
     * The array with the post activate callback method names.
     *
     * @return array The post activate callback method names
     */
    public function getPostActivateCallbacks();

    /**
     * The array with the pre passivate callback method names.
     *
     * @return array The pre passivate callback method names
     */
    public function getPrePassivateCallbacks();

    /**
     * Returns the array with the remove method names.
     *
     * @return array The array with the remove method names
     */
    public function getRemoveMethods();

    /**
     * Queries whether the passed method name is a remove method or not.
     *
     * @param string $methodName The method name to be queried
     *
     * @return boolean TRUE if the passed method name is a remove method, else FALSE
     */
    public function isRemoveMethod($methodName);
}
