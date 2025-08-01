<?php

namespace ContainerBLriSBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_OutdatedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.command.outdated' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapOutdatedCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Command/ImportMapOutdatedCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/ImportMapUpdateChecker.php';

        $container->privates['asset_mapper.importmap.command.outdated'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapOutdatedCommand(new \Symfony\Component\AssetMapper\ImportMap\ImportMapUpdateChecker(($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container))));

        $instance->setName('importmap:outdated');
        $instance->setDescription('List outdated JavaScript packages and their latest versions');

        return $instance;
    }
}
