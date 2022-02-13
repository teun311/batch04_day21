<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffdda571569783e7b61d5c734a82e519
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffdda571569783e7b61d5c734a82e519::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffdda571569783e7b61d5c734a82e519::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffdda571569783e7b61d5c734a82e519::$classMap;

        }, null, ClassLoader::class);
    }
}
