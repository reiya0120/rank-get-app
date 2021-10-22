<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit643ea9bfd6003b75e03c058dad820fb1
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'RakutenRws_' => 
            array (
                0 => __DIR__ . '/..' . '/rakuten-ws/rws-php-sdk/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit643ea9bfd6003b75e03c058dad820fb1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit643ea9bfd6003b75e03c058dad820fb1::$classMap;

        }, null, ClassLoader::class);
    }
}
