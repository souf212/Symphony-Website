<?php

namespace ContainerCwwJwdy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_ExceptionPanelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ExceptionPanelController.php';

        return $container->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($container->privates['error_handler.error_renderer.html'] ?? $container->load('getErrorHandler_ErrorRenderer_HtmlService')), ($container->services['.container.private.profiler'] ?? self::get_Container_Private_ProfilerService($container)));
    }
}
