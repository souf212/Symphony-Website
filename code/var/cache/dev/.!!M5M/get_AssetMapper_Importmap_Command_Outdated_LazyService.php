<?php

namespace ContainerBOkz1xM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Outdated_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.outdated.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.outdated.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:outdated', [], 'List outdated JavaScript packages and their latest versions', false, #[\Closure(name: 'asset_mapper.importmap.command.outdated', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapOutdatedCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapOutdatedCommand => ($container->privates['asset_mapper.importmap.command.outdated'] ?? $container->load('getAssetMapper_Importmap_Command_OutdatedService')));
    }
}
