<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92131fb8ad415df502e1fcad637fc099
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasonGrimes' => 
            array (
                0 => __DIR__ . '/..' . '/jasongrimes/paginator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92131fb8ad415df502e1fcad637fc099::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92131fb8ad415df502e1fcad637fc099::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92131fb8ad415df502e1fcad637fc099::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}