<?php

namespace ContainerIzvtfcY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityListenerResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ContainerEntityListenerResolver.php';

        $container->services['doctrine.orm.default_entity_listener_resolver'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\EventListener\\EntraineurListener' => ['privates', 'App\\EventListener\\EntraineurListener', 'getEntraineurListenerService', true],
            'App\\EventListener\\JoueurListener' => ['privates', 'App\\EventListener\\JoueurListener', 'getJoueurListenerService', true],
            'App\\EventListener\\MedecinListener' => ['privates', 'App\\EventListener\\MedecinListener', 'getMedecinListenerService', true],
            'App\\EventListener\\PhotographeListener' => ['privates', 'App\\EventListener\\PhotographeListener', 'getPhotographeListenerService', true],
            'App\\EventListener\\PresidentListener' => ['privates', 'App\\EventListener\\PresidentListener', 'getPresidentListenerService', true],
        ], [
            'App\\EventListener\\EntraineurListener' => '?',
            'App\\EventListener\\JoueurListener' => '?',
            'App\\EventListener\\MedecinListener' => '?',
            'App\\EventListener\\PhotographeListener' => '?',
            'App\\EventListener\\PresidentListener' => '?',
        ]));

        $instance->registerService('App\\EventListener\\EntraineurListener', 'App\\EventListener\\EntraineurListener');
        $instance->registerService('App\\EventListener\\EntraineurListener', 'App\\EventListener\\EntraineurListener');
        $instance->registerService('App\\EventListener\\JoueurListener', 'App\\EventListener\\JoueurListener');
        $instance->registerService('App\\EventListener\\JoueurListener', 'App\\EventListener\\JoueurListener');
        $instance->registerService('App\\EventListener\\MedecinListener', 'App\\EventListener\\MedecinListener');
        $instance->registerService('App\\EventListener\\MedecinListener', 'App\\EventListener\\MedecinListener');
        $instance->registerService('App\\EventListener\\PhotographeListener', 'App\\EventListener\\PhotographeListener');
        $instance->registerService('App\\EventListener\\PhotographeListener', 'App\\EventListener\\PhotographeListener');
        $instance->registerService('App\\EventListener\\PresidentListener', 'App\\EventListener\\PresidentListener');
        $instance->registerService('App\\EventListener\\PresidentListener', 'App\\EventListener\\PresidentListener');

        return $instance;
    }
}
