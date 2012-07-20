<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common">UNL_Common</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common/li_UNL_Common.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#City.php">City.php</a><br />
<a href="#Common.php">Common.php</a><br />
<a href="#East.php">East.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#UNL_Common_BuildingTest.php">UNL_Common_BuildingTest.php</a><br />
<a href="#UNL_Common_Building_CityTest.php">UNL_Common_Building_CityTest.php</a><br />
<a href="#UNL_Common_Building_EastTest.php">UNL_Common_Building_EastTest.php</a><br />
<a href="#UNL_Common_CollegesTest.php">UNL_Common_CollegesTest.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_Building_EastTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_CollegesTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_BuildingTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="Building.php"></a>
<h1>Building.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 8</strong> - Page-level DocBlock precedes "require_once 'UNL/Common/Building.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 8</strong> - Page-level DocBlock precedes "require_once 'UNL/Common/Building/City.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 8</strong> - Unknown tag "@created" used<br />
<a name="City.php"></a>
<h1>City.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once dirname(__FILE__).'/../../Common.php'", use another DocBlock to document the source element<br />
<a name="Common.php"></a>
<h1>Common.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 3</strong> - no @package tag was used in a DocBlock for class UNL_Common<br />
<strong>Warning on line 50</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/Common.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="East.php"></a>
<h1>East.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once dirname(__FILE__).'/../../Common.php'", use another DocBlock to document the source element<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 67</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UNL_Common_BuildingTest.php"></a>
<h1>UNL_Common_BuildingTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_Common_BuildingTest<br />
<strong>Warning on line 80</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_BuildingTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UNL_Common_Building_CityTest.php"></a>
<h1>UNL_Common_Building_CityTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_Common_Building_CityTest<br />
<strong>Warning on line 52</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_Building_CityTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UNL_Common_Building_EastTest.php"></a>
<h1>UNL_Common_Building_EastTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_Common_Building_EastTest<br />
<strong>Warning on line 52</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_Building_EastTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UNL_Common_CollegesTest.php"></a>
<h1>UNL_Common_CollegesTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_Common_CollegesTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common/tests/UNL_Common_CollegesTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>