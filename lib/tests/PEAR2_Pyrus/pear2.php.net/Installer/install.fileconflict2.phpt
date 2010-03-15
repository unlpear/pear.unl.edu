--TEST--
\pear2\Pyrus\Installer: install failure: file conflict between downloaded and installed package
--FILE--
<?php

define('MYDIR', __DIR__);
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/upgrade.packagesplitting',
                       'http://pear2.php.net/');
\pear2\Pyrus\Main::$downloadClass = 'Internet';
\pear2\Pyrus\Installer::begin();
\pear2\Pyrus\Installer::prepare(new \pear2\Pyrus\Package('pear2/P1-1.0.0'));
\pear2\Pyrus\Installer::commit();

\pear2\Pyrus\Installer::begin();
\pear2\Pyrus\Installer::prepare(new \pear2\Pyrus\Package('pear2/P2'));
try {
    \pear2\Pyrus\Installer::commit();
    throw new Exception('passed and should have failed');
} catch (\pear2\Pyrus\Installer\Exception $e) {
    $test->assertEquals('File conflicts detected:
 Package pear2.php.net/P2:
  glooby2 (conflicts with package pear2.php.net/P1)
', $e->getMessage(), 'file conflict');
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