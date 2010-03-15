--TEST--
\pear2\Pyrus\Installer::prepare(), duplicate package
--FILE--
<?php
define('MYDIR', __DIR__);
include __DIR__ . '/../setup.php.inc';
class boo extends \pear2\Pyrus\Installer
{
    static $installPackages = array();
}
boo::begin();
boo::prepare($package);
$test->assertEquals(1, count(boo::$installPackages), 'first prepare');
boo::prepare($package);
$test->assertEquals(1, count(boo::$installPackages), 'second prepare');
boo::rollback();
$test->assertEquals(0, count(boo::$installPackages), 'rollback');
// this passes if no exceptions are thrown
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===