<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\PersistenceUnit
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
 * Annotation implementation representing a @PersistenceUnit annotation on a property.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
class PersistenceUnit extends AbstractBeanAnnotation
{

    /**
     * The annotation for method, a bean has to be injected.
     *
     * @var string
     */
    const ANNOTATION = 'PersistenceUnit';

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
     * Returns the value of the name attribute.
     *
     * @return string The annotations name attribute
     */
    public function getName()
    {
        if (isset($this->values[AnnotationKeys::NAME])) {
            return $this->values[AnnotationKeys::NAME];
        }
    }

    /**
     * Returns the value of the unitName attribute.
     *
     * @return string|null The annotations unitName attribute
     */
    public function getUnitName()
    {
        if (isset($this->values[AnnotationKeys::UNIT_NAME])) {
            return $this->values[AnnotationKeys::UNIT_NAME];
        }
    }
}
