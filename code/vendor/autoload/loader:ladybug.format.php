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
  'ladybug\\format\\xmlformat' => '/../raulfraile/ladybug/src/Ladybug/Format/XmlFormat.php',
  'ladybug\\format\\formatinterface' => '/../raulfraile/ladybug/src/Ladybug/Format/FormatInterface.php',
  'ladybug\\format\\phpformat' => '/../raulfraile/ladybug/src/Ladybug/Format/PhpFormat.php',
  'ladybug\\format\\htmlformat' => '/../raulfraile/ladybug/src/Ladybug/Format/HtmlFormat.php',
  'ladybug\\format\\consoleformat' => '/../raulfraile/ladybug/src/Ladybug/Format/ConsoleFormat.php',
  'ladybug\\format\\yamlformat' => '/../raulfraile/ladybug/src/Ladybug/Format/YamlFormat.php',
  'ladybug\\format\\jsonformat' => '/../raulfraile/ladybug/src/Ladybug/Format/JsonFormat.php',
  'ladybug\\format\\formatresolver' => '/../raulfraile/ladybug/src/Ladybug/Format/FormatResolver.php',
  'ladybug\\format\\textformat' => '/../raulfraile/ladybug/src/Ladybug/Format/TextFormat.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'ladybug\\format\\xmlformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\phpformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\htmlformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\consoleformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\yamlformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\jsonformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\format\\textformat' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\format\\formatinterface',
      1 => 'interface_exists',
    ),
  ),
);
    // }}}

    if (isset($classes[$class])) {
        if (!empty($deps[$class])) {
            foreach ($deps[$class] as $zclass) {
                if (is_array($zclass)) {
                    if (!$zclass[1]($zclass[0], false)) {
                        require __DIR__  . $classes[$zclass[0]];
                    }
                } else if (!class_exists($zclass, false)) {
                    require __DIR__  . $classes[$zclass];
                }
            }
        }
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
