--TEST--
PackageFile v2: test package.xml maintainer properties
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
require __DIR__ . '/../../Registry/AllRegistries/package/basic/maintainer.template';

?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===