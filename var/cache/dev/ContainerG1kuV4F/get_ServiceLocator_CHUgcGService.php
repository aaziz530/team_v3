<?php

namespace ContainerG1kuV4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CHUgcGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cH_UgcG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cH_UgcG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'equipeRepository' => ['privates', 'App\\Repository\\EquipeRepository', 'getEquipeRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'doctrine' => '?',
            'equipeRepository' => 'App\\Repository\\EquipeRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
