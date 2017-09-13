<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\BeanContextInterface
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
 * The interface for the bean manager registered for the application.
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
 * @method null        destroyBeanInstance()              destroyBeanInstance(object $instance) Invokes the bean method with a pre-destroy callback
 * @method null        removeStatefulSessionBean()        removeStatefulSessionBean(string $sessionId, string $className) Removes the stateful session bean with the passed session-ID and class name from the bean manager
 * @method object      newSingletonSessionBeanInstance()  newSingletonSessionBeanInstance(string $className, string $sessionId = null, array $args = array()) Returns a new instance of the SSB with the passed class name
 * @method object|null lookupStatefulSessionBean()        lookupStatefulSessionBean(string $sessionId, string $className) Retrieves the requested stateful session bean
 * @method object|null lookupSingletonSessionBean()       lookupSingletonSessionBean(string $className) Retrieves the requested singleton session bean
 * @method \AppserverIo\Storage\StorageInterface getSingletonSessionBeans() getSingletonSessionBeans() Return the storage with the singleton session beans
 * @method \AppserverIo\Storage\StorageInterface getStatefulSessionBeans() getStatefulSessionBeans() Return the storage with the stateful session beans
 */
interface BeanContextInterface
{

    /**
     * The unique identifier to be registered in the application context.
     *
     * @var string
     */
    const IDENTIFIER = 'BeanContextInterface';

    /**
     * Returns the absolute path to the web application.
     *
     * @return string The absolute path
     */
    public function getWebappPath();

    /**
     * Runs a lookup for the session bean with the passed class name and
     * session ID.
     *
     * If the passed class name is a session bean an instance
     * will be returned.
     *
     * @param string $className The name of the session bean's class
     * @param string $sessionId The session ID
     * @param array  $args      The arguments passed to the session beans constructor
     *
     * @return object The requested bean instance
     * @throws \AppserverIo\Psr\EnterpriseBeans\InvalidBeanTypeException Is thrown if passed class name is no session bean or is a entity bean (not implemented yet)
     */
    public function lookup($className, $sessionId = null, array $args = array());

    /**
     * Attaches the passed bean, depending on it's type to the container.
     *
     * @param object $instance  The bean instance to attach
     * @param string $sessionId The session-ID when we have stateful session bean
     *
     * @return void
     * @throws \Exception Is thrown if we have a stateful session bean, but no session-ID passed
     */
    public function attach($instance, $sessionId = null);

    /**
     * Returns a new reflection class instance for the passed class name.
     *
     * @param string $className The class name to return the reflection class instance for
     *
     * @return \AppserverIo\Lang\Reflection\ReflectionClass The reflection instance
     */
    public function newReflectionClass($className);

    /**
     * Returns a reflection class instance for the passed class name.
     *
     * @param string $className The class name to return the reflection class instance for
     *
     * @return \AppserverIo\Lang\Reflection\ReflectionClass The reflection instance
     */
    public function getReflectionClass($className);

    /**
     * Returns a reflection class instance for the passed class name.
     *
     * @param object $instance The instance to return the reflection class instance for
     *
     * @return \AppserverIo\Lang\Reflection\ReflectionClass The reflection instance
     */
    public function getReflectionClassForObject($instance);

    /**
     * Returns a new instance of the passed class name.
     *
     * @param string $className The fully qualified class name to return the instance for
     *
     * @return object The instance itself
     */
    public function newInstance($className);
}
