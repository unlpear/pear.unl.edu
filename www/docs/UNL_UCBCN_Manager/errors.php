<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | phpDocumentor Parser Errors and Warnings</title>";
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
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#CreateEventTest.php">CreateEventTest.php</a><br />
<a href="#Error.tpl.php">Error.tpl.php</a><br />
<a href="#EventActionsTest.php">EventActionsTest.php</a><br />
<a href="#Eventdatetime.tpl.php">Eventdatetime.tpl.php</a><br />
<a href="#EventForm.php">EventForm.php</a><br />
<a href="#EventListing.tpl.php">EventListing.tpl.php</a><br />
<a href="#EventListing_search.tpl.php">EventListing_search.tpl.php</a><br />
<a href="#FormBuilder.php">FormBuilder.php</a><br />
<a href="#FormBuilder_Driver.php">FormBuilder_Driver.php</a><br />
<a href="#idexport_makepackage.php">idexport_makepackage.php</a><br />
<a href="#InDesignExport.php">InDesignExport.php</a><br />
<a href="#index.php">index.php</a><br />
<a href="#jscalendar.php">jscalendar.php</a><br />
<a href="#Login.php">Login.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#Manager.php">Manager.php</a><br />
<a href="#Manager.tpl.php">Manager.tpl.php</a><br />
<a href="#ManagerTest.php">ManagerTest.php</a><br />
<a href="#Manager_Login.tpl.php">Manager_Login.tpl.php</a><br />
<a href="#Manager_Recommend.tpl.php">Manager_Recommend.tpl.php</a><br />
<a href="#Manager_setup.php">Manager_setup.php</a><br />
<a href="#Plugin.php">Plugin.php</a><br />
<a href="#Recommend.php">Recommend.php</a><br />
<a href="#SubForm.php">SubForm.php</a><br />
<a href="#Tableless.php">Tableless.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_UCBCN_Manager parent UNL_UCBCN not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Manager_SubForm parent HTML_QuickForm_SubForm not found<br />
<a name="AllTests.php"></a>
<h1>AllTests.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 12</strong> - Page-level DocBlock precedes "define PHPUnit_MAIN_METHOD", use another DocBlock to document the source element<br />
<strong>Warning on line 23</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_AllTests<br />
<a name="CreateEventTest.php"></a>
<h1>CreateEventTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_CreateEventTest<br />
<strong>Warning on line 54</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/tests/CreateEventTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Error.tpl.php"></a>
<h1>Error.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 3</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/Error.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 3</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/Error.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventActionsTest.php"></a>
<h1>EventActionsTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_EventActionsTest<br />
<strong>Warning on line 141</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/tests/EventActionsTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Eventdatetime.tpl.php"></a>
<h1>Eventdatetime.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 32</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/Eventdatetime.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventForm.php"></a>
<h1>EventForm.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Manager/jscalendar.php'", use another DocBlock to document the source element<br />
<a name="EventListing.tpl.php"></a>
<h1>EventListing.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 102</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/EventListing.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 104</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/EventListing.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventListing_search.tpl.php"></a>
<h1>EventListing_search.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 61</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/EventListing_search.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 103</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/EventListing_search.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="FormBuilder.php"></a>
<h1>FormBuilder.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 91</strong> - package default is already in category Events, will now replace with category DB<br />
<strong>Warning on line 91</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject/FormBuilder.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 116</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_FormBuilder<br />
<a name="FormBuilder_Driver.php"></a>
<h1>FormBuilder_Driver.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class DB_DataObject_FormBuilder_UCBCN_QuickForm<br />
<strong>Warning on line 44</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/UNL/UCBCN/Manager/FormBuilder_Driver.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="idexport_makepackage.php"></a>
<h1>idexport_makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 57</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/UNL/UCBCN/Manager/Plugins/idexport_makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="InDesignExport.php"></a>
<h1>InDesignExport.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 9</strong> - Unknown tag "@date" used<br />
<strong>Warning on line 13</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_InDesignExport<br />
<strong>Warning on line 113</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/UNL/UCBCN/Manager/Plugins/InDesignExport.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="index.php"></a>
<h1>index.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - package default is already in category default, will now replace with category Events<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Autoload.php'", use another DocBlock to document the source element<br />
<a name="jscalendar.php"></a>
<h1>jscalendar.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 17</strong> - no @package tag was used in a DocBlock for class HTML_QuickForm_jscalendar<br />
<strong>Warning on line 203</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/UNL/UCBCN/Manager/jscalendar.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Login.php"></a>
<h1>Login.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 23</strong> - package default is already in category DB, will now replace with category Events<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 114</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Manager.php"></a>
<h1>Manager.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 18</strong> - package default is already in category HTML, will now replace with category Events<br />
<a name="Manager.tpl.php"></a>
<h1>Manager.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 105</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/Manager.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 152</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/Manager.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="ManagerTest.php"></a>
<h1>ManagerTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_ManagerTest<br />
<strong>Warning on line 270</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/tests/UNL/UCBCN/ManagerTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Manager_Login.tpl.php"></a>
<h1>Manager_Login.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/Manager_Login.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 14</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/Manager_Login.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Manager_Recommend.tpl.php"></a>
<h1>Manager_Recommend.tpl.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 46</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/vanilla/Manager_Recommend.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 77</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN_Manager/templates/default/Manager_Recommend.tpl.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Manager_setup.php"></a>
<h1>Manager_setup.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="Plugin.php"></a>
<h1>Plugin.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN/Manager.php'", use another DocBlock to document the source element<br />
<a name="Recommend.php"></a>
<h1>Recommend.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 23</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Manager_Recommend<br />
<a name="SubForm.php"></a>
<h1>SubForm.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject/FormBuilder/QuickForm/SubForm.php'", use another DocBlock to document the source element<br />
<a name="Tableless.php"></a>
<h1>Tableless.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 27</strong> - Page-level DocBlock precedes "require_once 'HTML/QuickForm/Renderer/Default.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 27</strong> - package default is already in category Events, will now replace with category HTML<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:46 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>