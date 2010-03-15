--TEST--
\pear2\Pyrus\AtomicFileTransaction::removePath() failure, strict
--FILE--
<?php
define('MYDIR', __DIR__);
require dirname(__DIR__) . '/setup.empty.php.inc';

$atomic = \pear2\Pyrus\AtomicFileTransaction::getTransactionObject(__DIR__ . '/testit/src');

\pear2\Pyrus\AtomicFileTransaction::begin();
mkdir(__DIR__ . '/testit/.journal-src/foo/bar', 0777, true);
$test->assertFileExists(__DIR__ . '/testit/.journal-src/foo', 'before');
try {
    $atomic->removePath('foo');
    die('should have failed');
} catch (\pear2\Pyrus\AtomicFileTransaction\Exception $e) {
    $test->assertEquals('Cannot remove directory foo in ' . __DIR__ . DIRECTORY_SEPARATOR .
                        'testit' . DIRECTORY_SEPARATOR . '.journal-src', $e->getMessage(), 'error');
}
$test->assertFileExists(__DIR__ . '/testit/.journal-src/foo', 'should still exist');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===