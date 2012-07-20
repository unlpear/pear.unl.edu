--TEST--
\Pyrus\ScriptFrontend\Commands::channelDiscover() failure
--FILE--
<?php
require __DIR__ . '/setup.php.inc';

$c = getTestConfig();

require __DIR__ . '/../../Mocks/Internet.php';

Internet::addDirectory(TESTDIR,
                       'https://pear.unl.edu/');
Internet::addDirectory(TESTDIR,
                       'http://pear.unl.edu/');
\Pyrus\Main::$downloadClass = 'Internet';
$test->assertEquals(false, isset(\Pyrus\Config::current()->channelregistry['pear.unl.edu']),
                    'before discover of pear.unl.edu');
ob_start();
$cli = new \Pyrus\ScriptFrontend\Commands(true);
$cli->run($args = array (TESTDIR, 'channel-discover', 'pear.unl.edu'));

$contents = ob_get_contents();
ob_end_clean();
$test->assertEquals('Using PEAR installation found at ' . TESTDIR . "\n"
                    . "Discovery of channel pear.unl.edu failed: Download of https://pear.unl.edu/channel.xml failed, file does not exist\n",
                     $contents,
                    'list packages');

$test->assertEquals(false, isset(\Pyrus\Config::current()->channelregistry['pear.unl.edu']),
                    'after discover of pear.unl.edu');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===