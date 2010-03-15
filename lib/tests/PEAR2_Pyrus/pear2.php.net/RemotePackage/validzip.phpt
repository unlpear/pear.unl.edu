--TEST--
\pear2\Pyrus\Channel\RemotePackage::download(), valid zip archive
--SKIPIF--
<?php
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?php
define('MYDIR', __DIR__);
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/validzip',
                       'http://pear2.php.net/');
\pear2\Pyrus\Main::$downloadClass = 'Internet';
$remote = new \pear2\Pyrus\Channel\RemotePackage(\pear2\Pyrus\Config::current()->channelregistry['pear2.php.net'],
                                                'stable');
$remote = $remote['GetMaintainers_Test'];
$remote->version['release'] = '1.0.0';
$ret = $remote->download();
$test->assertEquals('pear2\Pyrus\Package\Remote', get_class($ret), 'downloaded right class');
$test->assertEquals('GetMaintainers_Test', $ret->name, 'got right package');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===
