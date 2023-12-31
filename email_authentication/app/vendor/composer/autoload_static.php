<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit272d96f67629cedbb43b96a0f5b0296e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Rico\\' => 12,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Rico\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit272d96f67629cedbb43b96a0f5b0296e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit272d96f67629cedbb43b96a0f5b0296e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit272d96f67629cedbb43b96a0f5b0296e::$classMap;

        }, null, ClassLoader::class);
    }
}
