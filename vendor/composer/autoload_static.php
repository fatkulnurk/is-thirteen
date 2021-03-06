<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit846024932cc7e0fb8d13d5038ae20a85
{
    public static $files = array (
        'afdfa2c96ca2d53d2512c989405275fb' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fatkulnurk\\IsThirteen\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fatkulnurk\\IsThirteen\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit846024932cc7e0fb8d13d5038ae20a85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit846024932cc7e0fb8d13d5038ae20a85::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
