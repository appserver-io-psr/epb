<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ServiceResourceLocator
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
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/epb
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans;

/**
 * Interface for the service resource locator instances.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage EnterpriseBeans
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/epb
 * @link       http://www.appserver.io
 */
interface ServiceResourceLocator
{

    /**
     * Tries to lookup the service with the passed identifier
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\ServiceContext $serviceContext    The service context instance
     * @param string                                          $serviceIdentifier The identifier of the service to be looked up
     * @param array                                           $args              The arguments passed to the service providers constructor
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ServiceProvider The requested service provider instance
     */
    public function lookup(ServiceContext $serviceContext, $serviceIdentifier, array $args = array());
}
