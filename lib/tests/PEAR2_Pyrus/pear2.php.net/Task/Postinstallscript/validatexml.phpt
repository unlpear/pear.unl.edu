--TEST--
\pear2\Pyrus\Task\Postinstallscript::validateXml()
--FILE--
<?php
define('MYDIR', __DIR__);
include dirname(__DIR__) . '/setup.php.inc';
$xmltest = function($xml, $filexml, $message, $exception) use ($package, $test)
{
    try {
        \pear2\Pyrus\Task\Postinstallscript::validateXml($package, $xml, $filexml, 'filename');
        throw new Exception('should have failed');
    } catch (Exception $e) {
        $test->assertIsa($exception, $e, 'wrong exception class ' . $message);
        $test->assertEquals($message, $e->getMessage(), 'wrong message');
        return $e;
    }
};
$causetest = function($message, $severity, $exception, $index, $errs) use ($test)
{
    $errs = $errs->getPrevious();
    $test->assertIsa($exception, $errs->{$severity}[$index], 'right class');
    $test->assertEquals($message, $errs->{$severity}[$index]->getMessage(), 'right message');
};

file_put_contents(__DIR__ . '/testit/glooby', '<?php
class glooby_postinstall {
    function init2(){}
    function run2(){}
}
');

$test->assertTrue(\pear2\Pyrus\Task\Postinstallscript::validateXml($package, array('tasks:paramgroup' => array(
               array('tasks:id' => 'foo',
                     'tasks:param' => array(
                            'tasks:name' => 'bar',
                            'tasks:prompt' => 'h',
                            'tasks:type' => 'string',
                        )
                     ),
               array('tasks:id' => 'hi'),
               array('tasks:id' => 'another',
                     'tasks:param' => array(
                        'tasks:name' => 'ok',
                        'tasks:prompt' => 'hi',
                        'tasks:type' => 'string',
                            )))), array('role' => 'php', 'name' => 'glooby'), 'filename'), 'success 1');

$test->assertTrue(\pear2\Pyrus\Task\Postinstallscript::validateXml($package, array(), array('role' => 'php', 'name' => 'glooby'), 'filename'), 'success 2');


?>
===DONE===
--CLEAN--
<?php
$dir = __DIR__ . '/testit';
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===