<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPqJlllk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPqJlllk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPqJlllk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPqJlllk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPqJlllk\App_KernelDevDebugContainer([
    'container.build_hash' => 'PqJlllk',
    'container.build_id' => 'f14985c5',
    'container.build_time' => 1714739135,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPqJlllk');
