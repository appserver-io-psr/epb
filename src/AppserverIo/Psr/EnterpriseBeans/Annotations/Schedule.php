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
 *
 * @Annotation
 * @Target({"METHOD"})
 */
class Schedule extends AbstractAnnotation
{

    /**
     * The default number to append to an alias if a number is missing
     * @var string
     */
    const DEFAULT_NUMBER = '1';

    /**
     * The aliases to be replaced with valid CRON values.
     *
     * @var array
     */
    protected $aliases = array('EVERY' => '*', 'ZERO' => '0', 'SLASH' => '/');

    /**
     * The day of month.
     *
     * @var string
     */
    protected $dayOfMonth;

    /**
     * The day of week.
     *
     * @var string
     */
    protected $dayOfWeek;

    /**
     * The end date time.
     *
     * @var string
     */
    protected $end;

    /**
     * The the hour.
     *
     * @var string
     */
    protected $hour;

    /**
     * The the minute.
     *
     * @var string
     */
    protected $minute;

    /**
     * The the month.
     *
     * @var string
     */
    protected $month;

    /**
     * The the second.
     *
     * @var string
     */
    protected $second;

    /**
     * The start date time.
     *
     * @var string
     */
    protected $start;

    /**
     * The the timezone.
     *
     * @var string
     */
    protected $timezone;

    /**
     * The the year.
     *
     * @var string
     */
    protected $year;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the values found in the annotation
        foreach ($values as $member => $value) {
            // check if we've to replace the value
            foreach ($this->aliases as $aliasKey => $aliasValue) {
                $value = str_replace($aliasKey, $aliasValue, $value);
                // Append the default number to the SLASH alias value if no number is given
                if ((preg_match('/\/$/', $value)) === 1) {
                    $value .= self::DEFAULTNUMBER;
                }
            }
            // set the value
            $values[$member] = $value;
        }

        // set the day of month attribute, if available
        if (isset($values[AnnotationKeys::DAY_OF_MONTH])) {
            $this->dayOfMonth = $values[AnnotationKeys::DAY_OF_MONTH];
        }

        // set the day of week attribute, if available
        if (isset($values[AnnotationKeys::DAY_OF_WEEK])) {
            $this->dayOfWeek = $values[AnnotationKeys::DAY_OF_WEEK];
        }

        // set the end attribute, if available
        if (isset($values[AnnotationKeys::END])) {
            $this->end = $values[AnnotationKeys::END];
        }

        // set the hour attribute, if available
        if (isset($values[AnnotationKeys::HOUR])) {
            $this->hour = $values[AnnotationKeys::HOUR];
        }

        // set the minute attribute, if available
        if (isset($values[AnnotationKeys::MINUTE])) {
            $this->minute = $values[AnnotationKeys::MINUTE];
        }

        // set the month attribute, if available
        if (isset($values[AnnotationKeys::MONTH])) {
            $this->month = $values[AnnotationKeys::MONTH];
        }

        // set the second attribute, if available
        if (isset($values[AnnotationKeys::SECOND])) {
            $this->second = $values[AnnotationKeys::SECOND];
        }

        // set the start attribute, if available
        if (isset($values[AnnotationKeys::START])) {
            $this->start = $values[AnnotationKeys::START];
        }

        // set the timezone attribute, if available
        if (isset($values[AnnotationKeys::TIMEZONE])) {
            $this->timezone = $values[AnnotationKeys::TIMEZONE];
        }

        // set the year attribute, if available
        if (isset($values[AnnotationKeys::YEAR])) {
            $this->year = $values[AnnotationKeys::YEAR];
        }
    }

    /**
     * Returns day of month.
     *
     * @return string|null The day of month
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Returns day of week.
     *
     * @return string|null The day of week
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Returns end date time.
     *
     * @return string|null The last expiration date
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Returns the hour.
     *
     * @return string|null The hour
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Returns the minute.
     *
     * @return string|null The minute
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Returns the month.
     *
     * @return string|null The month
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Returns the second.
     *
     * @return string|null The second
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Returns start date time.
     *
     * @return string|null The initial expiration date
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Returns the timezone.
     *
     * @return null|string The timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Returns the year.
     *
     * @return string|null The year
     */
    public function getYear()
    {
        return $this->year;
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
