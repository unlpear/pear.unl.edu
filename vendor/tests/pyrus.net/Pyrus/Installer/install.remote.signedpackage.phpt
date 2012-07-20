--TEST--
\Pyrus\Installer: install remote packages that is signed with an OpenSSL signature
--SKIPIF--
<?php die('Skipped: for coverage'); ?>
<?php
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?phpinclude __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/install.remote.signedpackage',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
\Pyrus\Installer::begin();
\Pyrus\Installer::prepare(new \Pyrus\Package('pear2/P1'));
\Pyrus\Installer::commit();
$reg = \Pyrus\Config::current()->registry;

$test->assertTrue(isset($reg->package["P1"]), "installed P1");
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===
