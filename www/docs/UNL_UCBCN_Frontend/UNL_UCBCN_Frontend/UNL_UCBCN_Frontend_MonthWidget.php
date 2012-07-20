<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | Docs For Class UNL_UCBCN_Frontend_MonthWidget</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Frontend_MonthWidget</h2>

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
<p class="short-description">Class defines a month widget, basically a table with 30 boxes representing the  days in the month. Days which have events will be selected.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Frontend---MonthWidget.php.php">/UNL/UCBCN/Frontend/MonthWidget.php</a> (line <span class="field">28</span>)
		</p>
		
				
		<pre>UNL_UCBCN
   |
   --UNL_UCBCN_Frontend_MonthWidget</pre>
	
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
					<span class="var-type">UNL_UCBCN_Calendar</span>
					<a href="#var_calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_caption" title="details" class="var-name">$caption</a>
				</div>
																<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_month" title="details" class="var-name">$month</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_tbody" title="details" class="var-name">$tbody</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_thead" title="details" class="var-name">$thead</a>
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
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																				
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_Frontend_MonthWidget</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$y</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$m</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">an</span>
										<a href="#dailyEventCount" title="details" class="method-name">dailyEventCount</a>
											(<span class="var-type">Calendar_Month</span>&nbsp;<span class="var-name">$month</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#findOngoingEvents" title="details" class="method-name">findOngoingEvents</a>
											(<span class="var-type">Calendar_Month</span>&nbsp;<span class="var-name">$month</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCacheKey" title="details" class="method-name">getCacheKey</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preRun" title="details" class="method-name">preRun</a>
											([<span class="var-type">bool</span>&nbsp;<span class="var-name">$cache_hit</span> = <span class="var-default">false</span>])
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
			<span class="var-type">UNL_UCBCN_Calendar</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendar UNL_UCBCN_Calendar Object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_caption" id="var_caption"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$caption</span>
						(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Caption for the month widget.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_month" id="var_month"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$month</span>
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Month for this month widget.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_tbody" id="var_tbody"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$tbody</span>
						(line <span class="line-number">71</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Body for the table</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_thead" id="var_thead"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$thead</span>
						(line <span class="line-number">64</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Header for the table</p>
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
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Year for this month widget</p>
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
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">81</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function constructs the month widget and populates the heading,  caption, footer and body for the MonthWidget.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Frontend_MonthWidget</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$y</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$m</span>, [<span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$y</span><span class="var-description">: Year</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$m</span><span class="var-description">: Month</span>			</li>
					<li>
				<span class="var-type">UNL_UCBCN_Calendar</span>
				<span class="var-name">$calendar</span><span class="var-description">: Calendar to prepare a month widget for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddailyEventCount" id="dailyEventCount"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">dailyEventCount</span> (line <span class="line-number">195</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Determines the days of this month with events.</p>
	<ul class="tags">
				<li><span class="field">return:</span> array with values representing the days with events.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">an</span>
		<span class="method-name">
			dailyEventCount
		</span>
					(<span class="var-type">Calendar_Month</span>&nbsp;<span class="var-name">$month</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">Calendar_Month</span>
				<span class="var-name">$month</span><span class="var-description">: Month to find events in.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfindOngoingEvents" id="findOngoingEvents"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">findOngoingEvents</span> (line <span class="line-number">222</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function finds ongoing events for the given month.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			findOngoingEvents
		</span>
					(<span class="var-type">Calendar_Month</span>&nbsp;<span class="var-name">$month</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">Calendar_Month</span>
				<span class="var-name">$month</span><span class="var-description">: Month to find ongoing events for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCacheKey" id="getCacheKey"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCacheKey</span> (line <span class="line-number">93</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a string identifying this month widget.</p>
	<ul class="tags">
				<li><span class="field">return:</span> A string of the form monthwidget_2006-05-12_1</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCacheKey
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodpreRun" id="preRun"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preRun</span> (line <span class="line-number">109</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs before any output is sent or object is built.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
				<span class="var-name">$cache_hit</span><span class="var-description">: True if cached output is ready to be sent, or false.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">120</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function populates the month widget... checks for each  day of this month whether the day has events.</p>
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