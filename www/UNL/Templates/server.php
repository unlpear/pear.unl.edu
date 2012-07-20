<?php

$version = '1.3.0RC2';

// Find the directory where the tpl cache is
switch (true) {
    case file_exists(__DIR__ . '/UNL_Templates-' . $version . '.tgz'):
        $phar = 'phar://' . __DIR__ . '/UNL_Templates-' . $version . '.tgz'
                 . '/UNL_Templates-'. $version ;
        $tpl_dir = $phar . '/data/pear.unl.edu/UNL_Templates/tpl_cache';
        set_include_path($phar . '/php');
    break;
    default:
        $tpl_dir = dirname(__FILE__).'/data/tpl_cache';
}

$version = 3;
$default_template = 'Fixed.tpl';

if (isset($_GET['version'])) {
    $version = $_GET['version'];
    if (!is_numeric($version)) {
        throw new Exception('Invalid version number passed.');
    }
}

if (isset($_GET['template'])
    && strpos($_GET['template'],'/') === false) {
    if (isset($_GET['full'])) {
        require_once 'UNL/Templates.php';
        UNL_Templates::$options['version'] = $version;
        $p = UNL_Templates::factory(str_replace('.tpl', '', $_GET['template']));
        $p->maincontentarea = '';
        $p->leftRandomPromo = '';
        $p->footercontent   = '';
        $p->navlinks        = '';
        $p->breadcrumbs     = '';
        $p->titlegraphic    = '';
        $p->doctitle        = '<title></title>';
        echo $p->toHtml();
    } else {
        // Replace 3.1 with 3x1
        $version = str_replace('.', 'x', $version);
        $dwt = $tpl_dir.'/Version'.$version.'/'.$_GET['template'];
        if (file_exists($dwt)) {
            echo file_get_contents($dwt);
        } elseif (file_exists($tpl_dir.'/Version'.$version.'/'.$default_template)) {
            echo file_get_contents($tpl_dir.'/Version'.$version.'/'.$default_template);
        } else {
            header('HTTP/1.0 404 Not Found');
            echo 'Sorry could not load the template files!';
        }
    }
}
