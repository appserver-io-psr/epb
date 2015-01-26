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
 */
class Resource extends AbstractBeanAnnotation
{

    /**
     * The annotation for method, a bean has to be injected.
     *
     * @var string
     */
    const ANNOTATION = 'Resource';

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
     * Returns the value of the type attribute.
     *
     * @return string The annotations type attribute
     */
    public function getType()
    {
        return $this->values[AnnotationKeys::TYPE];
    }

    /**
     * Returns the value of the bean interface attribute.
     *
     * @return string The annotations bean interface attribute
     */
    public function getBeanInterface()
    {
        return $this->values[AnnotationKeys::BEAN_INTERFACE];
    }

    /**
     * Returns the value of the bean name attribute.
     *
     * @return string The annotations bean name attribute
     */
    public function getBeanName()
    {
        return $this->values[AnnotationKeys::BEAN_NAME];
    }

    /**
     * Returns the value of the lookup name attribute.
     *
     * @return string The annotations lookup name attribute
     */
    public function getLookup()
    {
        return $this->values[AnnotationKeys::LOOKUP];
    }
}
