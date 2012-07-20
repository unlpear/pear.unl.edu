--TEST--
\Pyrus\Config::loadConfigFile() good userfile with my_pear_path set
--FILE--
<?php
require __DIR__ . '/setup.php.inc';
set_include_path($testpath); // disable include_path cascading for simplicity
file_put_contents($testpath . '/blah', '<?xml version="1.0" ?>
<c>
 <my_pear_path>' . $testpath . '/hi/there</my_pear_path>
</c>');
try {
    tc::$test = $test;
    $a = new tc($testpath, $testpath . '/blah');
    $test->assertEquals(tc::$called, 1, 'called times');
    $test->assertEquals($testpath, $a->pearDir, 'peardir');
    $test->assertEquals($testpath . '/blah', $a->userFile, 'userfile');
} catch (Exception $e) {
    echo "failed with $e";
}
?>
===DONE===
--CLEAN--
<?php
include __DIR__ . '/../../clean.php.inc';
?>
--EXPECT--
===DONE===
