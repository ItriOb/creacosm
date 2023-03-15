<?php

namespace ContainerXxVSOuR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I2DnaFaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I2DnaFa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I2DnaFa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sondage' => ['privates', '.errored..service_locator.I2DnaFa.App\\Entity\\Sondage', NULL, 'Cannot autowire service ".service_locator.I2DnaFa": it needs an instance of "App\\Entity\\Sondage" but this type has been excluded in "config/services.yaml".'],
            'sondageRepository' => ['privates', 'App\\Repository\\SondageRepository', 'getSondageRepositoryService', true],
        ], [
            'sondage' => 'App\\Entity\\Sondage',
            'sondageRepository' => 'App\\Repository\\SondageRepository',
        ]);
    }
}
