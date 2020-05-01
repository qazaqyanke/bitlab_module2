<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb953fd7868b2c556a6de0b7f4348557e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\models\\' => 11,
            'app\\config\\' => 11,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'app\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb953fd7868b2c556a6de0b7f4348557e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb953fd7868b2c556a6de0b7f4348557e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
