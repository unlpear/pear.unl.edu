--TEST--
\Pyrus\Installer::prepare(), dep already installed, not upgrading
--FILE--
<?php
/**
 * P1-1.1.0RC1 beta -> P2
 *
 * P2-1.2.0a1 alpha
 * P2-1.1.0RC3 beta
 * P2-1.0.0
 *
 * P3-1.1.0RC1 beta
 * P3-1.1.0
 * P3-1.0.0         -> P2 <= 1.0.0
 *
 * Install of P1-beta and P3-1.0.0 should install
 *
 *  - P1-1.1.0RC1
 *  - P2-1.0.0 (already installed)
 *  - P3-1.1.0
 */include __DIR__ . '/../setup.php.inc';
require __DIR__ . '/../../Mocks/Internet.php';

Internet::addDirectory(__DIR__ . '/../../Mocks/Internet/install.prepare.explicitstate',
                       'http://pear2.php.net/');
\Pyrus\Main::$downloadClass = 'Internet';
class b extends \Pyrus\Installer
{
    static $installPackages = array();
}

// first, install P2 1.0.0 in the registry
$a = new \Pyrus\PackageFile(__DIR__ .
                                '/../../Mocks/Internet/install.prepare.explicitstate/rest/r/p2/package.1.0.0.xml');
\Pyrus\Config::current()->registry->package[] = $a->info;

b::begin();
b::prepare(new \Pyrus\Package('pear2/P1-beta'));
b::prepare(new \Pyrus\Package('pear2/P3-1.0.0'));
b::preCommitDependencyResolve();
$test->assertEquals(2, count(b::$installPackages), '2 packages should be installed');
$pnames = array();
foreach (b::$installPackages as $package) {
    $pnames[] = $package->name;
    switch ($package->name) {
        case 'P1' :
            $test->assertEquals('1.1.0RC1', $package->version['release'], 'verify P1-1.1.0RC1');
            break;
        case 'P3' :
            $test->assertEquals('1.0.0', $package->version['release'], 'verify P3-1.0.0');
            break;
        default:
            $test->assertEquals(false, $package->name, 'wrong package downloaded');
    }
}
sort($pnames);
$test->assertEquals(array('P1', 'P3'), $pnames, 'correct packages');
b::rollback();
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===