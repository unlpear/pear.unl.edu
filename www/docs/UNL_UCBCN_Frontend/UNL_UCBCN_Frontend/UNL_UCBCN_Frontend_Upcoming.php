<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | Docs For Class UNL_UCBCN_Frontend_Upcoming</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Frontend_Upcoming</h2>

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
<p class="short-description">A list of upcoming events for a calendar.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Frontend---Upcoming.php.php">/UNL/UCBCN/Frontend/Upcoming.php</a> (line <span class="field">31</span>)
		</p>
		
				
		<pre>UNL_UCBCN
   |
   --UNL_UCBCN_Frontend_Upcoming</pre>
	
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
					<span class="var-type">int</span>
					<a href="#var_limit" title="details" class="var-name">$limit</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_noevents" title="details" class="var-name">$noevents</a>
				</div>
																<div class="var-title">
					<span class="var-type">UNL_UCBCN_EventListing</span>
					<a href="#var_output" title="details" class="var-name">$output</a>
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
											<span class="method-result">UNL_UCBCN_Frontend_Upcoming</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getURL" title="details" class="method-name">getURL</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">UNL_UCBCN_EventListing</span>
										<a href="#showEventListing" title="details" class="method-name">showEventListing</a>
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
			<span class="var-type">UNL_UCBCN_Calendar</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendar UNL_UCBCN_Calendar Object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_limit" id="var_limit"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$limit</span>
			 = <span class="var-default"> 10</span>			(line <span class="line-number">64</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Limit the number of records.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_noevents" id="var_noevents"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$noevents</span>
			 = <span class="var-default"> 'Sorry, no events could be found.'</span>			(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Message for when no upcoming events are found.</p>
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
						(line <span class="line-number">45</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Listing of events on this day.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_url" id="var_url"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$url</span>
						(line <span class="line-number">52</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URL to the listing of upcoming events.</p>
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
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">71</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructs an upcoming event view for this calendar.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Frontend_Upcoming</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetURL" id="getURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getURL</span> (line <span class="line-number">109</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get a permanent URL to this object.</p>
	<ul class="tags">
				<li><span class="field">return:</span> URL to this specific upcoming.</li>
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
<a name="methodshowEventListing" id="showEventListing"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showEventListing</span> (line <span class="line-number">89</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_EventListing of events.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_EventListing</span>
		<span class="method-name">
			showEventListing
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