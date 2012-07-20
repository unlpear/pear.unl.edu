--TEST--
\Pyrus\Config::constructDefaults() bin_dir from PHP_PEAR_BIN_DIR
--ENV--
PATH=.;{PWD}
PHP_PEAR_BIN_DIR=somethingelse
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
tc::constructDefaults();
$defaults = tc::getTestDefaults();
$test->assertEquals('somethingelse', $defaults['bin_dir'], 'after');
?>
===DONE===
--EXPECT--
===DONE===
