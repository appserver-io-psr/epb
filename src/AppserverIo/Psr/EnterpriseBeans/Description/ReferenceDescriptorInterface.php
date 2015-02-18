<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Description\ReferenceDescriptorInterface
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
 * Interface for utility classes that stores a reference configuration.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface ReferenceDescriptorInterface
{

    /**
     * Returns the reference name.
     *
     * @return string The reference name
     */
    public function getName();

    /**
     * Returns the beans description.
     *
     * @return string The beans description
     */
    public function getDescription();

    /**
     * Returns the injection target specification.
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\Description\InjectionTargetDescriptorInterface The injection target specification
     */
    public function getInjectionTarget();
}
