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
  'crodas\\classinfo\\definition\\tfunction' => '/../crodas/class-info/lib/crodas/ClassInfo/Definition/TFunction.php',
  'crodas\\classinfo\\definition\\tbase' => '/../crodas/class-info/lib/crodas/ClassInfo/Definition/TBase.php',
  'crodas\\classinfo\\definition\\tclass' => '/../crodas/class-info/lib/crodas/ClassInfo/Definition/TClass.php',
  'crodas\\classinfo\\definition\\tproperty' => '/../crodas/class-info/lib/crodas/ClassInfo/Definition/TProperty.php',
  'crodas\\classinfo\\classinfo' => '/../crodas/class-info/lib/crodas/ClassInfo/ClassInfo.php',
  'crodas\\classinfo\\parser' => '/../crodas/class-info/lib/crodas/ClassInfo/Parser.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'crodas\\classinfo\\definition\\tfunction' => 
  array (
    0 => 
    array (
      0 => 'crodas\\classinfo\\definition\\tbase',
      1 => 'class_exists',
    ),
  ),
  'crodas\\classinfo\\definition\\tclass' => 
  array (
    0 => 
    array (
      0 => 'crodas\\classinfo\\definition\\tbase',
      1 => 'class_exists',
    ),
  ),
  'crodas\\classinfo\\definition\\tproperty' => 
  array (
    0 => 
    array (
      0 => 'crodas\\classinfo\\definition\\tbase',
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
