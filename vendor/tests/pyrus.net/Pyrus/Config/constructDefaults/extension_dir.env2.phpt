--TEST--
\Pyrus\Config::constructDefaults() extension_dir from PEAR_EXTENSION_DIR
--SKIPIF--
<?php
if (ini_get('extension_dir')) die("skip extension_dir must be unset to test this");
?>
--ENV--
PATH=.
PHP_PEAR_EXTENSION_DIR=
PEAR_EXTENSION_DIR=somethingelse2
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
tc::constructDefaults();
$defaults = tc::getTestDefaults();
$test->assertEquals('somethingelse2', $defaults['ext_dir'], 'after');
?>
===DONE===
--EXPECT--
===DONE===
