--TEST--
\pear2\Pyrus\ScriptFrontend\Commands::channelDel()
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'testit')) {
    $dir = __DIR__ . '/testit';
    include __DIR__ . '/../../clean.php.inc';
}
mkdir(__DIR__ . '/testit');
$chan = \pear2\Pyrus\Config::current()->channelregistry['pecl.php.net'];
$newchan = $chan->toChannelFile();
$newchan->name = 'foobar';
$newchan->alias = 'fb';
\pear2\Pyrus\Config::current()->channelregistry[] = $newchan;
$test->assertTrue(isset(\pear2\Pyrus\Config::current()->channelregistry['foobar']), 'verify we added it');

ob_start();
$cli = new \pear2\Pyrus\ScriptFrontend\Commands(true);
$cli->run($args = array (__DIR__ . '/testit', 'channel-del', 'foobar'));

$contents = ob_get_contents();
ob_end_clean();
$test->assertEquals('Using PEAR installation found at ' . __DIR__. DIRECTORY_SEPARATOR . 'testit' . "\n"
                    . "Deleting channel foobar successful\n",
                    $contents,
                    'delete channel');
$test->assertFalse(isset(\pear2\Pyrus\Config::current()->channelregistry['foobar']), 'verify we removed it');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===