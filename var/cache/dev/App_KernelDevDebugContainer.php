<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF17FeYz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF17FeYz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF17FeYz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF17FeYz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF17FeYz\App_KernelDevDebugContainer([
    'container.build_hash' => 'F17FeYz',
    'container.build_id' => '380c30f8',
    'container.build_time' => 1680658841,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF17FeYz');
