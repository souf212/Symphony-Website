<?php

namespace ContainerCwwJwdy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SecretsSet_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.secrets_set.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.secrets_set.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secrets:set', [], 'Set a secret in the vault', false, #[\Closure(name: 'console.command.secrets_set', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand => ($container->privates['console.command.secrets_set'] ?? $container->load('getConsole_Command_SecretsSetService')));
    }
}
