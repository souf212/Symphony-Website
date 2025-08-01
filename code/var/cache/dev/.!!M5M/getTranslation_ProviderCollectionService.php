<?php

namespace ContainerBOkz1xM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.provider_collection' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\TranslationProviderCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Provider/TranslationProviderCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Provider/TranslationProviderCollectionFactory.php';

        return $container->privates['translation.provider_collection'] = (new \Symfony\Component\Translation\Provider\TranslationProviderCollectionFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => (new \Symfony\Component\Translation\Provider\NullProviderFactory());
        }, 1), []))->fromConfig([]);
    }
}
