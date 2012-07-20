--TEST--
Pyrus XMLParser: child tag
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
$res = $parser->parseString('<?xml version="1.0" ?><a><b/></a>');
$test->assertEquals(array(
  'a' =>
  array(
    'b' => '',
  ),
), $res, 'test');
?>
===DONE===
--EXPECT--
===DONE===