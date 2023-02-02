<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40ac06df471447d3bf8f9f57f2b014bb
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raheesiocod\\Contactform\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raheesiocod\\Contactform\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40ac06df471447d3bf8f9f57f2b014bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40ac06df471447d3bf8f9f57f2b014bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40ac06df471447d3bf8f9f57f2b014bb::$classMap;

        }, null, ClassLoader::class);
    }
}
