<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCgTIEIK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCgTIEIK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCgTIEIK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCgTIEIK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCgTIEIK\App_KernelDevDebugContainer([
    'container.build_hash' => 'CgTIEIK',
    'container.build_id' => '6904acd7',
    'container.build_time' => 1682605751,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCgTIEIK');
