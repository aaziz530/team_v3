<?php

namespace ContainerG1kuV4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aeiw_FAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aeiw.FA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aeiw.FA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'talentRepo' => ['privates', 'App\\Repository\\TalentDataBaseRepository', 'getTalentDataBaseRepositoryService', true],
        ], [
            'talentRepo' => 'App\\Repository\\TalentDataBaseRepository',
        ]);
    }
}
