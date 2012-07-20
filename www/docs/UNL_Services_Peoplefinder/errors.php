<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Services_Peoplefinder | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Services_Peoplefinder">UNL_Services_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Services_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Services_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Services_Peoplefinder/li_UNL_Services_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#UNL_Services_PeoplefinderTest.php">UNL_Services_PeoplefinderTest.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_Services_PeoplefinderTest parent PHPUnit_Framework_TestCase not found<br />
<a name="example.php"></a>
<h1>example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - package default is already in category default, will now replace with category Services<br />
<a name="UNL_Services_PeoplefinderTest.php"></a>
<h1>UNL_Services_PeoplefinderTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "define PHPUnit_MAIN_METHOD", use another DocBlock to document the source element<br />
<strong>Warning on line 28</strong> - no @package tag was used in a DocBlock for class UNL_Services_PeoplefinderTest<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:39 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>