--TEST--
Validate::validateVersion(), failure, alpha, version = 1.0.1
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$pf = new \pear2\Pyrus\PackageFile\v2;
$pf->name = 'testing';
$pf->version['release'] = '1.0.1';
$pf->stability['release'] = 'alpha';
$pf->summary = 'hi';
$pf->description = 'hi';
$pf->date = '2009-05-10';

$chan = new \pear2\Pyrus\ChannelFile\v1;
$chan->setValidationPackage('notfoo', '1.2');
$validate = new \pear2\Pyrus\Validate;
$validate->setPackageFile($pf);
$validate->setChannel($chan);

$test->assertEquals(true, $validate->validate(), 'test 1');
$test->assertEquals(1, count($validate->getFailures()), 'failure count');
$test->assertEquals('Channel validator error: field "version" - bugfix versions (1.3.x where x > 0) probably should ' .
                    'not be alpha or beta',
                    $validate->getFailures()->E_WARNING[0]->getMessage(), 'failure message');
?>
===DONE===
--EXPECT--
===DONE===