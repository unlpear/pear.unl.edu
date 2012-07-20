<?php
if (file_exists('config.inc.php')) {
    require_once 'config.inc.php';
} elseif (file_exists('channel.xml')) {
    require_once 'config.sample.php';
    $config = Pyrus\Config::singleton('/tmp');
    $config->cache_dir = '/tmp';
    $channel = new \Pyrus\ChannelFile('channel.xml');
} else {
    echo 'You must place this file in your channel server, or provide a config.inc.php file.';
    exit();
}

if (!isset($url)) {
    $url = 'http://'.$channel->name.'/';
}

// Set preferred state to devel, so pyrus can get info on all releases
\Pyrus\Config::current()->preferred_state = 'devel';

$options = $_GET + \Pyrus\SimpleChannelFrontend\Router::getRoute($url, $_SERVER['REQUEST_URI']);

$frontend = new Pyrus\SimpleChannelFrontend\Main($channel, $options);
$frontend->setURLBase($url);

$savant = new PEAR2\Templates\Savant\Turbo\Main();
$savant->setClassToTemplateMapper(new Pyrus\SimpleChannelFrontend\TemplateMapper);
$savant->setTemplatePath(array(dirname(__DIR__) . '/vendor/www/pyrus.net/Pyrus_SimpleChannelFrontend/templates/html', __DIR__ . '/templates'));
$savant->addGlobal('frontend', $frontend);

switch($frontend->options['format']) {
    case 'partial':
        \Pyrus\SimpleChannelFrontend\TemplateMapper::$output_template['PEAR2\\SimpleChannelFrontend\\Main'] = 'Main-partial';
        break;
    case 'rss':
        $savant->addTemplatePath(__DIR__.'/templates/'.$frontend->options['format']);
        break;
}


$savant->setEscape('htmlspecialchars');
$savant->addFilters(array($frontend, 'postRender'));
echo $savant->render($frontend);

