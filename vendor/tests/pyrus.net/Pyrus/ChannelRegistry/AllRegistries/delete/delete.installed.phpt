--TEST--
\Pyrus\ChannelRegistry::delete() delete failure, channel has installed packages
--FILE--
<?php
require dirname(__DIR__) . '/../setup.php.inc';
include __DIR__ . '/../../../Registry/AllRegistries/setupPackageFile.php.inc';
$c = getTestConfig();

$chan = new \Pyrus\Channel(new \Pyrus\ChannelFile(dirname(__DIR__).'/../sample_channel.xml'));
$c->channelregistry->add($chan);
$test->assertEquals(true, $c->channelregistry->exists('pear.unl.edu'), 'successfully added the channel');
$chan = $c->channelregistry->get('pear.unl.edu');

$info->channel = 'pear.unl.edu';
$c->registry->install($info);

try {
    $c->channelregistry->delete($chan);
    throw new Exception('passed and shouldn\'t');
} catch (\Pyrus\ChannelRegistry\Exception $e) {
    $test->assertEquals('Cannot delete channel pear.unl.edu, packages are installed', $e->getMessage(), 'error');
}
$test->assertEquals(true, $c->channelregistry->exists('pear.unl.edu'), 'not successfully deleted');

?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===