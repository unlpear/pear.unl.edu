--TEST--
\pear2\Pyrus\AtomicFileTransaction::createOrOpenPath(), path can't be opened
--FILE--
<?php
define('MYDIR', __DIR__);
require dirname(__DIR__) . '/setup.empty.php.inc';

$atomic = \pear2\Pyrus\AtomicFileTransaction::getTransactionObject(__DIR__ . '/testit/src');

\pear2\Pyrus\AtomicFileTransaction::begin();

mkdir(__DIR__ . '/testit/.journal-src/foo/bar', 0777, true);
try {
    $atomic->createOrOpenPath('foo', null, 'wb');
    die('should have failed');
} catch (\pear2\Pyrus\AtomicFileTransaction\Exception $e) {
    $test->assertEquals('Unable to open foo for writing in ' . __DIR__ .
                        DIRECTORY_SEPARATOR . 'testit' . DIRECTORY_SEPARATOR .
                        '.journal-src', $e->getMessage(), 'error msg');
}

?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===