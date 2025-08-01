<?php

namespace ContainerV3JSfEi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/PasswordHasher/Type/FormTypePasswordHasherExtension.php';

        return $container->privates['form.type_extension.form.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension(($container->privates['form.listener.password_hasher'] ?? $container->load('getForm_Listener_PasswordHasherService')));
    }
}
