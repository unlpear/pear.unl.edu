--TEST--
\Pyrus\Task\Replace::startSession()
--FILE--
<?php
include dirname(__DIR__) . '/setup.php.inc';

$taskxml = array('attribs' =>
              array('name' => 'foo.php', 'role' => 'src'),
'tasks:replace' => array(
                array('attribs' => array('from' => '@DIR@', 'to' => 'DIRECTORY_SEPARATOR', 'type' => 'php-const')),
                array('attribs' => array('from' => '@data_dir@', 'to' => 'data_dir', 'type' => 'pear-config')),
                array('attribs' => array('from' => '@version@', 'to' => 'version', 'type' => 'package-info')),
                        ));

file_put_contents(TESTDIR . '/foo.php', "@DIR@\n@data_dir@\n@version@");

$iterator = new \Pyrus\Package\Creator\TaskIterator($taskxml, $package, \Pyrus\Task\Common::INSTALL, null);

$fp = fopen(TESTDIR . '/foo.php', 'rb+');
$runcount = 0;
foreach ($iterator as $task) {
    ++$runcount;
    $task->startSession($fp, 'foo.php');
    rewind($fp);
}
$test->assertEquals(1, $runcount, 'Iterator did not run replace install');
$contents = stream_get_contents($fp);
$result = DIRECTORY_SEPARATOR . "\n" . \Pyrus\Config::current()->data_dir . "\n" .$package->version['release'];
$test->assertEquals($result, $contents, 'contents differ install');
fclose($fp);

file_put_contents(TESTDIR . '/foo.php', "@DIR@\n@data_dir@\n@version@");

$iterator = new \Pyrus\Package\Creator\TaskIterator($taskxml, $package, \Pyrus\Task\Common::PACKAGE, null);

$fp = fopen(TESTDIR . '/foo.php', 'rb+');
$runcount = 0;
foreach ($iterator as $task) {
    ++$runcount;
    $task->startSession($fp, 'foo.php');
    rewind($fp);
}
$test->assertEquals(1, $runcount, 'Iterator did not run replace packaging');
$contents = stream_get_contents($fp);
$result = "@DIR@\n@data_dir@\n" .$package->version['release'];
$test->assertEquals($result, $contents, 'contents differ packaging');
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===