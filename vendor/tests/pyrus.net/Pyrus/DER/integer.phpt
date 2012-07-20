--TEST--
Pyrus DER: Integer
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$test->assertEquals('020100', bin2hex($der->integer(0)->serialize()),
                    '0');

$der = new \Pyrus\DER;
$test->assertEquals('02017f', bin2hex($der->integer(127)->serialize()),
                    '127');

$der = new \Pyrus\DER;
$test->assertEquals('02020080', bin2hex($der->integer(128)->serialize()),
                    '128');

$der = new \Pyrus\DER;
$test->assertEquals('02020100', bin2hex($der->integer(256)->serialize()),
                    '256');

$der = new \Pyrus\DER;
$test->assertEquals('020180', bin2hex($der->integer(-128)->serialize()),
                    '-128');

$der = new \Pyrus\DER;
$test->assertEquals('0202ff7f', bin2hex($der->integer(-129)->serialize()),
                    '-129');

$der = new \Pyrus\DER;
$test->assertEquals('02042d313239', bin2hex($der->integer('-129')->serialize()),
                    '-129 string');
?>
===DONE===
--EXPECT--
===DONE===