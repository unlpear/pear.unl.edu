<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Templates">UNL_Templates</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Templates/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Templates API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Templates/li_UNL_Templates.php');
$p->leftRandomPromo = '';
ob_start();
?>
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root interface UNL_Templates_CachingService</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></li></ul>

<h2>Root interface UNL_Templates_Version</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_Version.php">UNL_Templates_Version</a></li></ul>

<h2>Root class UNL_Templates_CachingService_CacheLite</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php">UNL_Templates_CachingService_CacheLite</a></li></ul>

<h2>Root class UNL_Templates_Version2</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_Version2.php">UNL_Templates_Version2</a></li></ul>

<h2>Root class UNL_Templates_Version3</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_Version3.php">UNL_Templates_Version3</a></li></ul>

<h2>Root class UNL_DWT</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates.php">UNL_Templates</a><ul>
<li><a href="UNL_Templates/UNL_Templates_Version2_Document.php">UNL_Templates_Version2_Document</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php">UNL_Templates_Version2_Fixed</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php">UNL_Templates_Version2_Liquid</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Popup.php">UNL_Templates_Version2_Popup</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Secure.php">UNL_Templates_Version2_Secure</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php">UNL_Templates_Version2_Unlaffiliate</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php">UNL_Templates_Version2_Unlframework</a></li><li><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php">UNL_Templates_Version2_Unlstandardtemplate</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php">UNL_Templates_Version3_Absolute</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Document.php">UNL_Templates_Version3_Document</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php">UNL_Templates_Version3_Fixed</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php">UNL_Templates_Version3_Liquid</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Popup.php">UNL_Templates_Version3_Popup</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Secure.php">UNL_Templates_Version3_Secure</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php">UNL_Templates_Version3_Shared_column_left</a></li><li><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php">UNL_Templates_Version3_Shared_column_right</a></li></ul></li>
</ul>

<h2>Root class UNL_DWT_Scanner</h2>
<ul>
<li><a href="UNL_Templates/UNL_Templates_Scanner.php">UNL_Templates_Scanner</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:34 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>