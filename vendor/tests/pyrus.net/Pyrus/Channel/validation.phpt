--TEST--
\Pyrus\Channel Validation tests
--FILE--
<?php
require __DIR__ . '/setup.php.inc';

$channel_array = array(
                    'attribs' => array('version'=>'1.0', 'xmlns'=>'http://pear.php.net/channel-1.0'),
                    'name'    => '__uri',
                    'summary' => 'URI Channel');
$channel_array['servers'] = array('primary'=>array('rest'=>array('baseurl'=>array('attribs'=>array('type'=>'REST1.0'),
                                                                                  'http://foo.example.com/rest/'))));

$channelobject = new \Pyrus\ChannelFile\v1($channel_array);
$channel = new \Pyrus\Channel($channelobject);
$test->assertEquals(array('attribs' => array('version' => 'default'),
                          '_content' => 'PEAR_Validate'), $channel->getValidationPackage(), 'Get default validation package');

$channel->setValidationPackage('PEAR_Validator_PECL', '1.0');

$test->assertEquals(array('_content' => 'PEAR_Validator_PECL',
                          'attribs' => array('version' => '1.0')), $channel->getValidationPackage(), 'Set custom validation package');

$test->assertEquals(true, $channel->getValidationObject() instanceof \Pyrus\Validator\PECL, 'getValidationObject returns what is set');
$test->assertEquals(true, $channel->getValidationObject('PEAR_Validator_PECL') instanceof \Pyrus\Validate, 'getValidationObject Channel validation packages are all checked by \Pyrus\Validate');

$channel->setValidationPackage('PEAR2_Bogus_Validation', '6.0');
try {
    $channel->getValidationObject();
    throw new Exception('succeeded and should fail');
} catch (\Pyrus\ChannelFile\Exception $e) {
    $test->assertEquals($e->getMessage(), 'Validation object PEAR2_Bogus_Validation cannot be instantiated', 'bogus');
}

$channel->setValidationPackage(null, '1.0');
$test->assertEquals(true, $channel->getValidationObject() instanceof \Pyrus\Validate, 'setValidationPackage resets to default');


?>
===DONE===
--EXPECT--
===DONE===