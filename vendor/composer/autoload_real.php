<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit799f3ad529fd10d8e9b8005970ae720d
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

        spl_autoload_register(array('ComposerAutoloaderInit799f3ad529fd10d8e9b8005970ae720d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit799f3ad529fd10d8e9b8005970ae720d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit799f3ad529fd10d8e9b8005970ae720d::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
