--TEST--
\pear2\Pyrus\Installer::prepare(), dependency is installed, and is latest version
--FILE--
<?php

define('MYDIR', __DIR__);
include __DIR__ . '/../setup.php.inc';
require __DIR__ . '/../../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../../Mocks/Internet/install.prepare.explicitstate',
                       'http://pear2.php.net/');
\pear2\Pyrus\Main::$downloadClass = 'Internet';
\pear2\Pyrus\Main::$options['upgrade'] = true;
class b extends \pear2\Pyrus\Installer
{
    static $installPackages = array();
}

// first, install P2 1.0.0 in the registry
$a = new \pear2\Pyrus\PackageFile(__DIR__ .
                                '/../../Mocks/Internet/install.prepare.explicitstate/rest/r/p2/package.1.1.0RC3.xml');
\pear2\Pyrus\Config::current()->registry->package[] = $a->info;

b::begin();
b::prepare(new \pear2\Pyrus\Package('pear2/P1-beta'));
b::preCommitDependencyResolve();
$test->assertEquals(1, count(b::$installPackages), '1 package should be installed');
$test->assertEquals('1.1.0RC1', b::$installPackages['pear2.php.net/P1']->version['release'], 'verify P1-1.1.0RC1');
b::rollback();
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===