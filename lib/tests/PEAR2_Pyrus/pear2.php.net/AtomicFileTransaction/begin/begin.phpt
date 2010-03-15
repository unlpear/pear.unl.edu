--TEST--
\pear2\Pyrus\AtomicFileTransaction::begin()
--FILE--
<?php
define('MYDIR', __DIR__);
require dirname(__DIR__) . '/setup.empty.php.inc';
$atomic = \pear2\Pyrus\AtomicFileTransaction::getTransactionObject(__DIR__ . '/testit/src');

$test->assertFileNotExists(__DIR__ . '/testit/src/', 'before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/', 'before');

$atomic->begin();

$test->assertFileNotExists(__DIR__ . '/testit/src/', 'after');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/', 'after');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===