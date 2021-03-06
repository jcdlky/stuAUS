<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf69151ddb567fc95201f2f39c4d609ee
{
    public static $files = array (
        '9a98bee7a4bfbb8b76335621f05ff249' => __DIR__ . '/../..' . '/system/functions.php',
        '4c166c17b14b15edbccf22083bce8d56' => __DIR__ . '/../..' . '/core/config/database.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf69151ddb567fc95201f2f39c4d609ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf69151ddb567fc95201f2f39c4d609ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
