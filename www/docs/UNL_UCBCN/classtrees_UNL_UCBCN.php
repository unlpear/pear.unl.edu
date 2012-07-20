<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | </title>";
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
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_UCBCN</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a><ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php">UNL_UCBCN_EventInstance</a></li></ul></li>
</ul>

<h2>Root class UNL_UCBCN_AllTests</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_AllTests.php">UNL_UCBCN_AllTests</a></li></ul>

<h2>Root class UNL_UCBCN_EventListing</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php">UNL_UCBCN_EventListing</a></li></ul>

<h2>Root class UNL_UCBCN_Filter</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></li></ul>

<h2>Root class UNL_UCBCN_setup_postinstall</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php">UNL_UCBCN_setup_postinstall</a></li></ul>

<h2>Root class DB_DataObject</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php">UNL_UCBCN_Admissioncharge</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php">UNL_UCBCN_Admissioninfo</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php">UNL_UCBCN_Attendancerestriction</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Audience.php">UNL_UCBCN_Audience</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php">UNL_UCBCN_Calendar_has_event</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Document.php">UNL_UCBCN_Document</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php">UNL_UCBCN_Eventtype</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php">UNL_UCBCN_Event_has_eventtype</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php">UNL_UCBCN_Event_has_keyword</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php">UNL_UCBCN_Event_has_sponsor</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php">UNL_UCBCN_Event_isopento_audience</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php">UNL_UCBCN_Event_targets_audience</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php">UNL_UCBCN_Keyword</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Location.php">UNL_UCBCN_Location</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Performer.php">UNL_UCBCN_Performer</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Permission.php">UNL_UCBCN_Permission</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php">UNL_UCBCN_Publiccontact</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php">UNL_UCBCN_Relatedevent</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Role.php">UNL_UCBCN_Role</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Session.php">UNL_UCBCN_Session</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php">UNL_UCBCN_Sponsor</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php">UNL_UCBCN_Subscription</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php">UNL_UCBCN_User_has_permission</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php">UNL_UCBCN_Webcast</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php">UNL_UCBCN_Webcastlink</a></li></ul>

<h2>Root class PEAR_Error</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_Error.php">UNL_UCBCN_Error</a></li></ul>

<h2>Root class PHPUnit_Framework_TestCase</h2>
<ul>
<li><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php">UNL_UCBCN_InstallTest</a></li><li><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php">UNL_UCBCN_SchemaTest</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:41 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>