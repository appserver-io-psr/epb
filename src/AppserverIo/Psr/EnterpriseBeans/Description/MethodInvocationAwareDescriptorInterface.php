<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Description\MethodInvocationAwareDescriptorInterface
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
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans\Description;

/**
 * Interface for factory aware descriptor implementations.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface MethodInvocationAwareDescriptorInterface
{

    /**
     * Add's the passed method to the methods that'll be invoked when the
     * instance has been created.
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\Description\MethodInvocationDescriptorInterface $method The method descriptor to add
     *
     * @return void
     */
    public function addMethodInvocation(MethodInvocationDescriptorInterface $method);

    /**
     * Returns the array with the methods that'll be invoked when the
     * instance has been created.
     *
     * @return array The array with the methods descriptors
     */
    public function getMethodInvocations();
}
