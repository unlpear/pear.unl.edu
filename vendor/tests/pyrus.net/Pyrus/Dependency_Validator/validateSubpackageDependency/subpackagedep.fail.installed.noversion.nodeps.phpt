--TEST--
Dependency_Validator: subpackage dependency, no version, installed failure --nodeps
--FILE--
<?php
require __DIR__ . '/../setup.registry.php.inc';

\Pyrus\Main::$options['nodeps'] = true;
$fake = new \Pyrus\PackageFile\v2;
$foo = $fake->dependencies['required']->subpackage['pear2.php.net/foo'];

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo');
$test->assertEquals(1, count($errs->E_WARNING), 'foo count');
$test->assertEquals(1, count($errs), 'foo count 2');
$test->assertEquals('warning: channel://pear2.php.net/test requires package "channel://pear2.php.net/foo"', $errs->E_WARNING[0]->getMessage(), 'foo error');

// reset multierrors
$errs = new \PEAR2\MultiErrors;
$validator = new test_Validator($package, $state, $errs);

$foo = $fake->dependencies['optional']->subpackage['pear2.php.net/foo'];

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo optional');
$test->assertEquals(1, count($errs->E_WARNING), 'foo optional count');
$test->assertEquals(1, count($errs), 'foo optional count 2');
$test->assertEquals('channel://pear2.php.net/test can optionally use package "channel://pear2.php.net/foo"', $errs->E_WARNING[0]->getMessage(), 'foo optional error');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===