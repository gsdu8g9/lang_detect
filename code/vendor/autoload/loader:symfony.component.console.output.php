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
  'symfony\\component\\console\\output\\output' => '/../symfony/console/Symfony/Component/Console/Output/Output.php',
  'symfony\\component\\console\\output\\nulloutput' => '/../symfony/console/Symfony/Component/Console/Output/NullOutput.php',
  'symfony\\component\\console\\output\\outputinterface' => '/../symfony/console/Symfony/Component/Console/Output/OutputInterface.php',
  'symfony\\component\\console\\output\\consoleoutput' => '/../symfony/console/Symfony/Component/Console/Output/ConsoleOutput.php',
  'symfony\\component\\console\\output\\streamoutput' => '/../symfony/console/Symfony/Component/Console/Output/StreamOutput.php',
  'symfony\\component\\console\\output\\consoleoutputinterface' => '/../symfony/console/Symfony/Component/Console/Output/ConsoleOutputInterface.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\console\\output\\output' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\output\\outputinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\console\\output\\nulloutput' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\output\\outputinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\console\\output\\output',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\console\\output\\consoleoutput' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\output\\outputinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\console\\output\\consoleoutputinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'symfony\\component\\console\\output\\output',
      1 => 'class_exists',
    ),
    4 => 
    array (
      0 => 'symfony\\component\\console\\output\\streamoutput',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\console\\output\\streamoutput' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\output\\outputinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\console\\output\\output',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\console\\output\\consoleoutputinterface' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\console\\output\\outputinterface',
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
