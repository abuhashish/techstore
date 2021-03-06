<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6594c104b50518de0cfe06069169631
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechStore\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechStore\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6594c104b50518de0cfe06069169631::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6594c104b50518de0cfe06069169631::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita6594c104b50518de0cfe06069169631::$classMap;

        }, null, ClassLoader::class);
    }
}
