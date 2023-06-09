<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88542747b8f5e77c94d3077124639cd1
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88542747b8f5e77c94d3077124639cd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88542747b8f5e77c94d3077124639cd1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88542747b8f5e77c94d3077124639cd1::$classMap;

        }, null, ClassLoader::class);
    }
}
