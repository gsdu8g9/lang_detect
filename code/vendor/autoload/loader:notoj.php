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
  'notoj\\file' => '/../crodas/notoj/lib/Notoj/File.php',
  'notoj\\cacheable' => '/../crodas/notoj/lib/Notoj/Cacheable.php',
  'notoj\\reflectionproperty' => '/../crodas/notoj/lib/Notoj/ReflectionProperty.php',
  'notoj\\annotations' => '/../crodas/notoj/lib/Notoj/Annotations.php',
  'notoj\\annotation\\base' => '/../crodas/notoj/lib/Notoj/Annotation/Base.php',
  'notoj\\reflectionclass' => '/../crodas/notoj/lib/Notoj/ReflectionClass.php',
  'notoj\\reflectionobject' => '/../crodas/notoj/lib/Notoj/ReflectionObject.php',
  'notoj\\reflectionfunction' => '/../crodas/notoj/lib/Notoj/ReflectionFunction.php',
  'notoj\\notoj' => '/../crodas/notoj/lib/Notoj/Notoj.php',
  'notoj\\cache' => '/../crodas/notoj/lib/Notoj/Cache.php',
  'notoj\\annotation\\annclass' => '/../crodas/notoj/lib/Notoj/Annotation/AnnClass.php',
  'notoj\\annotation' => '/../crodas/notoj/lib/Notoj/Annotation.php',
  'notoj\\tokenizer' => '/../crodas/notoj/lib/Notoj/Tokenizer.php',
  'notoj\\dir' => '/../crodas/notoj/lib/Notoj/Dir.php',
  'notoj\\reflectionmethod' => '/../crodas/notoj/lib/Notoj/ReflectionMethod.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'notoj\\file' => 
  array (
    0 => 
    array (
      0 => 'notoj\\cacheable',
      1 => 'class_exists',
    ),
  ),
  'notoj\\annotations' => 
  array (
    0 => 
    array (
      0 => 'notoj\\annotation\\base',
      1 => 'class_exists',
    ),
  ),
  'notoj\\notoj' => 
  array (
    0 => 
    array (
      0 => 'notoj\\cacheable',
      1 => 'class_exists',
    ),
  ),
  'notoj\\annotation\\annclass' => 
  array (
    0 => 
    array (
      0 => 'notoj\\annotation\\base',
      1 => 'class_exists',
    ),
    1 => 
    array (
      0 => 'notoj\\annotation',
      1 => 'class_exists',
    ),
  ),
  'notoj\\annotation' => 
  array (
    0 => 
    array (
      0 => 'notoj\\annotation\\base',
      1 => 'class_exists',
    ),
  ),
  'notoj\\dir' => 
  array (
    0 => 
    array (
      0 => 'notoj\\cacheable',
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
