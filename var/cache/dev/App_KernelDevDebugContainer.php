<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4ulJDDQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4ulJDDQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4ulJDDQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4ulJDDQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4ulJDDQ\App_KernelDevDebugContainer([
    'container.build_hash' => '4ulJDDQ',
    'container.build_id' => '7027c560',
    'container.build_time' => 1682271473,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4ulJDDQ');
