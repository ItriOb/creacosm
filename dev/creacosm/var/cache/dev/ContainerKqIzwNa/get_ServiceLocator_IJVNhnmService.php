<?php

namespace ContainerKqIzwNa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IJVNhnmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iJVNhnm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iJVNhnm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sondage' => ['privates', '.errored..service_locator.iJVNhnm.App\\Entity\\Sondage', NULL, 'Cannot autowire service ".service_locator.iJVNhnm": it needs an instance of "App\\Entity\\Sondage" but this type has been excluded in "config/services.yaml".'],
        ], [
            'sondage' => 'App\\Entity\\Sondage',
        ]);
    }
}
