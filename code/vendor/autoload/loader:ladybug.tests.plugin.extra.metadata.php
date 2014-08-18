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
  'ladybug\\tests\\plugin\\extra\\metadata\\extraplugintest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/ExtraPluginTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\phpmetadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/PhpMetadataTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\aurametadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/AuraMetadataTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\twigmetadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/TwigMetadataTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\doctrinemetadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/DoctrineMetadataTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\zendmetadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/ZendMetadataTest.php',
  'ladybug\\tests\\plugin\\extra\\metadata\\silexmetadatatest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Metadata/SilexMetadataTest.php',
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
