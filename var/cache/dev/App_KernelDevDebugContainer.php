<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBYHCO8G\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBYHCO8G/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBYHCO8G.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBYHCO8G\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBYHCO8G\App_KernelDevDebugContainer([
    'container.build_hash' => 'BYHCO8G',
    'container.build_id' => 'd9a26a01',
    'container.build_time' => 1682939601,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBYHCO8G');
