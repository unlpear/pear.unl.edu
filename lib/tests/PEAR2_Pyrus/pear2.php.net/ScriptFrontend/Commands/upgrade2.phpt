--TEST--
\pear2\Pyrus\ScriptFrontend\Commands::upgrade(), upgrade of dependency
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'testit')) {
    $dir = __DIR__ . '/testit';
    include __DIR__ . '/../../clean.php.inc';
}
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'testit');
set_include_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'testit');
$c = \pear2\Pyrus\Config::singleton(__DIR__.'/testit', __DIR__ . '/testit/plugins/pearconfig.xml');
$c->bin_dir = __DIR__ . '/testit/bin';
restore_include_path();
$c->saveConfig();

require __DIR__ . '/../../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../../Mocks/Internet/install.prepare.explicitstate',
                       'http://pear2.php.net/');
\pear2\Pyrus\Main::$downloadClass = 'Internet';
\pear2\Pyrus\Config::current()->preferred_state = 'beta';

\pear2\Pyrus\Installer::begin();
\pear2\Pyrus\Installer::prepare(new \pear2\Pyrus\Package(__DIR__ .
                                '/../../Mocks/Internet/install.prepare.explicitstate/get/P2-1.0.0.tar'));
\pear2\Pyrus\Installer::commit();

$test->assertEquals(true, isset(\pear2\Pyrus\Config::current()->registry->package['pear2.php.net/P2']),
    'ensure setup install of P2 worked');

ob_start();
$cli = new \pear2\Pyrus\ScriptFrontend\Commands(true);
$cli->run($args = array (__DIR__ . '/testit', 'upgrade', __DIR__ .
                                '/../../Mocks/Internet/install.prepare.explicitstate/get/P1-1.1.0RC1.tar'));

$contents = ob_get_contents();
ob_end_clean();
$test->assertEquals('Using PEAR installation found at ' . __DIR__. DIRECTORY_SEPARATOR . 'testit' . "\n"
                    . 'Installed pear2.php.net/P1-1.1.0RC1' . "\n"
                    . 'Installed pear2.php.net/P2-1.1.0RC3' . "\n",
                    $contents,
                    'list packages');

$test->assertFileExists(__DIR__ . '/testit/php/glooby2', 'glooby2');
$test->assertEquals('hi',
                    file_get_contents(__DIR__ . '/testit/php/glooby2'), 'files match');
?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===