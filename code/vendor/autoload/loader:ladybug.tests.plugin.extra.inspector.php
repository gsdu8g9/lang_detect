<?php
/**
 *  Autoloader function generated by crodas/Autoloader
 *
 *  https://github.com/crodas/Autoloader
 *
 *  This is a generated file, do not modify it.
 */

return function($class) {
    // classes {{{
    static $classes = array (
  'ladybug\\tests\\plugin\\extra\\inspector\\resource\\php\\gdtest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Resource/Php/GdTest.php',
  'ladybug\\tests\\plugin\\extra\\inspector\\resource\\php\\filetest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Resource/Php/FileTest.php',
);
    // }}}


    if (isset($classes[$class])) {
        if (is_array($class)) {
            if (!$class[1]($class[0], false)) {
                require __DIR__  . $classes[$class[0]];
            }
        } else if (!class_exists($class, false)) {
            require __DIR__  . $classes[$class];
        }
        return true;
    }
};
