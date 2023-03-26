<?php

namespace ContainerFSFCAKq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P7oU2ZlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P7oU2Zl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P7oU2Zl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filmRepository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', true],
        ], [
            'filmRepository' => 'App\\Repository\\FilmRepository',
        ]);
    }
}