<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit015a061a7312f9e2efa90eaa5861f0a9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Robinncode\\Laradmin\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Robinncode\\Laradmin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit015a061a7312f9e2efa90eaa5861f0a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit015a061a7312f9e2efa90eaa5861f0a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit015a061a7312f9e2efa90eaa5861f0a9::$classMap;

        }, null, ClassLoader::class);
    }
}