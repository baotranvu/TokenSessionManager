<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2b455d86c29d9df5cf1de97517e0f89
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Baotran\\TokenSessionManager\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Baotran\\TokenSessionManager\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite2b455d86c29d9df5cf1de97517e0f89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2b455d86c29d9df5cf1de97517e0f89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2b455d86c29d9df5cf1de97517e0f89::$classMap;

        }, null, ClassLoader::class);
    }
}
