<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | phpDocumentor Parser Errors and Warnings</title>";
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
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#Day.php">Day.php</a><br />
<a href="#Error.tpl.php">Error.tpl.php</a><br />
<a href="#EventInstance.tpl.php">EventInstance.tpl.php</a><br />
<a href="#EventInstance_icalendar.tpl.php">EventInstance_icalendar.tpl.php</a><br />
<a href="#EventInstance_rss.tpl.php">EventInstance_rss.tpl.php</a><br />
<a href="#EventInstance_xml.tpl.php">EventInstance_xml.tpl.php</a><br />
<a href="#EventListing.tpl.php">EventListing.tpl.php</a><br />
<a href="#EventListing_icalendar.tpl.php">EventListing_icalendar.tpl.php</a><br />
<a href="#EventListing_month.tpl.php">EventListing_month.tpl.php</a><br />
<a href="#Frontend.php">Frontend.php</a><br />
<a href="#Frontend.tpl.php">Frontend.tpl.php</a><br />
<a href="#FrontendTest.php">FrontendTest.php</a><br />
<a href="#Frontend_Day.tpl.php">Frontend_Day.tpl.php</a><br />
<a href="#Frontend_Day_icalendar.tpl.php">Frontend_Day_icalendar.tpl.php</a><br />
<a href="#Frontend_Day_monthday.tpl.php">Frontend_Day_monthday.tpl.php</a><br />
<a href="#Frontend_Day_rss.tpl.php">Frontend_Day_rss.tpl.php</a><br />
<a href="#Frontend_Day_xml.tpl.php">Frontend_Day_xml.tpl.php</a><br />
<a href="#Frontend_hcalendar.tpl.php">Frontend_hcalendar.tpl.php</a><br />
<a href="#Frontend_icalendar.tpl.php">Frontend_icalendar.tpl.php</a><br />
<a href="#Frontend_Month.tpl.php">Frontend_Month.tpl.php</a><br />
<a href="#Frontend_MonthWidget.tpl.php">Frontend_MonthWidget.tpl.php</a><br />
<a href="#Frontend_NoEvents.tpl.php">Frontend_NoEvents.tpl.php</a><br />
<a href="#Frontend_NoEvents_icalendar.tpl.php">Frontend_NoEvents_icalendar.tpl.php</a><br />
<a href="#Frontend_rss.tpl.php">Frontend_rss.tpl.php</a><br />
<a href="#Frontend_Search.tpl.php">Frontend_Search.tpl.php</a><br />
<a href="#Frontend_Upcoming.tpl.php">Frontend_Upcoming.tpl.php</a><br />
<a href="#Frontend_Week.tpl.php">Frontend_Week.tpl.php</a><br />
<a href="#Frontend_xml.tpl.php">Frontend_xml.tpl.php</a><br />
<a href="#Frontend_Year.tpl.php">Frontend_Year.tpl.php</a><br />
<a href="#index.php">index.php</a><br />
<a href="#Location.tpl.php">Location.tpl.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#Month.php">Month.php</a><br />
<a href="#Search.php">Search.php</a><br />
<a href="#Upcoming.php">Upcoming.php</a><br />
<a href="#URIValidationTest.php">URIValidationTest.php</a><br />
<a href="#ValidationSuite.php">ValidationSuite.php</a><br />
<a href="#Week.php">Week.php</a><br />
<a href="#Year.php">Year.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_Day parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_Year parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_Month parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_MonthWidget parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_Upcoming parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend_Week parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Frontend parent UNL_UCBCN not found<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/tests/URIValidationTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/tests/ValidationSuite.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="AllTests.php"></a>
<h1>AllTests.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 11</strong> - package default is already in category default, will now replace with category Events<br />
<strong>Warning on line 12</strong> - Page-level DocBlock precedes "define PHPUnit_MAIN_METHOD", use another DocBlock to document the source element<br />
<strong>Warning on line 23</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Frontend_AllTests<br />
<a name="Day.php"></a>
<h1>Day.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Frontend.php'", use another DocBlock to document the source element<br />
<a name="Error.tpl.php"></a>
<h1>Error.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 1</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Error.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventInstance.tpl.php"></a>
<h1>EventInstance.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 111</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventInstance.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventInstance_icalendar.tpl.php"></a>
<h1>EventInstance_icalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 41</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventInstance_icalendar.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventInstance_rss.tpl.php"></a>
<h1>EventInstance_rss.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 38</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventInstance_rss.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventInstance_xml.tpl.php"></a>
<h1>EventInstance_xml.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 238</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventInstance_xml.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventListing.tpl.php"></a>
<h1>EventListing.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 82</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventListing.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventListing_icalendar.tpl.php"></a>
<h1>EventListing_icalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - package default is already in category Events, will now replace with category default<br />
<a name="EventListing_month.tpl.php"></a>
<h1>EventListing_month.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 28</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/EventListing_month.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend.tpl.php"></a>
<h1>Frontend.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once $GLOBALS['unl_template_dependents'].'/templatesharedcode/includes/browsersniffers/ie.html'", use another DocBlock to document the source element<br />
<strong>Warning on line 42</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/vanilla/Frontend.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 44</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/mobile/Frontend.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 189</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="FrontendTest.php"></a>
<h1>FrontendTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_FrontendTest<br />
<strong>Warning on line 241</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/tests/UNL/UCBCN/FrontendTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Day.tpl.php"></a>
<h1>Frontend_Day.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 25</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Day.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Day_icalendar.tpl.php"></a>
<h1>Frontend_Day_icalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Day_icalendar.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Day_monthday.tpl.php"></a>
<h1>Frontend_Day_monthday.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 4</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Day_monthday.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Day_rss.tpl.php"></a>
<h1>Frontend_Day_rss.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Day_rss.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Day_xml.tpl.php"></a>
<h1>Frontend_Day_xml.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Day_xml.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_hcalendar.tpl.php"></a>
<h1>Frontend_hcalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_hcalendar.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_icalendar.tpl.php"></a>
<h1>Frontend_icalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 60</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_icalendar.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Month.tpl.php"></a>
<h1>Frontend_Month.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 38</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Month.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_MonthWidget.tpl.php"></a>
<h1>Frontend_MonthWidget.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_MonthWidget.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_NoEvents.tpl.php"></a>
<h1>Frontend_NoEvents.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 2</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_NoEvents.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_NoEvents_icalendar.tpl.php"></a>
<h1>Frontend_NoEvents_icalendar.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 3</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_NoEvents_icalendar.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_rss.tpl.php"></a>
<h1>Frontend_rss.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_rss.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Search.tpl.php"></a>
<h1>Frontend_Search.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 19</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Search.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Upcoming.tpl.php"></a>
<h1>Frontend_Upcoming.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 6</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Upcoming.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Week.tpl.php"></a>
<h1>Frontend_Week.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 6</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Week.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_xml.tpl.php"></a>
<h1>Frontend_xml.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_xml.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Frontend_Year.tpl.php"></a>
<h1>Frontend_Year.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 48</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Frontend_Year.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="index.php"></a>
<h1>index.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - package default is already in category default, will now replace with category Events<br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Autoload.php'", use another DocBlock to document the source element<br />
<a name="Location.tpl.php"></a>
<h1>Location.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 29</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/templates/default/Location.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 22</strong> - Page-level DocBlock precedes "require_once 'PEAR/PackageFileManager2.php'", use another DocBlock to document the source element<br />
<a name="Month.php"></a>
<h1>Month.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Frontend.php'", use another DocBlock to document the source element<br />
<a name="Search.php"></a>
<h1>Search.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Frontend.php'", use another DocBlock to document the source element<br />
<a name="Upcoming.php"></a>
<h1>Upcoming.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Frontend.php'", use another DocBlock to document the source element<br />
<a name="URIValidationTest.php"></a>
<h1>URIValidationTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - no @package tag was used in a DocBlock for class URIValidationTest<br />
<strong>Warning on line 79</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/tests/URIValidationTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="ValidationSuite.php"></a>
<h1>ValidationSuite.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - no @package tag was used in a DocBlock for class ValidationSuite<br />
<strong>Warning on line 64</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Frontend/tests/ValidationSuite.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Week.php"></a>
<h1>Week.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Frontend.php'", use another DocBlock to document the source element<br />
<a name="Year.php"></a>
<h1>Year.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="Frontend.php"></a>
<h1>Frontend.php</h1>
<h2>Errors:</h2><br />
<strong>Error on line 577</strong> - "@return" tag was used without any parameters, illegal<br />
<strong>Error on line 594</strong> - "@return" tag was used without any parameters, illegal<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>