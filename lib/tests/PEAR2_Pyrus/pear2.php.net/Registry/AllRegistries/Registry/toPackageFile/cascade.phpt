--TEST--
Registry: test toPackageFile, cascading registries
--FILE--
<?php
require __DIR__ . '/../setup.cascade.php.inc';
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'testit' . DIRECTORY_SEPARATOR;
$reg2->replace($info);

$package = $reg->toPackageFile('PEAR2_SimpleChannelServer', 'pear2.php.net');
$test->assertEquals('PEAR2_SimpleChannelServer', $package->name, 'ensure we got package');
?>
===DONE===
--CLEAN--
<?php
$dir = dirname(__DIR__) . '/testit';
include __DIR__ . '/../../../../clean.php.inc';
$dir = dirname(__DIR__) . '/testit2';
include __DIR__ . '/../../../../clean.php.inc';
?>
--EXPECT--
===DONE===