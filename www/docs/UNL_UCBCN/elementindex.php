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
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/UNL_UCBCN/elementindex_UNL_UCBCN.php">UNL_UCBCN</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#a">a</a>
	<a class="index-letter" href="elementindex.html#b">b</a>
	<a class="index-letter" href="elementindex.html#c">c</a>
	<a class="index-letter" href="elementindex.html#d">d</a>
	<a class="index-letter" href="elementindex.html#e">e</a>
	<a class="index-letter" href="elementindex.html#f">f</a>
	<a class="index-letter" href="elementindex.html#g">g</a>
	<a class="index-letter" href="elementindex.html#h">h</a>
	<a class="index-letter" href="elementindex.html#i">i</a>
	<a class="index-letter" href="elementindex.html#j">j</a>
	<a class="index-letter" href="elementindex.html#k">k</a>
	<a class="index-letter" href="elementindex.html#l">l</a>
	<a class="index-letter" href="elementindex.html#m">m</a>
	<a class="index-letter" href="elementindex.html#n">n</a>
	<a class="index-letter" href="elementindex.html#o">o</a>
	<a class="index-letter" href="elementindex.html#p">p</a>
	<a class="index-letter" href="elementindex.html#r">r</a>
	<a class="index-letter" href="elementindex.html#s">s</a>
	<a class="index-letter" href="elementindex.html#t">t</a>
	<a class="index-letter" href="elementindex.html#u">u</a>
	<a class="index-letter" href="elementindex.html#w">w</a>
	<a class="index-letter" href="elementindex.html#z">z</a>
	<a class="index-letter" href="elementindex.html#_">_</a>
</div>

	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$accountstatus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$accountstatus">UNL_UCBCN_User::$accountstatus</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$accountstatus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$accountstatus">UNL_UCBCN_Account::$accountstatus</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$account_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$account_id">UNL_UCBCN_User::$account_id</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$account_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$account_id">UNL_UCBCN_Calendar::$account_id</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$additionalinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$additionalinfo">UNL_UCBCN_Admissioninfo::$additionalinfo</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$additionalinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$additionalinfo">UNL_UCBCN_Webcast::$additionalinfo</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$additionalpublicinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$additionalpublicinfo">UNL_UCBCN_Location::$additionalpublicinfo</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$additionalpublicinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$additionalpublicinfo">UNL_UCBCN_Eventdatetime::$additionalpublicinfo</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$addressline1</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$addressline1">UNL_UCBCN_Publiccontact::$addressline1</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$addressline2</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$addressline2">UNL_UCBCN_Publiccontact::$addressline2</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$admissioninfogroup_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#var$admissioninfogroup_id">UNL_UCBCN_Admissioncharge::$admissioninfogroup_id</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$approvedforcirculation</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$approvedforcirculation">UNL_UCBCN_Event::$approvedforcirculation</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$audience_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$audience_id">UNL_UCBCN_Event_targets_audience::$audience_id</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$audience_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$audience_id">UNL_UCBCN_Event_isopento_audience::$audience_id</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$automaticapproval</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$automaticapproval">UNL_UCBCN_Subscription::$automaticapproval</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">addCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodaddCalendar">UNL_UCBCN_Account::addCalendar()</a> in Account.php</div>
							<div class="index-item-description">Adds a calendar under this account.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addCalendarHasEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodaddCalendarHasEvent">UNL_UCBCN::addCalendarHasEvent()</a> in UCBCN.php</div>
							<div class="index-item-description">Adds an event to a calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodaddEvent">UNL_UCBCN_Calendar::addEvent()</a> in Calendar.php</div>
							<div class="index-item-description">Adds the event to the current calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addInputFilter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodaddInputFilter">UNL_UCBCN::addInputFilter()</a> in UCBCN.php</div>
							<div class="index-item-description">adds an input filter to this controller, the filter will be called whenever input is processed</div>
					</dd>
			<dt class="field">
						<span class="method-title">addOutputFilter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodaddOutputFilter">UNL_UCBCN::addOutputFilter()</a> in UCBCN.php</div>
							<div class="index-item-description">adds an output filter to this controller, the filter will be called whenever output is sent</div>
					</dd>
			<dt class="field">
						<span class="method-title">addToCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodaddToCalendar">UNL_UCBCN_Event::addToCalendar()</a> in Event.php</div>
							<div class="index-item-description">This function will add the current event to the default calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodaddUser">UNL_UCBCN_Calendar::addUser()</a> in Calendar.php</div>
							<div class="index-item-description">Adds a user to the calendar. Grants all permissions to the  user for the current calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">archiveEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodarchiveEvents">UNL_UCBCN::archiveEvents()</a> in UCBCN.php</div>
							<div class="index-item-description">This function changes the status for events in the  past to 'archived.'</div>
					</dd>
			<dt class="field">
						<span class="include-title">addAccount.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---addAccount.php.php">addAccount.php</a> in addAccount.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">addCal.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---addCal.php.php">addCal.php</a> in addCal.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">addEventType.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---addEventType.php.php">addEventType.php</a> in addEventType.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">addSponsor.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---addSponsor.php.php">addSponsor.php</a> in addSponsor.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">AllTests.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_tests---AllTests.php.php">AllTests.php</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Account.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Account.php.php">Account.php</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Admissioncharge.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Admissioncharge.php.php">Admissioncharge.php</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Admissioninfo.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Admissioninfo.php.php">Admissioninfo.php</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Attendancerestriction.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Attendancerestriction.php.php">Attendancerestriction.php</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Audience.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Audience.php.php">Audience.php</a> in Audience.php</div>
					</dd>
		</dl>
	<a name="b"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">b</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$backup_extension</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$backup_extension">UNL_UCBCN_SchemaTest::$backup_extension</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$bandwidth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$bandwidth">UNL_UCBCN_Webcast::$bandwidth</a> in Webcast.php</div>
					</dd>
		</dl>
	<a name="c"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">c</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$cache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$cache">UNL_UCBCN::$cache</a> in UCBCN.php</div>
							<div class="index-item-description">Cache object for output caching</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#var$calendar">UNL_UCBCN_EventInstance::$calendar</a> in EventInstance.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendardaterange</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$calendardaterange">UNL_UCBCN_Calendar::$calendardaterange</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendarstatus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$calendarstatus">UNL_UCBCN_Calendar::$calendarstatus</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$calendar_id">UNL_UCBCN_Subscription::$calendar_id</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$calendar_id">UNL_UCBCN_Eventtype::$calendar_id</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$calendar_id">UNL_UCBCN_Calendar_has_event::$calendar_id</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$calendar_id">UNL_UCBCN_User::$calendar_id</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$calendar_id">UNL_UCBCN_User_has_permission::$calendar_id</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$city</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$city">UNL_UCBCN_Publiccontact::$city</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$city</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$city">UNL_UCBCN_Location::$city</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$city</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$city">UNL_UCBCN_Account::$city</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$classification</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$classification">UNL_UCBCN_Event::$classification</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactemail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$contactemail">UNL_UCBCN_Admissioninfo::$contactemail</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$contactname">UNL_UCBCN_Admissioninfo::$contactname</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactphone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$contactphone">UNL_UCBCN_Admissioninfo::$contactphone</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contacturl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$contacturl">UNL_UCBCN_Admissioninfo::$contacturl</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$controller</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Filter.php#var$controller">UNL_UCBCN_Filter::$controller</a> in Filter.php</div>
							<div class="index-item-description">the controller instance running this output object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#var$createDB">UNL_UCBCN_setup_postinstall::$createDB</a> in UCBCN_setup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">calendarHasEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodcalendarHasEvent">UNL_UCBCN_Calendar_has_event::calendarHasEvent()</a> in Calendar_has_event.php</div>
							<div class="index-item-description">Returns bool false if the calendar does not have the event,  otherwise returns status.</div>
					</dd>
			<dt class="field">
						<span class="method-title">calendarHasEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodcalendarHasEvent">UNL_UCBCN::calendarHasEvent()</a> in UCBCN.php</div>
							<div class="index-item-description">Checks whether a calendar has an event or not.</div>
					</dd>
			<dt class="field">
						<span class="method-title">calendarHasSubscribers</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodcalendarHasSubscribers">UNL_UCBCN_Subscription::calendarHasSubscribers()</a> in Subscription.php</div>
							<div class="index-item-description">Checks if a calendar has subscribers.</div>
					</dd>
			<dt class="field">
						<span class="method-title">checkURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodcheckURL">UNL_UCBCN_Event::checkURL()</a> in Event.php</div>
							<div class="index-item-description">Simple function to test for a valid URL</div>
					</dd>
			<dt class="field">
						<span class="method-title">cleanCache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodcleanCache">UNL_UCBCN::cleanCache()</a> in UCBCN.php</div>
							<div class="index-item-description">Cleans the cache.</div>
					</dd>
			<dt class="field">
						<span class="method-title">constructDayEventInstanceList</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#methodconstructDayEventInstanceList">UNL_UCBCN_EventListing::constructDayEventInstanceList()</a> in EventListing.php</div>
							<div class="index-item-description">Populates events with a listing of events for the calendar given.</div>
					</dd>
			<dt class="field">
						<span class="method-title">constructOngoingEventList</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#methodconstructOngoingEventList">UNL_UCBCN_EventListing::constructOngoingEventList()</a> in EventListing.php</div>
							<div class="index-item-description">Constructs a list of ongoing events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">constructUpcomingEventList</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#methodconstructUpcomingEventList">UNL_UCBCN_EventListing::constructUpcomingEventList()</a> in EventListing.php</div>
							<div class="index-item-description">Constructs a list of upcoming events for the given calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">createAccount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodcreateAccount">UNL_UCBCN::createAccount()</a> in UCBCN.php</div>
							<div class="index-item-description">This function creates a calendar account.</div>
					</dd>
			<dt class="field">
						<span class="method-title">createCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodcreateCalendar">UNL_UCBCN::createCalendar()</a> in UCBCN.php</div>
							<div class="index-item-description">This function creates a calendar for an account.</div>
					</dd>
			<dt class="field">
						<span class="method-title">createDatabase</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodcreateDatabase">UNL_UCBCN_setup_postinstall::createDatabase()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Create an empty database for use.</div>
					</dd>
			<dt class="field">
						<span class="method-title">createUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodcreateUser">UNL_UCBCN::createUser()</a> in UCBCN.php</div>
							<div class="index-item-description">creates a new user record and returns it.</div>
					</dd>
			<dt class="field">
						<span class="include-title">calAddUser.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---calAddUser.php.php">calAddUser.php</a> in calAddUser.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">calGrouper.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_scripts---calGrouper.php.php">calGrouper.php</a> in calGrouper.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Calendar.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Calendar.php.php">Calendar.php</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Calendar_has_event.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Calendar_has_event.php.php">Calendar_has_event.php</a> in Calendar_has_event.php</div>
					</dd>
		</dl>
	<a name="d"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">d</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$data</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#var$data">UNL_UCBCN_Session::$data</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$database</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$database">UNL_UCBCN_SchemaTest::$database</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$databaseExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#var$databaseExists">UNL_UCBCN_setup_postinstall::$databaseExists</a> in UCBCN_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$data_dir</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#var$data_dir">UNL_UCBCN_setup_postinstall::$data_dir</a> in UCBCN_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dateavailable</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$dateavailable">UNL_UCBCN_Webcast::$dateavailable</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$datecreated">UNL_UCBCN_User::$datecreated</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$datecreated">UNL_UCBCN_Account::$datecreated</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$datecreated">UNL_UCBCN_Subscription::$datecreated</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$datecreated">UNL_UCBCN_Event::$datecreated</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$datecreated">UNL_UCBCN_Calendar_has_event::$datecreated</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datecreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$datecreated">UNL_UCBCN_Calendar::$datecreated</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$datelastupdated">UNL_UCBCN_Calendar_has_event::$datelastupdated</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$datelastupdated">UNL_UCBCN_Subscription::$datelastupdated</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$datelastupdated">UNL_UCBCN_Calendar::$datelastupdated</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$datelastupdated">UNL_UCBCN_Event::$datelastupdated</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$datelastupdated">UNL_UCBCN_Account::$datelastupdated</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$datelastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$datelastupdated">UNL_UCBCN_User::$datelastupdated</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$deadline</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$deadline">UNL_UCBCN_Admissioninfo::$deadline</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$default_calendar_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$default_calendar_id">UNL_UCBCN::$default_calendar_id</a> in UCBCN.php</div>
							<div class="index-item-description">Default calendar to use throughout the system.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$description</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#var$description">UNL_UCBCN_Permission::$description</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$description</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#var$description">UNL_UCBCN_Admissioncharge::$description</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$description</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#var$description">UNL_UCBCN_Attendancerestriction::$description</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$description</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$description">UNL_UCBCN_Event::$description</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$description</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$description">UNL_UCBCN_Eventtype::$description</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$directions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$directions">UNL_UCBCN_Location::$directions</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$directions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$directions">UNL_UCBCN_Eventdatetime::$directions</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$driver_input_file</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$driver_input_file">UNL_UCBCN_SchemaTest::$driver_input_file</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$dsn">UNL_UCBCN::$dsn</a> in UCBCN.php</div>
							<div class="index-item-description">A string containing connection details in the format</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$dsn">UNL_UCBCN_SchemaTest::$dsn</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#var$dsn">UNL_UCBCN_setup_postinstall::$dsn</a> in UCBCN_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php#var$dsn">UNL_UCBCN_InstallTest::$dsn</a> in InstallTest.php</div>
							<div class="index-item-description">Database connection string for the sqlite test database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">databaseExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methoddatabaseExists">UNL_UCBCN_setup_postinstall::databaseExists()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">checks if the database exists already, or not</div>
					</dd>
			<dt class="field">
						<span class="method-title">dateToDatabaseCallback</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methoddateToDatabaseCallback">UNL_UCBCN_Eventdatetime::dateToDatabaseCallback()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">dbInsert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoddbInsert">UNL_UCBCN::dbInsert()</a> in UCBCN.php</div>
							<div class="index-item-description">This function is a general insert function,  given the table name and an assoc array of values,  it will return the inserted record.</div>
					</dd>
			<dt class="field">
						<span class="method-title">delete</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methoddelete">UNL_UCBCN_Eventdatetime::delete()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">delete</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methoddelete">UNL_UCBCN_Event::delete()</a> in Event.php</div>
							<div class="index-item-description">Performs a delete of this event and all child records</div>
					</dd>
			<dt class="field">
						<span class="method-title">delete</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methoddelete">UNL_UCBCN_Calendar_has_event::delete()</a> in Calendar_has_event.php</div>
							<div class="index-item-description">Removes this record - effectively removing this event from the calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayArray</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoddisplayArray">UNL_UCBCN::displayArray()</a> in UCBCN.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayObject</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoddisplayObject">UNL_UCBCN::displayObject()</a> in UCBCN.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayRegion</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoddisplayRegion">UNL_UCBCN::displayRegion()</a> in UCBCN.php</div>
							<div class="index-item-description">The heart of the template/display portions of this system.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Document.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Document.php.php">Document.php</a> in Document.php</div>
					</dd>
		</dl>
	<a name="e"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">e</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$email</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$email">UNL_UCBCN_Account::$email</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$emailaddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$emailaddress">UNL_UCBCN_Publiccontact::$emailaddress</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$emaillists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$emaillists">UNL_UCBCN_Calendar::$emaillists</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$endtime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$endtime">UNL_UCBCN_Eventdatetime::$endtime</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#var$event">UNL_UCBCN_EventInstance::$event</a> in EventInstance.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eventdatetime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#var$eventdatetime">UNL_UCBCN_EventInstance::$eventdatetime</a> in EventInstance.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eventreleasepreference</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$eventreleasepreference">UNL_UCBCN_Calendar::$eventreleasepreference</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$events</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#var$events">UNL_UCBCN_EventListing::$events</a> in EventListing.php</div>
							<div class="index-item-description">Array of UNL_UCBCN_Event or UNL_UCBCN_EventInstance objects for this listing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eventtypegroup</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$eventtypegroup">UNL_UCBCN_Eventtype::$eventtypegroup</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eventtype_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$eventtype_id">UNL_UCBCN_Event_has_eventtype::$eventtype_id</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$event_id">UNL_UCBCN_Webcast::$event_id</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#var$event_id">UNL_UCBCN_Event_has_keyword::$event_id</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$event_id">UNL_UCBCN_Event_has_eventtype::$event_id</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#var$event_id">UNL_UCBCN_Relatedevent::$event_id</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$event_id">UNL_UCBCN_Event_targets_audience::$event_id</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$event_id">UNL_UCBCN_Admissioninfo::$event_id</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$event_id">UNL_UCBCN_Event_isopento_audience::$event_id</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$event_id">UNL_UCBCN_Publiccontact::$event_id</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$event_id">UNL_UCBCN_Event_has_sponsor::$event_id</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#var$event_id">UNL_UCBCN_Attendancerestriction::$event_id</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#var$event_id">UNL_UCBCN_Document::$event_id</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$event_id">UNL_UCBCN_Calendar_has_event::$event_id</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$event_id">UNL_UCBCN_Eventdatetime::$event_id</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$event_id">UNL_UCBCN_Performer::$event_id</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$expirationdate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$expirationdate">UNL_UCBCN_Subscription::$expirationdate</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$externalforms</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$externalforms">UNL_UCBCN_Calendar::$externalforms</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Error.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Error.php.php">Error.php</a> in Error.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event.php.php">Event.php</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Eventdatetime.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Eventdatetime.php.php">Eventdatetime.php</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">EventInstance.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---EventInstance.php.php">EventInstance.php</a> in EventInstance.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">EventListing.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---EventListing.php.php">EventListing.php</a> in EventListing.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Eventtype.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Eventtype.php.php">Eventtype.php</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event_has_eventtype.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event_has_eventtype.php.php">Event_has_eventtype.php</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event_has_keyword.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event_has_keyword.php.php">Event_has_keyword.php</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event_has_sponsor.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event_has_sponsor.php.php">Event_has_sponsor.php</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event_isopento_audience.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event_isopento_audience.php.php">Event_isopento_audience.php</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Event_targets_audience.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Event_targets_audience.php.php">Event_targets_audience.php</a> in Event_targets_audience.php</div>
					</dd>
		</dl>
	<a name="f"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">f</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$fax</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$fax">UNL_UCBCN_Account::$fax</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fax</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$fax">UNL_UCBCN_Publiccontact::$fax</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_addFormHeader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$fb_addFormHeader">UNL_UCBCN_Event_has_eventtype::$fb_addFormHeader</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_addFormHeader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$fb_addFormHeader">UNL_UCBCN_Event_targets_audience::$fb_addFormHeader</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_addFormHeader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_addFormHeader">UNL_UCBCN_Eventdatetime::$fb_addFormHeader</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_addFormHeader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$fb_addFormHeader">UNL_UCBCN_Event_isopento_audience::$fb_addFormHeader</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_addFormHeader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$fb_addFormHeader">UNL_UCBCN_Event_has_sponsor::$fb_addFormHeader</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_dateToDatabaseCallback</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_dateToDatabaseCallback">UNL_UCBCN_Eventdatetime::$fb_dateToDatabaseCallback</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_elementTypeMap</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_elementTypeMap">UNL_UCBCN_Eventdatetime::$fb_elementTypeMap</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$fb_enumFields">UNL_UCBCN_Calendar::$fb_enumFields</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_enumFields">UNL_UCBCN_Event::$fb_enumFields</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$fb_enumFields">UNL_UCBCN_Subscription::$fb_enumFields</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$fb_enumOptions">UNL_UCBCN_Calendar::$fb_enumOptions</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$fb_enumOptions">UNL_UCBCN_Subscription::$fb_enumOptions</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_enumOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_enumOptions">UNL_UCBCN_Event::$fb_enumOptions</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$fb_excludeFromAutoRules">UNL_UCBCN_Event_has_sponsor::$fb_excludeFromAutoRules</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_excludeFromAutoRules">UNL_UCBCN_Eventdatetime::$fb_excludeFromAutoRules</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$fb_excludeFromAutoRules">UNL_UCBCN_Event_has_eventtype::$fb_excludeFromAutoRules</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$fb_excludeFromAutoRules">UNL_UCBCN_Event_isopento_audience::$fb_excludeFromAutoRules</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$fb_excludeFromAutoRules">UNL_UCBCN_Event_targets_audience::$fb_excludeFromAutoRules</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_excludeFromAutoRules</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$fb_excludeFromAutoRules">UNL_UCBCN_User_has_permission::$fb_excludeFromAutoRules</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$fb_fieldLabels">UNL_UCBCN_Event_isopento_audience::$fb_fieldLabels</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$fb_fieldLabels">UNL_UCBCN_Calendar::$fb_fieldLabels</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$fb_fieldLabels">UNL_UCBCN_Event_has_sponsor::$fb_fieldLabels</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$fb_fieldLabels">UNL_UCBCN_Event_has_eventtype::$fb_fieldLabels</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$fb_fieldLabels">UNL_UCBCN_Event_targets_audience::$fb_fieldLabels</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$fb_fieldLabels">UNL_UCBCN_User::$fb_fieldLabels</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_fieldLabels">UNL_UCBCN_Event::$fb_fieldLabels</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$fb_fieldLabels">UNL_UCBCN_User_has_permission::$fb_fieldLabels</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$fb_fieldLabels">UNL_UCBCN_Subscription::$fb_fieldLabels</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$fb_fieldLabels">UNL_UCBCN_Account::$fb_fieldLabels</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_fieldLabels">UNL_UCBCN_Eventdatetime::$fb_fieldLabels</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_fieldLabels</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$fb_fieldLabels">UNL_UCBCN_Location::$fb_fieldLabels</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$fb_formHeaderText">UNL_UCBCN_Event_isopento_audience::$fb_formHeaderText</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$fb_formHeaderText">UNL_UCBCN_Event_targets_audience::$fb_formHeaderText</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$fb_formHeaderText">UNL_UCBCN_Event_has_sponsor::$fb_formHeaderText</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_formHeaderText">UNL_UCBCN_Eventdatetime::$fb_formHeaderText</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_formHeaderText">UNL_UCBCN_Event::$fb_formHeaderText</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_formHeaderText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$fb_formHeaderText">UNL_UCBCN_Event_has_eventtype::$fb_formHeaderText</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$fb_hiddenFields">UNL_UCBCN_Account::$fb_hiddenFields</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$fb_hiddenFields">UNL_UCBCN_Calendar::$fb_hiddenFields</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$fb_hiddenFields">UNL_UCBCN_Event_targets_audience::$fb_hiddenFields</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$fb_hiddenFields">UNL_UCBCN_Event_isopento_audience::$fb_hiddenFields</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$fb_hiddenFields">UNL_UCBCN_Subscription::$fb_hiddenFields</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_hiddenFields">UNL_UCBCN_Eventdatetime::$fb_hiddenFields</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$fb_hiddenFields">UNL_UCBCN_Event_has_eventtype::$fb_hiddenFields</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$fb_hiddenFields">UNL_UCBCN_User::$fb_hiddenFields</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_hiddenFields">UNL_UCBCN_Event::$fb_hiddenFields</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hiddenFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$fb_hiddenFields">UNL_UCBCN_Event_has_sponsor::$fb_hiddenFields</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_hidePrimaryKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$fb_hidePrimaryKey">UNL_UCBCN_User::$fb_hidePrimaryKey</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkDisplayFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#var$fb_linkDisplayFields">UNL_UCBCN_Permission::$fb_linkDisplayFields</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkDisplayFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$fb_linkDisplayFields">UNL_UCBCN_Sponsor::$fb_linkDisplayFields</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkDisplayFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$fb_linkDisplayFields">UNL_UCBCN_Location::$fb_linkDisplayFields</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkDisplayFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$fb_linkDisplayFields">UNL_UCBCN_Eventtype::$fb_linkDisplayFields</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkDisplayFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$fb_linkDisplayFields">UNL_UCBCN_Calendar::$fb_linkDisplayFields</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkElementTypes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$fb_linkElementTypes">UNL_UCBCN_Subscription::$fb_linkElementTypes</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkElementTypes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_linkElementTypes">UNL_UCBCN_Event::$fb_linkElementTypes</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkNewValue</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$fb_linkNewValue">UNL_UCBCN_Location::$fb_linkNewValue</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkNewValue</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_linkNewValue">UNL_UCBCN_Event::$fb_linkNewValue</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkNewValue</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_linkNewValue">UNL_UCBCN_Eventdatetime::$fb_linkNewValue</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_linkNewValue</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$fb_linkNewValue">UNL_UCBCN_Sponsor::$fb_linkNewValue</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_preDefOrder</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$fb_preDefOrder">UNL_UCBCN_Eventdatetime::$fb_preDefOrder</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_preDefOrder</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_preDefOrder">UNL_UCBCN_Event::$fb_preDefOrder</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_reverseLinkNewValue</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_reverseLinkNewValue">UNL_UCBCN_Event::$fb_reverseLinkNewValue</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_reverseLinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_reverseLinks">UNL_UCBCN_Event::$fb_reverseLinks</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fb_textAreaFields</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$fb_textAreaFields">UNL_UCBCN_Event::$fb_textAreaFields</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$formatcalendardata</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$formatcalendardata">UNL_UCBCN_Calendar::$formatcalendardata</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">factory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodfactory">UNL_UCBCN::factory()</a> in UCBCN.php</div>
							<div class="index-item-description">This function allows extended classes etc to get a DB DataObject  for the event table they need access to.</div>
					</dd>
			<dt class="field">
						<span class="method-title">file_str_replace</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodfile_str_replace">UNL_UCBCN_setup_postinstall::file_str_replace()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Replace text within a file</div>
					</dd>
			<dt class="field">
						<span class="method-title">filter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Filter.php#methodfilter">UNL_UCBCN_Filter::filter()</a> in Filter.php</div>
							<div class="index-item-description">Performs a filter operation on the text, and returns the filtered text.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Filter.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Filter.php.php">Filter.php</a> in Filter.php</div>
					</dd>
		</dl>
	<a name="g"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">g</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">getAbsoluteURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetAbsoluteURL">UNL_UCBCN::getAbsoluteURL()</a> in UCBCN.php</div>
							<div class="index-item-description">Returns an absolute URL using Net_URL</div>
					</dd>
			<dt class="field">
						<span class="method-title">getAccount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetAccount">UNL_UCBCN::getAccount()</a> in UCBCN.php</div>
							<div class="index-item-description">Gets the account record(s) for the user</div>
					</dd>
			<dt class="field">
						<span class="method-title">getApprovalStatus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodgetApprovalStatus">UNL_UCBCN_Subscription::getApprovalStatus()</a> in Subscription.php</div>
							<div class="index-item-description">returns the string equivalent of the automatic approval status, for  inserting into the calendar_has_event database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getByShortname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodgetByShortname">UNL_UCBCN_Calendar::getByShortname()</a> in Calendar.php</div>
							<div class="index-item-description">Gets a calendar by shortname.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCachingService</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetCachingService">UNL_UCBCN::getCachingService()</a> in UCBCN.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetCalendar">UNL_UCBCN::getCalendar()</a> in UCBCN.php</div>
							<div class="index-item-description">Gets the calendar(s) for the given account that the given user has permission  to. Optionally the user can be redirected on creation of a new calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCalendars</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodgetCalendars">UNL_UCBCN_Subscription::getCalendars()</a> in Subscription.php</div>
							<div class="index-item-description">Translates search criteria into calendars.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getDatabaseConnection</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetDatabaseConnection">UNL_UCBCN::getDatabaseConnection()</a> in UCBCN.php</div>
							<div class="index-item-description">Gets an MDB2 connection object and returns it.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getEventCount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetEventCount">UNL_UCBCN::getEventCount()</a> in UCBCN.php</div>
							<div class="index-item-description">This function gets the count of events for the given status.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getLocation</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodgetLocation">UNL_UCBCN_Eventdatetime::getLocation()</a> in Eventdatetime.php</div>
							<div class="index-item-description">Gets an object for the location of this event date and time.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTemplateFilename</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetTemplateFilename">UNL_UCBCN::getTemplateFilename()</a> in UCBCN.php</div>
							<div class="index-item-description">This function takes in a class name and returns the correct template  for the object.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#methodgetURL">UNL_UCBCN_EventInstance::getURL()</a> in EventInstance.php</div>
							<div class="index-item-description">This function returns the URL for this event instance.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetURL">UNL_UCBCN::getURL()</a> in UCBCN.php</div>
							<div class="index-item-description">Returns the URL for the calendar system.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgetUser">UNL_UCBCN::getUser()</a> in UCBCN.php</div>
							<div class="index-item-description">This function returns a object for the user with  the given uid.</div>
					</dd>
			<dt class="field">
						<span class="method-title">grantPermission</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodgrantPermission">UNL_UCBCN::grantPermission()</a> in UCBCN.php</div>
							<div class="index-item-description">This function adds the given permission for the user.</div>
					</dd>
		</dl>
	<a name="h"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">h</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$hours</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$hours">UNL_UCBCN_Eventdatetime::$hours</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$hours</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$hours">UNL_UCBCN_Location::$hours</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">handleDatabase</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodhandleDatabase">UNL_UCBCN_setup_postinstall::handleDatabase()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">handle database postinstall script</div>
					</dd>
		</dl>
	<a name="i"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">i</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$icalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$icalendar">UNL_UCBCN_Event::$icalendar</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#var$id">UNL_UCBCN_Keyword::$id</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$id">UNL_UCBCN_Location::$id</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$id">UNL_UCBCN_Performer::$id</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$id">UNL_UCBCN_Event_targets_audience::$id</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$id">UNL_UCBCN_Event_isopento_audience::$id</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$id">UNL_UCBCN_Event_has_eventtype::$id</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$id">UNL_UCBCN_Account::$id</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$id">UNL_UCBCN_Event_has_sponsor::$id</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#var$id">UNL_UCBCN_Permission::$id</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$id">UNL_UCBCN_User_has_permission::$id</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$id">UNL_UCBCN_Webcast::$id</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$id">UNL_UCBCN_Webcastlink::$id</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$id">UNL_UCBCN_Subscription::$id</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$id">UNL_UCBCN_Sponsor::$id</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$id">UNL_UCBCN_Publiccontact::$id</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#var$id">UNL_UCBCN_Role::$id</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$id">UNL_UCBCN_Eventtype::$id</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#var$id">UNL_UCBCN_Event_has_keyword::$id</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$id">UNL_UCBCN_Calendar::$id</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$id">UNL_UCBCN_Calendar_has_event::$id</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#var$id">UNL_UCBCN_Audience::$id</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#var$id">UNL_UCBCN_Attendancerestriction::$id</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#var$id">UNL_UCBCN_Admissioncharge::$id</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$id">UNL_UCBCN_Admissioninfo::$id</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$id">UNL_UCBCN_Event::$id</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#var$id">UNL_UCBCN_Document::$id</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$id">UNL_UCBCN_Eventdatetime::$id</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$imagedata</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$imagedata">UNL_UCBCN_Event::$imagedata</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$imagemime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$imagemime">UNL_UCBCN_Event::$imagemime</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$imagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$imagetitle">UNL_UCBCN_Event::$imagetitle</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$imageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$imageurl">UNL_UCBCN_Event::$imageurl</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$input_filters</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$input_filters">UNL_UCBCN::$input_filters</a> in UCBCN.php</div>
							<div class="index-item-description">input filters</div>
					</dd>
			<dt class="field">
						<span class="method-title">init</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodinit">UNL_UCBCN_setup_postinstall::init()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">initialize the post install script</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodinsert">UNL_UCBCN_Event::insert()</a> in Event.php</div>
							<div class="index-item-description">Inserts a new event in the database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodinsert">UNL_UCBCN_User_has_permission::insert()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodinsert">UNL_UCBCN_Eventdatetime::insert()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodinsert">UNL_UCBCN_User::insert()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodinsert">UNL_UCBCN_Calendar_has_event::insert()</a> in Calendar_has_event.php</div>
							<div class="index-item-description">Performs an insert of a calendar_has_event record, and updates any subscribed  calenars.</div>
					</dd>
			<dt class="field">
						<span class="method-title">insert</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodinsert">UNL_UCBCN_Subscription::insert()</a> in Subscription.php</div>
							<div class="index-item-description">Inserts a record into the subscription table, and processes the subscription  for matching events.</div>
					</dd>
			<dt class="field">
						<span class="include-title">insert_sample_data.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_insert_sample_data.php.php">insert_sample_data.php</a> in insert_sample_data.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">isOrphaned</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodisOrphaned">UNL_UCBCN_Event::isOrphaned()</a> in Event.php</div>
							<div class="index-item-description">Check whether this event belongs to any calendars.</div>
					</dd>
			<dt class="field">
						<span class="include-title">InstallTest.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_tests---InstallTest.php.php">InstallTest.php</a> in InstallTest.php</div>
					</dd>
		</dl>
	<a name="j"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">j</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$jobtitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$jobtitle">UNL_UCBCN_Publiccontact::$jobtitle</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$jobtitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$jobtitle">UNL_UCBCN_Performer::$jobtitle</a> in Performer.php</div>
					</dd>
		</dl>
	<a name="k"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">k</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$keyword_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#var$keyword_id">UNL_UCBCN_Event_has_keyword::$keyword_id</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#methodkeys">UNL_UCBCN_Permission::keys()</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#methodkeys">UNL_UCBCN_Publiccontact::keys()</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#methodkeys">UNL_UCBCN_Location::keys()</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#methodkeys">UNL_UCBCN_Role::keys()</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#methodkeys">UNL_UCBCN_Keyword::keys()</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodkeys">UNL_UCBCN_Event_targets_audience::keys()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#methodkeys">UNL_UCBCN_Session::keys()</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#methodkeys">UNL_UCBCN_Webcast::keys()</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#methodkeys">UNL_UCBCN_Webcastlink::keys()</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodkeys">UNL_UCBCN_User_has_permission::keys()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodkeys">UNL_UCBCN_User::keys()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#methodkeys">UNL_UCBCN_Sponsor::keys()</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodkeys">UNL_UCBCN_Subscription::keys()</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodkeys">UNL_UCBCN_Event_isopento_audience::keys()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodkeys">UNL_UCBCN_Event_has_sponsor::keys()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodkeys">UNL_UCBCN_Calendar::keys()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodkeys">UNL_UCBCN_Calendar_has_event::keys()</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#methodkeys">UNL_UCBCN_Audience::keys()</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#methodkeys">UNL_UCBCN_Attendancerestriction::keys()</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#methodkeys">UNL_UCBCN_Admissioncharge::keys()</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#methodkeys">UNL_UCBCN_Admissioninfo::keys()</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#methodkeys">UNL_UCBCN_Document::keys()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodkeys">UNL_UCBCN_Event::keys()</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#methodkeys">UNL_UCBCN_Event_has_keyword::keys()</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodkeys">UNL_UCBCN_Event_has_eventtype::keys()</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#methodkeys">UNL_UCBCN_Eventtype::keys()</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodkeys">UNL_UCBCN_Account::keys()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">keys</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodkeys">UNL_UCBCN_Eventdatetime::keys()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Keyword.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Keyword.php.php">Keyword.php</a> in Keyword.php</div>
					</dd>
		</dl>
	<a name="l"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">l</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$lastaction</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#var$lastaction">UNL_UCBCN_Session::$lastaction</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$listingcontactemail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$listingcontactemail">UNL_UCBCN_Event::$listingcontactemail</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$listingcontactname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$listingcontactname">UNL_UCBCN_Event::$listingcontactname</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$listingcontactphone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$listingcontactphone">UNL_UCBCN_Event::$listingcontactphone</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$listingcontactuid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$listingcontactuid">UNL_UCBCN_Event::$listingcontactuid</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$location_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$location_id">UNL_UCBCN_Eventdatetime::$location_id</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#methodlinks">UNL_UCBCN_Relatedevent::links()</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#methodlinks">UNL_UCBCN_Publiccontact::links()</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#methodlinks">UNL_UCBCN_Performer::links()</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodlinks">UNL_UCBCN_Event_targets_audience::links()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#methodlinks">UNL_UCBCN_Webcastlink::links()</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodlinks">UNL_UCBCN_User::links()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#methodlinks">UNL_UCBCN_Session::links()</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#methodlinks">UNL_UCBCN_Webcast::links()</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodlinks">UNL_UCBCN_Event_isopento_audience::links()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodlinks">UNL_UCBCN_User_has_permission::links()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodlinks">UNL_UCBCN_Subscription::links()</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodlinks">UNL_UCBCN_Event_has_eventtype::links()</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodlinks">UNL_UCBCN_Calendar::links()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodlinks">UNL_UCBCN_Calendar_has_event::links()</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#methodlinks">UNL_UCBCN_Attendancerestriction::links()</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#methodlinks">UNL_UCBCN_Admissioninfo::links()</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#methodlinks">UNL_UCBCN_Admissioncharge::links()</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#methodlinks">UNL_UCBCN_Document::links()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodlinks">UNL_UCBCN_Event::links()</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodlinks">UNL_UCBCN_Account::links()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#methodlinks">UNL_UCBCN_Event_has_keyword::links()</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodlinks">UNL_UCBCN_Event_has_sponsor::links()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#methodlinks">UNL_UCBCN_Eventtype::links()</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">links</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodlinks">UNL_UCBCN_Eventdatetime::links()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">localRedirect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodlocalRedirect">UNL_UCBCN::localRedirect()</a> in UCBCN.php</div>
							<div class="index-item-description">Redirects to the given full or partial URL.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Location.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Location.php.php">Location.php</a> in Location.php</div>
					</dd>
		</dl>
	<a name="m"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">m</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$mapurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$mapurl">UNL_UCBCN_Location::$mapurl</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">main</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_AllTests.php#methodmain">UNL_UCBCN_AllTests::main()</a> in AllTests.php</div>
							<div class="index-item-description">Runs the test suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">makepackage.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_makepackage.php.php">makepackage.php</a> in makepackage.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">matchingEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodmatchingEvents">UNL_UCBCN_Subscription::matchingEvents()</a> in Subscription.php</div>
							<div class="index-item-description">Finds the events matching this subscription.</div>
					</dd>
			<dt class="field">
						<span class="method-title">MDB2_Schema_Test</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodMDB2_Schema_Test">UNL_UCBCN_SchemaTest::MDB2_Schema_Test()</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">methodExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodmethodExists">UNL_UCBCN_SchemaTest::methodExists()</a> in SchemaTest.php</div>
					</dd>
		</dl>
	<a name="n"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">n</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$name">UNL_UCBCN_Publiccontact::$name</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#var$name">UNL_UCBCN_Permission::$name</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#var$name">UNL_UCBCN_Role::$name</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$name">UNL_UCBCN_Sponsor::$name</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$name">UNL_UCBCN_Subscription::$name</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$name">UNL_UCBCN_Performer::$name</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$name">UNL_UCBCN_Location::$name</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$name">UNL_UCBCN_Calendar::$name</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#var$name">UNL_UCBCN_Audience::$name</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$name">UNL_UCBCN_Account::$name</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#var$name">UNL_UCBCN_Document::$name</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$name">UNL_UCBCN_Eventtype::$name</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#var$name">UNL_UCBCN_Keyword::$name</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$noDBsetup</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#var$noDBsetup">UNL_UCBCN_setup_postinstall::$noDBsetup</a> in UCBCN_setup.php</div>
					</dd>
		</dl>
	<a name="o"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">o</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$obligation</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$obligation">UNL_UCBCN_Admissioninfo::$obligation</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$opendate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$opendate">UNL_UCBCN_Admissioninfo::$opendate</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$options">UNL_UCBCN_SchemaTest::$options</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$organization</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$organization">UNL_UCBCN_Publiccontact::$organization</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$organizationname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$organizationname">UNL_UCBCN_Performer::$organizationname</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$organizationwebpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$organizationwebpageurl">UNL_UCBCN_Performer::$organizationwebpageurl</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$othereventtype</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$othereventtype">UNL_UCBCN_Event::$othereventtype</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$otherkeywords</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$otherkeywords">UNL_UCBCN_Event::$otherkeywords</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output_filters</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$output_filters">UNL_UCBCN::$output_filters</a> in UCBCN.php</div>
							<div class="index-item-description">output filters</div>
					</dd>
			<dt class="field">
						<span class="method-title">outputData</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodoutputData">UNL_UCBCN_setup_postinstall::outputData()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">takes in a string and sends it to the client.</div>
					</dd>
			<dt class="field">
						<span class="method-title">outputTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodoutputTemplate">UNL_UCBCN::outputTemplate()</a> in UCBCN.php</div>
							<div class="index-item-description">Gets or sets the output template for a given class.</div>
					</dd>
		</dl>
	<a name="p"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">p</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$performer_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$performer_id">UNL_UCBCN_Performer::$performer_id</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$permission_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$permission_id">UNL_UCBCN_User_has_permission::$permission_id</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$personalname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$personalname">UNL_UCBCN_Performer::$personalname</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$personalwebpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$personalwebpageurl">UNL_UCBCN_Performer::$personalwebpageurl</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$phone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$phone">UNL_UCBCN_Account::$phone</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$phone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$phone">UNL_UCBCN_Location::$phone</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$phone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$phone">UNL_UCBCN_Publiccontact::$phone</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$playertype</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$playertype">UNL_UCBCN_Webcast::$playertype</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$price</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#var$price">UNL_UCBCN_Admissioncharge::$price</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$privatecomment</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$privatecomment">UNL_UCBCN_Event::$privatecomment</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="const-title">PHPUnit_MAIN_METHOD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_tests---AllTests.php.php#definePHPUnit_MAIN_METHOD">PHPUnit_MAIN_METHOD</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodpostGenerateForm">UNL_UCBCN_User::postGenerateForm()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodpostGenerateForm">UNL_UCBCN_Subscription::postGenerateForm()</a> in Subscription.php</div>
							<div class="index-item-description">Called after the form is generated for form modifications.</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodpostGenerateForm">UNL_UCBCN_Eventdatetime::postGenerateForm()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodpostGenerateForm">UNL_UCBCN_Calendar::postGenerateForm()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodpostGenerateForm">UNL_UCBCN_Account::postGenerateForm()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodpostGenerateForm">UNL_UCBCN_Event::postGenerateForm()</a> in Event.php</div>
							<div class="index-item-description">Called after the form is generated for additional formatting.</div>
					</dd>
			<dt class="field">
						<span class="method-title">postProcessPrompts</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodpostProcessPrompts">UNL_UCBCN_setup_postinstall::postProcessPrompts()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Change questions asked if necessary.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodpreGenerateForm">UNL_UCBCN_Event_targets_audience::preGenerateForm()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodpreGenerateForm">UNL_UCBCN_Subscription::preGenerateForm()</a> in Subscription.php</div>
							<div class="index-item-description">Called before the form is generated.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodpreGenerateForm">UNL_UCBCN_Calendar::preGenerateForm()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodpreGenerateForm">UNL_UCBCN_Account::preGenerateForm()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodpreGenerateForm">UNL_UCBCN_Event_isopento_audience::preGenerateForm()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodpreGenerateForm">UNL_UCBCN_Event::preGenerateForm()</a> in Event.php</div>
							<div class="index-item-description">Called before the form is generated.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodpreGenerateForm">UNL_UCBCN_Eventdatetime::preGenerateForm()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodpreGenerateForm">UNL_UCBCN_Event_has_sponsor::preGenerateForm()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodpreGenerateForm">UNL_UCBCN_Event_has_eventtype::preGenerateForm()</a> in Event_has_eventtype.php</div>
							<div class="index-item-description">Called before the form is generated.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preGenerateForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodpreGenerateForm">UNL_UCBCN_User::preGenerateForm()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">prepareLinkedDataObject</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodprepareLinkedDataObject">UNL_UCBCN_User::prepareLinkedDataObject()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">prepareLinkedDataObject</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodprepareLinkedDataObject">UNL_UCBCN_Eventdatetime::prepareLinkedDataObject()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">prepareLinkedDataObject</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodprepareLinkedDataObject">UNL_UCBCN_Event::prepareLinkedDataObject()</a> in Event.php</div>
							<div class="index-item-description">Called before linked dataobjects are used to restrict the results to a subset</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodpreProcessForm">UNL_UCBCN_Subscription::preProcessForm()</a> in Subscription.php</div>
							<div class="index-item-description">Called before the form is processed to modify certain values.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodpreProcessForm">UNL_UCBCN_Event_has_sponsor::preProcessForm()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodpreProcessForm">UNL_UCBCN_Event_isopento_audience::preProcessForm()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodpreProcessForm">UNL_UCBCN_Event_targets_audience::preProcessForm()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodpreProcessForm">UNL_UCBCN_Eventdatetime::preProcessForm()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodpreProcessForm">UNL_UCBCN_Event::preProcessForm()</a> in Event.php</div>
							<div class="index-item-description">Called before the form values are processed and populate the object.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preProcessForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodpreProcessForm">UNL_UCBCN_Event_has_eventtype::preProcessForm()</a> in Event_has_eventtype.php</div>
							<div class="index-item-description">Called before the form is processed to modify values submitted.</div>
					</dd>
			<dt class="field">
						<span class="method-title">process</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodprocess">UNL_UCBCN_Subscription::process()</a> in Subscription.php</div>
							<div class="index-item-description">Processes this subscription and adds events not currently  added to the calendar this subscription is for.</div>
					</dd>
			<dt class="field">
						<span class="method-title">processFileAttachments</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodprocessFileAttachments">UNL_UCBCN_Event::processFileAttachments()</a> in Event.php</div>
							<div class="index-item-description">This function processes any posted files,  sepcifically the images for an event.</div>
					</dd>
			<dt class="field">
						<span class="method-title">processSubscriptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodprocessSubscriptions">UNL_UCBCN_Calendar_has_event::processSubscriptions()</a> in Calendar_has_event.php</div>
							<div class="index-item-description">sets or gets the current status of processing subscriptions. This is used to  prevent other calendars from processing additional subscriptions while one is  in progress - a poor man's lock on the database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">processSubscriptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodprocessSubscriptions">UNL_UCBCN_Calendar::processSubscriptions()</a> in Calendar.php</div>
							<div class="index-item-description">Finds the subscriptions this calendar has, and processes them.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Performer.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Performer.php.php">Performer.php</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Permission.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Permission.php.php">Permission.php</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Publiccontact.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Publiccontact.php.php">Publiccontact.php</a> in Publiccontact.php</div>
					</dd>
		</dl>
	<a name="r"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">r</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$recommendationswithinaccount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$recommendationswithinaccount">UNL_UCBCN_Calendar::$recommendationswithinaccount</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$refreshments</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$refreshments">UNL_UCBCN_Event::$refreshments</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$related</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$related">UNL_UCBCN_Webcastlink::$related</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$related_event_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#var$related_event_id">UNL_UCBCN_Relatedevent::$related_event_id</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$relationtype</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#var$relationtype">UNL_UCBCN_Relatedevent::$relationtype</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$role_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$role_id">UNL_UCBCN_Performer::$role_id</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$room</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$room">UNL_UCBCN_Eventdatetime::$room</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$room</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$room">UNL_UCBCN_Location::$room</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$room</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$room">UNL_UCBCN_Publiccontact::$room</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">removeEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodremoveEvent">UNL_UCBCN_Calendar::removeEvent()</a> in Calendar.php</div>
							<div class="index-item-description">Removes the given event from the calendar_has_event table.</div>
					</dd>
			<dt class="field">
						<span class="method-title">removeUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodremoveUser">UNL_UCBCN_Calendar::removeUser()</a> in Calendar.php</div>
							<div class="index-item-description">Removes a user from the current calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodrun">UNL_UCBCN_setup_postinstall::run()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Run the postinstall script.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Relatedevent.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Relatedevent.php.php">Relatedevent.php</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Role.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Role.php.php">Role.php</a> in Role.php</div>
					</dd>
		</dl>
	<a name="s"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">s</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$schema</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#var$schema">UNL_UCBCN_SchemaTest::$schema</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$searchcriteria</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$searchcriteria">UNL_UCBCN_Subscription::$searchcriteria</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sequencenumber</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$sequencenumber">UNL_UCBCN_Webcastlink::$sequencenumber</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$shortdescription</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$shortdescription">UNL_UCBCN_Event::$shortdescription</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$shortname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$shortname">UNL_UCBCN_Calendar::$shortname</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$source</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$source">UNL_UCBCN_Calendar_has_event::$source</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sponsortype</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$sponsortype">UNL_UCBCN_Sponsor::$sponsortype</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sponsor_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$sponsor_id">UNL_UCBCN_Account::$sponsor_id</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sponsor_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$sponsor_id">UNL_UCBCN_Event_has_sponsor::$sponsor_id</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$standard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$standard">UNL_UCBCN_Location::$standard</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$standard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$standard">UNL_UCBCN_Sponsor::$standard</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$standard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#var$standard">UNL_UCBCN_Role::$standard</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$standard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#var$standard">UNL_UCBCN_Audience::$standard</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$standard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$standard">UNL_UCBCN_Eventtype::$standard</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$starttime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$starttime">UNL_UCBCN_Eventdatetime::$starttime</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$state</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$state">UNL_UCBCN_Publiccontact::$state</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$state</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$state">UNL_UCBCN_Location::$state</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$state</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$state">UNL_UCBCN_Account::$state</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$status</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$status">UNL_UCBCN_Calendar_has_event::$status</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$status</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#var$status">UNL_UCBCN_EventListing::$status</a> in EventListing.php</div>
							<div class="index-item-description">Events of a given status</div>
					</dd>
			<dt class="field">
						<span class="var-title">$status</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$status">UNL_UCBCN_Webcast::$status</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$status</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$status">UNL_UCBCN_Event::$status</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$status</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$status">UNL_UCBCN_Admissioninfo::$status</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$streetaddress1</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$streetaddress1">UNL_UCBCN_Location::$streetaddress1</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$streetaddress1</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$streetaddress1">UNL_UCBCN_Account::$streetaddress1</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$streetaddress2</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$streetaddress2">UNL_UCBCN_Location::$streetaddress2</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$streetaddress2</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$streetaddress2">UNL_UCBCN_Account::$streetaddress2</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$subtitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$subtitle">UNL_UCBCN_Event::$subtitle</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sendObjectOutput</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodsendObjectOutput">UNL_UCBCN::sendObjectOutput()</a> in UCBCN.php</div>
							<div class="index-item-description">Prepares an object for output, and displays it with a corresponding template.</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#methodsequenceKey">UNL_UCBCN_Relatedevent::sequenceKey()</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodsequenceKey">UNL_UCBCN_Event_isopento_audience::sequenceKey()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodsequenceKey">UNL_UCBCN_Event_has_sponsor::sequenceKey()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#methodsequenceKey">UNL_UCBCN_Role::sequenceKey()</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodsequenceKey">UNL_UCBCN_Subscription::sequenceKey()</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#methodsequenceKey">UNL_UCBCN_Publiccontact::sequenceKey()</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#methodsequenceKey">UNL_UCBCN_Performer::sequenceKey()</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#methodsequenceKey">UNL_UCBCN_Keyword::sequenceKey()</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#methodsequenceKey">UNL_UCBCN_Permission::sequenceKey()</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#methodsequenceKey">UNL_UCBCN_Location::sequenceKey()</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodsequenceKey">UNL_UCBCN_Event_targets_audience::sequenceKey()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodsequenceKey">UNL_UCBCN_Eventdatetime::sequenceKey()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#methodsequenceKey">UNL_UCBCN_Webcast::sequenceKey()</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#methodsequenceKey">UNL_UCBCN_Audience::sequenceKey()</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodsequenceKey">UNL_UCBCN_Calendar::sequenceKey()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodsequenceKey">UNL_UCBCN_Calendar_has_event::sequenceKey()</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#methodsequenceKey">UNL_UCBCN_Attendancerestriction::sequenceKey()</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#methodsequenceKey">UNL_UCBCN_Admissioninfo::sequenceKey()</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodsequenceKey">UNL_UCBCN_Account::sequenceKey()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#methodsequenceKey">UNL_UCBCN_Session::sequenceKey()</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#methodsequenceKey">UNL_UCBCN_Admissioncharge::sequenceKey()</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#methodsequenceKey">UNL_UCBCN_Webcastlink::sequenceKey()</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#methodsequenceKey">UNL_UCBCN_Document::sequenceKey()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodsequenceKey">UNL_UCBCN_User_has_permission::sequenceKey()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodsequenceKey">UNL_UCBCN_Event_has_eventtype::sequenceKey()</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#methodsequenceKey">UNL_UCBCN_Sponsor::sequenceKey()</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#methodsequenceKey">UNL_UCBCN_Eventtype::sequenceKey()</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodsequenceKey">UNL_UCBCN_User::sequenceKey()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodsequenceKey">UNL_UCBCN_Event::sequenceKey()</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">sequenceKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#methodsequenceKey">UNL_UCBCN_Event_has_keyword::sequenceKey()</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setCachingService</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodsetCachingService">UNL_UCBCN::setCachingService()</a> in UCBCN.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setDSN</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodsetDSN">UNL_UCBCN_setup_postinstall::setDSN()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Set the DSN based on user responses.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodsetOptions">UNL_UCBCN::setOptions()</a> in UCBCN.php</div>
							<div class="index-item-description">This function sets parameters for this class.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setUp</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodsetUp">UNL_UCBCN_SchemaTest::setUp()</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setUp</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php#methodsetUp">UNL_UCBCN_InstallTest::setUp()</a> in InstallTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setupDBConn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodsetupDBConn">UNL_UCBCN::setupDBConn()</a> in UCBCN.php</div>
							<div class="index-item-description">This function initializes the information used by the database  connections.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setupEventTypes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodsetupEventTypes">UNL_UCBCN_setup_postinstall::setupEventTypes()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Add some event types to the system so they have a starting point.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setupPermissions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodsetupPermissions">UNL_UCBCN_setup_postinstall::setupPermissions()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">This function calls the backend and inserts the default permissions  for the system.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setupSponsors</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodsetupSponsors">UNL_UCBCN_setup_postinstall::setupSponsors()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Add some sponsors to the system so they have a starting point.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showError</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methodshowError">UNL_UCBCN::showError()</a> in UCBCN.php</div>
							<div class="index-item-description">Simple function which displays the error to the end user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#methodstaticGet">UNL_UCBCN_Webcast::staticGet()</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#methodstaticGet">UNL_UCBCN_Webcastlink::staticGet()</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodstaticGet">UNL_UCBCN_User_has_permission::staticGet()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodstaticGet">UNL_UCBCN_User::staticGet()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#methodstaticGet">UNL_UCBCN_Sponsor::staticGet()</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodstaticGet">UNL_UCBCN_Subscription::staticGet()</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#methodstaticGet">UNL_UCBCN_Keyword::staticGet()</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodstaticGet">UNL_UCBCN_Event::staticGet()</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#methodstaticGet">UNL_UCBCN_Document::staticGet()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodstaticGet">UNL_UCBCN_Eventdatetime::staticGet()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#methodstaticGet">UNL_UCBCN_Eventtype::staticGet()</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodstaticGet">UNL_UCBCN_Event_has_eventtype::staticGet()</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodstaticGet">UNL_UCBCN_Calendar_has_event::staticGet()</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodstaticGet">UNL_UCBCN_Calendar::staticGet()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#methodstaticGet">UNL_UCBCN_Admissioncharge::staticGet()</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodstaticGet">UNL_UCBCN_Account::staticGet()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#methodstaticGet">UNL_UCBCN_Admissioninfo::staticGet()</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#methodstaticGet">UNL_UCBCN_Attendancerestriction::staticGet()</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#methodstaticGet">UNL_UCBCN_Audience::staticGet()</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#methodstaticGet">UNL_UCBCN_Event_has_keyword::staticGet()</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodstaticGet">UNL_UCBCN_Event_has_sponsor::staticGet()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#methodstaticGet">UNL_UCBCN_Relatedevent::staticGet()</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#methodstaticGet">UNL_UCBCN_Role::staticGet()</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#methodstaticGet">UNL_UCBCN_Session::staticGet()</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#methodstaticGet">UNL_UCBCN_Permission::staticGet()</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#methodstaticGet">UNL_UCBCN_Publiccontact::staticGet()</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodstaticGet">UNL_UCBCN_Event_isopento_audience::staticGet()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#methodstaticGet">UNL_UCBCN_Performer::staticGet()</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodstaticGet">UNL_UCBCN_Event_targets_audience::staticGet()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#methodstaticGet">UNL_UCBCN_Location::staticGet()</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">suite</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_AllTests.php#methodsuite">UNL_UCBCN_AllTests::suite()</a> in AllTests.php</div>
							<div class="index-item-description">Adds the UNL_UCBCNTest suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">SchemaTest.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_tests---SchemaTest.php.php">SchemaTest.php</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Session.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Session.php.php">Session.php</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Sponsor.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Sponsor.php.php">Sponsor.php</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Subscription.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Subscription.php.php">Subscription.php</a> in Subscription.php</div>
					</dd>
		</dl>
	<a name="t"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">t</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$template">UNL_UCBCN::$template</a> in UCBCN.php</div>
							<div class="index-item-description">The template chosen to display in, defaults to default.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$template_path</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#var$template_path">UNL_UCBCN::$template_path</a> in UCBCN.php</div>
							<div class="index-item-description">The filesystem path to the templates.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$timeperiod</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$timeperiod">UNL_UCBCN_Subscription::$timeperiod</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$title</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$title">UNL_UCBCN_Event::$title</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$title</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$title">UNL_UCBCN_Webcast::$title</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$transparency</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$transparency">UNL_UCBCN_Event::$transparency</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$type</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$type">UNL_UCBCN_Performer::$type</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$type</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$type">UNL_UCBCN_Location::$type</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$type</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$type">UNL_UCBCN_Admissioninfo::$type</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$type</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#var$type">UNL_UCBCN_EventListing::$type</a> in EventListing.php</div>
							<div class="index-item-description">holds the type for this eventlisting... could be upcoming, ongoing, search etc</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#methodtable">UNL_UCBCN_Webcastlink::table()</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#methodtable">UNL_UCBCN_Location::table()</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#methodtable">UNL_UCBCN_Session::table()</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#methodtable">UNL_UCBCN_Keyword::table()</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#methodtable">UNL_UCBCN_Permission::table()</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#methodtable">UNL_UCBCN_Publiccontact::table()</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodtable">UNL_UCBCN_Subscription::table()</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#methodtable">UNL_UCBCN_Role::table()</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#methodtable">UNL_UCBCN_Sponsor::table()</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#methodtable">UNL_UCBCN_Relatedevent::table()</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#methodtable">UNL_UCBCN_Account::table()</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#methodtable">UNL_UCBCN_Event_targets_audience::table()</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#methodtable">UNL_UCBCN_Calendar::table()</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodtable">UNL_UCBCN_Calendar_has_event::table()</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#methodtable">UNL_UCBCN_Document::table()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#methodtable">UNL_UCBCN_Audience::table()</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#methodtable">UNL_UCBCN_Attendancerestriction::table()</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#methodtable">UNL_UCBCN_Admissioncharge::table()</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#methodtable">UNL_UCBCN_Admissioninfo::table()</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodtable">UNL_UCBCN_Event::table()</a> in Event.php</div>
							<div class="index-item-description">Returns an associative array of the fields for this table.</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodtable">UNL_UCBCN_Eventdatetime::table()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#methodtable">UNL_UCBCN_Event_isopento_audience::table()</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodtable">UNL_UCBCN_User::table()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#methodtable">UNL_UCBCN_User_has_permission::table()</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#methodtable">UNL_UCBCN_Event_has_sponsor::table()</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#methodtable">UNL_UCBCN_Event_has_keyword::table()</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#methodtable">UNL_UCBCN_Webcast::table()</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#methodtable">UNL_UCBCN_Eventtype::table()</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#methodtable">UNL_UCBCN_Event_has_eventtype::table()</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">tearDown</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodtearDown">UNL_UCBCN_SchemaTest::tearDown()</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">testBackendInfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php#methodtestBackendInfo">UNL_UCBCN_InstallTest::testBackendInfo()</a> in InstallTest.php</div>
							<div class="index-item-description">Test that the backend can get a simple user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testBackendInstallScript</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php#methodtestBackendInstallScript">UNL_UCBCN_InstallTest::testBackendInstallScript()</a> in InstallTest.php</div>
							<div class="index-item-description">Test the installation script</div>
					</dd>
			<dt class="field">
						<span class="method-title">testCreateDatabase</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodtestCreateDatabase">UNL_UCBCN_SchemaTest::testCreateDatabase()</a> in SchemaTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">testPermissions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php#methodtestPermissions">UNL_UCBCN_InstallTest::testPermissions()</a> in InstallTest.php</div>
							<div class="index-item-description">Test that permissions were created successfully.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testUpdateDatabase</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php#methodtestUpdateDatabase">UNL_UCBCN_SchemaTest::testUpdateDatabase()</a> in SchemaTest.php</div>
					</dd>
		</dl>
	<a name="u"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">u</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$uid">UNL_UCBCN_User::$uid</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidcreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$uidcreated">UNL_UCBCN_Calendar_has_event::$uidcreated</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidcreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$uidcreated">UNL_UCBCN_Calendar::$uidcreated</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidcreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$uidcreated">UNL_UCBCN_Subscription::$uidcreated</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidcreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$uidcreated">UNL_UCBCN_User::$uidcreated</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidcreated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$uidcreated">UNL_UCBCN_Event::$uidcreated</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidlastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$uidlastupdated">UNL_UCBCN_Event::$uidlastupdated</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidlastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$uidlastupdated">UNL_UCBCN_Calendar_has_event::$uidlastupdated</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidlastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$uidlastupdated">UNL_UCBCN_Calendar::$uidlastupdated</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidlastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$uidlastupdated">UNL_UCBCN_Subscription::$uidlastupdated</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uidlastupdated</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$uidlastupdated">UNL_UCBCN_User::$uidlastupdated</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uploadedcss</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$uploadedcss">UNL_UCBCN_Calendar::$uploadedcss</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uploadedxsl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$uploadedxsl">UNL_UCBCN_Calendar::$uploadedxsl</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#var$url">UNL_UCBCN_Document::$url</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#var$url">UNL_UCBCN_EventInstance::$url</a> in EventInstance.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$url">UNL_UCBCN_Webcastlink::$url</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$user_uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#var$user_uid">UNL_UCBCN_Session::$user_uid</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$user_uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$user_uid">UNL_UCBCN_User_has_permission::$user_uid</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">User.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---User.php.php">User.php</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">User_has_permission.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---User_has_permission.php.php">User_has_permission.php</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">UCBCN.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN.php.php">UCBCN.php</a> in UCBCN.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">UCBCN_setup.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN_setup.php.php">UCBCN_setup.php</a> in UCBCN_setup.php</div>
					</dd>
			<dt class="field">
						UNL_UCBCN
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a> in UCBCN.php</div>
							<div class="index-item-description">The backend system object for the UNL UCBCN calendar system.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Account
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a> in Account.php</div>
							<div class="index-item-description">UNL_UCBCN_Account object stores information for an account record within  the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Admissioncharge
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php">UNL_UCBCN_Admissioncharge</a> in Admissioncharge.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Admissioninfo
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php">UNL_UCBCN_Admissioninfo</a> in Admissioninfo.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_AllTests
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_AllTests.php">UNL_UCBCN_AllTests</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Attendancerestriction
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php">UNL_UCBCN_Attendancerestriction</a> in Attendancerestriction.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Audience
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php">UNL_UCBCN_Audience</a> in Audience.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Calendar
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a> in Calendar.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Calendar_has_event
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php">UNL_UCBCN_Calendar_has_event</a> in Calendar_has_event.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Document
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php">UNL_UCBCN_Document</a> in Document.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Error
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Error.php">UNL_UCBCN_Error</a> in Error.php</div>
							<div class="index-item-description">Extend PEAR_Error for error handling.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a> in Event.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Eventdatetime
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a> in Eventdatetime.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_EventInstance
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php">UNL_UCBCN_EventInstance</a> in EventInstance.php</div>
							<div class="index-item-description">Generic object to hold a single event, and a single event date time.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_EventListing
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php">UNL_UCBCN_EventListing</a> in EventListing.php</div>
							<div class="index-item-description">This class holds all the events for the list.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Eventtype
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php">UNL_UCBCN_Eventtype</a> in Eventtype.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event_has_eventtype
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php">UNL_UCBCN_Event_has_eventtype</a> in Event_has_eventtype.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event_has_keyword
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php">UNL_UCBCN_Event_has_keyword</a> in Event_has_keyword.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event_has_sponsor
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php">UNL_UCBCN_Event_has_sponsor</a> in Event_has_sponsor.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event_isopento_audience
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php">UNL_UCBCN_Event_isopento_audience</a> in Event_isopento_audience.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Event_targets_audience
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php">UNL_UCBCN_Event_targets_audience</a> in Event_targets_audience.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Filter
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a> in Filter.php</div>
							<div class="index-item-description">Base class for filtering</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_InstallTest
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_InstallTest.php">UNL_UCBCN_InstallTest</a> in InstallTest.php</div>
							<div class="index-item-description">InstallTest class.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Keyword
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php">UNL_UCBCN_Keyword</a> in Keyword.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Location
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php">UNL_UCBCN_Location</a> in Location.php</div>
							<div class="index-item-description">ORM for a Location record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Performer
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php">UNL_UCBCN_Performer</a> in Performer.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Permission
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php">UNL_UCBCN_Permission</a> in Permission.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Publiccontact
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php">UNL_UCBCN_Publiccontact</a> in Publiccontact.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Relatedevent
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php">UNL_UCBCN_Relatedevent</a> in Relatedevent.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Role
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php">UNL_UCBCN_Role</a> in Role.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_SchemaTest
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_SchemaTest.php">UNL_UCBCN_SchemaTest</a> in SchemaTest.php</div>
							<div class="index-item-description">This class can be used by PHPUnit to test the UNL_UCBCN database schema.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Session
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php">UNL_UCBCN_Session</a> in Session.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_setup_postinstall
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php">UNL_UCBCN_setup_postinstall</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Class used by the PEAR installer which is executed after install to do  post installation tasks such as database creation/updates as well as  replacements and configuration.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Sponsor
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php">UNL_UCBCN_Sponsor</a> in Sponsor.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Subscription
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php">UNL_UCBCN_Subscription</a> in Subscription.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_User
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a> in User.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_User_has_permission
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php">UNL_UCBCN_User_has_permission</a> in User_has_permission.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Webcast
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php">UNL_UCBCN_Webcast</a> in Webcast.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Webcastlink
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php">UNL_UCBCN_Webcastlink</a> in Webcastlink.php</div>
							<div class="index-item-description">ORM for a record within the database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">update</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#methodupdate">UNL_UCBCN_Eventdatetime::update()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">update</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#methodupdate">UNL_UCBCN_Event::update()</a> in Event.php</div>
							<div class="index-item-description">Updates the record for this event in the database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">update</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodupdate">UNL_UCBCN_Subscription::update()</a> in Subscription.php</div>
							<div class="index-item-description">Performs an update on this subscription. This will re-evaluate all the events  to see if they match the subscription and add them in.</div>
					</dd>
			<dt class="field">
						<span class="method-title">update</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#methodupdate">UNL_UCBCN_User::update()</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">update</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#methodupdate">UNL_UCBCN_Calendar_has_event::update()</a> in Calendar_has_event.php</div>
							<div class="index-item-description">Performs an update on this calendar_has_event record.</div>
					</dd>
			<dt class="field">
						<span class="method-title">updateSubscribedCalendars</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#methodupdateSubscribedCalendars">UNL_UCBCN_Subscription::updateSubscribedCalendars()</a> in Subscription.php</div>
							<div class="index-item-description">This function is called when a calendar has just had an event added. Called  from UNL_UCBCN_Calendar_has_event-&gt;insert();</div>
					</dd>
			<dt class="field">
						<span class="method-title">upgradeDatabase</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_setup_postinstall.php#methodupgradeDatabase">UNL_UCBCN_setup_postinstall::upgradeDatabase()</a> in UCBCN_setup.php</div>
							<div class="index-item-description">Creates or updates the calendar system database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">userCanEditEvent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoduserCanEditEvent">UNL_UCBCN::userCanEditEvent()</a> in UCBCN.php</div>
							<div class="index-item-description">This function determines if a user can edit the details of a specific event.</div>
					</dd>
			<dt class="field">
						<span class="method-title">userHasPermission</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#methoduserHasPermission">UNL_UCBCN::userHasPermission()</a> in UCBCN.php</div>
							<div class="index-item-description">Checks if a user has a given permission over the account.</div>
					</dd>
		</dl>
	<a name="w"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">w</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$webcast_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$webcast_id">UNL_UCBCN_Webcastlink::$webcast_id</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$webpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$webpageurl">UNL_UCBCN_Sponsor::$webpageurl</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$webpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$webpageurl">UNL_UCBCN_Location::$webpageurl</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$webpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$webpageurl">UNL_UCBCN_Publiccontact::$webpageurl</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$webpageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$webpageurl">UNL_UCBCN_Event::$webpageurl</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$website</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$website">UNL_UCBCN_Account::$website</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$website</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$website">UNL_UCBCN_Calendar::$website</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Webcast.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Webcast.php.php">Webcast.php</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Webcastlink.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/_UNL---UCBCN---Webcastlink.php.php">Webcastlink.php</a> in Webcastlink.php</div>
					</dd>
		</dl>
	<a name="z"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">z</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$zip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$zip">UNL_UCBCN_Publiccontact::$zip</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$zip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$zip">UNL_UCBCN_Location::$zip</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$zip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$zip">UNL_UCBCN_Account::$zip</a> in Account.php</div>
					</dd>
		</dl>
	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Performer.php#var$__table">UNL_UCBCN_Performer::$__table</a> in Performer.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Permission.php#var$__table">UNL_UCBCN_Permission::$__table</a> in Permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Publiccontact.php#var$__table">UNL_UCBCN_Publiccontact::$__table</a> in Publiccontact.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Location.php#var$__table">UNL_UCBCN_Location::$__table</a> in Location.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Keyword.php#var$__table">UNL_UCBCN_Keyword::$__table</a> in Keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Account.php#var$__table">UNL_UCBCN_Account::$__table</a> in Account.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_targets_audience.php#var$__table">UNL_UCBCN_Event_targets_audience::$__table</a> in Event_targets_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Relatedevent.php#var$__table">UNL_UCBCN_Relatedevent::$__table</a> in Relatedevent.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Role.php#var$__table">UNL_UCBCN_Role::$__table</a> in Role.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User_has_permission.php#var$__table">UNL_UCBCN_User_has_permission::$__table</a> in User_has_permission.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcast.php#var$__table">UNL_UCBCN_Webcast::$__table</a> in Webcast.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Webcastlink.php#var$__table">UNL_UCBCN_Webcastlink::$__table</a> in Webcastlink.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#var$__table">UNL_UCBCN_User::$__table</a> in User.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Subscription.php#var$__table">UNL_UCBCN_Subscription::$__table</a> in Subscription.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Session.php#var$__table">UNL_UCBCN_Session::$__table</a> in Session.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Sponsor.php#var$__table">UNL_UCBCN_Sponsor::$__table</a> in Sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_sponsor.php#var$__table">UNL_UCBCN_Event_has_sponsor::$__table</a> in Event_has_sponsor.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_isopento_audience.php#var$__table">UNL_UCBCN_Event_isopento_audience::$__table</a> in Event_isopento_audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event.php#var$__table">UNL_UCBCN_Event::$__table</a> in Event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#var$__table">UNL_UCBCN_Eventdatetime::$__table</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_keyword.php#var$__table">UNL_UCBCN_Event_has_keyword::$__table</a> in Event_has_keyword.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Document.php#var$__table">UNL_UCBCN_Document::$__table</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar_has_event.php#var$__table">UNL_UCBCN_Calendar_has_event::$__table</a> in Calendar_has_event.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Audience.php#var$__table">UNL_UCBCN_Audience::$__table</a> in Audience.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Attendancerestriction.php#var$__table">UNL_UCBCN_Attendancerestriction::$__table</a> in Attendancerestriction.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Event_has_eventtype.php#var$__table">UNL_UCBCN_Event_has_eventtype::$__table</a> in Event_has_eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioncharge.php#var$__table">UNL_UCBCN_Admissioncharge::$__table</a> in Admissioncharge.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventtype.php#var$__table">UNL_UCBCN_Eventtype::$__table</a> in Eventtype.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Admissioninfo.php#var$__table">UNL_UCBCN_Admissioninfo::$__table</a> in Admissioninfo.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Calendar.php#var$__table">UNL_UCBCN_Calendar::$__table</a> in Calendar.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">_array2date</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Eventdatetime.php#method_array2date">UNL_UCBCN_Eventdatetime::_array2date()</a> in Eventdatetime.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Error.php#method__construct">UNL_UCBCN_Error::__construct()</a> in Error.php</div>
							<div class="index-item-description">UNL_UCBCN_Error constructor.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_Filter.php#method__construct">UNL_UCBCN_Filter::__construct()</a> in Filter.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventListing.php#method__construct">UNL_UCBCN_EventListing::__construct()</a> in EventListing.php</div>
							<div class="index-item-description">Constructor</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_EventInstance.php#method__construct">UNL_UCBCN_EventInstance::__construct()</a> in EventInstance.php</div>
							<div class="index-item-description">constructor</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN.php#method__construct">UNL_UCBCN::__construct()</a> in UCBCN.php</div>
							<div class="index-item-description">Constructor for the UCBCN object, initializes member variables and sets up  connection details for the database.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN/UNL_UCBCN_User.php#method__toString">UNL_UCBCN_User::__toString()</a> in User.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#h">h</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#j">j</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#k">k</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#w">w</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#z">z</a>
	<a class="index-letter" href="/docs/UNL_UCBCN/elementindex.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>