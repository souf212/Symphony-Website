<?php

namespace ContainerBOkz1xM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FyruWYgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fyruWYg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fyruWYg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ClientController::index' => ['privates', '.service_locator.zroWs1n.App\\Controller\\ClientController::index()', 'getClientControllerindexService', true],
            'App\\Controller\\ClientController::show' => ['privates', '.service_locator.0jUX5FG.App\\Controller\\ClientController::show()', 'getClientControllershowService', true],
            'App\\Controller\\ClientController::edit' => ['privates', '.service_locator.6agy0ro.App\\Controller\\ClientController::edit()', 'getClientControllereditService', true],
            'App\\Controller\\ClientController::delete' => ['privates', '.service_locator.6agy0ro.App\\Controller\\ClientController::delete()', 'getClientControllerdeleteService', true],
            'App\\Controller\\InvoiceController::index' => ['privates', '.service_locator._yTgXeW.App\\Controller\\InvoiceController::index()', 'getInvoiceControllerindexService', true],
            'App\\Controller\\InvoiceController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\InvoiceController::new()', 'getInvoiceControllernewService', true],
            'App\\Controller\\InvoiceController::show' => ['privates', '.service_locator.MjtDUPf.App\\Controller\\InvoiceController::show()', 'getInvoiceControllershowService', true],
            'App\\Controller\\InvoiceController::edit' => ['privates', '.service_locator.puJQK.a.App\\Controller\\InvoiceController::edit()', 'getInvoiceControllereditService', true],
            'App\\Controller\\InvoiceController::delete' => ['privates', '.service_locator.puJQK.a.App\\Controller\\InvoiceController::delete()', 'getInvoiceControllerdeleteService', true],
            'App\\Controller\\UserSecurityController::login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\UserSecurityController::login()', 'getUserSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ClientController:index' => ['privates', '.service_locator.zroWs1n.App\\Controller\\ClientController::index()', 'getClientControllerindexService', true],
            'App\\Controller\\ClientController:show' => ['privates', '.service_locator.0jUX5FG.App\\Controller\\ClientController::show()', 'getClientControllershowService', true],
            'App\\Controller\\ClientController:edit' => ['privates', '.service_locator.6agy0ro.App\\Controller\\ClientController::edit()', 'getClientControllereditService', true],
            'App\\Controller\\ClientController:delete' => ['privates', '.service_locator.6agy0ro.App\\Controller\\ClientController::delete()', 'getClientControllerdeleteService', true],
            'App\\Controller\\InvoiceController:index' => ['privates', '.service_locator._yTgXeW.App\\Controller\\InvoiceController::index()', 'getInvoiceControllerindexService', true],
            'App\\Controller\\InvoiceController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\InvoiceController::new()', 'getInvoiceControllernewService', true],
            'App\\Controller\\InvoiceController:show' => ['privates', '.service_locator.MjtDUPf.App\\Controller\\InvoiceController::show()', 'getInvoiceControllershowService', true],
            'App\\Controller\\InvoiceController:edit' => ['privates', '.service_locator.puJQK.a.App\\Controller\\InvoiceController::edit()', 'getInvoiceControllereditService', true],
            'App\\Controller\\InvoiceController:delete' => ['privates', '.service_locator.puJQK.a.App\\Controller\\InvoiceController::delete()', 'getInvoiceControllerdeleteService', true],
            'App\\Controller\\UserSecurityController:login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\UserSecurityController::login()', 'getUserSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ClientController::index' => '?',
            'App\\Controller\\ClientController::show' => '?',
            'App\\Controller\\ClientController::edit' => '?',
            'App\\Controller\\ClientController::delete' => '?',
            'App\\Controller\\InvoiceController::index' => '?',
            'App\\Controller\\InvoiceController::new' => '?',
            'App\\Controller\\InvoiceController::show' => '?',
            'App\\Controller\\InvoiceController::edit' => '?',
            'App\\Controller\\InvoiceController::delete' => '?',
            'App\\Controller\\UserSecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ClientController:index' => '?',
            'App\\Controller\\ClientController:show' => '?',
            'App\\Controller\\ClientController:edit' => '?',
            'App\\Controller\\ClientController:delete' => '?',
            'App\\Controller\\InvoiceController:index' => '?',
            'App\\Controller\\InvoiceController:new' => '?',
            'App\\Controller\\InvoiceController:show' => '?',
            'App\\Controller\\InvoiceController:edit' => '?',
            'App\\Controller\\InvoiceController:delete' => '?',
            'App\\Controller\\UserSecurityController:login' => '?',
        ]);
    }
}
