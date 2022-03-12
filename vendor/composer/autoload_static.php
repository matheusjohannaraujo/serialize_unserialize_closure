<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29fa24b3cc6ed8935e8022815292c951
{
    public static $files = array (
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29fa24b3cc6ed8935e8022815292c951::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29fa24b3cc6ed8935e8022815292c951::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29fa24b3cc6ed8935e8022815292c951::$classMap;

        }, null, ClassLoader::class);
    }
}