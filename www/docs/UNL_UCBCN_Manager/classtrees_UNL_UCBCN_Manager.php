<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN_Manager">UNL_UCBCN_Manager</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN_Manager/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN_Manager API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN_Manager/li_UNL_UCBCN_Manager.php');
$p->leftRandomPromo = '';
ob_start();
?>
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_UCBCN_Manager_AllTests</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_AllTests.php">UNL_UCBCN_Manager_AllTests</a></li></ul>

<h2>Root class UNL_UCBCN_Manager_EventForm</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php">UNL_UCBCN_Manager_EventForm</a></li></ul>

<h2>Root class UNL_UCBCN_Manager_Login</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php">UNL_UCBCN_Manager_Login</a></li></ul>

<h2>Root class UNL_UCBCN_Manager_Plugin</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php">UNL_UCBCN_Manager_Plugin</a></li></ul>

<h2>Root class UNL_UCBCN_Manager_Recommend</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php">UNL_UCBCN_Manager_Recommend</a></li></ul>

<h2>Root class UNL_UCBCN_Manager_setup_postinstall</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php">UNL_UCBCN_Manager_setup_postinstall</a></li></ul>

<h2>Root class HTML_QuickForm_SubForm</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_SubForm.php">UNL_UCBCN_Manager_SubForm</a></li></ul>

<h2>Root class UNL_UCBCN</h2>
<ul>
<li><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:45 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>