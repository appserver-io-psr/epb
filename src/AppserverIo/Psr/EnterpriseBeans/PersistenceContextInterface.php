<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\PersistenceContextInterface
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
 * The interface for the persistence manager registered for the application.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface PersistenceContextInterface
{

    /**
     * The unique identifier to be registered in the application context.
     *
     * @var string
     */
    const IDENTIFIER = 'PersistenceContextInterface';

    /**
     * Runs a lookup for the entity manager with the passed class name.
     *
     * If the passed lookup name is an entity manager the instance
     * will be returned.
     *
     * @param string $lookupName The name of the requested entity manager
     *
     * @return object The requested entity manager instance
     * @throws \AppserverIo\Psr\EnterpriseBeans\EntityManagerLookupException Is thrown if requested entity manager instance has not been registered
     */
    public function lookup($lookupName);
}
