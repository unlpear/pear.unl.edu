<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_EventListing</title>";
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
<h2 class="class-name">Class UNL_UCBCN_EventListing</h2>

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
<p class="short-description">This class holds all the events for the list.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---EventListing.php.php">/UNL/UCBCN/EventListing.php</a> (line <span class="field">29</span>)
		</p>
		
				
		<pre></pre>
	
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
					<span class="var-type">mixed</span>
					<a href="#var_events" title="details" class="var-name">$events</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_status" title="details" class="var-name">$status</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_type" title="details" class="var-name">$type</a>
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
											<span class="method-result">UNL_UCBCN_EventListing</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">null</span>], [<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#constructDayEventInstanceList" title="details" class="method-name">constructDayEventInstanceList</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#constructOngoingEventList" title="details" class="method-name">constructOngoingEventList</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#constructUpcomingEventList" title="details" class="method-name">constructUpcomingEventList</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
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
			<a name="var_events" id="var_events"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$events</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Array of UNL_UCBCN_Event or UNL_UCBCN_EventInstance objects for this listing.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_status" id="var_status"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$status</span>
						(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Events of a given status</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_type" id="var_type"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$type</span>
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">holds the type for this eventlisting... could be upcoming, ongoing, search etc</p>
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
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">46</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_EventListing</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">null</span>], [<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: Optional parameter to fetch an event listing for types of events.</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: options for the specific constructor to initialize the object.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodconstructDayEventInstanceList" id="constructDayEventInstanceList"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">constructDayEventInstanceList</span> (line <span class="line-number">76</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Populates events with a listing of events for the calendar given.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			constructDayEventInstanceList
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options          'year'        int        Year of the events          'month'        int        Month          'day'        int        Day          'calendar'    UNL_UCBCN_Calendar    Calendar to fetch events for (optional).          'orderby'    string    ORDER BY sql clause.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodconstructOngoingEventList" id="constructOngoingEventList"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">constructOngoingEventList</span> (line <span class="line-number">160</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructs a list of ongoing events.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			constructOngoingEventList
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options, year, month, day, orderby</span>			</li>
				</ul>
		
			
	</div>
<a name="methodconstructUpcomingEventList" id="constructUpcomingEventList"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">constructUpcomingEventList</span> (line <span class="line-number">114</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructs a list of upcoming events for the given calendar.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			constructUpcomingEventList
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options, orderby, limit, calendar</span>			</li>
				</ul>
		
			
	</div>
						
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