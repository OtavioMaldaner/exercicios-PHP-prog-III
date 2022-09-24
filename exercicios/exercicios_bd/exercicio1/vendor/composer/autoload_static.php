<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9881ebe0f00993736ab28cbd9f6613c6
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit9881ebe0f00993736ab28cbd9f6613c6::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit9881ebe0f00993736ab28cbd9f6613c6::$classMap;

        }, null, ClassLoader::class);
    }
}