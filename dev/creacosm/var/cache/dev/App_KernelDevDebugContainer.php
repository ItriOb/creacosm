<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxVSOuR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxVSOuR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxVSOuR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxVSOuR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxVSOuR\App_KernelDevDebugContainer([
    'container.build_hash' => 'XxVSOuR',
    'container.build_id' => '05aec763',
    'container.build_time' => 1679072206,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxVSOuR');
