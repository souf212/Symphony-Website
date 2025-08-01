<?php

namespace ContainerV3JSfEi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.debug.value_resolver.doctrine.orm.entity_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ArgumentResolver/EntityValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Attribute/ValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Attribute/MapEntity.php';

        return $container->privates['.debug.value_resolver.doctrine.orm.entity_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine'] ?? self::getDoctrineService($container)), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(), new \Symfony\Bridge\Doctrine\Attribute\MapEntity(NULL, NULL, NULL, [], NULL, NULL, NULL, NULL, false)), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
