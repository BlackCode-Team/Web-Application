<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3qVNIjx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3qVNIjx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3qVNIjx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3qVNIjx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3qVNIjx\App_KernelDevDebugContainer([
    'container.build_hash' => '3qVNIjx',
    'container.build_id' => '7358af2f',
    'container.build_time' => 1683366398,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3qVNIjx');
