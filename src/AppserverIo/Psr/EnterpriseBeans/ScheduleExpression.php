<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
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
 * A calendar-based timeout expression for an enterprise bean timer.
 *
 * Each expression attribute has two overloaded setter methods, one that takes a String and one that takes an int.
 * The int version is merely a convenience method for setting the attribute in the common case that the value is a
 * simple integer.
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
class ScheduleExpression implements \Serializable
{

    /**
     * The date format we use to serialize/unserialize \DateTime properties.
     *
     * @var string
     */
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * @var string
     */
    private $dayOfMonth = "*";

    /**
     * @var string
     */
    private $dayOfWeek = "*";

    /**
     * @var string
     */
    private $end;

    /**
     * @var string
     */
    private $hour = "0";

    /**
     * @var string
     */
    private $minute = "0";

    /**
     * @var string
     */
    private $month = "*";

    /**
     * @var string
     */
    private $second = "0";

    /**
     * @var string
     */
    private $start;

    /**
     * @var string
     */
    private $timezone = "";

    /**
     * @var string
     */
    private $year = "*";

    /**
     * String representation of object.
      *
     * @return string the string representation of the object or null
     * @link http://php.net/manual/en/serializable.serialize.php
     */
    public function serialize()
    {
        return serialize(get_object_vars($this));
    }

    /**
     * Constructs the object
     *
     * @param string $data The string representation of the object
     *
     * @return void
     * @link http://php.net/manual/en/serializable.unserialize.php
     */
    public function unserialize($data)
    {
        foreach (unserialize($data) as $propertyName => $propertyValue) {
            $this->$propertyName = $propertyValue;
        }
    }

    /**
     * Sets the day of month
     *
     * @param String $d The string
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function dayOfMonth($d)
    {
        $this->dayOfMonth = (string)$d;
        return $this;
    }

    /**
     * Sets the day of week
     *
     * @param int|string $d The day of week
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function dayOfWeek($d)
    {
        $this->dayOfWeek = (string)$d;
        return $this;
    }

    /**
     * Sets the day of week
     *
     * @param \DateTime $e The end date time
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function end(\DateTime $e)
    {
        $this->end = $e->format(ScheduleExpression::DATE_FORMAT);
        return $this;
    }

    /**
     * Return's day of month
     *
     * @return string
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Return's day of week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Return's end datetime
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Return's hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Return's minute
     *
     * @return string
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Return's month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Return's second
     *
     * @return string
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Return's start date time
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Return's the timezone
     *
     * @return null|string
     */
    public function getTimezone()
    {
        // Note that attributes use the empty string "" as a default,
        // so the expression @Schedule(timezone="", ...) will result in a null value from the
        // corresponding ScheduleExpression->getTimezone() method.
        if ($this->timezone != null && empty($this->timezone)) {
            return null;
        }
        return $this->timezone;
    }

    /**
     * Return's the year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set's the hour
     *
     * @param int|string $h the hour to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function hour($h)
    {
        $this->hour = (string)$h;
        return $this;
    }

    /**
     * Set's the minute
     *
     * @param int|string $m The minute to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function minute($m)
    {
        $this->minute = (string)$m;
        return $this;
    }

    /**
     * Set's the month
     *
     * @param int|string $m The month to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function month($m)
    {
        $this->month = (string)$m;
        return $this;
    }

    /**
     * Set's the second
     *
     * @param int|string $s The second to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function second($s)
    {
        $this->second = (string)$s;
        return $this;
    }

    /**
     * Set's the start date time
     *
     * @param \DateTime $s The start date time to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function start(\DateTime $s)
    {
        $this->start = $s->format(ScheduleExpression::DATE_FORMAT);
        return $this;
    }

    /**
     * Set's the timezone
     *
     * @param int|string $s The timezone to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function timezone($s)
    {
        $this->timezone = (string)$s;
        return $this;
    }

    /**
     * Set's the year
     *
     * @param int|string $y The year to set
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ScheduleExpression
     */
    public function year($y)
    {
        $this->year = (string)$y;
        return $this;
    }

    /**
     * Render's the object to string
     *
     * @return string
     */
    public function __toString()
    {
        $s = "ScheduleExpression[";
        $s .= "second=";
        $s .= $this->second;
        $s .= " minute=";
        $s .= $this->minute;
        $s .= " hour=";
        $s .= $this->hour;
        $s .= " dayOfWeek=";
        $s .= $this->dayOfWeek;
        $s .= " dayOfMonth=";
        $s .= $this->dayOfMonth;
        $s .= " month=";
        $s .= $this->month;
        $s .= " year=";
        $s .= $this->year;
        $s .= " start=";
        $s .= (string)$this->start;
        $s .= " end=";
        $s .= (string)$this->end;
        $s .= " timezone=";
        $s .= $this->timezone;
        $s .= "]";

        return $s;
    }
}
