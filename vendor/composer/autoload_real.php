<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcd5bfce8d0e9e0aac6cc8e7ee0198e7b
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitcd5bfce8d0e9e0aac6cc8e7ee0198e7b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcd5bfce8d0e9e0aac6cc8e7ee0198e7b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcd5bfce8d0e9e0aac6cc8e7ee0198e7b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
