<?php

namespace ContainerCBrssHE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\UtilisateurAuthenticator' shared autowired service.
     *
     * @return \App\Security\UtilisateurAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/UtilisateurAuthenticator.php';

        return $container->privates['App\\Security\\UtilisateurAuthenticator'] = new \App\Security\UtilisateurAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}
