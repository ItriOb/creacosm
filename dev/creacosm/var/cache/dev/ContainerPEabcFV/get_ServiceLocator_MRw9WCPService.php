<?php

namespace ContainerPEabcFV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MRw9WCPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mRw9WCP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mRw9WCP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'sondageRepository' => ['privates', 'App\\Repository\\SondageRepository', 'getSondageRepositoryService', true],
            'typeRepository' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'sondageRepository' => 'App\\Repository\\SondageRepository',
            'typeRepository' => 'App\\Repository\\TypeRepository',
        ]);
    }
}
