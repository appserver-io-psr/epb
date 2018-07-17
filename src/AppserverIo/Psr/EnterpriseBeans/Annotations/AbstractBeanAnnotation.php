<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\AbstractBeanAnnotation
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

/**
 * Abstract bean annotation implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
abstract class AbstractBeanAnnotation extends AbstractAnnotation
{

    /**
     * The value of the name attribute.
     *
     * @var string
     */
    protected $name;

    /**
     * The value of the description attribute.
     *
     * @var string
     */
    protected $description;

    /**
     * The value of the lookup attribute.
     *
     * @var string
     */
    protected $lookup;

    /**
     * The value of the shared attribute.
     *
     * @var boolean
     */
    protected $shared = true;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the name attribute, if available
        if (isset($values[AnnotationKeys::NAME])) {
            $this->name = $values[AnnotationKeys::NAME];
        }

        // set the description attribute, if available
        if (isset($values[AnnotationKeys::DESCRIPTION])) {
            $this->description = $values[AnnotationKeys::DESCRIPTION];
        }

        // set the lookup attribute, if available
        if (isset($values[AnnotationKeys::LOOKUP])) {
            $this->lookup = $values[AnnotationKeys::LOOKUP];
        }

        // set the shared attribute, if available
        if (isset($values[AnnotationKeys::SHARED])) {
            $this->shared = $values[AnnotationKeys::SHARED];
        }
    }

    /**
     * Returns the value of the name attribute.
     *
     * @return string|null The annotations name attribute
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of the description attribute.
     *
     * @return string|null The annotations description attribute
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of the lookup attribute.
     *
     * @return string|null The annotations lookup attribute
     */
    public function getLookup()
    {
        return $this->lookup;
    }

    /**
     * Returns the value of the shared attribute.
     *
     * @return boolean The annotations shared attribute
     */
    public function getShared()
    {
        return $this->shared;
    }
}
