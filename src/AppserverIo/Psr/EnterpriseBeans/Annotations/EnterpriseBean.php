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
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\EnterpriseBeans\Annotations;

/**
 * Annotation implementation representing a @EnterpriseBean annotation on a property.
 *
 * The name attribute refers to what the naming context name will be for the referenced enterprise bean.
 *
 * The beanInterface attribute is the interface you are interested in and usually is used by the container
 * to distinguish whether you want a remote or local reference to the enterprise bean.
 *
 * The beanName is the name of the enterprise bean referenced. It is equal to either the value you specify
 * in the @Stateless->name() or @Stateful->name() annotation.
￼ * ￼
 * The lookup attribute, defines the naming context name that should be used to find the target enterprise
 * bean reference. When placed on the bean class, the @EnterpriseBean annotation will register a reference into
 * the naming context.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
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
     * @return string|null The annotations bean interface attribute
     */
    public function getBeanInterface()
    {
        if (isset($this->values[AnnotationKeys::BEAN_INTERFACE])) {
            return $this->values[AnnotationKeys::BEAN_INTERFACE];
        }
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
}
