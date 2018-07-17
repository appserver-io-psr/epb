<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\Inject
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
 * @link      https://github.com/appserver-io-psr/apb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans\Annotations;

/**
 * Annotation implementation representing a @Inject annotation on a class method/property.
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
class Inject extends AbstractBeanAnnotation
{

    /**
     * The value of the bean name attribute.
     *
     * @var string
     */
    protected $beanName;

    /**
     * The value of the factory attribute.
     *
     * @var string
     */
    protected $factory;

    /**
     * The value of the factory method attribute.
     *
     * @var string
     */
    protected $factoryMethod;

    /**
     * The value of the factory type attribute.
     *
     * @var string
     */
    protected $factoryType;

    /**
     * The value of the type attribute.
     *
     * @var string
     */
    protected $type;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the bean name attribute, if available
        if (isset($values[AnnotationKeys::BEAN_NAME])) {
            $this->beanName = $values[AnnotationKeys::BEAN_NAME];
        }

        // set the type attribute, if available
        if (isset($values[AnnotationKeys::TYPE])) {
            $this->type = $values[AnnotationKeys::TYPE];
        }

        // set the factory attribute, if available
        if (isset($values[AnnotationKeys::FACTORY])) {
            $this->factory = $values[AnnotationKeys::FACTORY];
        }

        // set the factory type attribute, if available
        if (isset($values[AnnotationKeys::FACTORY_TYPE])) {
            $this->factoryType = $values[AnnotationKeys::FACTORY_TYPE];
        }

        // set the factory method attribute, if available
        if (isset($values[AnnotationKeys::FACTORY_METHOD])) {
            $this->factoryMethod = $values[AnnotationKeys::FACTORY_METHOD];
        }

        // pass the values through to the parent constructor
        parent::__construct($values);
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
     * Returns the value of the factory attribute.
     *
     * @return string The annotations factory attribute
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Returns the value of the factory type attribute.
     *
     * @return string The annotations factory type attribute
     */
    public function getFactoryType()
    {
        return $this->factoryType;
    }

    /**
     * Returns the value of the factory method attribute.
     *
     * @return string The annotations factory method attribute
     */
    public function getFactoryMethod()
    {
        return $this->factoryMethod;
    }
}
