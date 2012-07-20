--TEST--
\Pyrus\ChannelRegistry\Sqlite3::delete() delete external channel
--FILE--
<?php
require __DIR__ . '/../setup.php.inc';
$chan = new \Pyrus\Channel(new \Pyrus\ChannelFile(dirname(__DIR__).'/../sample_channel.xml'));
$creg->add($chan);
$test->assertEquals(true, $creg->exists('pear.unl.edu'), 'successfully added the channel');
$chan = $creg->get('pear.unl.edu');
$creg->delete($chan);
$test->assertEquals(false, $creg->exists('pear.unl.edu'), 'successfully deleted');

?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===