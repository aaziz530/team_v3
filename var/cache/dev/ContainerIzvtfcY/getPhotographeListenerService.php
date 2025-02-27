<?php

namespace ContainerIzvtfcY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhotographeListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\PhotographeListener' shared autowired service.
     *
     * @return \App\EventListener\PhotographeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PhotographeListener.php';

        return $container->privates['App\\EventListener\\PhotographeListener'] = new \App\EventListener\PhotographeListener();
    }
}
