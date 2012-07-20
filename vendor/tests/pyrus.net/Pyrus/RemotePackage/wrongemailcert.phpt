--TEST--
\Pyrus\Channel\RemotePackage::download(), certificate is not releasing maintainer's email
--SKIPIF--
<?php
die('SKIP for now - broken test');
if (!extension_loaded('openssl')) die('SKIP openssl required');
?>
--FILE--
<?php
include __DIR__ . '/setup.php.inc';
require __DIR__ . '/../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/wrongemailcert', 'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';

$remote = new \Pyrus\Channel\RemotePackage(\Pyrus\Config::current()->channelregistry['pear2.php.net'], 'stable');
$remote = $remote['P1'];
$remote->version['release'] = '1.0.0';

try {
    $remote->download();
    throw new Exception('should fail and did not');
} catch (Pyrus\Package\Exception $e) {
    $test->assertEquals('Invalid abstract package ' .
                        'pear2.php.net/P1 - releasing maintainer\'s certificate ' .
                        'alternate name does not match the releaser\'s email address greg@chiaraquartet.net',
                        $e->getMessage(), 'message');
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../clean.php.inc';
?>
--EXPECT--
===DONE===
