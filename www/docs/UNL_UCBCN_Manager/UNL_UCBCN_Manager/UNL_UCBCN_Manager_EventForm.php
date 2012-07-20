<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | Docs For Class UNL_UCBCN_Manager_EventForm</title>";
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
			<div class="page-body">			
<h2 class="class-name">Class UNL_UCBCN_Manager_EventForm</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This class generates a form for an Event.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Manager---EventForm.php.php">/UNL/UCBCN/Manager/EventForm.php</a> (line <span class="field">26</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>




	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
												<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																				
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_Manager_EventForm</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">$manager</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#addToCalendar" title="details" class="method-name">addToCalendar</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$event</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getRelatedLocationDateAndTimes" title="details" class="method-name">getRelatedLocationDateAndTimes</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$event</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#toHtml" title="details" class="method-name">toHtml</a>
											([<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span> = <span class="var-default">null</span>])
									</div>
								</div>
		</div>
	</div>		

	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">33</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructs the form.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Manager_EventForm</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">$manager</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
				<span class="var-name">$manager</span><span class="var-description">: The manager object requesting the form.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddToCalendar" id="addToCalendar"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addToCalendar</span> (line <span class="line-number">101</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Adds an event to the calendar currently in the manager member variable calendar.</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			addToCalendar
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_UCBCN_Event</span>
				<span class="var-name">$event</span><span class="var-description">: The event to add to the calendar.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetRelatedLocationDateAndTimes" id="getRelatedLocationDateAndTimes"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getRelatedLocationDateAndTimes</span> (line <span class="line-number">131</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a html table of event date time and locations</p>
	<ul class="tags">
				<li><span class="field">return:</span> html</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getRelatedLocationDateAndTimes
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_UCBCN_Event</span>
				<span class="var-name">$event</span><span class="var-description">: The event to get related eventdatetime objects for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtoHtml" id="toHtml"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">toHtml</span> (line <span class="line-number">45</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an HTML form for an event.</p>
	<ul class="tags">
				<li><span class="field">return:</span> | object HTML on success UNL_UCBCN_Error on failure.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			toHtml
		</span>
					([<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$id</span><span class="var-description">: The ID of the event to convert to a form.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:45 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>