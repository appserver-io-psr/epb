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
 *
 * @Annotation
 * @Target({"CLASS", "METHOD","PROPERTY"})
 */
class PersistenceUnit extends AbstractBeanAnnotation
{

    /**
     * The value of the unitName attribute.
     *
     * @var string
     */
    protected $unitName;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the unit name attribute, if available
        if (isset($values[AnnotationKeys::UNIT_NAME])) {
            $this->unitName = $values[AnnotationKeys::UNIT_NAME];
        }

        // pass the values through to the parent constructor
        parent::__construct($values);
    }

    /**
     * Returns the value of the unitName attribute.
     *
     * @return string|null The annotations unitName attribute
     */
    public function getUnitName()
    {
        return $this->unitName;
    }
}
