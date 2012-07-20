--TEST--
\Pyrus\Channel\RemoteCategories: Exceptions
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/remotepackage',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';

$chan = \Pyrus\Config::current()->channelregistry['pecl.php.net'];
unset($chan->protocols->rest['REST1.1']);
try {
    $remote = new Pyrus\Channel\RemoteCategories($chan);
    throw new Exception('succeeded and should fail');
} catch (\Pyrus\Channel\Exception $e) {
    $test->assertEquals('Cannot access remote categories without REST1.1 protocol', $e->getMessage(),
                        'no REST1.1');
}

$remote = new Pyrus\Channel\RemoteCategories(\Pyrus\Config::current()->channelregistry['pear2.php.net']);
try {
    $remote['foo'] = 1;
    throw new Exception('succeeded and should fail');
} catch (\Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(),
                        'offsetSet');
}

try {
    unset($remote['foo']);
    throw new Exception('succeeded and should fail');
} catch (\Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(),
                        'offsetUnset');
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===
