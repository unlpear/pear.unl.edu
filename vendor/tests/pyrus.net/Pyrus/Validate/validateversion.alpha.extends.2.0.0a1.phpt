--TEST--
Validate::validateVersion(), failure, alpha, version = 2.0.0a1
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$pf = new \Pyrus\PackageFile\v2;
$pf->name = 'testing2';
$pf->extends = 'testing';
$pf->version['release'] = '2.0.0a1';
$pf->stability['release'] = 'alpha';
$pf->summary = 'hi';
$pf->description = 'hi';
$pf->date = '2009-05-10';

$chan = new \Pyrus\ChannelFile\v1;
$chan->setValidationPackage('notfoo', '1.2');
$validate = new \Pyrus\Validate;
$validate->setPackageFile($pf);
$validate->setChannel($chan);

$test->assertEquals(true, $validate->validate(), 'test 1');
$test->assertEquals(0, count($validate->getFailures()), 'failure count');
?>
===DONE===
--EXPECT--
===DONE===