<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40fb465be3e5f389701351d940b75502
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tr\\Search\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tr\\Search\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40fb465be3e5f389701351d940b75502::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40fb465be3e5f389701351d940b75502::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40fb465be3e5f389701351d940b75502::$classMap;

        }, null, ClassLoader::class);
    }
}
