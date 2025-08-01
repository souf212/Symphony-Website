<?php

namespace ContainerBLriSBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_Security_Voter_Security_Access_ExpressionVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';

        $a = ($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container));

        if (isset($container->privates['.debug.security.voter.security.access.expression_voter'])) {
            return $container->privates['.debug.security.voter.security.access.expression_voter'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['.debug.security.voter.security.access.expression_voter'])) {
            return $container->privates['.debug.security.voter.security.access.expression_voter'];
        }

        return $container->privates['.debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($container->privates['cache.security_expression_language'] ?? self::getCache_SecurityExpressionLanguageService($container))), ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), $a, ($container->privates['security.role_hierarchy'] ??= new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), $b);
    }
}
