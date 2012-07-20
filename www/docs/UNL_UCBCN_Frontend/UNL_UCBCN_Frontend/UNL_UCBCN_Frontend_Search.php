<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | Docs For Class UNL_UCBCN_Frontend_Search</title>";
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
			<div class="page-body">			
<h2 class="class-name">Class UNL_UCBCN_Frontend_Search</h2>

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
<p class="short-description">Container for search results for the frontend.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Frontend---Search.php.php">/UNL/UCBCN/Frontend/Search.php</a> (line <span class="field">32</span>)
		</p>
		
				
		<pre>UNL_UCBCN
   |
   --<a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php">UNL_UCBCN_Frontend</a>
      |
      --UNL_UCBCN_Frontend_Search</pre>
	
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
					<span class="var-type">object UNL_UCBCN_Calendar</span>
					<a href="#var_calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_endtime" title="details" class="var-name">$endtime</a>
				</div>
																<div class="var-title">
					<span class="var-type">UNL_UCBCN_EventListing</span>
					<a href="#var_output" title="details" class="var-name">$output</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_query" title="details" class="var-name">$query</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_starttime" title="details" class="var-name">$starttime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
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
											<span class="method-result">UNL_UCBCN_Frontend_Search</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getURL" title="details" class="method-name">getURL</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#run" title="details" class="method-name">run</a>
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
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object UNL_UCBCN_Calendar</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendar we are searching</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$calendar">UNL_UCBCN_Frontend::$calendar</a></dt>
						<dd>Calendar UNL_UCBCN_Calendar Object</dd>
					</dl>
		
		

</div>
<a name="var_endtime" id="var_endtime"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$endtime</span>
						(line <span class="line-number">63</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">end time to search</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_output" id="var_output"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">UNL_UCBCN_EventListing</span>
			<span class="var-name">$output</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Listing of matching events or error.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$output">UNL_UCBCN_Frontend::$output</a></dt>
						<dd>Main content of the page sent to the client.</dd>
					</dl>
		
		

</div>
<a name="var_query" id="var_query"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$query</span>
						(line <span class="line-number">53</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">actual search string user entered</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_starttime" id="var_starttime"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$starttime</span>
						(line <span class="line-number">58</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Start time to search</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_url" id="var_url"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$url</span>
						(line <span class="line-number">66</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URL to this search results page.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php">UNL_UCBCN_Frontend</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$day">UNL_UCBCN_Frontend::$day</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$eventdatetime_id">UNL_UCBCN_Frontend::$eventdatetime_id</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$format">UNL_UCBCN_Frontend::$format</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$manageruri">UNL_UCBCN_Frontend::$manageruri</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$month">UNL_UCBCN_Frontend::$month</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$right">UNL_UCBCN_Frontend::$right</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$sectitle">UNL_UCBCN_Frontend::$sectitle</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uniquebody">UNL_UCBCN_Frontend::$uniquebody</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uri">UNL_UCBCN_Frontend::$uri</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$uriformat">UNL_UCBCN_Frontend::$uriformat</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$view">UNL_UCBCN_Frontend::$view</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#var$year">UNL_UCBCN_Frontend::$year</a></span><br />
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructs this search output.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Frontend_Search</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options.</span>			</li>
				</ul>
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#method__construct">UNL_UCBCN_Frontend::__construct()</a></dt>
						<dd>Constructor for the frontend.</dd>
					</dl>
			
	</div>
<a name="methodgetURL" id="getURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getURL</span> (line <span class="line-number">142</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the url to this search page.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getURL
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">90</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs the query on the database from the calendar, currently supports two types of  searches - textual or date and time hinted by passing a string supported by the strtotime() function.</p>
<div class="description"><p>Text searches:  Title, Description, Location</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			run
		</span>
				()
			</div>
	
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodrun">UNL_UCBCN_Frontend::run()</a></dt>
						<dd>Runs/builds the frontend object with the display parameters set.</dd>
					</dl>
			
	</div>
							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php">UNL_UCBCN_Frontend</a></span></p>
					<blockquote>
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#method__construct">UNL_UCBCN_Frontend::__construct()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddayHasEvents">UNL_UCBCN_Frontend::dayHasEvents()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddbStringToHtml">UNL_UCBCN_Frontend::dbStringToHtml()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddetermineView">UNL_UCBCN_Frontend::determineView()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoddisplayImage">UNL_UCBCN_Frontend::displayImage()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodformatURL">UNL_UCBCN_Frontend::formatURL()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCacheKey">UNL_UCBCN_Frontend::getCacheKey()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarID">UNL_UCBCN_Frontend::getCalendarID()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarsByStatus">UNL_UCBCN_Frontend::getCalendarsByStatus()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetCalendarShortname">UNL_UCBCN_Frontend::getCalendarShortname()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetEventInstance">UNL_UCBCN_Frontend::getEventInstance()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodgetEventTypes">UNL_UCBCN_Frontend::getEventTypes()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodpreRun">UNL_UCBCN_Frontend::preRun()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodreformatURL">UNL_UCBCN_Frontend::reformatURL()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methodrun">UNL_UCBCN_Frontend::run()</a></span><br />
													<span class="method-name"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend.php#methoduriFormat">UNL_UCBCN_Frontend::uriFormat()</a></span><br />
											</blockquote>
										
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>