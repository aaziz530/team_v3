<?php

namespace ContainerG1kuV4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DmgBfU7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DmgBfU7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DmgBfU7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kineRepository' => ['privates', 'App\\Repository\\KineRepository', 'getKineRepositoryService', true],
        ], [
            'kineRepository' => 'App\\Repository\\KineRepository',
        ]);
    }
}
