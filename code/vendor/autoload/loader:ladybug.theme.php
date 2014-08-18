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
  'ladybug\\theme\\clithemeinterface' => '/../raulfraile/ladybug/src/Ladybug/Theme/CliThemeInterface.php',
  'ladybug\\theme\\themeinterface' => '/../raulfraile/ladybug/src/Ladybug/Theme/ThemeInterface.php',
  'ladybug\\theme\\base\\basetheme' => '/../raulfraile/ladybug/src/Ladybug/Theme/Base/BaseTheme.php',
  'ladybug\\theme\\abstracttheme' => '/../raulfraile/ladybug/src/Ladybug/Theme/AbstractTheme.php',
  'ladybug\\theme\\htmlthemeinterface' => '/../raulfraile/ladybug/src/Ladybug/Theme/HtmlThemeInterface.php',
  'ladybug\\theme\\themeresolver' => '/../raulfraile/ladybug/src/Ladybug/Theme/ThemeResolver.php',
  'ladybug\\theme\\simple\\simpletheme' => '/../raulfraile/ladybug/src/Ladybug/Theme/Simple/SimpleTheme.php',
  'ladybug\\theme\\modern\\moderntheme' => '/../raulfraile/ladybug-themes/Ladybug/Theme/Modern/ModernTheme.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'ladybug\\theme\\clithemeinterface' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\theme\\base\\basetheme' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\theme\\clithemeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\theme\\htmlthemeinterface',
      1 => 'interface_exists',
    ),
    5 => 
    array (
      0 => 'ladybug\\theme\\abstracttheme',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\theme\\abstracttheme' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\theme\\htmlthemeinterface' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\theme\\simple\\simpletheme' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\theme\\clithemeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\theme\\htmlthemeinterface',
      1 => 'interface_exists',
    ),
    5 => 
    array (
      0 => 'ladybug\\theme\\abstracttheme',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\theme\\modern\\moderntheme' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\theme\\themeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\theme\\htmlthemeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\theme\\abstracttheme',
      1 => 'class_exists',
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