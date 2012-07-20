<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | Docs For Class UNL_UCBCN_Manager_Recommend</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Manager_Recommend</h2>

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
<p class="short-description">This class handles recommending an event for other calendars.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Manager---Recommend.php.php">/UNL/UCBCN/Manager/Recommend.php</a> (line <span class="field">23</span>)
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
					<span class="var-type">array</span>
					<a href="#var_calendars" title="details" class="var-name">$calendars</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_events" title="details" class="var-name">$events</a>
				</div>
																<div class="var-title">
					<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
					<a href="#var_manager" title="details" class="var-name">$manager</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_recommendable" title="details" class="var-name">$recommendable</a>
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
											<span class="method-result">UNL_UCBCN_Manager_Recommend</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">&$manager</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$events</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#getCalendarsWithPermission" title="details" class="method-name">getCalendarsWithPermission</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$permissions</span>)
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
			<a name="var_calendars" id="var_calendars"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$calendars</span>
						(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendars which this user has permission to post events to by permission.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_events" id="var_events"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$events</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Events to build a recommendation form for.</p>
	<ul class="tags">
				<li><span class="field">var:</span> of UNL_UCBCN_Event</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_manager" id="var_manager"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
			<span class="var-name">$manager</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Management interface to build a recommend page for.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_recommendable" id="var_recommendable"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$recommendable</span>
						(line <span class="line-number">51</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Calendars which this user can recommend events to.</p>
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
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">53</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Manager_Recommend</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">&$manager</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$events</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
				<span class="var-name">&$manager</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$events</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCalendarsWithPermission" id="getCalendarsWithPermission"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCalendarsWithPermission</span> (line <span class="line-number">116</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an array of the allowed permissions by calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> in the form of $arr[{calendar_id}][{permission.name}] = 1</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			getCalendarsWithPermission
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$permissions</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_UCBCN_User</span>
				<span class="var-name">$user</span><span class="var-description">: User to check.</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$permissions</span><span class="var-description">: Array of permission names to check for.</span>			</li>
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