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
  'symfony\\component\\config\\loader\\fileloader' => '/../symfony/config/Symfony/Component/Config/Loader/FileLoader.php',
  'symfony\\component\\config\\loader\\loader' => '/../symfony/config/Symfony/Component/Config/Loader/Loader.php',
  'symfony\\component\\config\\loader\\loaderresolver' => '/../symfony/config/Symfony/Component/Config/Loader/LoaderResolver.php',
  'symfony\\component\\config\\loader\\loaderresolverinterface' => '/../symfony/config/Symfony/Component/Config/Loader/LoaderResolverInterface.php',
  'symfony\\component\\config\\loader\\loaderinterface' => '/../symfony/config/Symfony/Component/Config/Loader/LoaderInterface.php',
  'symfony\\component\\config\\loader\\delegatingloader' => '/../symfony/config/Symfony/Component/Config/Loader/DelegatingLoader.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\config\\loader\\fileloader' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loaderinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loader',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\config\\loader\\loader' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loaderinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\config\\loader\\loaderresolver' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loaderresolverinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\config\\loader\\delegatingloader' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loaderinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\config\\loader\\loader',
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
