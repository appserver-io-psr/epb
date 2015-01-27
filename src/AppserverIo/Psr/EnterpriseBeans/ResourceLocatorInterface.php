<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ResourceLocatorInterface
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

namespace AppserverIo\Psr\EnterpriseBeans;

/**
 * Interface for the resource locator instances.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface ResourceLocatorInterface
{

    /**
     * Run's a lookup for the session bean with the passed class name and
     * session ID.
     *
     * If the passed class name is a session bean an instance
     * will be returned.
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\BeanContextInterface $beanManager The bean manager instance
     * @param string                                                $className   The name of the session bean's class
     * @param string                                                $sessionId   The session ID
     * @param array                                                 $args        The arguments passed to the session beans constructor
     *
     * @return object The requested session bean
     * @throws \AppserverIo\Psr\EnterpriseBeans\InvalidBeanTypeException Is thrown if passed class name is no session bean or is a entity bean (not implmented yet)
     */
    public function lookup(BeanContextInterface $beanManager, $className, $sessionId = null, array $args = array());
}
