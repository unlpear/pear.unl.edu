<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_DWT">UNL_DWT</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_DWT/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_DWT API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_DWT/li_UNL_DWT.php');
$p->leftRandomPromo = '';
ob_start();
?>
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_DWT</h2>
<ul>
<li><a href="UNL_DWT/UNL_DWT.php">UNL_DWT</a><ul>
<li><a href="UNL_DWT/UNL_DWT_Generator.php">UNL_DWT_Generator</a></li></ul></li>
</ul>

<h2>Root class UNL_DWT_Region</h2>
<ul>
<li><a href="UNL_DWT/UNL_DWT_Region.php">UNL_DWT_Region</a></li></ul>

<h2>Root class UNL_DWT_Scanner</h2>
<ul>
<li><a href="UNL_DWT/UNL_DWT_Scanner.php">UNL_DWT_Scanner</a></li></ul>

<h2>Root class Exception</h2>
<ul>
<li><a href="UNL_DWT/UNL_DWT_Exception.php">UNL_DWT_Exception</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:36 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>