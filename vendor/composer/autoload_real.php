<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc9f7fab4fd3d2673edc573059d01ce4
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

        spl_autoload_register(array('ComposerAutoloaderInitcc9f7fab4fd3d2673edc573059d01ce4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc9f7fab4fd3d2673edc573059d01ce4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc9f7fab4fd3d2673edc573059d01ce4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
