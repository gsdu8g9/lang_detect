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
  'twig_test_nodetestcase' => '/../twig/twig/lib/Twig/Test/NodeTestCase.php',
  'twig_test_node' => '/../twig/twig/lib/Twig/Test/Node.php',
  'twig_test_function' => '/../twig/twig/lib/Twig/Test/Function.php',
  'twig_test_method' => '/../twig/twig/lib/Twig/Test/Method.php',
  'twig_test_integrationtestcase' => '/../twig/twig/lib/Twig/Test/IntegrationTestCase.php',
  'twig_test_loader_templatereference' => '/../twig/twig/test/Twig/Tests/Loader/ArrayTest.php',
  'twig_test_escapingtest' => '/../twig/twig/test/Twig/Tests/escapingTest.php',
  'twig_testcallableinterface' => '/../twig/twig/lib/Twig/TestCallableInterface.php',
  'twig_testinterface' => '/../twig/twig/lib/Twig/TestInterface.php',
  'twig_test' => '/../twig/twig/lib/Twig/Test.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'twig_test_node' => 
  array (
    0 => 
    array (
      0 => 'twig_testcallableinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_testinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'twig_test',
      1 => 'class_exists',
    ),
  ),
  'twig_test_function' => 
  array (
    0 => 
    array (
      0 => 'twig_testcallableinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_testinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'twig_test',
      1 => 'class_exists',
    ),
  ),
  'twig_test_method' => 
  array (
    0 => 
    array (
      0 => 'twig_testcallableinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'twig_testinterface',
      1 => 'interface_exists',
    ),
    2 => 
    array (
      0 => 'twig_test',
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
