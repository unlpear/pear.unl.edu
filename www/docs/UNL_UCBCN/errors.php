<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN/li_UNL_UCBCN.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#AccountTest.php">AccountTest.php</a><br />
<a href="#addAccount.php">addAccount.php</a><br />
<a href="#addCal.php">addCal.php</a><br />
<a href="#addEventType.php">addEventType.php</a><br />
<a href="#addSponsor.php">addSponsor.php</a><br />
<a href="#AdmissionchargeTest.php">AdmissionchargeTest.php</a><br />
<a href="#AdmissioninfoTest.php">AdmissioninfoTest.php</a><br />
<a href="#AllTests.php">AllTests.php</a><br />
<a href="#AttendancerestrictionTest.php">AttendancerestrictionTest.php</a><br />
<a href="#AudienceTest.php">AudienceTest.php</a><br />
<a href="#Autoload.php">Autoload.php</a><br />
<a href="#Cacheable.php">Cacheable.php</a><br />
<a href="#CacheLite.php">CacheLite.php</a><br />
<a href="#CachingService.php">CachingService.php</a><br />
<a href="#calAddUser.php">calAddUser.php</a><br />
<a href="#CalendarTest.php">CalendarTest.php</a><br />
<a href="#calGrouper.php">calGrouper.php</a><br />
<a href="#DocumentTest.php">DocumentTest.php</a><br />
<a href="#ErrorTest.php">ErrorTest.php</a><br />
<a href="#EventdatetimeTest.php">EventdatetimeTest.php</a><br />
<a href="#EventInstanceTest.php">EventInstanceTest.php</a><br />
<a href="#EventListingTest.php">EventListingTest.php</a><br />
<a href="#EventtypeTest.php">EventtypeTest.php</a><br />
<a href="#Event_has_eventtypeTest.php">Event_has_eventtypeTest.php</a><br />
<a href="#Event_has_keywordTest.php">Event_has_keywordTest.php</a><br />
<a href="#Event_isopento_audienceTest.php">Event_isopento_audienceTest.php</a><br />
<a href="#Event_targets_audienceTest.php">Event_targets_audienceTest.php</a><br />
<a href="#Filter.php">Filter.php</a><br />
<a href="#importCal.php">importCal.php</a><br />
<a href="#InstallTest.php">InstallTest.php</a><br />
<a href="#KeywordTest.php">KeywordTest.php</a><br />
<a href="#LocationTest.php">LocationTest.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#PerformerTest.php">PerformerTest.php</a><br />
<a href="#PermissionTest.php">PermissionTest.php</a><br />
<a href="#PostRunFiltering.php">PostRunFiltering.php</a><br />
<a href="#PubliccontactTest.php">PubliccontactTest.php</a><br />
<a href="#RelatedeventTest.php">RelatedeventTest.php</a><br />
<a href="#RoleTest.php">RoleTest.php</a><br />
<a href="#SessionTest.php">SessionTest.php</a><br />
<a href="#SponsorTest.php">SponsorTest.php</a><br />
<a href="#UCBCNTest.php">UCBCNTest.php</a><br />
<a href="#UserTest.php">UserTest.php</a><br />
<a href="#User_has_permissionTest.php">User_has_permissionTest.php</a><br />
<a href="#vacuumDatabase.php">vacuumDatabase.php</a><br />
<a href="#WebcastlinkTest.php">WebcastlinkTest.php</a><br />
<a href="#WebcastTest.php">WebcastTest.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_UCBCN_Event parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Event_has_eventtype parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Error parent PEAR_Error not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Document parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Calendar parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Calendar_has_event parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Event_has_keyword parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Event_has_sponsor parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Eventtype parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Keyword parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Eventdatetime parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Event_targets_audience parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Event_isopento_audience parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Audience parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Attendancerestriction parent DB_DataObject not found<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/RoleTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/RelatedeventTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/SessionTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/SponsorTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/UserTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PerformerTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PubliccontactTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PermissionTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - Class UNL_UCBCN_Admissioncharge parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Admissioninfo parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Account parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_SchemaTest parent PHPUnit_Framework_TestCase not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_InstallTest parent PHPUnit_Framework_TestCase not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Location parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Performer parent DB_DataObject not found<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_has_keywordTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_isopento_audienceTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_has_eventtypeTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/ErrorTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/CalendarTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/DocumentTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_targets_audienceTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventdatetimeTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/KeywordTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/LocationTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventtypeTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventListingTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventInstanceTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AudienceTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AttendancerestrictionTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - Class UNL_UCBCN_Session parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Sponsor parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Role parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Relatedevent parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Permission parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Publiccontact parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Subscription parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_User parent DB_DataObject not found<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AdmissionchargeTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AdmissioninfoTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - Class UNL_UCBCN_Webcastlink parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_Webcast parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_UCBCN_User_has_permission parent DB_DataObject not found<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/WebcastlinkTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/User_has_permissionTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/WebcastTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="Account.php"></a>
<h1>Account.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - package default is already in category default, will now replace with category Events<br />
<strong>Warning on line 31</strong> - package UNL_UCBCN is already in category default, will now replace with category Events<br />
<a name="AccountTest.php"></a>
<h1>AccountTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AccountTest<br />
<strong>Warning on line 82</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AccountTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="addAccount.php"></a>
<h1>addAccount.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - package default is already in category Events, will now replace with category Default<br />
<strong>Warning on line 23</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="addCal.php"></a>
<h1>addCal.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - package default is already in category Default, will now replace with category Events<br />
<strong>Warning on line 23</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="addEventType.php"></a>
<h1>addEventType.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 23</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="addSponsor.php"></a>
<h1>addSponsor.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 24</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="AdmissionchargeTest.php"></a>
<h1>AdmissionchargeTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AdmissionchargeTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AdmissionchargeTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="AdmissioninfoTest.php"></a>
<h1>AdmissioninfoTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AdmissioninfoTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AdmissioninfoTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="AllTests.php"></a>
<h1>AllTests.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 11</strong> - package default is already in category Default, will now replace with category Events<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "define PHPUnit_MAIN_METHOD", use another DocBlock to document the source element<br />
<strong>Warning on line 29</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AllTests<br />
<a name="AttendancerestrictionTest.php"></a>
<h1>AttendancerestrictionTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AttendancerestrictionTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AttendancerestrictionTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="AudienceTest.php"></a>
<h1>AudienceTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_AudienceTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/AudienceTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Autoload.php"></a>
<h1>Autoload.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/UNL/UCBCN/Autoload.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Cacheable.php"></a>
<h1>Cacheable.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 3</strong> - no @package tag was used in a DocBlock for interface UNL_UCBCN_Cacheable<br />
<strong>Warning on line 7</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/UNL/UCBCN/Cacheable.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="CacheLite.php"></a>
<h1>CacheLite.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 3</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_CachingService_CacheLite<br />
<strong>Warning on line 45</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/UNL/UCBCN/CachingService/CacheLite.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="CachingService.php"></a>
<h1>CachingService.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 2</strong> - no @package tag was used in a DocBlock for interface UNL_UCBCN_CachingService<br />
<strong>Warning on line 6</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/UNL/UCBCN/CachingService.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="calAddUser.php"></a>
<h1>calAddUser.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="CalendarTest.php"></a>
<h1>CalendarTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_CalendarTest<br />
<strong>Warning on line 132</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/CalendarTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="calGrouper.php"></a>
<h1>calGrouper.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - package default is already in category Events, will now replace with category Default<br />
<strong>Warning on line 26</strong> - Page-level DocBlock precedes "require_once 'UNL/UCBCN.php'", use another DocBlock to document the source element<br />
<a name="DocumentTest.php"></a>
<h1>DocumentTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_DocumentTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/DocumentTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="ErrorTest.php"></a>
<h1>ErrorTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_ErrorTest<br />
<strong>Warning on line 52</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/ErrorTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventdatetimeTest.php"></a>
<h1>EventdatetimeTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_EventdatetimeTest<br />
<strong>Warning on line 102</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventdatetimeTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventInstanceTest.php"></a>
<h1>EventInstanceTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_EventInstanceTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventInstanceTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventListingTest.php"></a>
<h1>EventListingTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_EventListingTest<br />
<strong>Warning on line 82</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventListingTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="EventtypeTest.php"></a>
<h1>EventtypeTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_EventtypeTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/EventtypeTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Event_has_eventtypeTest.php"></a>
<h1>Event_has_eventtypeTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Event_has_eventtypeTest<br />
<strong>Warning on line 82</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_has_eventtypeTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Event_has_keywordTest.php"></a>
<h1>Event_has_keywordTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Event_has_keywordTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_has_keywordTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Event_isopento_audienceTest.php"></a>
<h1>Event_isopento_audienceTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Event_isopento_audienceTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_isopento_audienceTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Event_targets_audienceTest.php"></a>
<h1>Event_targets_audienceTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_Event_targets_audienceTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/Event_targets_audienceTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Filter.php"></a>
<h1>Filter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - DocBlock would be page-level, but precedes class "UNL_UCBCN_Filter", use another DocBlock to document the file<br />
<a name="importCal.php"></a>
<h1>importCal.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 151</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/scripts/importCal.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="InstallTest.php"></a>
<h1>InstallTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - package default is already in category Events, will now replace with category default<br />
<a name="KeywordTest.php"></a>
<h1>KeywordTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_KeywordTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/KeywordTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="LocationTest.php"></a>
<h1>LocationTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_LocationTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/LocationTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - package default is already in category default, will now replace with category Events<br />
<a name="PerformerTest.php"></a>
<h1>PerformerTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_PerformerTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PerformerTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="PermissionTest.php"></a>
<h1>PermissionTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_PermissionTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PermissionTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="PostRunFiltering.php"></a>
<h1>PostRunFiltering.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 2</strong> - no @package tag was used in a DocBlock for interface UNL_UCBCN_PostRunFiltering<br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/UNL/UCBCN/PostRunFiltering.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="PubliccontactTest.php"></a>
<h1>PubliccontactTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_PubliccontactTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/PubliccontactTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="RelatedeventTest.php"></a>
<h1>RelatedeventTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_RelatedeventTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/RelatedeventTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="RoleTest.php"></a>
<h1>RoleTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_RoleTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/RoleTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="SessionTest.php"></a>
<h1>SessionTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_SessionTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/SessionTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="SponsorTest.php"></a>
<h1>SponsorTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_SponsorTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/SponsorTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UCBCNTest.php"></a>
<h1>UCBCNTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 11</strong> - no @package tag was used in a DocBlock for class UNL_UCBCNTest<br />
<strong>Warning on line 350</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCNTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UserTest.php"></a>
<h1>UserTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_UserTest<br />
<strong>Warning on line 112</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/UserTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="User_has_permissionTest.php"></a>
<h1>User_has_permissionTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_User_has_permissionTest<br />
<strong>Warning on line 72</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/User_has_permissionTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="vacuumDatabase.php"></a>
<h1>vacuumDatabase.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 92</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/scripts/vacuumDatabase.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="WebcastlinkTest.php"></a>
<h1>WebcastlinkTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_WebcastlinkTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/WebcastlinkTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="WebcastTest.php"></a>
<h1>WebcastTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - no @package tag was used in a DocBlock for class UNL_UCBCN_WebcastTest<br />
<strong>Warning on line 62</strong> - File "/Users/bbieber/Documents/workspace/UNL_UCBCN/tests/UNL/UCBCN/WebcastTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:43 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>