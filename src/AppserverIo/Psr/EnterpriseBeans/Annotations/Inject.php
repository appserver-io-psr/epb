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
 */
class Inject extends AbstractBeanAnnotation
{

    /**
     * The annotation for a default timeout method.
     *
     * @var string
     */
    const ANNOTATION = 'Inject';

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
     * Returns the value of the bean name attribute.
     *
     * @return string|null The annotations bean Name attribute
     */
    public function getBeanName()
    {
        if (isset($this->values[AnnotationKeys::BEAN_NAME])) {
            return $this->values[AnnotationKeys::BEAN_NAME];
        }
    }

    /**
     * Returns the value of the type attribute.
     *
     * @return string The annotations type attribute
     */
    public function getType()
    {
        if (isset($this->values[AnnotationKeys::TYPE])) {
            return $this->values[AnnotationKeys::TYPE];
        }
    }

    /**
     * Returns the value of the factory attribute.
     *
     * @return string The annotations factory attribute
     */
    public function getFactory()
    {
        if (isset($this->values[AnnotationKeys::FACTORY])) {
            return $this->values[AnnotationKeys::FACTORY];
        }
    }

    /**
     * Returns the value of the factory type attribute.
     *
     * @return string The annotations factory type attribute
     */
    public function getFactoryType()
    {
        if (isset($this->values[AnnotationKeys::FACTORY_TYPE])) {
            return $this->values[AnnotationKeys::FACTORY_TYPE];
        }
    }

    /**
     * Returns the value of the factory method attribute.
     *
     * @return string The annotations factory method attribute
     */
    public function getFactoryMethod()
    {
        if (isset($this->values[AnnotationKeys::FACTORY_METHOD])) {
            return $this->values[AnnotationKeys::FACTORY_METHOD];
        }
    }
}
