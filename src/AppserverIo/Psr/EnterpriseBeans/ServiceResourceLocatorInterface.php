<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ServiceResourceLocatorInterface
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
 * Interface for the service resource locator instances.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface ServiceResourceLocatorInterface
{

    /**
     * Tries to lookup the service with the passed identifier
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\ServiceContextInterface $serviceContext    The service context instance
     * @param string                                                   $serviceIdentifier The identifier of the service to be looked up
     * @param array                                                    $args              The arguments passed to the service providers constructor
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ServiceProviderInterface The requested service provider instance
     */
    public function lookup(ServiceContextInterface $serviceContext, $serviceIdentifier, array $args = array());
}
