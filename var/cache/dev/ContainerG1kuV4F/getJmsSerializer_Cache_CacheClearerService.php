<?php

namespace ContainerG1kuV4F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Cache_CacheClearerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.cache.cache_clearer' shared service.
     *
     * @return \JMS\SerializerBundle\Cache\CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheClearer'.\DIRECTORY_SEPARATOR.'CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheClearer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'ClearableCacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FileCache.php';

        return $container->privates['jms_serializer.cache.cache_clearer'] = new \JMS\SerializerBundle\Cache\CacheClearer(($container->privates['jms_serializer.metadata.cache.file_cache'] ??= new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer_default'))));
    }
}
