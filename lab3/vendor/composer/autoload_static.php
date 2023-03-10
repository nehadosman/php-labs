<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02c92e5fb073dfb5a445ed78d6fdcb31
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Counter' => __DIR__ . '/../..' . '/classes/Counter.php',
        'counter_interface' => __DIR__ . '/../..' . '/classes/counter_interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit02c92e5fb073dfb5a445ed78d6fdcb31::$classMap;

        }, null, ClassLoader::class);
    }
}
