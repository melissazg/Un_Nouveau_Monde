<?php

namespace ContainerE3z86jQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UWoH5hjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UWoH5hj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UWoH5hj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.d_Zi8_Z', 'get_ServiceLocator_DZi8ZService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.P7oU2Zl', 'get_ServiceLocator_P7oU2ZlService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.d_Zi8_Z', 'get_ServiceLocator_DZi8ZService', true],
            'App\\Controller\\CatalogueController::index' => ['privates', '.service_locator.avYFkEZ', 'get_ServiceLocator_AvYFkEZService', true],
            'App\\Controller\\ContactController::contact' => ['privates', '.service_locator.d1ey3el', 'get_ServiceLocator_D1ey3elService', true],
            'App\\Controller\\InscriptionController::create' => ['privates', '.service_locator.B46.13k', 'get_ServiceLocator_B46_13kService', true],
            'App\\Controller\\InscriptionController::verifyUser' => ['privates', '.service_locator.yoflbtf', 'get_ServiceLocator_YoflbtfService', true],
            'App\\Controller\\ManagerController::delete' => ['privates', '.service_locator.Qw6utIN', 'get_ServiceLocator_Qw6utINService', true],
            'App\\Controller\\ManagerController::edit' => ['privates', '.service_locator.Qw6utIN', 'get_ServiceLocator_Qw6utINService', true],
            'App\\Controller\\ManagerController::index' => ['privates', '.service_locator.4O6N07v', 'get_ServiceLocator_4O6N07vService', true],
            'App\\Controller\\ManagerController::new' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\PlayerController::index' => ['privates', '.service_locator.sUM6vBH', 'get_ServiceLocator_SUM6vBHService', true],
            'App\\Controller\\SearchController::index' => ['privates', '.service_locator.avYFkEZ', 'get_ServiceLocator_AvYFkEZService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.otSeFVa', 'get_ServiceLocator_OtSeFVaService', true],
            'App\\Controller\\UserController::editPassword' => ['privates', '.service_locator.cELnjUu', 'get_ServiceLocator_CELnjUuService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.d_Zi8_Z', 'get_ServiceLocator_DZi8ZService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.P7oU2Zl', 'get_ServiceLocator_P7oU2ZlService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.d_Zi8_Z', 'get_ServiceLocator_DZi8ZService', true],
            'App\\Controller\\CatalogueController:index' => ['privates', '.service_locator.avYFkEZ', 'get_ServiceLocator_AvYFkEZService', true],
            'App\\Controller\\ContactController:contact' => ['privates', '.service_locator.d1ey3el', 'get_ServiceLocator_D1ey3elService', true],
            'App\\Controller\\InscriptionController:create' => ['privates', '.service_locator.B46.13k', 'get_ServiceLocator_B46_13kService', true],
            'App\\Controller\\InscriptionController:verifyUser' => ['privates', '.service_locator.yoflbtf', 'get_ServiceLocator_YoflbtfService', true],
            'App\\Controller\\ManagerController:delete' => ['privates', '.service_locator.Qw6utIN', 'get_ServiceLocator_Qw6utINService', true],
            'App\\Controller\\ManagerController:edit' => ['privates', '.service_locator.Qw6utIN', 'get_ServiceLocator_Qw6utINService', true],
            'App\\Controller\\ManagerController:index' => ['privates', '.service_locator.4O6N07v', 'get_ServiceLocator_4O6N07vService', true],
            'App\\Controller\\ManagerController:new' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\PlayerController:index' => ['privates', '.service_locator.sUM6vBH', 'get_ServiceLocator_SUM6vBHService', true],
            'App\\Controller\\SearchController:index' => ['privates', '.service_locator.avYFkEZ', 'get_ServiceLocator_AvYFkEZService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.otSeFVa', 'get_ServiceLocator_OtSeFVaService', true],
            'App\\Controller\\UserController:editPassword' => ['privates', '.service_locator.cELnjUu', 'get_ServiceLocator_CELnjUuService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CatalogueController::index' => '?',
            'App\\Controller\\ContactController::contact' => '?',
            'App\\Controller\\InscriptionController::create' => '?',
            'App\\Controller\\InscriptionController::verifyUser' => '?',
            'App\\Controller\\ManagerController::delete' => '?',
            'App\\Controller\\ManagerController::edit' => '?',
            'App\\Controller\\ManagerController::index' => '?',
            'App\\Controller\\ManagerController::new' => '?',
            'App\\Controller\\PlayerController::index' => '?',
            'App\\Controller\\SearchController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::editPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CatalogueController:index' => '?',
            'App\\Controller\\ContactController:contact' => '?',
            'App\\Controller\\InscriptionController:create' => '?',
            'App\\Controller\\InscriptionController:verifyUser' => '?',
            'App\\Controller\\ManagerController:delete' => '?',
            'App\\Controller\\ManagerController:edit' => '?',
            'App\\Controller\\ManagerController:index' => '?',
            'App\\Controller\\ManagerController:new' => '?',
            'App\\Controller\\PlayerController:index' => '?',
            'App\\Controller\\SearchController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:editPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
