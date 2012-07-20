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
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/UNL_UCBCN_Manager/elementindex_UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#a">a</a>
	<a class="index-letter" href="elementindex.html#c">c</a>
	<a class="index-letter" href="elementindex.html#d">d</a>
	<a class="index-letter" href="elementindex.html#e">e</a>
	<a class="index-letter" href="elementindex.html#f">f</a>
	<a class="index-letter" href="elementindex.html#g">g</a>
	<a class="index-letter" href="elementindex.html#i">i</a>
	<a class="index-letter" href="elementindex.html#l">l</a>
	<a class="index-letter" href="elementindex.html#m">m</a>
	<a class="index-letter" href="elementindex.html#n">n</a>
	<a class="index-letter" href="elementindex.html#o">o</a>
	<a class="index-letter" href="elementindex.html#p">p</a>
	<a class="index-letter" href="elementindex.html#r">r</a>
	<a class="index-letter" href="elementindex.html#s">s</a>
	<a class="index-letter" href="elementindex.html#t">t</a>
	<a class="index-letter" href="elementindex.html#u">u</a>
	<a class="index-letter" href="elementindex.html#v">v</a>
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
						<span class="var-title">$a</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$a">UNL_UCBCN_Manager::$a</a> in Manager.php</div>
							<div class="index-item-description">Auth object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$account</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$account">UNL_UCBCN_Manager::$account</a> in Manager.php</div>
							<div class="index-item-description">UNL_UCBCN_Account</div>
					</dd>
			<dt class="field">
						<span class="var-title">$author</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#var$author">UNL_UCBCN_Manager_Plugin::$author</a> in Plugin.php</div>
							<div class="index-item-description">Name of the author of the plugin.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addToCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php#methodaddToCalendar">UNL_UCBCN_Manager_EventForm::addToCalendar()</a> in EventForm.php</div>
							<div class="index-item-description">Adds an event to the calendar currently in the manager member variable calendar.</div>
					</dd>
			<dt class="field">
						<span class="include-title">AllTests.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_tests---AllTests.php.php">AllTests.php</a> in AllTests.php</div>
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
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$calendar">UNL_UCBCN_Manager::$calendar</a> in Manager.php</div>
							<div class="index-item-description">UNL_UCBCN_Calendar this user is managing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendars</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#var$calendars">UNL_UCBCN_Manager_Recommend::$calendars</a> in Recommend.php</div>
							<div class="index-item-description">Calendars which this user has permission to post events to by permission.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendarselect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$calendarselect">UNL_UCBCN_Manager::$calendarselect</a> in Manager.php</div>
							<div class="index-item-description">Indicates which calendars you have access to.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createAccount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#var$createAccount">UNL_UCBCN_Manager_setup_postinstall::$createAccount</a> in Manager_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#var$createFiles">UNL_UCBCN_Manager_setup_postinstall::$createFiles</a> in Manager_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createIndex</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#var$createIndex">UNL_UCBCN_Manager_setup_postinstall::$createIndex</a> in Manager_setup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">createAccount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodcreateAccount">UNL_UCBCN_Manager_setup_postinstall::createAccount()</a> in Manager_setup.php</div>
							<div class="index-item-description">This function will create a calendar account if it  does not already exist.</div>
					</dd>
			<dt class="field">
						<span class="method-title">createFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodcreateFiles">UNL_UCBCN_Manager_setup_postinstall::createFiles()</a> in Manager_setup.php</div>
							<div class="index-item-description">This function creates/upgrades the template files, as well as the sample index page.</div>
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
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$doctitle">UNL_UCBCN_Manager::$doctitle</a> in Manager.php</div>
							<div class="index-item-description">Title for the page.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#var$dsn">UNL_UCBCN_Manager_setup_postinstall::$dsn</a> in Manager_setup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">dircpy</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methoddircpy">UNL_UCBCN_Manager_setup_postinstall::dircpy()</a> in Manager_setup.php</div>
							<div class="index-item-description">This function copies files from source to destination.</div>
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
						<span class="var-title">$events</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#var$events">UNL_UCBCN_Manager_Recommend::$events</a> in Recommend.php</div>
							<div class="index-item-description">Events to build a recommendation form for.</div>
					</dd>
			<dt class="field">
						<span class="method-title">endSession</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodendSession">UNL_UCBCN_Manager::endSession()</a> in Manager.php</div>
							<div class="index-item-description">Ends a calendar management session for the current user.</div>
					</dd>
			<dt class="field">
						<span class="include-title">EventForm.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager---EventForm.php.php">EventForm.php</a> in EventForm.php</div>
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
						<span class="var-title">$frontenduri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$frontenduri">UNL_UCBCN_Manager::$frontenduri</a> in Manager.php</div>
							<div class="index-item-description">URI to the public frontend UNL_UCBCN_Frontend</div>
					</dd>
			<dt class="field">
						<span class="method-title">file_str_replace</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodfile_str_replace">UNL_UCBCN_Manager_setup_postinstall::file_str_replace()</a> in Manager_setup.php</div>
							<div class="index-item-description">Replaces text within files.</div>
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
						<span class="method-title">getCalendarsWithPermission</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#methodgetCalendarsWithPermission">UNL_UCBCN_Manager_Recommend::getCalendarsWithPermission()</a> in Recommend.php</div>
							<div class="index-item-description">Returns an array of the allowed permissions by calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getPostedEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodgetPostedEvents">UNL_UCBCN_Manager::getPostedEvents()</a> in Manager.php</div>
							<div class="index-item-description">This function returns an array of all posted events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getRelatedLocationDateAndTimes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php#methodgetRelatedLocationDateAndTimes">UNL_UCBCN_Manager_EventForm::getRelatedLocationDateAndTimes()</a> in EventForm.php</div>
							<div class="index-item-description">Returns a html table of event date time and locations</div>
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
						<span class="include-title">index.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_index.php.php">index.php</a> in index.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">init</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodinit">UNL_UCBCN_Manager_setup_postinstall::init()</a> in Manager_setup.php</div>
							<div class="index-item-description">Initialize the post-install task.</div>
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
						<span class="include-title">Login.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager---Login.php.php">Login.php</a> in Login.php</div>
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
						<span class="var-title">$manager</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#var$manager">UNL_UCBCN_Manager_Plugin::$manager</a> in Plugin.php</div>
							<div class="index-item-description">Manager running this plugin.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$manager</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#var$manager">UNL_UCBCN_Manager_Recommend::$manager</a> in Recommend.php</div>
							<div class="index-item-description">Management interface to build a recommend page for.</div>
					</dd>
			<dt class="field">
						<span class="method-title">main</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_AllTests.php#methodmain">UNL_UCBCN_Manager_AllTests::main()</a> in AllTests.php</div>
							<div class="index-item-description">Runs the test suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Manager.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager.php.php">Manager.php</a> in Manager.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Manager_setup.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager_setup.php.php">Manager_setup.php</a> in Manager_setup.php</div>
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
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#var$name">UNL_UCBCN_Manager_Plugin::$name</a> in Plugin.php</div>
							<div class="index-item-description">Name for the plugin.</div>
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
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$output">UNL_UCBCN_Manager::$output</a> in Manager.php</div>
							<div class="index-item-description">Main content of the page sent to the client.</div>
					</dd>
			<dt class="field">
						<span class="method-title">outputData</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodoutputData">UNL_UCBCN_Manager_setup_postinstall::outputData()</a> in Manager_setup.php</div>
							<div class="index-item-description">takes in a string and sends it to the client.</div>
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
						<span class="var-title">$password_field</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php#var$password_field">UNL_UCBCN_Manager_Login::$password_field</a> in Login.php</div>
							<div class="index-item-description">Name of the form field for the password</div>
					</dd>
			<dt class="field">
						<span class="var-title">$plugins</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$plugins">UNL_UCBCN_Manager::$plugins</a> in Manager.php</div>
							<div class="index-item-description">Registered and running plugins.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$post_url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php#var$post_url">UNL_UCBCN_Manager_Login::$post_url</a> in Login.php</div>
							<div class="index-item-description">URL to post the form to.</div>
					</dd>
			<dt class="field">
						<span class="method-title">pagerWrapper</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodpagerWrapper">UNL_UCBCN_Manager::pagerWrapper()</a> in Manager.php</div>
							<div class="index-item-description">This function handles pagination of a database query.</div>
					</dd>
			<dt class="field">
						<span class="const-title">PHPUnit_MAIN_METHOD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_tests---AllTests.php.php#definePHPUnit_MAIN_METHOD">PHPUnit_MAIN_METHOD</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postProcessPrompts</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodpostProcessPrompts">UNL_UCBCN_Manager_setup_postinstall::postProcessPrompts()</a> in Manager_setup.php</div>
							<div class="index-item-description">Optionally used to alter responses from the prompted questions.</div>
					</dd>
			<dt class="field">
						<span class="method-title">processPostedEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodprocessPostedEvents">UNL_UCBCN_Manager::processPostedEvents()</a> in Manager.php</div>
							<div class="index-item-description">Runs actions on the posted events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">processPostStatusChange</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodprocessPostStatusChange">UNL_UCBCN_Manager::processPostStatusChange()</a> in Manager.php</div>
							<div class="index-item-description">Handles the posting of an updated event. This will alter the event's status  based on what the user chose within the manager interface.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Plugin.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager---Plugin.php.php">Plugin.php</a> in Plugin.php</div>
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
						<span class="var-title">$recommendable</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#var$recommendable">UNL_UCBCN_Manager_Recommend::$recommendable</a> in Recommend.php</div>
							<div class="index-item-description">Calendars which this user can recommend events to.</div>
					</dd>
			<dt class="field">
						<span class="method-title">registerPlugin</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodregisterPlugin">UNL_UCBCN_Manager::registerPlugin()</a> in Manager.php</div>
							<div class="index-item-description">Registers a plugin for use within the manager.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php#methodrun">UNL_UCBCN_Manager_setup_postinstall::run()</a> in Manager_setup.php</div>
							<div class="index-item-description">Hub for the post-install task.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodrun">UNL_UCBCN_Manager::run()</a> in Manager.php</div>
							<div class="index-item-description">This function is the hub for the manager frontend.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Recommend.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager---Recommend.php.php">Recommend.php</a> in Recommend.php</div>
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
						<span class="var-title">$sectitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$sectitle">UNL_UCBCN_Manager::$sectitle</a> in Manager.php</div>
							<div class="index-item-description">Section Title</div>
					</dd>
			<dt class="field">
						<span class="method-title">showAccountForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowAccountForm">UNL_UCBCN_Manager::showAccountForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns a form to edit the current acccount.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showAddUserForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowAddUserForm">UNL_UCBCN_Manager::showAddUserForm()</a> in Manager.php</div>
							<div class="index-item-description">Displays a form to add a user to the system.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showCalendarForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowCalendarForm">UNL_UCBCN_Manager::showCalendarForm()</a> in Manager.php</div>
							<div class="index-item-description">This function returns a form for editing the calendar details.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showCalendars</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowCalendars">UNL_UCBCN_Manager::showCalendars()</a> in Manager.php</div>
							<div class="index-item-description">This function returns a list of calendars for the current account.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showCalendarUsers</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowCalendarUsers">UNL_UCBCN_Manager::showCalendarUsers()</a> in Manager.php</div>
							<div class="index-item-description">This function returns a list of users that have 'some'  permission to the current calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showChooseCalendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowChooseCalendar">UNL_UCBCN_Manager::showChooseCalendar()</a> in Manager.php</div>
							<div class="index-item-description">This function returns all the calendars this user has access to.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showEventDateTimeForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowEventDateTimeForm">UNL_UCBCN_Manager::showEventDateTimeForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns a form for editing an event date &amp; time instance.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showEventListing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowEventListing">UNL_UCBCN_Manager::showEventListing()</a> in Manager.php</div>
							<div class="index-item-description">Shows the list of events for the current user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showEventSubmitForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowEventSubmitForm">UNL_UCBCN_Manager::showEventSubmitForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns a form for entering/editing an event.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showImportForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowImportForm">UNL_UCBCN_Manager::showImportForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns a html form for importing xml/.ics files.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showLoginForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowLoginForm">UNL_UCBCN_Manager::showLoginForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns login object which will be used for the user to authenticate with.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showPermissionsForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowPermissionsForm">UNL_UCBCN_Manager::showPermissionsForm()</a> in Manager.php</div>
							<div class="index-item-description">This function generates and returns a permissions form for the given user and calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showRecommendForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowRecommendForm">UNL_UCBCN_Manager::showRecommendForm()</a> in Manager.php</div>
							<div class="index-item-description">This form allows the user to recommend an event for other calendars.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showSearchResults</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowSearchResults">UNL_UCBCN_Manager::showSearchResults()</a> in Manager.php</div>
							<div class="index-item-description">Returns an event listing of search results.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showSubscribeForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowSubscribeForm">UNL_UCBCN_Manager::showSubscribeForm()</a> in Manager.php</div>
							<div class="index-item-description">Returns a form for subscribing to a calendar within the system.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showSubscriptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodshowSubscriptions">UNL_UCBCN_Manager::showSubscriptions()</a> in Manager.php</div>
							<div class="index-item-description">Returns a listing of the subscriptions for the current calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">startSession</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodstartSession">UNL_UCBCN_Manager::startSession()</a> in Manager.php</div>
							<div class="index-item-description">Begins a calendar management session for this user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">startup</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#methodstartup">UNL_UCBCN_Manager_Plugin::startup()</a> in Plugin.php</div>
							<div class="index-item-description">This will be called when the plugin is initialized on load of a page.</div>
					</dd>
			<dt class="field">
						<span class="method-title">startupPlugins</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodstartupPlugins">UNL_UCBCN_Manager::startupPlugins()</a> in Manager.php</div>
							<div class="index-item-description">This function initializes all plugins.</div>
					</dd>
			<dt class="field">
						<span class="method-title">suite</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_AllTests.php#methodsuite">UNL_UCBCN_Manager_AllTests::suite()</a> in AllTests.php</div>
							<div class="index-item-description">Adds the UNL_UCBCN_ManagerTest suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">SubForm.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/_UNL---UCBCN---Manager---SubForm.php.php">SubForm.php</a> in SubForm.php</div>
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
						<span class="method-title">toHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_SubForm.php#methodtoHtml">UNL_UCBCN_Manager_SubForm::toHtml()</a> in SubForm.php</div>
							<div class="index-item-description">renders the element</div>
					</dd>
			<dt class="field">
						<span class="method-title">toHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php#methodtoHtml">UNL_UCBCN_Manager_EventForm::toHtml()</a> in EventForm.php</div>
							<div class="index-item-description">Returns an HTML form for an event.</div>
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
						<span class="var-title">$uniquebody</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$uniquebody">UNL_UCBCN_Manager::$uniquebody</a> in Manager.php</div>
							<div class="index-item-description">Unique body ID</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#var$uri">UNL_UCBCN_Manager_Plugin::$uri</a> in Plugin.php</div>
							<div class="index-item-description">The URI to this plugin.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$uri">UNL_UCBCN_Manager::$uri</a> in Manager.php</div>
							<div class="index-item-description">URI to the management frontend</div>
					</dd>
			<dt class="field">
						<span class="var-title">$user</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#var$user">UNL_UCBCN_Manager::$user</a> in Manager.php</div>
							<div class="index-item-description">UNL_UCBCN_User object for the user who is logged in and managing a calendar.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$user_field</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php#var$user_field">UNL_UCBCN_Manager_Login::$user_field</a> in Login.php</div>
							<div class="index-item-description">Name of the form field for the user.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a> in Manager.php</div>
							<div class="index-item-description">Class which handles all event creation and authentication. This class acts as the basis for the  management portion of a university event publisher, through which users will log in and create and manage  their calendars.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_AllTests
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_AllTests.php">UNL_UCBCN_Manager_AllTests</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_EventForm
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php">UNL_UCBCN_Manager_EventForm</a> in EventForm.php</div>
							<div class="index-item-description">This class generates a form for an Event.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_Login
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php">UNL_UCBCN_Manager_Login</a> in Login.php</div>
							<div class="index-item-description">Simple object which will be used to display a login.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_Plugin
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php">UNL_UCBCN_Manager_Plugin</a> in Plugin.php</div>
							<div class="index-item-description">Abstract class plugins must extend and implement.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_Recommend
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php">UNL_UCBCN_Manager_Recommend</a> in Recommend.php</div>
							<div class="index-item-description">This class handles recommending an event for other calendars.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_setup_postinstall
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_setup_postinstall.php">UNL_UCBCN_Manager_setup_postinstall</a> in Manager_setup.php</div>
							<div class="index-item-description">This class can handle all the post installation tasks for the manager.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Manager_SubForm
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_SubForm.php">UNL_UCBCN_Manager_SubForm</a> in SubForm.php</div>
							<div class="index-item-description">Makes subforms use the correct renderer and do some minor manupulations.</div>
					</dd>
		</dl>
	<a name="v"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">v</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$version</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Plugin.php#var$version">UNL_UCBCN_Manager_Plugin::$version</a> in Plugin.php</div>
							<div class="index-item-description">Version of the plugin.</div>
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
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php#method__construct">UNL_UCBCN_Manager_Recommend::__construct()</a> in Recommend.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#method__construct">UNL_UCBCN_Manager::__construct()</a> in Manager.php</div>
							<div class="index-item-description">Constructor for the UNL_UCBCN_Manager.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_Login.php#method__construct">UNL_UCBCN_Manager_Login::__construct()</a> in Login.php</div>
							<div class="index-item-description">Constructs the login screen.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php#method__construct">UNL_UCBCN_Manager_EventForm::__construct()</a> in EventForm.php</div>
							<div class="index-item-description">Constructs the form.</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Manager/elementindex.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>