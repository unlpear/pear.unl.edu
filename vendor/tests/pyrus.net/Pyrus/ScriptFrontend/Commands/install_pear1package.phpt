--TEST--
\Pyrus\ScriptFrontend\Commands::install(), basic test
--FILE--
<?php
require __DIR__ . '/setup.php.inc';

$c = getTestConfig();

ob_start();
$cli = new \Pyrus\ScriptFrontend\Commands(true);
$cli->run($args = array (TESTDIR, 'install', __DIR__ . '/packages/Net_URL-1.0.15.tar'));

$contents = ob_get_contents();
ob_end_clean();
$test->assertEquals('Using PEAR installation found at ' . TESTDIR . "\n"
                    . 'Downloading pear.php.net/Net_URL
Installed pear.php.net/Net_URL-1.0.15' . "\n",
                    $contents,
                    'list packages');
                    
$test->assertFileExists(TESTDIR . '/docs/Net_URL/Net/docs/example.php', 'Docs installed to old doc directory.');


?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===