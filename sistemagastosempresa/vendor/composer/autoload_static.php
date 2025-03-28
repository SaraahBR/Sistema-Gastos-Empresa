<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89038fb5245da58b9f9ecd23e2e56fb6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit89038fb5245da58b9f9ecd23e2e56fb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89038fb5245da58b9f9ecd23e2e56fb6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89038fb5245da58b9f9ecd23e2e56fb6::$classMap;

        }, null, ClassLoader::class);
    }
}
