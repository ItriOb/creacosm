<?php

namespace ContainerPEabcFV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vp4KmcBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vp4KmcB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vp4KmcB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.Z9QmIxH', 'get_ServiceLocator_Z9QmIxHService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SondageController::create' => ['privates', '.service_locator.mRw9WCP', 'get_ServiceLocator_MRw9WCPService', true],
            'App\\Controller\\SondageController::delete' => ['privates', '.service_locator.I2DnaFa', 'get_ServiceLocator_I2DnaFaService', true],
            'App\\Controller\\SondageController::edit' => ['privates', '.service_locator.I2DnaFa', 'get_ServiceLocator_I2DnaFaService', true],
            'App\\Controller\\SondageController::index' => ['privates', '.service_locator.Roqezgm', 'get_ServiceLocator_RoqezgmService', true],
            'App\\Controller\\SondageController::new' => ['privates', '.service_locator.Roqezgm', 'get_ServiceLocator_RoqezgmService', true],
            'App\\Controller\\SondageController::show' => ['privates', '.service_locator.iJVNhnm', 'get_ServiceLocator_IJVNhnmService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.Z9QmIxH', 'get_ServiceLocator_Z9QmIxHService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SondageController:create' => ['privates', '.service_locator.mRw9WCP', 'get_ServiceLocator_MRw9WCPService', true],
            'App\\Controller\\SondageController:delete' => ['privates', '.service_locator.I2DnaFa', 'get_ServiceLocator_I2DnaFaService', true],
            'App\\Controller\\SondageController:edit' => ['privates', '.service_locator.I2DnaFa', 'get_ServiceLocator_I2DnaFaService', true],
            'App\\Controller\\SondageController:index' => ['privates', '.service_locator.Roqezgm', 'get_ServiceLocator_RoqezgmService', true],
            'App\\Controller\\SondageController:new' => ['privates', '.service_locator.Roqezgm', 'get_ServiceLocator_RoqezgmService', true],
            'App\\Controller\\SondageController:show' => ['privates', '.service_locator.iJVNhnm', 'get_ServiceLocator_IJVNhnmService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SondageController::create' => '?',
            'App\\Controller\\SondageController::delete' => '?',
            'App\\Controller\\SondageController::edit' => '?',
            'App\\Controller\\SondageController::index' => '?',
            'App\\Controller\\SondageController::new' => '?',
            'App\\Controller\\SondageController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SondageController:create' => '?',
            'App\\Controller\\SondageController:delete' => '?',
            'App\\Controller\\SondageController:edit' => '?',
            'App\\Controller\\SondageController:index' => '?',
            'App\\Controller\\SondageController:new' => '?',
            'App\\Controller\\SondageController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
