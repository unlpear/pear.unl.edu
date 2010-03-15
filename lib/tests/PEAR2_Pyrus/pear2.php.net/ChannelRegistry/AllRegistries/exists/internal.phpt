--TEST--
\pear2\Pyrus\ChannelRegistry::exists() basic test
--FILE--
<?php
require dirname(dirname(__FILE__)) . '/../setup.php.inc';
@mkdir(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'testit');
set_include_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'testit');
$c = \pear2\Pyrus\Config::singleton(__DIR__.'/testit', __DIR__ . '/testit/plugins/pearconfig.xml');
restore_include_path();
$c->saveConfig();
foreach (array('pear'=>'pear.php.net',
               'pear2'=>'pear2.php.net',
               'pecl'=>'pecl.php.net') as $alias=>$name) {
    $test->assertEquals(1, $c->channelregistry->exists($alias, false), $alias.' channel alias');
    $test->assertEquals(1, $c->channelregistry->exists($name, false), $name.' channel name');
}
$test->assertEquals(1, $c->channelregistry->exists('__uri', false), '__uri channel');
$test->assertEquals(false, $c->channelregistry->exists('cookiemonster', false), 'fake channel does not exist, 1');

$test->assertEquals(true, isset($c->channelregistry['__uri']), '__uri channel 2');
$test->assertEquals(false, isset($c->channelregistry['cookiemonster']), 'fake channel does not exist, 2');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../../clean.php.inc';
?>
--EXPECT--
===DONE===