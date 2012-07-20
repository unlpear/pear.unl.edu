<?php

require_once 'UNL/Templates.php';
require_once '../config.inc.php';

UNL_Templates::$options['version'] = 3;
$p = UNL_Templates::factory('Fixed');
$p->doctitle = '<title>UNL | pear.unl.edu | API Documentation</title>';
$p->titlegraphic = '<h1>pear.unl.edu</h1><h2>Open Source PHP Development at UNL</h2>';
$p->maincontentarea = '<h1>Generated API Documentation for UNL PEAR Packages</h1>';
$p->leftRandomPromo = '';
$p->breadcrumbs = '
<ul>
	<li class="first"><a href="http://www.unl.edu/">UNL</a></li>
	<li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
	<li>API Documentation</li>
</ul>';
//$p->navlinks = getNavMenu();
$dirs = scandir(dirname(__FILE__));

$p->maincontentarea .= '<ul>';
foreach ($dirs as $dir) {
	if (substr($dir, 0, 1) != '.'
		&& $dir != '_notes'
		&& is_dir($dir)) {
		$p->maincontentarea .= '<li><a href="http://pear.unl.edu/docs/'.$dir.'">'.$dir.'</a></li>';
	}
}
$p->maincontentarea .= '</ul>';

echo $p->toHtml();
