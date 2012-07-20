--TEST--
PackageFile v2: test package.xml odd orderings (bloomy package)
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$apc = new \Pyrus\Package(__DIR__ . '/packages/bloomy/package.xml');
$test->assertEquals('bloomy', $apc->name, 'if we get here, all is well unless this part fails');

?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===