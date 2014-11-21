<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\Annotations\EnterpriseBean
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

namespace AppserverIo\Psr\EnterpriseBeans\Annotations;

use AppserverIo\Lang\Reflection\ReflectionAnnotation;

/**
 * Annotation implementation representing a @EnterpriseBean annotation on a property.
 *
 * The name() attribute refers to what the naming context name will be for the referenced enterprise bean.
 *
 * The beanInterface() attribute is the interface you are interested in and usually is used by the container
 * to distinguish whether you want a remote or local reference to the enterprise bean.
 *
 * The beanName() is the name of the enterprise bean referenced. It is equal to either the value you specify
 * in the @Stateless->name() or @Stateful->name() annotation.
 *
 * The mappedName() attribute is a placeholder for a vendor-specific identifier. This identifier may be a
 * key into the vendor’s global registry. Many vendors store references to enterprise beans within the
 * global naming context tree so that clients can reference them, and mappedName() may reference that global
 * naming context name.
￼ * ￼
 * The mappedName() attribute, defines the naming context name that should be used to find the target enterprise
 * bean reference. When placed on the bean class, the @EnterpriseBean annotation will register a reference into
 * the naming context.
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
class EnterpriseBean extends AbstractBeanAnnotation
{

    /**
     * The annotation for method, a bean has to be injected.
     *
     * @var string
     */
    const ANNOTATION = 'EnterpriseBean';

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
     * @return string The annotations bean nName attribute
     */
    public function getBeanName()
    {
        return $this->values[AnnotationKeys::BEAN_NAME];
    }

    /**
     * Helper method that returns the naming context lookup name specified
     * as annotation attribute.
     *
     * The following order is use to return the lookup name:
     *
     * 1. The name attribute
     * 2. The beanName attribute
     * 3. The mappedName attribute
     *
     * @return string The lookup name used to resolve the enterprise bean reference
     */
    public function getLookupName()
    {

        // first try to use @Enterprise(name="MyBean")
        if ($identifier = $this->getName()) {
            return $identifier;
        }

        // second try to use @Enterprise(beanName="MyBean")
        if ($identifier = $this->getBeanName()) {
            return $identifier;
        }

        // third try to use @Enterprise(mappedName="MyBean")
        if ($identifier = $this->getMappedName()) {
            return $identifier;
        }
    }
}
