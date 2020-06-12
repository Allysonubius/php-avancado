<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdde955fb42b559f87cabba523e000ba8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'allys\\metodo\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'allys\\metodo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdde955fb42b559f87cabba523e000ba8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdde955fb42b559f87cabba523e000ba8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdde955fb42b559f87cabba523e000ba8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
