--TEST--
\Pyrus\Channel\RemotePackages exceptions
--SKIPIF--
<?php
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/validzip',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
$chan = \Pyrus\Config::current()->channelregistry['pear2.php.net'];
$remote = $chan->remotepackages;

try {
    $remote['foo'] = 1;
    throw new Exception('should have failed and did not');
} catch (Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(), 'offsetSet');
}

try {
    $a = $remote['foo'];
    throw new Exception('should have failed and did not');
} catch (Pyrus\Channel\Exception $e) {
    $test->assertEquals('Invalid stability foo requested, must be one of ' .
                                                    'devel, alpha, beta, stable', $e->getMessage(), 'offsetGet');
}

try {
    unset($remote['foo']);
    throw new Exception('should have failed and did not');
} catch (Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(), 'offsetUnset');
}
unset($chan->protocols->rest['REST1.0']);

try {
    $remote = $chan->remotepackages;
    throw new Exception('passed and should fail');
} catch (Pyrus\Channel\Exception $e) {
    $test->assertEquals('Cannot access remote packages without REST1.0 protocol',
                        $e->getMessage(), 'no REST message');
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===