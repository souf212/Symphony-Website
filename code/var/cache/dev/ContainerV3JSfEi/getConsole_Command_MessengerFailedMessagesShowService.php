<?php

namespace ContainerV3JSfEi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerFailedMessagesShowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_failed_messages_show' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesShowCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/AbstractFailedMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/FailedMessagesShowCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/PhpSerializer.php';

        $container->privates['console.command.messenger_failed_messages_show'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesShowCommand('failed', ($container->privates['.service_locator.l.c9cDr'] ?? $container->load('get_ServiceLocator_L_C9cDrService')), ($container->privates['messenger.transport.native_php_serializer'] ??= new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer()));

        $instance->setName('messenger:failed:show');
        $instance->setDescription('Show one or more messages from the failure transport');

        return $instance;
    }
}
