--TEST--
\pear2\Pyrus\AtomicFileTransaction::commit() failure, can't create backup dir
--FILE--
<?php
define('MYDIR', __DIR__);
require dirname(__DIR__) . '/setup.empty.php.inc';
mkdir(__DIR__ . '/testit/src');
touch(__DIR__ . '/testit/src/foo', 1234567);
touch(__DIR__ . '/testit/src/another');
umask(0);
mkdir(__DIR__ . '/testit/src/sub/deep/deep/thing', 0777, true);
mkdir(__DIR__ . '/testit/src/anothernew/dir', 0777, true);
umask(022);
touch(__DIR__ . '/testit/src/anothernew/dir/file');

$test->assertFileExists(__DIR__ . '/testit/src', __DIR__ . '/testit/src');
$test->assertFileExists(__DIR__ . '/testit/src/foo', __DIR__ . '/testit/src/foo');
$test->assertFileExists(__DIR__ . '/testit/src/another', __DIR__ . '/testit/src/another');
$test->assertFileExists(__DIR__ . '/testit/src/sub/deep/deep/thing', __DIR__ . '/testit/src/sub/deep/deep/thing');
$test->assertFileExists(__DIR__ . '/testit/src/anothernew/dir', __DIR__ . '/testit/src/another/dir');
$test->assertFileExists(__DIR__ . '/testit/src/anothernew/dir/file', __DIR__ . '/testit/src/another/dir/file');

$test->assertFileNotExists(__DIR__ . '/testit/.journal-src', __DIR__ . '/testit/.journal-src before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/foo', __DIR__ . '/testit/.journal-src/foo before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/another', __DIR__ . '/testit/.journal-src/another before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/sub/deep/deep/thing', __DIR__ . '/testit/.journal-src/sub/deep/deep/thing before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/anothernew/dir', __DIR__ . '/testit/.journal-src/another/dir before');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/anothernew/dir/file', __DIR__ . '/testit/.journal-src/another/dir/file before');

$atomic = \pear2\Pyrus\AtomicFileTransaction::getTransactionObject(__DIR__ . '/testit/src');

$atomic->begin();

$test->assertFileExists(__DIR__ . '/testit/src', __DIR__ . '/testit/src after');
$test->assertFileExists(__DIR__ . '/testit/src/foo', __DIR__ . '/testit/src/foo after');
$test->assertFileExists(__DIR__ . '/testit/src/another', __DIR__ . '/testit/src/another after');
$test->assertFileExists(__DIR__ . '/testit/src/sub/deep/deep/thing', __DIR__ . '/testit/src/sub/deep/deep/thing after');
$test->assertFileExists(__DIR__ . '/testit/src/anothernew/dir', __DIR__ . '/testit/src/another/dir after');
$test->assertFileExists(__DIR__ . '/testit/src/anothernew/dir/file', __DIR__ . '/testit/src/another/dir/file after');

$test->assertFileExists(__DIR__ . '/testit/.journal-src', __DIR__ . '/testit/.journal-src after');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/foo', __DIR__ . '/testit/.journal-src/foo after');
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/newfile', __DIR__ . '/testit/.journal-src/newfile before');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/another', __DIR__ . '/testit/.journal-src/another after');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/sub/deep/deep/thing', __DIR__ . '/testit/.journal-src/sub/deep/deep/thing after');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/anothernew/dir', __DIR__ . '/testit/.journal-src/another/dir after');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/anothernew/dir/file', __DIR__ . '/testit/.journal-src/another/dir/file after');

$test->assertEquals(decoct(0777), decoct(0777 & fileperms(__DIR__ . '/testit/.journal-src/sub/deep/deep/thing')), 'perms ' . __DIR__ . '/testit/.journal-src/sub/deep/deep/thing');
$test->assertEquals(decoct(0755), decoct(0755 & fileperms(__DIR__ . '/testit/.journal-src/anothernew')), 'perms ' . __DIR__ . '/testit/.journal-src/anothernew');
$test->assertEquals(decoct(0777), decoct(0777 & fileperms(__DIR__ . '/testit/.journal-src/anothernew/dir')), 'perms ' . __DIR__ . '/testit/.journal-src/anothernew/dir');

$test->assertEquals(filemtime(__DIR__ . '/testit/src/another'), filemtime(__DIR__ . '/testit/.journal-src/another'), 'mtime 1');
$test->assertEquals(1234567, filemtime(__DIR__ . '/testit/.journal-src/foo'), 'foo mtime');

$atomic->removePath('foo');
$atomic->createOrOpenPath('newfile', 'hithere');

$test->assertFileNotExists(__DIR__ . '/testit/.journal-src/foo', __DIR__ . '/testit/.journal-src/foo after erase');
$test->assertFileExists(__DIR__ . '/testit/.journal-src/newfile', __DIR__ . '/testit/.journal-src/newfile after create');

$test->assertFileExists(__DIR__ . '/testit/src/foo', __DIR__ . '/testit/.journal-src/foo after erase 2');
$test->assertFileNotExists(__DIR__ . '/testit/src/newfile', __DIR__ . '/testit/.journal-src/newfile after create 2');

mkdir(__DIR__ . '/testit/.old-src');
try {
    \pear2\Pyrus\AtomicFileTransaction::commit();
    die('should have failed');
} catch (\pear2\Pyrus\AtomicFileTransaction\Exception $e) {
    $cause = array();
    $e->getCauseMessage($cause);
    $test->assertEquals('CRITICAL - unable to complete transaction, rename of actual to backup path failed', $cause[1]['message'], 'error');
    $test->assertEquals('ERROR: commit failed', $e->getMessage(), 'error');
}
$test->assertFileNotExists(__DIR__ . '/testit/.journal-src', 'verify transaction cancelled');
$test->assertFileExists(__DIR__ . '/testit/src', 'verify transaction cancelled and source not deleted');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===