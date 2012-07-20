<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | Docs For Class UNL_UCBCN_Frontend</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Frontend</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-descendents">Descendents</a>
			|											<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This is the basic frontend output class through which all output to the public is  generated. This class handles the determination of what view the user requested  and what information to send.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Frontend.php.php">/UNL/UCBCN/Frontend.php</a> (line <span class="field">32</span>)
		</p>
		
				
		<pre>UNL_UCBCN
   |
   --UNL_UCBCN_Frontend</pre>
	
			</div>
</div>

	<a name="sec-descendents"></a>
	<div class="info-box">
		<div class="info-box-title">Direct descendents</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Descendents</span>
			|												<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
								|															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php">UNL_UCBCN_Frontend_Search</a></td>
					<td>
											Container for search results for the frontend.
										</td>
				</tr>
							</table>
		</div>
	</div>


	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
																																																																																																																																<div class="var-title">
					<span class="var-type">UNL_UCBCN_Calendar</span>
					<a href="#var_calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_day" title="details" class="var-name">$day</a>
				</div>
																<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_eventdatetime_id" title="details" class="var-name">$eventdatetime_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_format" title="details" class="var-name">$format</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_manageruri" title="details" class="var-name">$manageruri</a>
				</div>
																<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_month" title="details" class="var-name">$month</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_output" title="details" class="var-name">$output</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_right" title="details" class="var-name">$right</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_sectitle" title="details" class="var-name">$sectitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_uniquebody" title="details" class="var-name">$uniquebody</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_uri" title="details" class="var-name">$uri</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_uriformat" title="details" class="var-name">$uriformat</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_view" title="details" class="var-name">$view</a>
				</div>
																<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_year" title="details" class="var-name">$year</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																																																																																																				
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_Frontend</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#dayHasEvents" title="details" class="method-name">dayHasEvents</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$epoch</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">String</span>
										<a href="#dbStringToHtml" title="details" class="method-name">dbStringToHtml</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$t</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#determineView" title="details" class="method-name">determineView</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$method</span> = <span class="var-default">'GET'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#displayImage" title="details" class="method-name">displayImage</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#formatURL" title="details" class="method-name">formatURL</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$encode</span> = <span class="var-default">true</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCacheKey" title="details" class="method-name">getCacheKey</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#getCalendarID" title="details" class="method-name">getCalendarID</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$shortname</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getCalendarsByStatus" title="details" class="method-name">getCalendarsByStatus</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#getCalendarShortname" title="details" class="method-name">getCalendarShortname</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">object UNL_UCBCN_EventInstance</span>
										<a href="#getEventInstance" title="details" class="method-name">getEventInstance</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getEventTypes" title="details" class="method-name">getEventTypes</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preRun" title="details" class="method-name">preRun</a>
											([<span class="var-type">bool</span>&nbsp;<span class="var-name">$cache_hit</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#reformatURL" title="details" class="method-name">reformatURL</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#run" title="details" class="method-name">run</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#uriFormat" title="details" class="method-name">uriFormat</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$set</span> = <span class="var-default">null</span>])
									</div>
								</div>
		</div>
	</div>		

	<a name="sec-vars"></a>
	<div class="info-box">
		<div class="info-box-title">Variables</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
										<a href="#sec-var-summary">Vars</a> (<span class="disabled">details</span>)
						
			
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var_calendar" id="var_calendar"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">UNL_UCBCN_Calendar</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendar UNL_UCBCN_Calendar Object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$calendar">UNL_UCBCN_Frontend_Search::$calendar</a>
								: Calendar we are searching
							</li>
				</ul>
		

</div>
<a name="var_day" id="var_day"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$day</span>
						(line <span class="line-number">60</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Day to show events for</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_eventdatetime_id" id="var_eventdatetime_id"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$eventdatetime_id</span>
			 = <span class="var-default"> null</span>			(line <span class="line-number">67</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Specific eventdatetime_id (if used)</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_format" id="var_format"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$format</span>
			 = <span class="var-default"> 'html'</span>			(line <span class="line-number">130</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">format of view</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_manageruri" id="var_manageruri"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$manageruri</span>
			 = <span class="var-default"> ''</span>			(line <span class="line-number">88</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URI to the management interface UNL_UCBCN_Manager</p>
	<ul class="tags">
				<li><span class="field">var:</span> EG: http://events.unl.edu/manager/</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_month" id="var_month"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$month</span>
						(line <span class="line-number">53</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Month the user is viewing.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_output" id="var_output"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$output</span>
						(line <span class="line-number">109</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Main content of the page sent to the client.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#var$output">UNL_UCBCN_Frontend_Search::$output</a>
								: Listing of matching events or error.
							</li>
				</ul>
		

</div>
<a name="var_right" id="var_right"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$right</span>
						(line <span class="line-number">95</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Right column (usually the month widget)</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_sectitle" id="var_sectitle"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$sectitle</span>
						(line <span class="line-number">116</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Section Title</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uniquebody" id="var_uniquebody"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$uniquebody</span>
						(line <span class="line-number">102</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Unique body ID</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uri" id="var_uri"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$uri</span>
			 = <span class="var-default"> ''</span>			(line <span class="line-number">74</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URI to the management frontend</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uriformat" id="var_uriformat"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$uriformat</span>
			 = <span class="var-default"> 'querystring'</span>			(line <span class="line-number">81</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Format of URI's  querystring|rest</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_view" id="var_view"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$view</span>
			 = <span class="var-default"> 'day'</span>			(line <span class="line-number">123</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">View to be displayed</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_year" id="var_year"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$year</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Year the user is viewing.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
						
		</div>
	</div>
	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">137</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor for the frontend.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Frontend</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options for the frontend.</span>			</li>
				</ul>
		
			
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#method__construct">UNL_UCBCN_Frontend_Search::__construct()</a>
								: Constructs this search output.
							</li>
				</ul>
	</div>
<a name="methoddayHasEvents" id="dayHasEvents"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">dayHasEvents</span> (line <span class="line-number">628</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function checks if a calendar has events on the day requested.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true or false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			dayHasEvents
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$epoch</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$epoch</span><span class="var-description">: Unix epoch of the day to check.</span>			</li>
					<li>
				<span class="var-type">UNL_UCBCN_Calendar</span>
				<span class="var-name">$calendar</span><span class="var-description">: The calendar to check.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddbStringToHtml" id="dbStringToHtml"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">dbStringToHtml</span> (line <span class="line-number">614</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function converts a string stored in the database to html output.</p>
<div class="description"><p>&amp; becomes &amp;amp; etc.</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> encoded for output to html.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">String</span>
		<span class="method-name">
			dbStringToHtml
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$t</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$t</span><span class="var-description">: Normally a varchar string from the database.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddetermineView" id="determineView"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">determineView</span> (line <span class="line-number">452</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function attempts to determine the view parameters for the frontend output.</p>
	<ul class="tags">
				<li><span class="field">return:</span> options to be sent to the constructor.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			determineView
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$method</span> = <span class="var-default">'GET'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$method</span><span class="var-description">: The HTTP method to use for determining views-GET | POST</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayImage" id="displayImage"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">displayImage</span> (line <span class="line-number">660</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">When the image view is set, the image for a given event will be displayed  to the end user.  $_GET['id'] must be set to the event.id which has the image.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			displayImage
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodformatURL" id="formatURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">formatURL</span> (line <span class="line-number">316</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a formatted URL.</p>
	<ul class="tags">
				<li><span class="field">return:</span> URL to a frontend which has the data in the format requested.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			formatURL
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$encode</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$values</span><span class="var-description">: Associative array of the values to add to the URL</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$encode</span><span class="var-description">: If true and format is querystring, ampersands will be &amp;amp;</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCacheKey" id="getCacheKey"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCacheKey</span> (line <span class="line-number">525</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get's a uniqe key for this object for reference in cache.</p>
	<ul class="tags">
				<li><span class="field">return:</span> A unique identifier for this view of the calendar.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCacheKey
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetCalendarID" id="getCalendarID"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCalendarID</span> (line <span class="line-number">560</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets the calendar id from a shortname.</p>
	<ul class="tags">
				<li><span class="field">return:</span> id on success, false on error.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			getCalendarID
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$shortname</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$shortname</span><span class="var-description">: The value for the shortname field in the calendar table.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCalendarsByStatus" id="getCalendarsByStatus"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCalendarsByStatus</span> (line <span class="line-number">578</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get a list of calendars with a given status</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getCalendarsByStatus
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: The value of the status in the calendar table</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCalendarShortname" id="getCalendarShortname"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCalendarShortname</span> (line <span class="line-number">543</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a calendar shortname for the calendar with the given ID.</p>
	<ul class="tags">
				<li><span class="field">return:</span> on success, false on error.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			getCalendarShortname
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$id</span><span class="var-description">: Calendar ID within the database.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetEventInstance" id="getEventInstance"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getEventInstance</span> (line <span class="line-number">290</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets the specified event instance.</p>
	<ul class="tags">
				<li><span class="field">return:</span> on success UNL_UCBCN_Error on error.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">object UNL_UCBCN_EventInstance</span>
		<span class="method-name">
			getEventInstance
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$id</span><span class="var-description">: The id of the event instance to get.</span>			</li>
					<li>
				<span class="var-type">UNL_UCBCN_Calendar</span>
				<span class="var-name">$calendar</span><span class="var-description">: The calendar to get the event for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetEventTypes" id="getEventTypes"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getEventTypes</span> (line <span class="line-number">595</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get a list of event types</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getEventTypes
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodpreRun" id="preRun"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preRun</span> (line <span class="line-number">163</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function is called before the run() function to handle  any details prior to populating the data in the object, and  sends output headers.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preRun
		</span>
					([<span class="var-type">bool</span>&nbsp;<span class="var-name">$cache_hit</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$cache_hit</span><span class="var-description">: if data is already cached or not.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodreformatURL" id="reformatURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">reformatURL</span> (line <span class="line-number">396</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function is for reformmating URL address. IE, you have the  url to the object, but simply want to change the format to ics etc.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The URL reformatted to a different output format.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			reformatURL
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$url</span><span class="var-description">: Url of the form http://</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$values</span><span class="var-description">: Associative array of values to apply. format</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">194</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs/builds the frontend object with the display parameters set.</p>
<div class="description"><p>This function will populate all of the output and member variables with the  data for the current view.</p></div>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			run
		</span>
				()
			</div>
	
		
			
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN_Frontend/UNL_UCBCN_Frontend_Search.php#methodrun">UNL_UCBCN_Frontend_Search::run()</a>
								: Runs the query on the database from the calendar, currently supports two types of  searches - textual or date and time hinted by passing a string supported by the strtotime() function.
							</li>
				</ul>
	</div>
<a name="methoduriFormat" id="uriFormat"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">uriFormat</span> (line <span class="line-number">420</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Sets and/or returns the uri format.</p>
	<ul class="tags">
				<li><span class="field">return:</span> rest or querystring</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			uriFormat
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$set</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$set</span><span class="var-description">: optional string, pass it to set the uriFormat, don't pass it to retrieve.</span>			</li>
				</ul>
		
			
	</div>
						
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