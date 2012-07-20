<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | phpDocumentor Parser Errors and Warnings</title>";
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
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#advancedForm.php">advancedForm.php</a><br />
<a href="#BrowserTest.php">BrowserTest.php</a><br />
<a href="#config-sample.inc.php">config-sample.inc.php</a><br />
<a href="#config.inc.php">config.inc.php</a><br />
<a href="#index.php">index.php</a><br />
<a href="#JSON.php">JSON.php</a><br />
<a href="#OUFilter.php">OUFilter.php</a><br />
<a href="#Peoplefinder.php">Peoplefinder.php</a><br />
<a href="#PeoplefinderTest.php">PeoplefinderTest.php</a><br />
<a href="#Record.php">Record.php</a><br />
<a href="#Serialized.php">Serialized.php</a><br />
<a href="#service.php">service.php</a><br />
<a href="#StandardFilter.php">StandardFilter.php</a><br />
<a href="#standardForm.php">standardForm.php</a><br />
<a href="#TelephoneFilter.php">TelephoneFilter.php</a><br />
<a href="#vCard.php">vCard.php</a><br />
<a href="#XML.php">XML.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - 
duplicate define element "UNL_PEOPLEFINDER_URI" in file /Users/bbieber/Documents/workspace/peoplefinder/config.inc.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "DOCUMENT_ROOT" in file /Users/bbieber/Documents/workspace/peoplefinder/config.inc.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="AdvancedFilter.php"></a>
<h1>AdvancedFilter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - package default is already in category default, will now replace with category Default<br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_AdvancedFilter", use another DocBlock to document the file<br />
<a name="advancedForm.php"></a>
<h1>advancedForm.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/advancedForm.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="BrowserTest.php"></a>
<h1>BrowserTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 6</strong> - no @package tag was used in a DocBlock for class BrowserTest<br />
<strong>Warning on line 45</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/tests/BrowserTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="config-sample.inc.php"></a>
<h1>config-sample.inc.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/config-sample.inc.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="config.inc.php"></a>
<h1>config.inc.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 11</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/config.inc.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="index.php"></a>
<h1>index.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 187</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/index.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="JSON.php"></a>
<h1>JSON.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_Renderer_JSON", use another DocBlock to document the file<br />
<a name="OUFilter.php"></a>
<h1>OUFilter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_OUFilter", use another DocBlock to document the file<br />
<a name="Peoplefinder.php"></a>
<h1>Peoplefinder.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - package default is already in category Default, will now replace with category Services<br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "define UNL_PF_DISPLAY_LIMIT", use another DocBlock to document the source element<br />
<strong>Warning on line 31</strong> - package UNL_Peoplefinder is already in category Default, will now replace with category Services<br />
<a name="PeoplefinderTest.php"></a>
<h1>PeoplefinderTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class PeoplefinderTest<br />
<strong>Warning on line 150</strong> - Unknown tag "@expectedException" used<br />
<strong>Warning on line 231</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/tests/PeoplefinderTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Record.php"></a>
<h1>Record.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 12</strong> - package default is already in category Default, will now replace with category default<br />
<strong>Warning on line 13</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_Record", use another DocBlock to document the file<br />
<strong>Warning on line 13</strong> - package UNL_Peoplefinder is already in category Default, will now replace with category default<br />
<a name="Serialized.php"></a>
<h1>Serialized.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_Renderer_Serialized", use another DocBlock to document the file<br />
<a name="service.php"></a>
<h1>service.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 80</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/service.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="StandardFilter.php"></a>
<h1>StandardFilter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - package default is already in category default, will now replace with category Default<br />
<strong>Warning on line 22</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_StandardFilter", use another DocBlock to document the file<br />
<strong>Warning on line 22</strong> - package UNL_Peoplefinder is already in category default, will now replace with category Default<br />
<a name="standardForm.php"></a>
<h1>standardForm.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/standardForm.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="TelephoneFilter.php"></a>
<h1>TelephoneFilter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_TelephoneFilter", use another DocBlock to document the file<br />
<a name="vCard.php"></a>
<h1>vCard.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_Peoplefinder_Renderer_vCard", use another DocBlock to document the file<br />
<a name="XML.php"></a>
<h1>XML.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 2</strong> - no @package tag was used in a DocBlock for class UNL_Peoplefinder_Renderer_XML<br />
<strong>Warning on line 67</strong> - File "/Users/bbieber/Documents/workspace/peoplefinder/UNL/Peoplefinder/Renderer/XML.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:48 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>