<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6da52e5ad3d97aae4fd63186b6a1b26e
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

        spl_autoload_register(array('ComposerAutoloaderInit6da52e5ad3d97aae4fd63186b6a1b26e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6da52e5ad3d97aae4fd63186b6a1b26e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6da52e5ad3d97aae4fd63186b6a1b26e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
