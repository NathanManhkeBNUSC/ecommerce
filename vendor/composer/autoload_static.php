<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita2af1f1eb0e89e320e2e245d388d5bc0::$classMap;

        }, null, ClassLoader::class);
    }
}
