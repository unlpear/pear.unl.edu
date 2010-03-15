<?php
ini_set('display_errors', true);

require_once dirname(__DIR__).'/lib/php/pear2/Autoload.php';

/**
 * An example of setting up the channel object.
 */
$channel = new \pear2\Pyrus\ChannelFile(__DIR__ . '/channel.xml');

pear2\SimpleChannelFrontend\Main::$url = 'http://localhost/workspace/pear.unl.edu/www/';
