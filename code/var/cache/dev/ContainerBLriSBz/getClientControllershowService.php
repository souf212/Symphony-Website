<?php

namespace ContainerBLriSBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0jUX5FG.App\Controller\ClientController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0jUX5FG.App\\Controller\\ClientController::show()'] = ($container->privates['.service_locator.0jUX5FG'] ?? $container->load('get_ServiceLocator_0jUX5FGService'))->withContext('App\\Controller\\ClientController::show()', $container);
    }
}
