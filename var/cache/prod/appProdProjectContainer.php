<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIwvr0gb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIwvr0gb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerIwvr0gb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerIwvr0gb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerIwvr0gb\appProdProjectContainer([
    'container.build_hash' => 'Iwvr0gb',
    'container.build_id' => 'ae955d25',
    'container.build_time' => 1556808411,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIwvr0gb');
