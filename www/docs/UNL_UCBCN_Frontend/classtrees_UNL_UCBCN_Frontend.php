<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN_Frontend">UNL_UCBCN_Frontend</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN_Frontend/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN_Frontend API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN_Frontend/li_UNL_UCBCN_Frontend.php');
$p->leftRandomPromo = '';
ob_start();
?>
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_UCBCN_Frontend_AllTests</h2>
<ul>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_AllTests.php">UNL_UCBCN_Frontend_AllTests</a></li></ul>

<h2>Root class UNL_UCBCN_Frontend_NoEvents</h2>
<ul>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_NoEvents.php">UNL_UCBCN_Frontend_NoEvents</a></li></ul>

<h2>Root class UNL_UCBCN_Frontend_setup_postinstall</h2>
<ul>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php">UNL_UCBCN_Frontend_setup_postinstall</a></li></ul>

<h2>Root class UNL_UCBCN</h2>
<ul>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php">UNL_UCBCN_Frontend</a> (implements )<ul>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php">UNL_UCBCN_Frontend_Search</a></li></ul></li>
<li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php">UNL_UCBCN_Frontend_Day</a></li><li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php">UNL_UCBCN_Frontend_Month</a></li><li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php">UNL_UCBCN_Frontend_MonthWidget</a></li><li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php">UNL_UCBCN_Frontend_Upcoming</a></li><li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php">UNL_UCBCN_Frontend_Week</a></li><li><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php">UNL_UCBCN_Frontend_Year</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>