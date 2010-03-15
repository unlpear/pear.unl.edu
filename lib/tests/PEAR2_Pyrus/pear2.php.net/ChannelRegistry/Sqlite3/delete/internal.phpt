--TEST--
\pear2\Pyrus\ChannelRegistry\Sqlite3::delete() delete internal channel
--FILE--
<?php
require __DIR__ . '/../setup.php.inc';
foreach (array('pear.php.net',
               'pear2.php.net',
               'pecl.php.net',
               '__uri') as $name) {
    $chan = $creg->get($name);
    $thrown = false;
    $test->assertEquals(1, $creg->exists($name), $name.' channel exists before');
    try {
        $creg->delete($chan);
        throw new Exception('delete succeeded and should have failed');
    } catch(\pear2\Pyrus\ChannelRegistry\Exception $e) {
        $test->assertEquals('Cannot delete default channel ' . $name, $e->getMessage(), $name . ' message');
    }
    $test->assertEquals(1, $creg->exists($name), $name.' channel still exists');
}

?>
===DONE===
--CLEAN--
<?php
$dir = dirname(__DIR__) . '/testit';
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===