<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9c661bca7a8c91d4839a4b50f2de03c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9c661bca7a8c91d4839a4b50f2de03c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9c661bca7a8c91d4839a4b50f2de03c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9c661bca7a8c91d4839a4b50f2de03c::$classMap;

        }, null, ClassLoader::class);
    }
}