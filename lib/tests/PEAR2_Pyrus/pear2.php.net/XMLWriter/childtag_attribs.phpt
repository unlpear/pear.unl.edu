--TEST--
Pyrus XMLWriter: child tag + attributes
--FILE--
<?php
require dirname(__FILE__) . '/setup.php.inc';
$write = new $xmlwriter(array(
  'a' =>
  array(
    'b' =>
    array(
      'attribs' =>
      array(
        'one' => 'two'
      )
    ),
  ),
));
$test->assertEquals('<?xml version="1.0" encoding="UTF-8"?>
<a>
 <b one="two"/>
</a>', (string) $write, 'test');
?>
===DONE===
--EXPECT--
===DONE===