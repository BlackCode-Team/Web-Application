<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/get_Console_Command_MessengerFailedMessagesRemove_LazyService.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/get_Console_Command_MessengerFailedMessagesRemove_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerFailedMessagesRemove_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_failed_messages_remove.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.messenger_failed_messages_remove.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:failed:remove', [], 'Remove given messages from the failure transport', false, function () use ($container): \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand {
            return ($container->privates['console.command.messenger_failed_messages_remove'] ?? $container->load('getConsole_Command_MessengerFailedMessagesRemoveService'));
        });
    }
}
