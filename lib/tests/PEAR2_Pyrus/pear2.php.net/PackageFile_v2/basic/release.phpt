--TEST--
PackageFile v2: test package.xml release properties
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
require __DIR__ . '/../../Registry/AllRegistries/package/basic/release.template';

?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===