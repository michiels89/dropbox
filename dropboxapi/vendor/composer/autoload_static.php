<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf95a3f4a6ef614cad04f1f106497444e
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dropbox' => 
            array (
                0 => __DIR__ . '/..' . '/dropbox/dropbox-sdk/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf95a3f4a6ef614cad04f1f106497444e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
