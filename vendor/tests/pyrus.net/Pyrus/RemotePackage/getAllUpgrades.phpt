--TEST--
\Pyrus\Channel\RemotePackage::getAllUpgrades
--SKIPIF--
<?php
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/installer.prepare.dep.versionconflict',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
$chan = \Pyrus\Config::current()->channelregistry['pear2.php.net'];

$remote = new \Pyrus\Channel\RemotePackage($chan,
                                                'stable');
$remote->name = 'P2';
$test->assertEquals(array(
                          array(
                                'v' => '1.2.3',
                                's' => 'stable',
                                'm' => '5.2.0'
                               ),
                          array(
                                'v' => '1.2.2',
                                's' => 'stable',
                                'm' => '5.2.0'
                               ),
                         ), $remote->getAllUpgrades('0.8.0'), 'stable');
$test->assertEquals(array(
                          array(
                                'v' => '1.2.3',
                                's' => 'stable',
                                'm' => '5.2.0'
                               ),
                         ), $remote->getAllUpgrades('1.2.2'), 'stable');

$remote->setExplicitState('alpha');
$test->assertEquals(array(
                          array(
                                'v' => '1.2.3',
                                's' => 'stable',
                                'm' => '5.2.0'
                               ),
                          array(
                                'v' => '1.2.2',
                                's' => 'stable',
                                'm' => '5.2.0'
                               ),
                          array(
                                'v' => '0.9.0',
                                's' => 'beta',
                                'm' => '5.2.0'
                               ),
                         ), $remote->getAllUpgrades('0.8.0'), 'alpha');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===
