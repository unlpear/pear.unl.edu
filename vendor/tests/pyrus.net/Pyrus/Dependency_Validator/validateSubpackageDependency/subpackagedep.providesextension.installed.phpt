--TEST--
Dependency_Validator: PECL extension dependency, extension not loaded but installed, version valid bounds
--FILE--
<?php
require __DIR__ . '/../setup.registry.php.inc';

$validator = new test_Validator($package, \Pyrus\Validate::DOWNLOADING, $errs);

$fake = new \Pyrus\PackageFile\v2;
$foo = $fake->dependencies['required']->subpackage['pecl.php.net/foo']->min('1.0.0')->max('1.2.3')->providesextension('foo');
$fake->name = 'foo';
$fake->channel = 'pecl.php.net';
$fake->version['release'] = '1.2.3';
$fake->files['foo'] = array('role' => 'src');
$fake->notes = 'hi';
$fake->summary = 'hi';
$fake->description = 'hi';
$fake->type = 'extsrc';
\Pyrus\Config::current()->registry->install($fake);

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo max');
$test->assertEquals(0, count($errs), 'foo count max');

$fake->version['release'] = '1.0.0';
\Pyrus\Config::current()->registry->replace($fake);

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo min');
$test->assertEquals(0, count($errs), 'foo count min');

$foo->recommended('1.0.0');

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo recommended');
$test->assertEquals(0, count($errs), 'foo count recommended');

$foo->exclude('1.2.0');

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo exclude');
$test->assertEquals(0, count($errs), 'foo count exclude');

$foo->exclude = null;
$foo->exclude('1.0.0')->exclude('1.4.5')->conflicts(true);

$test->assertEquals(true, $validator->validateSubpackageDependency($foo, array()), 'foo conflicts with exclude');
$test->assertEquals(0, count($errs), 'foo count exclude');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===