<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Description\FactoryDescriptorInterface
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
 * Interface for a bean descriptor.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface FactoryDescriptorInterface
{

    /**
     * Returns the bean name.
     *
     * @return string The bean name
     */
    public function getName();

    /**
     * Returns the beans class name.
     *
     * @return string The beans class name
     */
    public function getClassName();

    /**
     * Returns the factory method that creates the bean.
     *
     * @return string The factory factory
     */
    public function getMethod();
}
