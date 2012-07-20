<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | Docs For Class UNL_UCBCN_Manager</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Manager</h2>

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
<p class="short-description">Class which handles all event creation and authentication. This class acts as the basis for the  management portion of a university event publisher, through which users will log in and create and manage  their calendars.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">author:</span> Alvin Woon &lt;<a href="mailto:alvinwoon@gmail.com">alvinwoon@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Manager.php.php">/UNL/UCBCN/Manager.php</a> (line <span class="field">48</span>)
		</p>
		
				
		<pre>UNL_UCBCN
   |
   --UNL_UCBCN_Manager</pre>
	
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
					<span class="var-type">object</span>
					<a href="#var_a" title="details" class="var-name">$a</a>
				</div>
																<div class="var-title">
					<span class="var-type">object</span>
					<a href="#var_account" title="details" class="var-name">$account</a>
				</div>
																<div class="var-title">
					<span class="var-type">object</span>
					<a href="#var_calendar" title="details" class="var-name">$calendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">array|string</span>
					<a href="#var_calendarselect" title="details" class="var-name">$calendarselect</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_doctitle" title="details" class="var-name">$doctitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_frontenduri" title="details" class="var-name">$frontenduri</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_output" title="details" class="var-name">$output</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_plugins" title="details" class="var-name">$plugins</a>
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
					<span class="var-type">UNL_UCBCN_User</span>
					<a href="#var_user" title="details" class="var-name">$user</a>
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
					static 						<span class="method-result">array(UNL_UCBCN_Event)</span>
										<a href="#getPostedEvents" title="details" class="method-name">getPostedEvents</a>
										()
									</div>
																																																																																																																																																																																																
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_Manager</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#endSession" title="details" class="method-name">endSession</a>
										()
									</div>
																								<div class="method-definition">
											<span class="method-result">pager</span>
										<a href="#pagerWrapper" title="details" class="method-name">pagerWrapper</a>
											(<span class="var-type">object</span>&nbsp;<span class="var-name">&$db</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$query</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$pager_options</span> = <span class="var-default">array()</span>], [<span class="var-type">bool</span>&nbsp;<span class="var-name">$disabled</span> = <span class="var-default">false</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$fetchMode</span> = <span class="var-default">MDB2_FETCHMODE_ASSOC</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#processPostedEvents" title="details" class="method-name">processPostedEvents</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#processPostStatusChange" title="details" class="method-name">processPostStatusChange</a>
											(<span class="var-type">UNL_UCBCN_Event</span>&nbsp;<span class="var-name">$event</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">'search'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#registerPlugin" title="details" class="method-name">registerPlugin</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$class_name</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">none.</span>
										<a href="#run" title="details" class="method-name">run</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$action</span> = <span class="var-default">''</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showAccountForm" title="details" class="method-name">showAccountForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showAddUserForm" title="details" class="method-name">showAddUserForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showCalendarForm" title="details" class="method-name">showCalendarForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showCalendars" title="details" class="method-name">showCalendars</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showCalendarUsers" title="details" class="method-name">showCalendarUsers</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">html</span>
										<a href="#showChooseCalendar" title="details" class="method-name">showChooseCalendar</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showEventDateTimeForm" title="details" class="method-name">showEventDateTimeForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#showEventListing" title="details" class="method-name">showEventListing</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'pending'</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$orderby</span> = <span class="var-default">'eventdatetime.starttime'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showEventSubmitForm" title="details" class="method-name">showEventSubmitForm</a>
											([<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showImportForm" title="details" class="method-name">showImportForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">object UNL_UCBCN_Manager_Login.</span>
										<a href="#showLoginForm" title="details" class="method-name">showLoginForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showPermissionsForm" title="details" class="method-name">showPermissionsForm</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span>)
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php">UNL_UCBCN_Manager_Recommend</a></span>
										<a href="#showRecommendForm" title="details" class="method-name">showRecommendForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#showSearchResults" title="details" class="method-name">showSearchResults</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showSubscribeForm" title="details" class="method-name">showSubscribeForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#showSubscriptions" title="details" class="method-name">showSubscriptions</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#startSession" title="details" class="method-name">startSession</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#startupPlugins" title="details" class="method-name">startupPlugins</a>
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
			<a name="var_a" id="var_a"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object</span>
			<span class="var-name">$a</span>
						(line <span class="line-number">56</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Auth object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_account" id="var_account"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object</span>
			<span class="var-name">$account</span>
						(line <span class="line-number">63</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_Account</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_calendar" id="var_calendar"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object</span>
			<span class="var-name">$calendar</span>
						(line <span class="line-number">70</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_Calendar this user is managing.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_calendarselect" id="var_calendarselect"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array|string</span>
			<span class="var-name">$calendarselect</span>
						(line <span class="line-number">98</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Indicates which calendars you have access to.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_doctitle" id="var_doctitle"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$doctitle</span>
						(line <span class="line-number">116</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Title for the page.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_frontenduri" id="var_frontenduri"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$frontenduri</span>
			 = <span class="var-default"> ''</span>			(line <span class="line-number">91</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URI to the public frontend UNL_UCBCN_Frontend</p>
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
						(line <span class="line-number">110</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Main content of the page sent to the client.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_plugins" id="var_plugins"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$plugins</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">129</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Registered and running plugins.</p>
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
						(line <span class="line-number">122</span>)
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
						(line <span class="line-number">104</span>)
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
			 = <span class="var-default"> ''</span>			(line <span class="line-number">84</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">URI to the management frontend</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_user" id="var_user"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">UNL_UCBCN_User</span>
			<span class="var-name">$user</span>
						(line <span class="line-number">77</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_User object for the user who is logged in and managing a calendar.</p>
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
<a name="methodgetPostedEvents" id="getPostedEvents"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getPostedEvents</span> (line <span class="line-number">585</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns an array of all posted events.</p>
<div class="description"><p>Events should be posted in the form event1923 Where 1923 is  the ID of the event.</p></div>
	
	<div class="method-signature">
	    static
		<span class="method-result">array(UNL_UCBCN_Event)</span>
		<span class="method-name">
			getPostedEvents
		</span>
				()
			</div>
	
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">136</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor for the UNL_UCBCN_Manager.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Manager</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array with options to set for member variables.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodendSession" id="endSession"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">endSession</span> (line <span class="line-number">237</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Ends a calendar management session for the current user.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			endSession
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodpagerWrapper" id="pagerWrapper"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">pagerWrapper</span> (line <span class="line-number">1078</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function handles pagination of a database query.</p>
	<ul class="tags">
				<li><span class="field">return:</span> object</li>
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">pager</span>
		<span class="method-name">
			pagerWrapper
		</span>
					(<span class="var-type">object</span>&nbsp;<span class="var-name">&$db</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$query</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$pager_options</span> = <span class="var-default">array()</span>], [<span class="var-type">bool</span>&nbsp;<span class="var-name">$disabled</span> = <span class="var-default">false</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$fetchMode</span> = <span class="var-default">MDB2_FETCHMODE_ASSOC</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$db</span><span class="var-description">: Database connection</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$query</span><span class="var-description">: SQL to send</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$pager_options</span><span class="var-description">: Options for the pager class</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$disabled</span><span class="var-description">: Boolean option</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$fetchMode</span><span class="var-description">: The type of mode to fetch</span>			</li>
				</ul>
		
			
	</div>
<a name="methodprocessPostedEvents" id="processPostedEvents"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">processPostedEvents</span> (line <span class="line-number">564</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs actions on the posted events.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			processPostedEvents
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodprocessPostStatusChange" id="processPostStatusChange"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">processPostStatusChange</span> (line <span class="line-number">609</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Handles the posting of an updated event. This will alter the event's status  based on what the user chose within the manager interface.</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			processPostStatusChange
		</span>
					(<span class="var-type">UNL_UCBCN_Event</span>&nbsp;<span class="var-name">$event</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">'search'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_UCBCN_Event</span>
				<span class="var-name">$event</span><span class="var-description">: Event to update.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$source</span><span class="var-description">: Source of this change in status.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodregisterPlugin" id="registerPlugin"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">registerPlugin</span> (line <span class="line-number">1057</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Registers a plugin for use within the manager.</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-id"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span><span class="src-sym">::</span><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php#methodregisterPlugin">registerPlugin</a><span class="src-sym">(</span><span class="src-str">'UNL_UCBCN_Manager_InDesignExport'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			registerPlugin
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$class_name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$class_name</span><span class="var-description">: Name of the class of the plugin to register.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">292</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function is the hub for the manager frontend.</p>
<div class="description"><p>All output sent to the client is set up here, based  on querystring parameters and authentication level.</p></div>
	
	<div class="method-signature">
		<span class="method-result">none.</span>
		<span class="method-name">
			run
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$action</span> = <span class="var-default">''</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$action</span><span class="var-description">: A manual action to send to the client.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodshowAccountForm" id="showAccountForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showAccountForm</span> (line <span class="line-number">781</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a form to edit the current acccount.</p>
	<ul class="tags">
				<li><span class="field">return:</span> html form.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showAccountForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowAddUserForm" id="showAddUserForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showAddUserForm</span> (line <span class="line-number">997</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Displays a form to add a user to the system.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML webform</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showAddUserForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowCalendarForm" id="showCalendarForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showCalendarForm</span> (line <span class="line-number">810</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns a form for editing the calendar details.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form for editing a calendar.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showCalendarForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowCalendars" id="showCalendars"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showCalendars</span> (line <span class="line-number">906</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns a list of calendars for the current account.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Unordered list of calendars.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showCalendars
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowCalendarUsers" id="showCalendarUsers"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showCalendarUsers</span> (line <span class="line-number">933</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns a list of users that have 'some'  permission to the current calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> html list of users.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showCalendarUsers
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowChooseCalendar" id="showChooseCalendar"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showChooseCalendar</span> (line <span class="line-number">1017</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns all the calendars this user has access to.</p>
	<ul class="tags">
				<li><span class="field">return:</span> form for choosing account</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">html</span>
		<span class="method-name">
			showChooseCalendar
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowEventDateTimeForm" id="showEventDateTimeForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showEventDateTimeForm</span> (line <span class="line-number">835</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a form for editing an event date &amp; time instance.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form for editing an event date &amp; time</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showEventDateTimeForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowEventListing" id="showEventListing"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showEventListing</span> (line <span class="line-number">727</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Shows the list of events for the current user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> mixed, navigation list, events currently in the system.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			showEventListing
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'pending'</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$orderby</span> = <span class="var-default">'eventdatetime.starttime'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: The type of events to return, pending, posted or archived</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$orderby</span><span class="var-description">: The SQL ORDER BY statement</span>			</li>
				</ul>
		
			
	</div>
<a name="methodshowEventSubmitForm" id="showEventSubmitForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showEventSubmitForm</span> (line <span class="line-number">260</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a form for entering/editing an event.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form for entering an event into the database.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showEventSubmitForm
		</span>
					([<span class="var-type">int</span>&nbsp;<span class="var-name">$id</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$id</span><span class="var-description">: ID of the event to retrieve and generate a form for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodshowImportForm" id="showImportForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showImportForm</span> (line <span class="line-number">272</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a html form for importing xml/.ics files.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form for uploading a file.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showImportForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowLoginForm" id="showLoginForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showLoginForm</span> (line <span class="line-number">247</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns login object which will be used for the user to authenticate with.</p>
	
	<div class="method-signature">
		<span class="method-result">object UNL_UCBCN_Manager_Login.</span>
		<span class="method-name">
			showLoginForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowPermissionsForm" id="showPermissionsForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showPermissionsForm</span> (line <span class="line-number">661</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function generates and returns a permissions form for the given user and calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showPermissionsForm
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">UNL_UCBCN_Calendar</span>&nbsp;<span class="var-name">$calendar</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: User id to edit permissions for.</span>			</li>
					<li>
				<span class="var-type">UNL_UCBCN_Calendar</span>
				<span class="var-name">$calendar</span><span class="var-description">: Calendar to edit permissions for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodshowRecommendForm" id="showRecommendForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showRecommendForm</span> (line <span class="line-number">889</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This form allows the user to recommend an event for other calendars.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager_Recommend.php">UNL_UCBCN_Manager_Recommend</a></span>
		<span class="method-name">
			showRecommendForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowSearchResults" id="showSearchResults"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showSearchResults</span> (line <span class="line-number">508</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an event listing of search results.</p>
	<ul class="tags">
				<li><span class="field">return:</span> of html snippets and events</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			showSearchResults
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowSubscribeForm" id="showSubscribeForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showSubscribeForm</span> (line <span class="line-number">432</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a form for subscribing to a calendar within the system.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML form</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showSubscribeForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowSubscriptions" id="showSubscriptions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">showSubscriptions</span> (line <span class="line-number">469</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a listing of the subscriptions for the current calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> html list of subscriptions.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			showSubscriptions
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodstartSession" id="startSession"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">startSession</span> (line <span class="line-number">195</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Begins a calendar management session for this user.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			startSession
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodstartupPlugins" id="startupPlugins"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">startupPlugins</span> (line <span class="line-number">160</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function initializes all plugins.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			startupPlugins
		</span>
				()
			</div>
	
		
			
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