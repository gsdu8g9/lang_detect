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
  'symfony\\component\\console\\helper\\helper' => '/../symfony/console/Symfony/Component/Console/Helper/Helper.php',
  'symfony\\component\\console\\helper\\helperinterface' => '/../symfony/console/Symfony/Component/Console/Helper/HelperInterface.php',
  'symfony\\component\\console\\helper\\helperset' => '/../symfony/console/Symfony/Component/Console/Helper/HelperSet.php',
  'symfony\\component\\console\\helper\\dialoghelper' => '/../symfony/console/Symfony/Component/Console/Helper/DialogHelper.php',
  'symfony\\component\\console\\helper\\formatterhelper' => '/../symfony/console/Symfony/Component/Console/Helper/FormatterHelper.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\console\\helper\\helper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\helper\\helperinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\console\\helper\\dialoghelper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\helper\\helperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\console\\helper\\helper',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\console\\helper\\formatterhelper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\helper\\helperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\console\\helper\\helper',
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
