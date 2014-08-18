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
  'symfony\\component\\dependencyinjection\\loader\\inifileloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/IniFileLoader.php',
  'symfony\\component\\dependencyinjection\\loader\\fileloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/FileLoader.php',
  'symfony\\component\\dependencyinjection\\loader\\closureloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/ClosureLoader.php',
  'symfony\\component\\dependencyinjection\\loader\\phpfileloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/PhpFileLoader.php',
  'symfony\\component\\dependencyinjection\\loader\\xmlfileloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/XmlFileLoader.php',
  'symfony\\component\\dependencyinjection\\loader\\yamlfileloader' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Loader/YamlFileLoader.php',
  'symfony\\component\\config\\loader\\loaderinterface' => '/../symfony/config/Symfony/Component/Config/Loader/LoaderInterface.php',
  'symfony\\component\\config\\loader\\loader' => '/../symfony/config/Symfony/Component/Config/Loader/Loader.php',
  'symfony\\component\\config\\loader\\fileloader' => '/../symfony/config/Symfony/Component/Config/Loader/FileLoader.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\dependencyinjection\\loader\\inifileloader' => 
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
    2 => 
    array (
      0 => 'symfony\\component\\config\\loader\\fileloader',
      1 => 'class_exists',
    ),
    3 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\loader\\fileloader',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\loader\\fileloader' => 
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
    2 => 
    array (
      0 => 'symfony\\component\\config\\loader\\fileloader',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\loader\\closureloader' => 
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
  'symfony\\component\\dependencyinjection\\loader\\phpfileloader' => 
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
    2 => 
    array (
      0 => 'symfony\\component\\config\\loader\\fileloader',
      1 => 'class_exists',
    ),
    3 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\loader\\fileloader',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\loader\\xmlfileloader' => 
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
    2 => 
    array (
      0 => 'symfony\\component\\config\\loader\\fileloader',
      1 => 'class_exists',
    ),
    3 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\loader\\fileloader',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\loader\\yamlfileloader' => 
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
    2 => 
    array (
      0 => 'symfony\\component\\config\\loader\\fileloader',
      1 => 'class_exists',
    ),
    3 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\loader\\fileloader',
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