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
  'twig_tokenparser_embed' => '/../twig/twig/lib/Twig/TokenParser/Embed.php',
  'twig_tokenparser_include' => '/../twig/twig/lib/Twig/TokenParser/Include.php',
  'twig_tokenparser_spaceless' => '/../twig/twig/lib/Twig/TokenParser/Spaceless.php',
  'twig_tokenparser_sandbox' => '/../twig/twig/lib/Twig/TokenParser/Sandbox.php',
  'twig_tokenparser_extends' => '/../twig/twig/lib/Twig/TokenParser/Extends.php',
  'twig_tokenparser_do' => '/../twig/twig/lib/Twig/TokenParser/Do.php',
  'twig_tokenparser_macro' => '/../twig/twig/lib/Twig/TokenParser/Macro.php',
  'twig_tokenparser_from' => '/../twig/twig/lib/Twig/TokenParser/From.php',
  'twig_tokenparser_for' => '/../twig/twig/lib/Twig/TokenParser/For.php',
  'twig_tokenparser_autoescape' => '/../twig/twig/lib/Twig/TokenParser/AutoEscape.php',
  'twig_tokenparser_import' => '/../twig/twig/lib/Twig/TokenParser/Import.php',
  'twig_tokenparser_block' => '/../twig/twig/lib/Twig/TokenParser/Block.php',
  'twig_tokenparser_if' => '/../twig/twig/lib/Twig/TokenParser/If.php',
  'twig_tokenparser_filter' => '/../twig/twig/lib/Twig/TokenParser/Filter.php',
  'twig_tokenparser_use' => '/../twig/twig/lib/Twig/TokenParser/Use.php',
  'twig_tokenparser_set' => '/../twig/twig/lib/Twig/TokenParser/Set.php',
  'twig_tokenparser_flush' => '/../twig/twig/lib/Twig/TokenParser/Flush.php',
  'twig_tokenparserinterface' => '/../twig/twig/lib/Twig/TokenParserInterface.php',
  'twig_tokenparser' => '/../twig/twig/lib/Twig/TokenParser.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'twig_tokenparser_embed' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'twig_tokenparser_include',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_include' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_spaceless' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_sandbox' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_extends' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_do' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_macro' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_from' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_for' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_autoescape' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_import' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_block' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_if' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_filter' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_use' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_set' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
      1 => 'class_exists',
    ),
  ),
  'twig_tokenparser_flush' => 
  array (
    0 => 
    array (
      0 => 'twig_tokenparserinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_tokenparser',
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