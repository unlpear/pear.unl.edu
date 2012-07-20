--TEST--
ChannelFile: random channelfile tests
--FILE--
<?php
require __DIR__ . '/../setup.php.inc';

$c = new \Pyrus\ChannelFile(file_get_contents(__DIR__ . '/../../ChannelRegistry/sample_channel.xml'));

$test->assertEquals('pear.unl.edu', $c->name, 'verify we got the right info');

try {
    $c = new \Pyrus\ChannelFile(false);
    throw new Exception('Expected exception.');
} catch (Exception $e) {
    $test->assertEquals('Unable to open channel xml file  or file was empty.', $e->getMessage(), 'error 1');
}

try {
    ob_start();
    $c = new \Pyrus\ChannelFile('greg.chiaraquartet.net/poop');
    $test->assertEquals(false, true, 'succeeded where it should fail');
} catch (Exception $e) {
    ob_end_clean();
}

$c->name = 'test';
$test->assertEquals('test', $c->name, '__set');

try {
    $c->foo();
    throw new Exception('Expected exception.');
} catch (Exception $e) {
    $test->assertEquals('unknown method: Pyrus\\ChannelFile::foo', $e->getMessage(), 'error 2');
}

?>
===DONE===
--EXPECT--
===DONE===