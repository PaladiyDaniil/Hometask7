<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5fff9435c477c53cd5ff4c8ecb6b2e5f
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

        spl_autoload_register(array('ComposerAutoloaderInit5fff9435c477c53cd5ff4c8ecb6b2e5f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5fff9435c477c53cd5ff4c8ecb6b2e5f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5fff9435c477c53cd5ff4c8ecb6b2e5f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}