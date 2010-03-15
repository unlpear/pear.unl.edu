--TEST--
Sqlite3 PackageFile v2: test basic package.xml properties
--FILE--
<?php
require __DIR__ . '/../../../setup.php.inc';
@mkdir(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'testit');
set_include_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'testit');
$c = \pear2\Pyrus\Config::singleton(__DIR__.'/testit', __DIR__ . '/testit/plugins/pearconfig.xml');
$c->bin_dir = __DIR__ . '/testit/bin';
restore_include_path();
$c->saveConfig();
require __DIR__ . '/../../../../PackageFile_v2/setupFiles/setupPackageFile.php.inc';
$reg = new \pear2\Pyrus\Registry\Sqlite3(__DIR__.'/testit');
$reg->replace($info); // use replace to preserve date/time
$reg = $reg->package[$package->channel . '/' . $package->name];

require __DIR__ . '/../../../AllRegistries/package/basic/basic.template';

?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../../../clean.php.inc';
?>
--EXPECT--
===DONE===