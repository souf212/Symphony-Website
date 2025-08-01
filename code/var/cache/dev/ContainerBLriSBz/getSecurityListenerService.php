<?php

namespace ContainerBLriSBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Listener\Security\SecurityListener' shared autowired service.
     *
     * @return \App\Listener\Security\SecurityListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/Security/SecurityListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Listener\\Security\\SecurityListener'])) {
            return $container->privates['App\\Listener\\Security\\SecurityListener'];
        }

        return $container->privates['App\\Listener\\Security\\SecurityListener'] = new \App\Listener\Security\SecurityListener($a);
    }
}
