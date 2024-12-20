<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite2b455d86c29d9df5cf1de97517e0f89
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite2b455d86c29d9df5cf1de97517e0f89', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite2b455d86c29d9df5cf1de97517e0f89', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite2b455d86c29d9df5cf1de97517e0f89::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
