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

use AppserverIo\Lang\Reflection\ReflectionAnnotation;

/**
 * Abstract bean annotation implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
abstract class AbstractBeanAnnotation extends ReflectionAnnotation
{

    /**
     * Returns the value of the name attribute.
     *
     * @return string|null The annotations name attribute
     */
    public function getName()
    {
        if (isset($this->values[AnnotationKeys::NAME])) {
            return $this->values[AnnotationKeys::NAME];
        }
    }

    /**
     * Returns the value of the description attribute.
     *
     * @return string|null The annotations description attribute
     */
    public function getDescription()
    {
        if (isset($this->values[AnnotationKeys::DESCRIPTION])) {
            return $this->values[AnnotationKeys::DESCRIPTION];
        }
    }

    /**
     * Returns the value of the lookup attribute.
     *
     * @return string|null The annotations lookup attribute
     */
    public function getLookup()
    {
        if (isset($this->values[AnnotationKeys::LOOKUP])) {
            return $this->values[AnnotationKeys::LOOKUP];
        }
    }
}
