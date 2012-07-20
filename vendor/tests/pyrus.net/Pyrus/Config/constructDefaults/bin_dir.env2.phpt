--TEST--
\Pyrus\Config::constructDefaults() bin_dir from PHP_BINDIR
--SKIPIF--
<?php
if (PATH_SEPARATOR == ';') echo 'skip requires non-MS Windows';
?>
--ENV--
PHP_PEAR_BIN_DIR=
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
tc::constructDefaults();
$defaults = tc::getTestDefaults();
$test->assertEquals(PHP_BINDIR, $defaults['bin_dir'], 'after');
?>
===DONE===
--EXPECT--
===DONE===
