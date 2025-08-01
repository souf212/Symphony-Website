<?php

namespace ContainerBLriSBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_DotenvDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.dotenv_debug' shared service.
     *
     * @return \Symfony\Component\Dotenv\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dotenv/Command/DebugCommand.php';

        $container->privates['console.command.dotenv_debug'] = $instance = new \Symfony\Component\Dotenv\Command\DebugCommand('dev', \dirname(__DIR__, 4));

        $instance->setName('debug:dotenv');
        $instance->setDescription('List all dotenv files with variables and values');

        return $instance;
    }
}
