--TEST--
\Pyrus\Installer: install remote packages with dependency groups
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/install.depgroup',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
\Pyrus\Installer::begin();
\Pyrus\Installer::prepare(new \Pyrus\Package('pear2/P1'));
\Pyrus\Installer::prepare(new \Pyrus\Package('pear2/P2#group'));
\Pyrus\Installer::commit();
$reg = \Pyrus\Config::current()->registry;
for ($i = 1; $i <= 4; $i++) {
    $test->assertTrue(isset($reg->package["P$i"]), "installed P$i");
}
$test->assertFalse(isset($reg->package['P5']), 'installed P5');
$test->assertEquals('1.0.0', $reg->info('P1', 'pear2.php.net', 'version'), 'P1 version');
$test->assertEquals('1.0.0', $reg->info('P2', 'pear2.php.net', 'version'), 'P2 version');
$test->assertEquals('1.0.0', $reg->info('P3', 'pear2.php.net', 'version'), 'P3 version');
$test->assertEquals('1.0.0', $reg->info('P4', 'pear2.php.net', 'version'), 'P4 version');

?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===