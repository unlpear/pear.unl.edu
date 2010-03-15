--TEST--
\pear2\Pyrus\Channel\RemoteCategory: exceptions
--FILE--
<?php

define('MYDIR', __DIR__);
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/noreleases',
                       'http://pear2.php.net/');
\pear2\Pyrus\Main::$downloadClass = 'Internet';
$chan = \pear2\Pyrus\Config::current()->channelregistry['pear2.php.net'];

$category = $chan->remotecategories['Default'];

try {
    $chan->remotecategories['Default']['oops'] = 5;
    throw new Exception('worked and should fail');
} catch (pear2\Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(), 'offsetSet');
}
try {
    unset($chan->remotecategories['Default']['oops']);
    throw new Exception('worked and should fail');
} catch (pear2\Pyrus\Channel\Exception $e) {
    $test->assertEquals('remote channel info is read-only', $e->getMessage(), 'offsetUnset');
}
try {
    $a = $chan->remotecategories['Default']['oops'];
    throw new Exception('worked and should fail');
} catch (pear2\Pyrus\Channel\Exception $e) {
    $test->assertEquals('Unknown remote package in Default category: "oops"', $e->getMessage(), 'offsetUnset');
}
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===