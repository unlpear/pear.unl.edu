--TEST--
Dependency_Validator: subpackage dependency, no version, installed
--FILE--
<?php
require __DIR__ . '/../setup.registry.php.inc';

$fake = new \Pyrus\PackageFile\v2;
$foo = $fake->dependencies['required']->subpackage['pear2.php.net/foo']->conflicts(true);


$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo conflicts');
$test->assertEquals(0, count($errs), 'foo conflicts count');

$foo->conflicts = false;

$fake->name = 'foo';
$fake->channel = 'pear2.php.net';
$fake->version['release'] = '1.2.3';
$fake->files['foo'] = array('role' => 'php');
$fake->notes = 'hi';
$fake->summary = 'hi';
$fake->description = 'hi';
\Pyrus\Config::current()->registry->install($fake);

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo');
$test->assertEquals(0, count($errs), 'foo count');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===