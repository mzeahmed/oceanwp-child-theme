<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit871e889fbc1c2bff87cd75501a8a0c93
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OceanwpChild\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OceanwpChild\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit871e889fbc1c2bff87cd75501a8a0c93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit871e889fbc1c2bff87cd75501a8a0c93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit871e889fbc1c2bff87cd75501a8a0c93::$classMap;

        }, null, ClassLoader::class);
    }
}
