<?php

namespace ContainerE3z86jQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D1ey3elService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d1ey3el' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d1ey3el'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactFormHandler' => ['privates', 'App\\Form\\FormHandler\\ContactFormHandler', 'getContactFormHandlerService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'contactFormHandler' => 'App\\Form\\FormHandler\\ContactFormHandler',
            'mailer' => '?',
        ]);
    }
}
