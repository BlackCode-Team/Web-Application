<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container32wZr7w\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container32wZr7w/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container32wZr7w.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container32wZr7w\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container32wZr7w\App_KernelDevDebugContainer([
    'container.build_hash' => '32wZr7w',
    'container.build_id' => '2a689545',
    'container.build_time' => 1681264012,
], __DIR__.\DIRECTORY_SEPARATOR.'Container32wZr7w');
