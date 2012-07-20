--TEST--
\Pyrus\Channel\RemotePackage paranoia settings
--SKIPIF--
<?php
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../Mocks/Internet/paranoid',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
class Logger implements Pyrus\LogInterface
{
    public $log = array();
    function log($level, $message)
    {
        if (!$level) $this->log[] = $message;
    }
}
$logger = new Logger;

$remote = \Pyrus\Config::current()->channelregistry['pear2.php.net']->remotepackage['P1'];
$fake = new Pyrus\PackageFile\v2;
$fakedep = $fake->dependencies['required']->package['pear2.php.net/P1'];

Pyrus\Installer::begin();
Pyrus\Installer::prepare(new Pyrus\Package('P1-1.0.0'));
Pyrus\Installer::commit();

Pyrus\Main::$paranoid = 1;
Pyrus\Main::$options['upgrade'] = true;
Pyrus\Logger::attach($logger);
$remote->figureOutBestVersion($fakedep);
$test->assertEquals('2.0.0', $remote->version['release'], 'paranoid 1');
Pyrus\Logger::detach($logger);
$test->assertEquals(array(), $logger->log, 'paranoid 1 log');
$logger->log = array(
);

// this allows us to test API of X.Y as well as X
Pyrus\Installer::begin();
Pyrus\Installer::prepare(new Pyrus\Package('P1-1.0.1'));
Pyrus\Installer::commit();

$remote = \Pyrus\Config::current()->channelregistry['pear2.php.net']->remotepackage['P1'];
Pyrus\Main::$paranoid = 2;
Pyrus\Logger::attach($logger);
$remote->figureOutBestVersion($fakedep);
$test->assertEquals('1.1.0', $remote->version['release'], 'paranoid 2');
Pyrus\Logger::detach($logger);
$test->assertEquals(array(
  0 => 'Skipping pear2.php.net/P1 version 2.0.0, API breaks backwards compatibility',
), $logger->log, 'paranoid 2 log');
$logger->log = array();

$remote = \Pyrus\Config::current()->channelregistry['pear2.php.net']->remotepackage['P1'];
Pyrus\Main::$paranoid = 3;
Pyrus\Logger::attach($logger);
$remote->figureOutBestVersion($fakedep);
$test->assertEquals('1.0.3', $remote->version['release'], 'paranoid 3');
Pyrus\Logger::detach($logger);
$test->assertEquals(array(
  0 => 'Skipping pear2.php.net/P1 version 2.0.0, API breaks backwards compatibility',
  1 => 'Skipping pear2.php.net/P1 version 1.1.0, API has added new features',
), $logger->log, 'paranoid 3 log');
$logger->log = array();

$remote = \Pyrus\Config::current()->channelregistry['pear2.php.net']->remotepackage['P1'];
Pyrus\Main::$paranoid = 5;
Pyrus\Logger::attach($logger);
$remote->figureOutBestVersion($fakedep);
$test->assertEquals('1.0.2', $remote->version['release'], 'paranoid 4');
Pyrus\Logger::detach($logger);
$test->assertEquals(array(
  0 => 'Skipping pear2.php.net/P1 version 2.0.0, API has changed',
  1 => 'Skipping pear2.php.net/P1 version 1.1.0, API has changed',
  2 => 'Skipping pear2.php.net/P1 version 1.0.3, API has changed',
), $logger->log, 'paranoid 4 log');

$chan = \Pyrus\Config::current()->channelregistry['pear2.php.net'];
unset($chan->protocols->rest['REST1.3']);
$remote = $chan->remotepackage['P1'];
$fake = new Pyrus\PackageFile\v2;
$fakedep = $fake->dependencies['required']->package['pear2.php.net/P1'];

Pyrus\Main::$paranoid = 2;
Pyrus\Main::$options['upgrade'] = true;
try {
    $remote->figureOutBestVersion($fakedep);
    throw new Exception('worked and should not');
} catch (\Pyrus\Channel\Exception $e) {
    $test->assertEquals('Channel pear2.php.net does not support a paranoia greater than 1', $e->getMessage(),
                        'error message');
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===