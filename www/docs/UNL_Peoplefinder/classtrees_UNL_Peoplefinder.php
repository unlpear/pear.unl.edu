<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_Peoplefinder</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder.php">UNL_Peoplefinder</a></li></ul>

<h2>Root class UNL_Peoplefinder_AdvancedFilter</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_AdvancedFilter.php">UNL_Peoplefinder_AdvancedFilter</a></li></ul>

<h2>Root class UNL_Peoplefinder_OUFilter</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_OUFilter.php">UNL_Peoplefinder_OUFilter</a></li></ul>

<h2>Root class UNL_Peoplefinder_Record</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></li></ul>

<h2>Root class UNL_Peoplefinder_Renderer_HTML</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php">UNL_Peoplefinder_Renderer_HTML</a></li></ul>

<h2>Root class UNL_Peoplefinder_Renderer_JSON</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_JSON.php">UNL_Peoplefinder_Renderer_JSON</a></li></ul>

<h2>Root class UNL_Peoplefinder_Renderer_Serialized</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_Serialized.php">UNL_Peoplefinder_Renderer_Serialized</a></li></ul>

<h2>Root class UNL_Peoplefinder_Renderer_vCard</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_vCard.php">UNL_Peoplefinder_Renderer_vCard</a></li></ul>

<h2>Root class UNL_Peoplefinder_StandardFilter</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_StandardFilter.php">UNL_Peoplefinder_StandardFilter</a></li></ul>

<h2>Root class UNL_Peoplefinder_TelephoneFilter</h2>
<ul>
<li><a href="UNL_Peoplefinder/UNL_Peoplefinder_TelephoneFilter.php">UNL_Peoplefinder_TelephoneFilter</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:48 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>