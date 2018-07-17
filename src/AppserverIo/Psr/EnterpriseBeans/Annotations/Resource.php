<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\Resource
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
 * Annotation implementation representing a @Resource annotation on a property.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 *
 * @Annotation
 * @Target({"CLASS", "METHOD","PROPERTY"})
 */
class Resource extends AbstractBeanAnnotation
{

    /**
     * The value of the bean interface attribute.
     *
     * @var string
     */
    protected $beanInterface;

    /**
     *  The value of the bean name attribute.
     *
     * @var string
     */
    protected $beanName;

    /**
     * The value of the type attribute.
     *
     * @var string
     */
    protected $type;

    /**
     * The value of the lookup attribute.
     *
     * @var string
     */
    protected $lookup;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the bean interface attribute, if available
        if (isset($values[AnnotationKeys::BEAN_INTERFACE])) {
            $this->beanInterface = $values[AnnotationKeys::BEAN_INTERFACE];
        }

        // set the bean interface attribute, if available
        if (isset($values[AnnotationKeys::BEAN_NAME])) {
            $this->beanName = $values[AnnotationKeys::BEAN_NAME];
        }

        // set the type attribute, if available
        if (isset($values[AnnotationKeys::TYPE])) {
            $this->type = $values[AnnotationKeys::TYPE];
        }

        // set the lookup attribute, if available
        if (isset($values[AnnotationKeys::LOOKUP])) {
            $this->lookup = $values[AnnotationKeys::LOOKUP];
        }

        // pass the values through to the parent constructor
        parent::__construct($values);
    }

    /**
     * Returns the value of the bean interface attribute.
     *
     * @return string|null The annotations bean interface attribute
     */
    public function getBeanInterface()
    {
        return $this->beanInterface;
    }

    /**
     * Returns the value of the bean name attribute.
     *
     * @return string|null The annotations bean Name attribute
     */
    public function getBeanName()
    {
        return $this->beanName;
    }

    /**
     * Returns the value of the type attribute.
     *
     * @return string The annotations type attribute
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of the lookup name attribute.
     *
     * @return string|null The annotations lookup name attribute
     */
    public function getLookup()
    {
        return $this->lookup;
    }
}
