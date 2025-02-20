<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab3ccae23ff9578ad18ed934ac51f032
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Quizbit\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Quizbit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab3ccae23ff9578ad18ed934ac51f032::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab3ccae23ff9578ad18ed934ac51f032::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab3ccae23ff9578ad18ed934ac51f032::$classMap;

        }, null, ClassLoader::class);
    }
}
