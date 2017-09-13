<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\Schedule
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

namespace AppserverIo\Psr\EnterpriseBeans\Annotations;

use AppserverIo\Psr\EnterpriseBeans\ScheduleExpression;
use AppserverIo\Lang\Reflection\ReflectionAnnotation;

/**
 * Annotation implementation representing a @Schedule annotation on a bean method.
 *
 * The annotation can define the following values:
 *
 * - second
 * - minute
 * - hour
 * - dayOfWeek
 * - dayOfMonth
 * - month
 * - year
 * - start
 * - end
 * - timezone
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
class Schedule extends ReflectionAnnotation
{

    /**
     * The annotation for method, a timer has to be registered for.
     *
     * @var string
     */
    const ANNOTATION = 'Schedule';

    /**
     * The aliases to be replaced with valid CRON values.
     *
     * @var array
     */
    protected $aliases = array('EVERY' => '*', 'ZERO' => '0');

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param string $annotationName The annotation name
     * @param array  $values         The annotation values
     */
    public function __construct($annotationName, array $values = array())
    {

        // set the annotation name
        $this->annotationName = $annotationName;

        // set the values found in the annotation
        foreach ($values as $member => $value) {
            // check if we've to replace the value
            foreach ($this->aliases as $aliasKey => $aliasValue) {
                $value = str_replace($aliasKey, $aliasValue, $value);
            }
            // set the value
            $this->values[$member] = $value;
        }
    }

    /**
     * This method returns the class name as
     * a string.
     *
     * @return string
     */
    public static function __getClass()
    {
        return __CLASS__;
    }

    /**
     * Returns day of month.
     *
     * @return string|null The day of month
     */
    public function getDayOfMonth()
    {
        if (isset($this->values[AnnotationKeys::DAY_OF_MONTH])) {
            return $this->values[AnnotationKeys::DAY_OF_MONTH];
        }
    }

    /**
     * Returns day of week.
     *
     * @return string|null The day of week
     */
    public function getDayOfWeek()
    {
        if (isset($this->values[AnnotationKeys::DAY_OF_WEEK])) {
            return $this->values[AnnotationKeys::DAY_OF_WEEK];
        }
    }

    /**
     * Returns end date time.
     *
     * @return string|null The last expiration date
     */
    public function getEnd()
    {
        if (isset($this->values[AnnotationKeys::END])) {
            return $this->values[AnnotationKeys::END];
        }
    }

    /**
     * Returns the hour.
     *
     * @return string|null The hour
     */
    public function getHour()
    {
        if (isset($this->values[AnnotationKeys::HOUR])) {
            return $this->values[AnnotationKeys::HOUR];
        }
    }

    /**
     * Returns the minute.
     *
     * @return string|null The minute
     */
    public function getMinute()
    {
        return $this->values[AnnotationKeys::MINUTE];
    }

    /**
     * Returns the month.
     *
     * @return string|null The month
     */
    public function getMonth()
    {
        if (isset($this->values[AnnotationKeys::MONTH])) {
            return $this->values[AnnotationKeys::MONTH];
        }
    }

    /**
     * Returns the second.
     *
     * @return string|null The second
     */
    public function getSecond()
    {
        if (isset($this->values[AnnotationKeys::SECOND])) {
            return $this->values[AnnotationKeys::SECOND];
        }
    }

    /**
     * Returns start date time.
     *
     * @return string|null The initial expiration date
     */
    public function getStart()
    {
        if (isset($this->values[AnnotationKeys::START])) {
            return $this->values[AnnotationKeys::START];
        }
    }

    /**
     * Returns the timezone.
     *
     * @return null|string The timezone
     */
    public function getTimezone()
    {
        if (isset($this->values[AnnotationKeys::TIMEZONE])) {
            return $this->values[AnnotationKeys::TIMEZONE];
        }
    }

    /**
     * Returns the year.
     *
     * @return string|null The year
     */
    public function getYear()
    {
        if (isset($this->values[AnnotationKeys::YEAR])) {
            return $this->values[AnnotationKeys::YEAR];
        }
    }

    /**
     * Creates a new schedule expression instance from this annotations data.
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression The expression initialzed with the data from this annotation
     */
    public function toScheduleExpression()
    {

        // create a new expression instance
        $expression = new ScheduleExpression();

        // copy the data from the annotation
        $expression->hour($this->getHour());
        $expression->minute($this->getMinute());
        $expression->month($this->getMonth());
        $expression->second($this->getSecond());
        $expression->start($this->getStart());
        $expression->end($this->getEnd());
        $expression->timezone($this->getTimezone());
        $expression->year($this->getYear());
        $expression->dayOfMonth($this->getDayOfMonth());
        $expression->dayOfWeek($this->getDayOfWeek());

        // return the expression
        return $expression;
    }
}
