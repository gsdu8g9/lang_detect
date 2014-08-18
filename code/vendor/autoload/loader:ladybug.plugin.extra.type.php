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
  'ladybug\\plugin\\extra\\type\\containertype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/ContainerType.php',
  'ladybug\\plugin\\extra\\type\\abstracttype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/AbstractType.php',
  'ladybug\\plugin\\extra\\type\\texttype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/TextType.php',
  'ladybug\\plugin\\extra\\type\\imagetype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/ImageType.php',
  'ladybug\\plugin\\extra\\type\\collectiontype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/CollectionType.php',
  'ladybug\\plugin\\extra\\type\\sizetype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/SizeType.php',
  'ladybug\\plugin\\extra\\type\\unixpermissionstype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/UnixPermissionsType.php',
  'ladybug\\plugin\\extra\\type\\codetype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/CodeType.php',
  'ladybug\\plugin\\extra\\type\\tabletype' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Type/TableType.php',
  'ladybug\\type\\typeinterface' => '/../raulfraile/ladybug/src/Ladybug/Type/TypeInterface.php',
  'ladybug\\type\\renderizabletypeinterface' => '/../raulfraile/ladybug/src/Ladybug/Type/RenderizableTypeInterface.php',
  'ladybug\\type\\extendedtypeinterface' => '/../raulfraile/ladybug/src/Ladybug/Type/ExtendedTypeInterface.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'ladybug\\plugin\\extra\\type\\containertype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\abstracttype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\texttype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\imagetype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\collectiontype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\sizetype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\unixpermissionstype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\codetype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\plugin\\extra\\type\\tabletype' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\type\\typeinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\type\\renderizabletypeinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\type\\extendedtypeinterface',
      1 => 'interface_exists',
    ),
    3 => 
    array (
      0 => 'ladybug\\plugin\\extra\\type\\abstracttype',
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
