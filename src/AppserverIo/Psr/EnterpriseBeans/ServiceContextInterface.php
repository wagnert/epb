<?php

/**
 * AppserverIo\Psr\EnterpriseBeans\ServiceContextInterface
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

namespace AppserverIo\Psr\EnterpriseBeans;

/**
 * The interface for the service manager registered for the application.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/epb
 * @link      http://www.appserver.io
 */
interface ServiceContextInterface
{

    /**
     * Returns the absolute path to the web application.
     *
     * @return string The absolute path
     */
    public function getWebappPath();

    /**
     * Return the service locator instance.
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ServiceResourceLocatorInterface The service locator instance
     */
    public function getServiceLocator();

    /**
     * Tries to lookup and return the service with the passed name.
     *
     * @param string $serviceName The name of the requested service
     * @param array  $args        The arguments passed to the service providers constructor
     *
     * @return \AppserverIo\Psr\EnterpriseBeans\ServiceProviderInterface The requested service instance
     */
    public function lookup($serviceName, array $args = array());

    /**
     * Attaches the passed service, to the context.
     *
     * @param \AppserverIo\Psr\EnterpriseBeans\ServiceProviderInterface $instance The service instance to attach
     *
     * @return void
     * @throws \AppserverIo\Psr\EnterpriseBeans\ServiceAlreadyRegisteredException Is thrown if the passed service has already been registered
     */
    public function register(ServiceProviderInterface $instance);

    /**
     * Return the storage with the services.
     *
     * @return \AppserverIo\Storage\StorageInterface The storage with the services
     */
    public function getServices();
}
