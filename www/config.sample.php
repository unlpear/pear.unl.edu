<?php
/**
 * This is a sample configuration file for Pyrus_SimpleChannelFrontend
 * 
 * Be sure to set up the $channel object to the appropriate channel.
 */
ini_set('display_errors', true);
error_reporting(E_ALL);

require_once __DIR__ . '/../../Pyrus/autoload.php';
PEAR2\Autoload::initialize(__DIR__.'/../../Pyrus_SimpleChannelFrontend/src');
PEAR2\Autoload::initialize(__DIR__.'/../src');
PEAR2\Autoload::initialize(__DIR__.'/../vendor/php');
PEAR2\Autoload::initialize('/Users/bbieber/workspace/PEAR2_Templates_Savant/src');
PEAR2\Autoload::initialize('/Users/bbieber/workspace/PEAR2_Templates_Savant_Turbo/src');
PEAR2\Autoload::initialize('/Users/bbieber/workspace/PEAR2_Cache_lite/src');

$config = Pyrus\Config::singleton('/tmp');
$config->cache_dir = '/tmp';

/**
 * For a remote channel use this:
 * $channel = new \Pyrus\ChannelFile('http://pear.php.net/', false, true);
 * 
 * Use this format if you want to run on a local channel:
 * $channel = new \Pyrus\ChannelFile(__DIR__ . '/channel.xml');
 */
$channel = new \Pyrus\ChannelFile(__DIR__ . '/channel.xml');

/**
 * If you are viewing the channel from a different URL than the channel name,
 * customize the URL to the frontend.
 * 
 * $url = '/workspace/Pyrus_SimpleChannelFrontend/www/';
 */
$url = '/workspace/pear.unl.edu/www/';
