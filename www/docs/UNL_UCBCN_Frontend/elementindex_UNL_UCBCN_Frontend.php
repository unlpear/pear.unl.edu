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
						<a name="top"></a>
<h2>[UNL_UCBCN_Frontend] element index</h2>
<a href="/docs/UNL_UCBCN_Frontend/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#a">a</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#e">e</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#m">m</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#n">n</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#p">p</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#q">q</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#r">r</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#v">v</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#w">w</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#y">y</a>
	<a class="index-letter" href="elementindex_UNL_UCBCN_Frontend.html#_">_</a>
</div>

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
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#method__construct">UNL_UCBCN_Frontend_Upcoming::__construct()</a> in Upcoming.php</div>
							<div class="index-item-description">Constructs an upcoming event view for this calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#method__construct">UNL_UCBCN_Frontend_Week::__construct()</a> in Week.php</div>
							<div class="index-item-description">Constructs this week object.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php#method__construct">UNL_UCBCN_Frontend_Year::__construct()</a> in Year.php</div>
							<div class="index-item-description">Constructor for a year calendar.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#method__construct">UNL_UCBCN_Frontend_Search::__construct()</a> in Search.php</div>
							<div class="index-item-description">Constructs this search output.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_NoEvents.php#method__construct">UNL_UCBCN_Frontend_NoEvents::__construct()</a> in NoEvents.php</div>
							<div class="index-item-description">Constructs an object when no events are present</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#method__construct">UNL_UCBCN_Frontend::__construct()</a> in Frontend.php</div>
							<div class="index-item-description">Constructor for the frontend.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php#method__construct">UNL_UCBCN_Frontend_Month::__construct()</a> in Month.php</div>
							<div class="index-item-description">This function constructs the month widget and populates the heading,  caption, footer and body for the MonthWidget.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#method__construct">UNL_UCBCN_Frontend_MonthWidget::__construct()</a> in MonthWidget.php</div>
							<div class="index-item-description">This function constructs the month widget and populates the heading,  caption, footer and body for the MonthWidget.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#method__construct">UNL_UCBCN_Frontend_Day::__construct()</a> in Day.php</div>
							<div class="index-item-description">Constructor for an individual day.</div>
					</dd>
		</dl>
	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">AllTests.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_tests---AllTests.php.php">AllTests.php</a> in AllTests.php</div>
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
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$calendar">UNL_UCBCN_Frontend_Search::$calendar</a> in Search.php</div>
							<div class="index-item-description">Calendar we are searching</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#var$calendar">UNL_UCBCN_Frontend_Upcoming::$calendar</a> in Upcoming.php</div>
							<div class="index-item-description">Calendar UNL_UCBCN_Calendar Object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$calendar">UNL_UCBCN_Frontend_Week::$calendar</a> in Week.php</div>
							<div class="index-item-description">Calendar to show events for UNL_UCBCN_Month object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php#var$calendar">UNL_UCBCN_Frontend_Year::$calendar</a> in Year.php</div>
							<div class="index-item-description">Calendar to display year for.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$calendar">UNL_UCBCN_Frontend_MonthWidget::$calendar</a> in MonthWidget.php</div>
							<div class="index-item-description">Calendar UNL_UCBCN_Calendar Object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php#var$calendar">UNL_UCBCN_Frontend_Month::$calendar</a> in Month.php</div>
							<div class="index-item-description">Calendar to show events for UNL_UCBCN_Month object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$calendar">UNL_UCBCN_Frontend::$calendar</a> in Frontend.php</div>
							<div class="index-item-description">Calendar UNL_UCBCN_Calendar Object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$calendar</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$calendar">UNL_UCBCN_Frontend_Day::$calendar</a> in Day.php</div>
							<div class="index-item-description">Calendar UNL_UCBCN_Calendar Object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$caption</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$caption">UNL_UCBCN_Frontend_MonthWidget::$caption</a> in MonthWidget.php</div>
							<div class="index-item-description">Caption for the month widget.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#var$createFiles">UNL_UCBCN_Frontend_setup_postinstall::$createFiles</a> in Frontend_setup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$createIndex</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#var$createIndex">UNL_UCBCN_Frontend_setup_postinstall::$createIndex</a> in Frontend_setup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">createFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodcreateFiles">UNL_UCBCN_Frontend_setup_postinstall::createFiles()</a> in Frontend_setup.php</div>
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
						<span class="var-title">$day</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$day">UNL_UCBCN_Frontend_Week::$day</a> in Week.php</div>
							<div class="index-item-description">Day included in the week the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$day</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$day">UNL_UCBCN_Frontend::$day</a> in Frontend.php</div>
							<div class="index-item-description">Day to show events for</div>
					</dd>
			<dt class="field">
						<span class="var-title">$day</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$day">UNL_UCBCN_Frontend_Day::$day</a> in Day.php</div>
							<div class="index-item-description">Day to show events for</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dsn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#var$dsn">UNL_UCBCN_Frontend_setup_postinstall::$dsn</a> in Frontend_setup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">dailyEventCount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#methoddailyEventCount">UNL_UCBCN_Frontend_MonthWidget::dailyEventCount()</a> in MonthWidget.php</div>
							<div class="index-item-description">Determines the days of this month with events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">dayHasEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddayHasEvents">UNL_UCBCN_Frontend::dayHasEvents()</a> in Frontend.php</div>
							<div class="index-item-description">This function checks if a calendar has events on the day requested.</div>
					</dd>
			<dt class="field">
						<span class="method-title">dbStringToHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddbStringToHtml">UNL_UCBCN_Frontend::dbStringToHtml()</a> in Frontend.php</div>
							<div class="index-item-description">This function converts a string stored in the database to html output.</div>
					</dd>
			<dt class="field">
						<span class="method-title">determineView</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddetermineView">UNL_UCBCN_Frontend::determineView()</a> in Frontend.php</div>
							<div class="index-item-description">This function attempts to determine the view parameters for the frontend output.</div>
					</dd>
			<dt class="field">
						<span class="method-title">dircpy</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methoddircpy">UNL_UCBCN_Frontend_setup_postinstall::dircpy()</a> in Frontend_setup.php</div>
							<div class="index-item-description">This function copies files from source to destination.</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayImage</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddisplayImage">UNL_UCBCN_Frontend::displayImage()</a> in Frontend.php</div>
							<div class="index-item-description">When the image view is set, the image for a given event will be displayed  to the end user.  $_GET['id'] must be set to the event.id which has the image.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Day.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Day.php.php">Day.php</a> in Day.php</div>
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
						<span class="var-title">$endtime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$endtime">UNL_UCBCN_Frontend_Search::$endtime</a> in Search.php</div>
							<div class="index-item-description">end time to search</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eventdatetime_id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$eventdatetime_id">UNL_UCBCN_Frontend::$eventdatetime_id</a> in Frontend.php</div>
							<div class="index-item-description">Specific eventdatetime_id (if used)</div>
					</dd>
			<dt class="field">
						<span class="include-title">EventListing_icalendar.tpl.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_templates---default---EventListing_icalendar.tpl.php.php">EventListing_icalendar.tpl.php</a> in EventListing_icalendar.tpl.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">EventListing_rss.tpl.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_templates---default---EventListing_rss.tpl.php.php">EventListing_rss.tpl.php</a> in EventListing_rss.tpl.php</div>
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
						<span class="var-title">$firstDay</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$firstDay">UNL_UCBCN_Frontend_Week::$firstDay</a> in Week.php</div>
							<div class="index-item-description">start day of the week 0 = Sunday</div>
					</dd>
			<dt class="field">
						<span class="var-title">$format</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$format">UNL_UCBCN_Frontend::$format</a> in Frontend.php</div>
							<div class="index-item-description">format of view</div>
					</dd>
			<dt class="field">
						<span class="method-title">file_str_replace</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodfile_str_replace">UNL_UCBCN_Frontend_setup_postinstall::file_str_replace()</a> in Frontend_setup.php</div>
							<div class="index-item-description">Replaces text within files.</div>
					</dd>
			<dt class="field">
						<span class="method-title">findOngoingEvents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#methodfindOngoingEvents">UNL_UCBCN_Frontend_MonthWidget::findOngoingEvents()</a> in MonthWidget.php</div>
							<div class="index-item-description">This function finds ongoing events for the given month.</div>
					</dd>
			<dt class="field">
						<span class="method-title">formatURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodformatURL">UNL_UCBCN_Frontend::formatURL()</a> in Frontend.php</div>
							<div class="index-item-description">Returns a formatted URL.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Frontend.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend.php.php">Frontend.php</a> in Frontend.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Frontend_setup.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend_setup.php.php">Frontend_setup.php</a> in Frontend_setup.php</div>
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
						<span class="method-title">getCacheKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCacheKey">UNL_UCBCN_Frontend::getCacheKey()</a> in Frontend.php</div>
							<div class="index-item-description">Get's a uniqe key for this object for reference in cache.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCacheKey</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#methodgetCacheKey">UNL_UCBCN_Frontend_MonthWidget::getCacheKey()</a> in MonthWidget.php</div>
							<div class="index-item-description">Returns a string identifying this month widget.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCalendarID</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarID">UNL_UCBCN_Frontend::getCalendarID()</a> in Frontend.php</div>
							<div class="index-item-description">Gets the calendar id from a shortname.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCalendarsByStatus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarsByStatus">UNL_UCBCN_Frontend::getCalendarsByStatus()</a> in Frontend.php</div>
							<div class="index-item-description">Get a list of calendars with a given status</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCalendarShortname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarShortname">UNL_UCBCN_Frontend::getCalendarShortname()</a> in Frontend.php</div>
							<div class="index-item-description">Returns a calendar shortname for the calendar with the given ID.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getEventInstance</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetEventInstance">UNL_UCBCN_Frontend::getEventInstance()</a> in Frontend.php</div>
							<div class="index-item-description">Gets the specified event instance.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getEventTypes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetEventTypes">UNL_UCBCN_Frontend::getEventTypes()</a> in Frontend.php</div>
							<div class="index-item-description">Get a list of event types</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#methodgetURL">UNL_UCBCN_Frontend_Week::getURL()</a> in Week.php</div>
							<div class="index-item-description">Returns the permanent URL to this specific week.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#methodgetURL">UNL_UCBCN_Frontend_Upcoming::getURL()</a> in Upcoming.php</div>
							<div class="index-item-description">Get a permanent URL to this object.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#methodgetURL">UNL_UCBCN_Frontend_Search::getURL()</a> in Search.php</div>
							<div class="index-item-description">returns the url to this search page.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#methodgetURL">UNL_UCBCN_Frontend_Day::getURL()</a> in Day.php</div>
							<div class="index-item-description">Returns the permanent URL to this specific day.</div>
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
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_index.php.php">index.php</a> in index.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">init</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodinit">UNL_UCBCN_Frontend_setup_postinstall::init()</a> in Frontend_setup.php</div>
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
						<span class="var-title">$limit</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#var$limit">UNL_UCBCN_Frontend_Upcoming::$limit</a> in Upcoming.php</div>
							<div class="index-item-description">Limit the number of records.</div>
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
						<span class="var-title">$manageruri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$manageruri">UNL_UCBCN_Frontend::$manageruri</a> in Frontend.php</div>
							<div class="index-item-description">URI to the management interface UNL_UCBCN_Manager</div>
					</dd>
			<dt class="field">
						<span class="var-title">$message</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_NoEvents.php#var$message">UNL_UCBCN_Frontend_NoEvents::$message</a> in NoEvents.php</div>
							<div class="index-item-description">no events message</div>
					</dd>
			<dt class="field">
						<span class="var-title">$month</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php#var$month">UNL_UCBCN_Frontend_Month::$month</a> in Month.php</div>
							<div class="index-item-description">Month the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$month</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$month">UNL_UCBCN_Frontend_MonthWidget::$month</a> in MonthWidget.php</div>
							<div class="index-item-description">Month for this month widget.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$month</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$month">UNL_UCBCN_Frontend_Week::$month</a> in Week.php</div>
							<div class="index-item-description">Month the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$month</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$month">UNL_UCBCN_Frontend_Day::$month</a> in Day.php</div>
							<div class="index-item-description">Month the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$month</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$month">UNL_UCBCN_Frontend::$month</a> in Frontend.php</div>
							<div class="index-item-description">Month the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$monthwidgets</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php#var$monthwidgets">UNL_UCBCN_Frontend_Year::$monthwidgets</a> in Year.php</div>
							<div class="index-item-description">Array of month widgets - UNL_UCBCN_Frontend_MonthWidget</div>
					</dd>
			<dt class="field">
						<span class="method-title">main</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_AllTests.php#methodmain">UNL_UCBCN_Frontend_AllTests::main()</a> in AllTests.php</div>
							<div class="index-item-description">Runs the test suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">makepackage.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_makepackage.php.php">makepackage.php</a> in makepackage.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Month.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Month.php.php">Month.php</a> in Month.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">MonthWidget.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---MonthWidget.php.php">MonthWidget.php</a> in MonthWidget.php</div>
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
						<span class="var-title">$next_url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$next_url">UNL_UCBCN_Frontend_Day::$next_url</a> in Day.php</div>
							<div class="index-item-description">URL to the next day</div>
					</dd>
			<dt class="field">
						<span class="var-title">$next_url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$next_url">UNL_UCBCN_Frontend_Week::$next_url</a> in Week.php</div>
							<div class="index-item-description">URL to the next week</div>
					</dd>
			<dt class="field">
						<span class="var-title">$noevents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#var$noevents">UNL_UCBCN_Frontend_Upcoming::$noevents</a> in Upcoming.php</div>
							<div class="index-item-description">Message for when no upcoming events are found.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$noevents</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$noevents">UNL_UCBCN_Frontend_Day::$noevents</a> in Day.php</div>
							<div class="index-item-description">no events message</div>
					</dd>
			<dt class="field">
						<span class="include-title">NoEvents.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---NoEvents.php.php">NoEvents.php</a> in NoEvents.php</div>
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
						<span class="var-title">$ongoing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$ongoing">UNL_UCBCN_Frontend_Week::$ongoing</a> in Week.php</div>
							<div class="index-item-description">Display ongoing events?</div>
					</dd>
			<dt class="field">
						<span class="var-title">$ongoing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$ongoing">UNL_UCBCN_Frontend_Day::$ongoing</a> in Day.php</div>
							<div class="index-item-description">Display ongoing events?</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$output">UNL_UCBCN_Frontend_Day::$output</a> in Day.php</div>
							<div class="index-item-description">Listing of events on this day.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#var$output">UNL_UCBCN_Frontend_Upcoming::$output</a> in Upcoming.php</div>
							<div class="index-item-description">Listing of events on this day.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$output">UNL_UCBCN_Frontend_Search::$output</a> in Search.php</div>
							<div class="index-item-description">Listing of matching events or error.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$output">UNL_UCBCN_Frontend_Week::$output</a> in Week.php</div>
							<div class="index-item-description">Listing of events on this week. This will be an array of 7  UNL_UCBCN_Frontend_Day objects.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$output</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$output">UNL_UCBCN_Frontend::$output</a> in Frontend.php</div>
							<div class="index-item-description">Main content of the page sent to the client.</div>
					</dd>
			<dt class="field">
						<span class="method-title">outputData</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodoutputData">UNL_UCBCN_Frontend_setup_postinstall::outputData()</a> in Frontend_setup.php</div>
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
						<span class="var-title">$prev_url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$prev_url">UNL_UCBCN_Frontend_Week::$prev_url</a> in Week.php</div>
							<div class="index-item-description">URL to the previous week</div>
					</dd>
			<dt class="field">
						<span class="var-title">$prev_url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$prev_url">UNL_UCBCN_Frontend_Day::$prev_url</a> in Day.php</div>
							<div class="index-item-description">URL to the previous day</div>
					</dd>
			<dt class="field">
						<span class="const-title">PHPUnit_MAIN_METHOD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_tests---AllTests.php.php#definePHPUnit_MAIN_METHOD">PHPUnit_MAIN_METHOD</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">postProcessPrompts</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodpostProcessPrompts">UNL_UCBCN_Frontend_setup_postinstall::postProcessPrompts()</a> in Frontend_setup.php</div>
							<div class="index-item-description">Optionally used to alter responses from the prompted questions.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preRun</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodpreRun">UNL_UCBCN_Frontend::preRun()</a> in Frontend.php</div>
							<div class="index-item-description">This function is called before the run() function to handle  any details prior to populating the data in the object, and  sends output headers.</div>
					</dd>
			<dt class="field">
						<span class="method-title">preRun</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#methodpreRun">UNL_UCBCN_Frontend_MonthWidget::preRun()</a> in MonthWidget.php</div>
							<div class="index-item-description">Runs before any output is sent or object is built.</div>
					</dd>
		</dl>
	<a name="q"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">q</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$query</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$query">UNL_UCBCN_Frontend_Search::$query</a> in Search.php</div>
							<div class="index-item-description">actual search string user entered</div>
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
						<span class="var-title">$right</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$right">UNL_UCBCN_Frontend::$right</a> in Frontend.php</div>
							<div class="index-item-description">Right column (usually the month widget)</div>
					</dd>
			<dt class="field">
						<span class="method-title">reformatURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodreformatURL">UNL_UCBCN_Frontend::reformatURL()</a> in Frontend.php</div>
							<div class="index-item-description">This function is for reformmating URL address. IE, you have the  url to the object, but simply want to change the format to ics etc.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php#methodrun">UNL_UCBCN_Frontend_setup_postinstall::run()</a> in Frontend_setup.php</div>
							<div class="index-item-description">Hub for the post-install task.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#methodrun">UNL_UCBCN_Frontend_MonthWidget::run()</a> in MonthWidget.php</div>
							<div class="index-item-description">This function populates the month widget... checks for each  day of this month whether the day has events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#methodrun">UNL_UCBCN_Frontend_Search::run()</a> in Search.php</div>
							<div class="index-item-description">Runs the query on the database from the calendar, currently supports two types of  searches - textual or date and time hinted by passing a string supported by the strtotime() function.</div>
					</dd>
			<dt class="field">
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodrun">UNL_UCBCN_Frontend::run()</a> in Frontend.php</div>
							<div class="index-item-description">Runs/builds the frontend object with the display parameters set.</div>
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
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$sectitle">UNL_UCBCN_Frontend::$sectitle</a> in Frontend.php</div>
							<div class="index-item-description">Section Title</div>
					</dd>
			<dt class="field">
						<span class="var-title">$starttime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$starttime">UNL_UCBCN_Frontend_Search::$starttime</a> in Search.php</div>
							<div class="index-item-description">Start time to search</div>
					</dd>
			<dt class="field">
						<span class="method-title">showEventListing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#methodshowEventListing">UNL_UCBCN_Frontend_Upcoming::showEventListing()</a> in Upcoming.php</div>
							<div class="index-item-description">UNL_UCBCN_EventListing of events.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showEventListing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#methodshowEventListing">UNL_UCBCN_Frontend_Day::showEventListing()</a> in Day.php</div>
							<div class="index-item-description">Shows the listing of new events for this day.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showOngoingEventListing</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#methodshowOngoingEventListing">UNL_UCBCN_Frontend_Day::showOngoingEventListing()</a> in Day.php</div>
							<div class="index-item-description">Returns the listing of ongoing events for this day.</div>
					</dd>
			<dt class="field">
						<span class="method-title">showWeek</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#methodshowWeek">UNL_UCBCN_Frontend_Week::showWeek()</a> in Week.php</div>
							<div class="index-item-description">Populates the output with the days for the events in this week.</div>
					</dd>
			<dt class="field">
						<span class="method-title">suite</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_AllTests.php#methodsuite">UNL_UCBCN_Frontend_AllTests::suite()</a> in AllTests.php</div>
							<div class="index-item-description">Adds the UNL_UCBCN_FrontendTest suite.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Search.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Search.php.php">Search.php</a> in Search.php</div>
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
						<span class="var-title">$tbody</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$tbody">UNL_UCBCN_Frontend_MonthWidget::$tbody</a> in MonthWidget.php</div>
							<div class="index-item-description">Body for the table</div>
					</dd>
			<dt class="field">
						<span class="var-title">$thead</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$thead">UNL_UCBCN_Frontend_MonthWidget::$thead</a> in MonthWidget.php</div>
							<div class="index-item-description">Header for the table</div>
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
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uniquebody">UNL_UCBCN_Frontend::$uniquebody</a> in Frontend.php</div>
							<div class="index-item-description">Unique body ID</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uri">UNL_UCBCN_Frontend::$uri</a> in Frontend.php</div>
							<div class="index-item-description">URI to the management frontend</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uriformat</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uriformat">UNL_UCBCN_Frontend::$uriformat</a> in Frontend.php</div>
							<div class="index-item-description">Format of URI's  querystring|rest</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php#var$url">UNL_UCBCN_Frontend_Upcoming::$url</a> in Upcoming.php</div>
							<div class="index-item-description">URL to the listing of upcoming events.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$url">UNL_UCBCN_Frontend_Week::$url</a> in Week.php</div>
							<div class="index-item-description">URL to this view.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$url">UNL_UCBCN_Frontend_Day::$url</a> in Day.php</div>
							<div class="index-item-description">URL of events on this day.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$url</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$url">UNL_UCBCN_Frontend_Search::$url</a> in Search.php</div>
							<div class="index-item-description">URL to this search results page.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Upcoming.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Upcoming.php.php">Upcoming.php</a> in Upcoming.php</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php">UNL_UCBCN_Frontend</a> in Frontend.php</div>
							<div class="index-item-description">This is the basic frontend output class through which all output to the public is  generated. This class handles the determination of what view the user requested  and what information to send.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_AllTests
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_AllTests.php">UNL_UCBCN_Frontend_AllTests</a> in AllTests.php</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Day
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php">UNL_UCBCN_Frontend_Day</a> in Day.php</div>
							<div class="index-item-description">Object for the view of a single day for a calendar.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Month
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php">UNL_UCBCN_Frontend_Month</a> in Month.php</div>
							<div class="index-item-description">Object for a month view of the calendar.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_MonthWidget
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php">UNL_UCBCN_Frontend_MonthWidget</a> in MonthWidget.php</div>
							<div class="index-item-description">Class defines a month widget, basically a table with 30 boxes representing the  days in the month. Days which have events will be selected.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_NoEvents
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_NoEvents.php">UNL_UCBCN_Frontend_NoEvents</a> in NoEvents.php</div>
							<div class="index-item-description">Object for the view of a single day for a calendar.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Search
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php">UNL_UCBCN_Frontend_Search</a> in Search.php</div>
							<div class="index-item-description">Container for search results for the frontend.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_setup_postinstall
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_setup_postinstall.php">UNL_UCBCN_Frontend_setup_postinstall</a> in Frontend_setup.php</div>
							<div class="index-item-description">This is the post install setup script for the frontend.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Upcoming
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Upcoming.php">UNL_UCBCN_Frontend_Upcoming</a> in Upcoming.php</div>
							<div class="index-item-description">A list of upcoming events for a calendar.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Week
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php">UNL_UCBCN_Frontend_Week</a> in Week.php</div>
							<div class="index-item-description">Constructs a week view for the calendar.</div>
					</dd>
			<dt class="field">
						UNL_UCBCN_Frontend_Year
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php">UNL_UCBCN_Frontend_Year</a> in Year.php</div>
							<div class="index-item-description">Generates a year view for the public frontend.</div>
					</dd>
			<dt class="field">
						<span class="method-title">uriFormat</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoduriFormat">UNL_UCBCN_Frontend::uriFormat()</a> in Frontend.php</div>
							<div class="index-item-description">Sets and/or returns the uri format.</div>
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
						<span class="var-title">$view</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$view">UNL_UCBCN_Frontend::$view</a> in Frontend.php</div>
							<div class="index-item-description">View to be displayed</div>
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
						<span class="var-title">$weeks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php#var$weeks">UNL_UCBCN_Frontend_Month::$weeks</a> in Month.php</div>
							<div class="index-item-description">Contains an array of Frontend_Day objects</div>
					</dd>
			<dt class="field">
						<span class="include-title">Week.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Week.php.php">Week.php</a> in Week.php</div>
					</dd>
		</dl>
	<a name="y"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">y</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Week.php#var$year">UNL_UCBCN_Frontend_Week::$year</a> in Week.php</div>
							<div class="index-item-description">Year the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Year.php#var$year">UNL_UCBCN_Frontend_Year::$year</a> in Year.php</div>
							<div class="index-item-description">Year to show events for.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Day.php#var$year">UNL_UCBCN_Frontend_Day::$year</a> in Day.php</div>
							<div class="index-item-description">Year the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_MonthWidget.php#var$year">UNL_UCBCN_Frontend_MonthWidget::$year</a> in MonthWidget.php</div>
							<div class="index-item-description">Year for this month widget</div>
					</dd>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Month.php#var$year">UNL_UCBCN_Frontend_Month::$year</a> in Month.php</div>
							<div class="index-item-description">Year the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$year</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$year">UNL_UCBCN_Frontend::$year</a> in Frontend.php</div>
							<div class="index-item-description">Year the user is viewing.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Year.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_UCBCN_Frontend/_UNL---UCBCN---Frontend---Year.php.php">Year.php</a> in Year.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#q">q</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#w">w</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#y">y</a>
	<a class="index-letter" href="/docs/UNL_UCBCN_Frontend/elementindex_UNL_UCBCN_Frontend.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>