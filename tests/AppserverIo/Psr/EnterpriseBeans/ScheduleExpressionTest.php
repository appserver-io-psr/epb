<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ScheduleExpressionTest
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
 * The test implemenration for the schedule expression implementation.
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
class ScheduleExpressionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The schedule expression instance we want to test.
     *
     * @var \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    protected $scheduleExpression;

    /**
     * Initializes the schedule expression instance we want to test.
     *
     * @return void
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->scheduleExpression = new ScheduleExpression();
    }

    /**
     * Test the getMonth() method.
     *
     * @return void
     */
    public function testGetMonth()
    {
        $this->scheduleExpression->month($month = 10);
        $this->assertEquals($month, $this->scheduleExpression->getMonth());
    }
}
