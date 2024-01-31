<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4aeacba133059a2b422bffcb892906ca
{
    public static $files = array (
        '116b17fb3cbd39ba415ca443f0a1e3ab' => __DIR__ . '/../..' . '/app/functions/helpers.php',
        'd0b9dca577961c43cec57ac9debce825' => __DIR__ . '/../..' . '/app/functions/session.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4aeacba133059a2b422bffcb892906ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4aeacba133059a2b422bffcb892906ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4aeacba133059a2b422bffcb892906ca::$classMap;

        }, null, ClassLoader::class);
    }
}
