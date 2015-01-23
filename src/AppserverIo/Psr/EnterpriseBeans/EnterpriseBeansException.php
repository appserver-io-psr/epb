<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\EnterpriseBeansException
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

/**
 * The EnterpriseBeansException exception is thrown by a Bean instance to its
 * container to report that the invoked business method or callback method
 * could not be completed because of an unexpected error (e.g. the instance
 * failed to open a database connection).
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
class EnterpriseBeansException extends \RuntimeException
{

}
