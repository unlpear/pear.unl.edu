--TEST--
\Pyrus\Config::addConfigValue()
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
set_include_path(''); // disable include_path cascading for simplicity
$a = $configclass::singleton($testpath, $testpath . '/blah');
$a->addConfigValue('foo', 'booya');
$a->addConfigValue('foo2', 'booya2', 'user');
$test->assertEquals('booya', $a->foo, 'foo');
$test->assertEquals('booya2', $a->foo2, 'foo');
$a->foo = 'hi';
$a->foo2 = 'hi2';
$test->assertEquals('hi', $a->foo, 'foo');
$test->assertEquals('hi2', $a->foo2, 'foo2');

$test->assertEquals('<?xml version="1.0"?>
<pearconfig version="1.0"><php_dir>' .
    $a->php_dir . '</php_dir><ext_dir>' .
    $a->ext_dir . '</ext_dir><cfg_dir>' .
    $a->cfg_dir . '</cfg_dir><doc_dir>' .
    $a->doc_dir . '</doc_dir><bin_dir>' .
    $a->bin_dir . '</bin_dir><data_dir>' .
    $a->data_dir . '</data_dir><www_dir>' .
    $a->www_dir . '</www_dir><test_dir>' .
    $a->test_dir . '</test_dir><src_dir>' .
    $a->src_dir . '</src_dir><php_bin>' .
    $a->php_bin . '</php_bin><php_ini>' .
    $a->php_ini . '</php_ini><php_prefix></php_prefix><php_suffix></php_suffix><foo>' .
    $a->foo . '</foo></pearconfig>
', file_get_contents($cdir . '/' . $a->configSnapshot()), 'contents 1');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===
