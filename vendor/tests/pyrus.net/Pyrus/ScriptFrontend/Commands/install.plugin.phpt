--TEST--
\Pyrus\ScriptFrontend\Commands::install(), basic test
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$c = getTestConfig();

ob_start();
$cli = new \Pyrus\ScriptFrontend\Commands(true);
$cli->run($args = array (TESTDIR, 'install', '-p',
                         __DIR__ . DIRECTORY_SEPARATOR . 'Pyrus_Developer' . DIRECTORY_SEPARATOR . 'package.xml'));

$contents = ob_get_contents();
ob_end_clean();
$test->assertEquals('Using PEAR installation found at ' . TESTDIR . "\n"
                    . 'Downloading pear2.php.net/PEAR2_Pyrus_Developer
Installed pear2.php.net/PEAR2_Pyrus_Developer-0.1.0' . "\n",
                    $contents,
                    'list packages');

$test->assertFileExists(TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN.php',
                        'PEAR2SVN.php not installed properly');
$eq = array (
  TESTDIR . '/plugins/data/pear2.php.net/PEAR2_Pyrus_Developer/commands.xml' =>
  array (
    'role' => 'customcommand',
    'name' => 'customcommand/commands.xml',
    'baseinstalldir' => '/',
    'installed_as' => TESTDIR . '/plugins/data/pear2.php.net/PEAR2_Pyrus_Developer/commands.xml',
    'relativepath' => 'pear2.php.net/PEAR2_Pyrus_Developer/commands.xml',
    'configpath' => TESTDIR . '/plugins/data',
  ),
  TESTDIR . '/plugins/data/pear2.php.net/PEAR2_Pyrus_Developer/phartemplate.php' =>
  array (
    'role' => 'data',
    'name' => 'data/phartemplate.php',
    'baseinstalldir' => '/',
    'installed_as' => TESTDIR . '/plugins/data/pear2.php.net/PEAR2_Pyrus_Developer/phartemplate.php',
    'relativepath' => 'pear2.php.net/PEAR2_Pyrus_Developer/phartemplate.php',
    'configpath' => TESTDIR . '/plugins/data',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Exception.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Exception.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Exception.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Exception.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Phar.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Phar.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Phar.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Phar.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Phar/PHPArchive.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Phar/PHPArchive.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Phar/PHPArchive.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Phar/PHPArchive.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Tar.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Tar.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Tar.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Tar.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Xml.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Xml.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Xml.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Xml.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Zip.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/Creator/Zip.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/Creator/Zip.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/Creator/Zip.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/Commands.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/PackageFile/Commands.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/Commands.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/PackageFile/Commands.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/PackageFile/PEAR2SVN.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN/Filter.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/PackageFile/PEAR2SVN/Filter.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN/Filter.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/PackageFile/PEAR2SVN/Filter.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
  TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/v2.php' =>
  array (
    'role' => 'php',
    'name' => 'src/Pyrus/Developer/PackageFile/v2.php',
    'baseinstalldir' => 'PEAR2',
    'installed_as' => TESTDIR . '/plugins/php/PEAR2/Pyrus/Developer/PackageFile/v2.php',
    'relativepath' => 'PEAR2/Pyrus/Developer/PackageFile/v2.php',
    'configpath' => TESTDIR . '/plugins/php',
  ),
);

$expectedRes = array();
foreach($eq as $k => $v) {
    foreach (array('installed_as', 'relativepath', 'configpath') as $key) {
        $v[$key] = str_replace(array('/','\\'), DIRECTORY_SEPARATOR, $v[$key]);
    }
    $expectedRes[str_replace(array('/','\\'), DIRECTORY_SEPARATOR, $k)] = $v;
}

$test->assertEquals($expectedRes, \Pyrus\Config::current()->pluginregistry->info('PEAR2_Pyrus_Developer',
                                                                                 'pear2.php.net',
                                                                                 'installedfiles'), 'file installed');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===