<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_EventInstance</title>";
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
			<div class="page-body">			
<h2 class="class-name">Class UNL_UCBCN_EventInstance</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
													<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generic object to hold a single event, and a single event date time.</p>
<div class="description"><p>Together, the two represent an instance of an event at a location.</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---EventInstance.php.php">/UNL/UCBCN/EventInstance.php</a> (line <span class="field">32</span>)
		</p>
		
				
		<pre><a href="../UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a>
   |
   --UNL_UCBCN_EventInstance</pre>
	
			</div>
</div>



	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
																																																<div class="var-title">
					<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
					<a href="#var_calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
					<a href="#var_event" title="details" class="var-name">$event</a>
				</div>
																<div class="var-title">
					<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></span>
					<a href="#var_eventdatetime" title="details" class="var-name">$eventdatetime</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_url" title="details" class="var-name">$url</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																				
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_EventInstance</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></span>&nbsp;<span class="var-name">$edt</span>, [<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getURL" title="details" class="method-name">getURL</a>
										()
									</div>
								</div>
		</div>
	</div>		

	<a name="sec-vars"></a>
	<div class="info-box">
		<div class="info-box-title">Variables</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
										<a href="#sec-var-summary">Vars</a> (<span class="disabled">details</span>)
						
			
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var_calendar" id="var_calendar"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">var:</span> Optional calendar associated with this instance.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_event" id="var_event"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
			<span class="var-name">$event</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">var:</span> Event details</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_eventdatetime" id="var_eventdatetime"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></span>
			<span class="var-name">$eventdatetime</span>
						(line <span class="line-number">42</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">var:</span> Date and time details</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_url" id="var_url"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$url</span>
						(line <span class="line-number">52</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">var:</span> URL to this event instance (with html entities).</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$cache">UNL_UCBCN::$cache</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$default_calendar_id">UNL_UCBCN::$default_calendar_id</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$dsn">UNL_UCBCN::$dsn</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$input_filters">UNL_UCBCN::$input_filters</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$output_filters">UNL_UCBCN::$output_filters</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$template">UNL_UCBCN::$template</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$template_path">UNL_UCBCN::$template_path</a></span><br />
							</span>
											</blockquote> 
										
		</div>
	</div>
	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">60</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">constructor</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_EventInstance</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></span>&nbsp;<span class="var-name">$edt</span>, [<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Eventdatetime.php">UNL_UCBCN_Eventdatetime</a></span>
				<span class="var-name">$edt</span><span class="var-description">: eventdatetime.id in the database, or the actual object.</span>			</li>
					<li>
				<span class="var-type">int|<a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span><span class="var-description">: optional parameter for the calendar this event is for.</span>			</li>
				</ul>
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN/UNL_UCBCN.php#method__construct">UNL_UCBCN::__construct()</a></dt>
						<dd>Constructor for the UCBCN object, initializes member variables and sets up  connection details for the database.</dd>
					</dl>
			
	</div>
<a name="methodgetURL" id="getURL"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getURL</span> (line <span class="line-number">91</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns the URL for this event instance.</p>
	<ul class="tags">
				<li><span class="field">return:</span> URL to this event instance.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getURL
		</span>
				()
			</div>
	
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetURL">UNL_UCBCN::getURL()</a></dt>
						<dd>Returns the URL for the calendar system.</dd>
					</dl>
			
	</div>
							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname"><a href="../UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a></span></p>
					<blockquote>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#method__construct">UNL_UCBCN::__construct()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodaddCalendarHasEvent">UNL_UCBCN::addCalendarHasEvent()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodaddInputFilter">UNL_UCBCN::addInputFilter()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodaddOutputFilter">UNL_UCBCN::addOutputFilter()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodarchiveEvents">UNL_UCBCN::archiveEvents()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcalendarHasEvent">UNL_UCBCN::calendarHasEvent()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcleanCache">UNL_UCBCN::cleanCache()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateAccount">UNL_UCBCN::createAccount()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateCalendar">UNL_UCBCN::createCalendar()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateUser">UNL_UCBCN::createUser()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddbInsert">UNL_UCBCN::dbInsert()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddisplayArray">UNL_UCBCN::displayArray()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddisplayObject">UNL_UCBCN::displayObject()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddisplayRegion">UNL_UCBCN::displayRegion()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodfactory">UNL_UCBCN::factory()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetAbsoluteURL">UNL_UCBCN::getAbsoluteURL()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetAccount">UNL_UCBCN::getAccount()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetCachingService">UNL_UCBCN::getCachingService()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetCalendar">UNL_UCBCN::getCalendar()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetDatabaseConnection">UNL_UCBCN::getDatabaseConnection()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetEventCount">UNL_UCBCN::getEventCount()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetTemplateFilename">UNL_UCBCN::getTemplateFilename()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetURL">UNL_UCBCN::getURL()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetUser">UNL_UCBCN::getUser()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgrantPermission">UNL_UCBCN::grantPermission()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodlocalRedirect">UNL_UCBCN::localRedirect()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodoutputTemplate">UNL_UCBCN::outputTemplate()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsendObjectOutput">UNL_UCBCN::sendObjectOutput()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsetCachingService">UNL_UCBCN::setCachingService()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsetOptions">UNL_UCBCN::setOptions()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsetupDBConn">UNL_UCBCN::setupDBConn()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodshowError">UNL_UCBCN::showError()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoduserCanEditEvent">UNL_UCBCN::userCanEditEvent()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoduserHasPermission">UNL_UCBCN::userHasPermission()</a></span><br />
											</blockquote>
										
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:42 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>