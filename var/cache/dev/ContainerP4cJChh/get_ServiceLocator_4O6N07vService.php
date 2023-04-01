<?php

namespace ContainerP4cJChh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4O6N07vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4O6N07v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4O6N07v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', true],
        ], [
            'paginator' => '?',
            'repository' => 'App\\Repository\\FilmRepository',
        ]);
    }
}
