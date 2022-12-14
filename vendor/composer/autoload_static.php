<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit468ee8f57d5bf26610a882a3ec74b54f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit468ee8f57d5bf26610a882a3ec74b54f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit468ee8f57d5bf26610a882a3ec74b54f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit468ee8f57d5bf26610a882a3ec74b54f::$classMap;

        }, null, ClassLoader::class);
    }
}
