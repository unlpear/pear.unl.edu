--TEST--
\Pyrus\ChannelRegistry\Xml::add() basic test
--FILE--
<?php
require __DIR__ . '/../setup.php.inc';
$test->assertEquals(false, $creg->exists('pear.unl.edu'), 'channel should not exist');
$chan = new \Pyrus\Channel(new \Pyrus\ChannelFile(__DIR__ . '/../../sample_channel_complex2.xml'));

try {
    $creg->get('pear.unl.edu');
    throw new Exception('worked and should fail');
} catch (Pyrus\ChannelRegistry\Exception $e) {
    $test->assertEquals('Unknown channel: pear.unl.edu', $e->getMessage(),
                        'exception');
}

$creg->add($chan);
$test->assertEquals(true, $creg->exists('pear.unl.edu'), 'successfully added the channel');
$test->assertEquals(true, $creg->exists('unl', false), 'successfully added the channel (alias)');

try {
    $creg->add($chan);
    throw new Exception('should have failed, and did not');
} catch (Pyrus\ChannelRegistry\Exception $e) {
    $test->assertEquals('Error: channel pear.unl.edu has already been discovered',
                        $e->getMessage(), 'error message');
}

// for coverage
try {
    $creg->channelFromAlias('foo');
    throw new Exception('should have failed, and did not');
} catch (Pyrus\ChannelRegistry\Exception $e) {
    $test->assertEquals('Unknown channel/alias: foo',
                        $e->getMessage(), 'error message');
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===