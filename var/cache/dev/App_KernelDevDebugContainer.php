<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIVH5zua\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIVH5zua/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIVH5zua.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIVH5zua\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIVH5zua\App_KernelDevDebugContainer([
    'container.build_hash' => 'IVH5zua',
    'container.build_id' => '29595f72',
    'container.build_time' => 1677059950,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIVH5zua');
