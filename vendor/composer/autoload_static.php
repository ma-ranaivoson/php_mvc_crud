<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf52b47dc76ba5ee5179ae3ce9a9ac5f7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf52b47dc76ba5ee5179ae3ce9a9ac5f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf52b47dc76ba5ee5179ae3ce9a9ac5f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
