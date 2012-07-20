<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_EventInstance</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2></h2>';
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
<p class="description"><p>Together, the two represent an instance of an event at a location.</p></p>
		<p class="notes">
			Located in <a class="field" href="_UCBCN---EventInstance.php.php">/UCBCN/EventInstance.php</a> (line <span class="field">19</span>)
		</p>
		
				
		<pre><a href="../UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a>
   |
   --UNL_UCBCN_EventInstance</pre>
	
			</div>
</div>



	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</span></div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
																																																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$event" title="details" class="var-name">$event</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$eventdatetime" title="details" class="var-name">$eventdatetime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$url" title="details" class="var-name">$url</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</span></div>
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
											(<span class="var-type">mixed</span>&nbsp;<span class="var-name">$edt</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">NULL</span>])
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
			<a name="var$calendar" id="$calendar"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Optional calendar associated with this event instance</p>
	
	
		
		

</div>
<a name="var$event" id="$event"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$event</span>
						(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_Event object</p>
	
	
		
		

</div>
<a name="var$eventdatetime" id="$eventdatetime"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$eventdatetime</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_Eventdatetime object</p>
	
	
		
		

</div>
<a name="var$url" id="$url"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$url</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URL to this event instance</p>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_UCBCN/UNL_UCBCN.php">UNL_UCBCN</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$default_calendar_id">UNL_UCBCN::$default_calendar_id</a></span><br>
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$dsn">UNL_UCBCN::$dsn</a></span><br>
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$template">UNL_UCBCN::$template</a></span><br>
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#var$template_path">UNL_UCBCN::$template_path</a></span><br>
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
			<A NAME='method_detail'></A>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">36</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">constructor</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_EventInstance</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">mixed</span>&nbsp;<span class="var-name">$edt</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">NULL</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$edt</span><span class="var-description">: int|UNL_UCBCN_Eventdatetime The id for this record in the database, or the actual object.</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$calendar</span><span class="var-description">: int|UNL_UCBCN_Calendar... optional parameter for the calendar this event is for.</span>			</li>
				</ul>
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN/UNL_UCBCN.php#method__construct">UNL_UCBCN::__construct()</a></dt>
						<dd>Constructor for the UCBCN object, initializes member variables and sets up  connection details for the database.</dd>
					</dl>
			
	</div>
<a name="methodgetURL" id="getURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getURL</span> (line <span class="line-number">66</span>)
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
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#method__construct">UNL_UCBCN::__construct()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodaddCalendarHasEvent">UNL_UCBCN::addCalendarHasEvent()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodarchiveEvents">UNL_UCBCN::archiveEvents()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcalendarHasEvent">UNL_UCBCN::calendarHasEvent()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcleanCache">UNL_UCBCN::cleanCache()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateAccount">UNL_UCBCN::createAccount()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateCalendar">UNL_UCBCN::createCalendar()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodcreateUser">UNL_UCBCN::createUser()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddbInsert">UNL_UCBCN::dbInsert()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoddisplayRegion">UNL_UCBCN::displayRegion()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodfactory">UNL_UCBCN::factory()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetAbsoluteURL">UNL_UCBCN::getAbsoluteURL()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetAccount">UNL_UCBCN::getAccount()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetCalendar">UNL_UCBCN::getCalendar()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetDatabaseConnection">UNL_UCBCN::getDatabaseConnection()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetEventCount">UNL_UCBCN::getEventCount()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetTemplateFilename">UNL_UCBCN::getTemplateFilename()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetURL">UNL_UCBCN::getURL()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgetUser">UNL_UCBCN::getUser()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodgrantPermission">UNL_UCBCN::grantPermission()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodlocalRedirect">UNL_UCBCN::localRedirect()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodoutputTemplate">UNL_UCBCN::outputTemplate()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsendObjectOutput">UNL_UCBCN::sendObjectOutput()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsetOptions">UNL_UCBCN::setOptions()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodsetupDBConn">UNL_UCBCN::setupDBConn()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methodshowError">UNL_UCBCN::showError()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoduserCanEditEvent">UNL_UCBCN::userCanEditEvent()</a></span><br>
													<span class="method-name"><a href="../UNL_UCBCN/UNL_UCBCN.php#methoduserHasPermission">UNL_UCBCN::userHasPermission()</a></span><br>
											</blockquote>
										
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:10:58 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>