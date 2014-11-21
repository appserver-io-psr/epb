<?php
/**
 * AppserverIo\Psr\EnterpriseBeans\TimerConfig
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
 * TimerConfig is used to specify additional timer configuration settings during timer creation.
 *
 * The info object represents a serializable object made available to corresponding timer callbacks.
 * It is optional and defaults to null.
 *
 * The persistent property determines whether the corresponding timer has a lifetime.
 * It is optional and defaults to true.
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
class TimerConfig
{
    /**
     * @var \Serializable
     */
    private $info;

    /**
     * Persistent by default
     *
     * @var bool
     */
    private $persistent = true;

    /**
     * TimerConfig constructor
     *
     * @param \Serializable $info       The info object
     * @param bool          $persistent The persistence flag
     */
    public function __construct(\Serializable $info = null, $persistent = true)
    {
        $this->info = $info;
        $this->persistent = $persistent;
    }

    /**
     * Return's the serializable info object
     *
     * @return \Serializable
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Return's if should be persistent
     *
     * @return bool
     */
    public function isPersistent()
    {
        return $this->persistent;
    }

    /**
     * Set's the info object
     *
     * @param \Serializable $i The info object
     *
     * @return void
     */
    public function setInfo(\Serializable $i)
    {
        $this->info = $i;
    }

    /**
     * Set's the persistence flag
     *
     * @param bool $p The persistence flag
     *
     * @return void
     */
    public function setPersistent($p)
    {
        $this->persistent = $p;
    }
}
