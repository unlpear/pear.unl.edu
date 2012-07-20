<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN</title>";
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
<h2 class="class-name">Class UNL_UCBCN</h2>

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
<p class="short-description">The backend system object for the UNL UCBCN calendar system.</p>
<div class="description"><p>This object is the master object through which most calendar system  interactions take place.</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN.php.php">/UNL/UCBCN.php</a> (line <span class="field">44</span>)
		</p>
		
				
		<pre></pre>
	
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
					<td style="padding-right: 2em"><a href="../UNL_UCBCN/UNL_UCBCN_EventInstance.php">UNL_UCBCN_EventInstance</a></td>
					<td>
											Generic object to hold a single event, and a single event date time.
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
					static <span class="var-type">UNL_UCBCN_CachingService</span>
					<a href="#var_cache" title="details" class="var-name">$cache</a>
				</div>
																																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_input_filters" title="details" class="var-name">$input_filters</a>
				</div>
																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_output_filters" title="details" class="var-name">$output_filters</a>
				</div>
																																												<div class="var-title">
					<span class="var-type">int</span>
					<a href="#var_default_calendar_id" title="details" class="var-name">$default_calendar_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_dsn" title="details" class="var-name">$dsn</a>
				</div>
																																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_template" title="details" class="var-name">$template</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_template_path" title="details" class="var-name">$template_path</a>
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
					static 						<span class="method-result">void</span>
										<a href="#addInputFilter" title="details" class="method-name">addInputFilter</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>&nbsp;<span class="var-name">$filter</span>)
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#addOutputFilter" title="details" class="method-name">addOutputFilter</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>&nbsp;<span class="var-name">$filter</span>)
									</div>
																																																																								<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#displayArray" title="details" class="method-name">displayArray</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$array</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#displayObject" title="details" class="method-name">displayObject</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$object</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#displayRegion" title="details" class="method-name">displayRegion</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$mixed</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$content</span>)
									</div>
																<div class="method-definition">
					static 						<span class="method-result">mixed</span>
										<a href="#factory" title="details" class="method-name">factory</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$table</span>)
									</div>
																																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getCachingService" title="details" class="method-name">getCachingService</a>
										()
									</div>
																																								<div class="method-definition">
					static 						<span class="method-result">string</span>
										<a href="#getTemplateFilename" title="details" class="method-name">getTemplateFilename</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$cname</span>)
									</div>
																																																<div class="method-definition">
					static 						<span class="method-result">string</span>
										<a href="#outputTemplate" title="details" class="method-name">outputTemplate</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$cname</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$templatename</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#sendObjectOutput" title="details" class="method-name">sendObjectOutput</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$object</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$content</span>)
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#setCachingService" title="details" class="method-name">setCachingService</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$cache</span>)
									</div>
																																																
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array('dsn'=&gt;'@DSN@',
                                               'template_path'=&gt;'')</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">object UNL_UCBCN_Account_has_event</span>
										<a href="#addCalendarHasEvent" title="details" class="method-name">addCalendarHasEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">null</span>])
									</div>
																																<div class="method-definition">
											<span class="method-result">num</span>
										<a href="#archiveEvents" title="details" class="method-name">archiveEvents</a>
											([<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$cal</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">bool|object false</span>
										<a href="#calendarHasEvent" title="details" class="method-name">calendarHasEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#cleanCache" title="details" class="method-name">cleanCache</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$o</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#createAccount" title="details" class="method-name">createAccount</a>
											([<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#createCalendar" title="details" class="method-name">createCalendar</a>
											([<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">true</span>
										<a href="#createUser" title="details" class="method-name">createUser</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>&nbsp;<span class="var-name">$account</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$uidcreated</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">object on</span>
										<a href="#dbInsert" title="details" class="method-name">dbInsert</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$table</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>)
									</div>
																																																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getAbsoluteURL" title="details" class="method-name">getAbsoluteURL</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>)
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">object UNL_UCBCN_Account</a></span>
										<a href="#getAccount" title="details" class="method-name">getAccount</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
									</div>
																								<div class="method-definition">
											<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
										<a href="#getCalendar" title="details" class="method-name">getCalendar</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>&nbsp;<span class="var-name">$account</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$return_false</span> = <span class="var-default">true</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$redirecturl</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">object MDB2_Driver</span>
										<a href="#getDatabaseConnection" title="details" class="method-name">getDatabaseConnection</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#getEventCount" title="details" class="method-name">getEventCount</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'posted'</span>])
									</div>
																								<div class="method-definition">
											<span class="method-result">URL</span>
										<a href="#getURL" title="details" class="method-name">getURL</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
										<a href="#getUser" title="details" class="method-name">getUser</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#grantPermission" title="details" class="method-name">grantPermission</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$permission_id</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#localRedirect" title="details" class="method-name">localRedirect</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$keepProtocol</span> = <span class="var-default">true</span>])
									</div>
																																								<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setOptions" title="details" class="method-name">setOptions</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setupDBConn" title="details" class="method-name">setupDBConn</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#showError" title="details" class="method-name">showError</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$description</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#userCanEditEvent" title="details" class="method-name">userCanEditEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#userHasPermission" title="details" class="method-name">userHasPermission</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$permission_name</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>)
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
			<a name="var_cache" id="var_cache"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">UNL_UCBCN_CachingService</span>
			<span class="var-name">$cache</span>
						(line <span class="line-number">83</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Cache object for output caching</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_input_filters" id="var_input_filters"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$input_filters</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">71</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">input filters</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_output_filters" id="var_output_filters"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$output_filters</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">76</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">output filters</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_default_calendar_id" id="var_default_calendar_id"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">int</span>
			<span class="var-name">$default_calendar_id</span>
			 = <span class="var-default"> 1</span>			(line <span class="line-number">66</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Default calendar to use throughout the system.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_dsn" id="var_dsn"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$dsn</span>
						(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">A string containing connection details in the format</p>
<div class="description"><p>dbtype://user:pass@www.example.com:port/database</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_template" id="var_template"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$template</span>
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The template chosen to display in, defaults to default.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_template_path" id="var_template_path"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$template_path</span>
						(line <span class="line-number">55</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The filesystem path to the templates.</p>
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
<a name="methodaddInputFilter" id="addInputFilter"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method addInputFilter</span> (line <span class="line-number">159</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">adds an input filter to this controller, the filter will be called whenever input is processed</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			addInputFilter
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>&nbsp;<span class="var-name">$filter</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>
				<span class="var-name">$filter</span><span class="var-description">: a filter object used for filtering input</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddOutputFilter" id="addOutputFilter"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method addOutputFilter</span> (line <span class="line-number">169</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">adds an output filter to this controller, the filter will be called whenever output is sent</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			addOutputFilter
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>&nbsp;<span class="var-name">$filter</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Filter.php">UNL_UCBCN_Filter</a></span>
				<span class="var-name">$filter</span><span class="var-description">: a filter object used for filtering input</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayArray" id="displayArray"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method displayArray</span> (line <span class="line-number">330</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			displayArray
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$array</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$array</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$return</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayObject" id="displayObject"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method displayObject</span> (line <span class="line-number">348</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			displayObject
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$object</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$object</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$return</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayRegion" id="displayRegion"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method displayRegion</span> (line <span class="line-number">312</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The heart of the template/display portions of this system.</p>
<div class="description"><p>A simple function which renders the given content using a savant  formatted template based on the type of the object.  IE:     strings and ints get echoed          objects use a corresponding savant template,          arrays get rendered one by one</p><p>For caching support the object being outputted must implement  three methods:  getCacheKey()                Return a unique string for the object/output.  preRun(bool $cache_hit)      Function which will be called before run                               (implement cache hit recording here and header()                               output)  run()                        This function must populate the object and get                               it prepped for output.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			displayRegion
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$mixed</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$content</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$content</span><span class="var-description">: The content to send out.</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$return</span><span class="var-description">: Whether to output or return the content.</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$mixed</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfactory" id="factory"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method factory</span> (line <span class="line-number">199</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function allows extended classes etc to get a DB DataObject  for the event table they need access to.</p>
	<ul class="tags">
				<li><span class="field">return:</span> A object for the database table requested.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">mixed</span>
		<span class="method-name">
			factory
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$table</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$table</span><span class="var-description">: The name of the table in the database to receive a                       DataObject for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCachingService" id="getCachingService"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method getCachingService</span> (line <span class="line-number">792</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getCachingService
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetTemplateFilename" id="getTemplateFilename"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getTemplateFilename</span> (line <span class="line-number">691</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function takes in a class name and returns the correct template  for the object.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Filename of the output template to use for the given class.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">string</span>
		<span class="method-name">
			getTemplateFilename
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$cname</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$cname</span><span class="var-description">: the name of the class to get the template for</span>			</li>
				</ul>
		
			
	</div>
<a name="methodoutputTemplate" id="outputTemplate"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method outputTemplate</span> (line <span class="line-number">725</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets or sets the output template for a given class.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">string</span>
		<span class="method-name">
			outputTemplate
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$cname</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$templatename</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$cname</span><span class="var-description">: Name of the class to set/get template for.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$templatename</span><span class="var-description">: Name of the template to use.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsendObjectOutput" id="sendObjectOutput"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method sendObjectOutput</span> (line <span class="line-number">404</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Prepares an object for output, and displays it with a corresponding template.</p>
<div class="description"><p>This function is an output controller, which takes public member variables  from an object and populates a Savant template with equivalent member  variables.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			sendObjectOutput
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$object</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$return</span> = <span class="var-default">false</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$content</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$content</span><span class="var-description">: Object with content to send out.</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$object</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$return</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetCachingService" id="setCachingService"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method setCachingService</span> (line <span class="line-number">787</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			setCachingService
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$cache</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_UCBCN_CachingService</span>
				<span class="var-name">$cache</span>			</li>
				</ul>
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">91</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor for the UCBCN object, initializes member variables and sets up  connection details for the database.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array('dsn'=&gt;'@DSN@',
                                               'template_path'=&gt;'')</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options to set for the class.</span>			</li>
				</ul>
		
			
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN/UNL_UCBCN_EventInstance.php#method__construct">UNL_UCBCN_EventInstance::__construct()</a>
								: constructor
							</li>
				</ul>
	</div>
<a name="methodaddCalendarHasEvent" id="addCalendarHasEvent"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">addCalendarHasEvent</span> (line <span class="line-number">487</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Adds an event to a calendar.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">object UNL_UCBCN_Account_has_event</span>
		<span class="method-name">
			addCalendarHasEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span><span class="var-description">: UNL_UCBCN_Calendar object.</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span><span class="var-description">: The event to add to the calendar.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: [pending|posted|archived]</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: User adding this event to a calendar.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$source</span><span class="var-description">: Where is this coming from?</span>			</li>
				</ul>
		
			
	</div>
<a name="methodarchiveEvents" id="archiveEvents"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">archiveEvents</span> (line <span class="line-number">757</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function changes the status for events in the  past to 'archived.'</p>
	<ul class="tags">
				<li><span class="field">return:</span> of affected rows or mdb2 error object</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">num</span>
		<span class="method-name">
			archiveEvents
		</span>
					([<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$cal</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$cal</span><span class="var-description">: Calendar to archive events for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcalendarHasEvent" id="calendarHasEvent"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">calendarHasEvent</span> (line <span class="line-number">501</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks whether a calendar has an event or not.</p>
	<ul class="tags">
				<li><span class="field">return:</span> on error, object on success.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool|object false</span>
		<span class="method-name">
			calendarHasEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span><span class="var-description">: Calendar to check</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span><span class="var-description">: Event to check if exists on the calendar.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcleanCache" id="cleanCache"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">cleanCache</span> (line <span class="line-number">782</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Cleans the cache.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true if cache was successfully cleared.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			cleanCache
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$o</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$o</span><span class="var-description">: Pass a cached object to clean it's cache, or a string id.</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$object</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcreateAccount" id="createAccount"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">createAccount</span> (line <span class="line-number">466</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function creates a calendar account.</p>
	<ul class="tags">
				<li><span class="field">return:</span> ID on success false on error.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			createAccount
		</span>
					([<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$values</span><span class="var-description">: assoc array of field values for the account.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcreateCalendar" id="createCalendar"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">createCalendar</span> (line <span class="line-number">637</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function creates a calendar for an account.</p>
	<ul class="tags">
				<li><span class="field">return:</span> int ID of calendar record on success false on error.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			createCalendar
		</span>
					([<span class="var-type">array</span>&nbsp;<span class="var-name">$values</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$values</span><span class="var-description">: assoc array of field values for the calendar.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcreateUser" id="createUser"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">createUser</span> (line <span class="line-number">213</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">creates a new user record and returns it.</p>
	<ul class="tags">
				<li><span class="field">return:</span> or inserted id on success</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">true</span>
		<span class="method-name">
			createUser
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>&nbsp;<span class="var-name">$account</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$uidcreated</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>
				<span class="var-name">$account</span><span class="var-description">: The account to add this user under.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique id of the user to create</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uidcreated</span><span class="var-description">: UID of the user who created this user.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddbInsert" id="dbInsert"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">dbInsert</span> (line <span class="line-number">235</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function is a general insert function,  given the table name and an assoc array of values,  it will return the inserted record.</p>
	<ul class="tags">
				<li><span class="field">return:</span> success, failed return value on failure.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">object on</span>
		<span class="method-name">
			dbInsert
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$table</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$values</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$table</span><span class="var-description">: Name of the table</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$values</span><span class="var-description">: assoc array of values to insert.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetAbsoluteURL" id="getAbsoluteURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getAbsoluteURL</span> (line <span class="line-number">676</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an absolute URL using Net_URL</p>
	<ul class="tags">
				<li><span class="field">return:</span> Full url</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getAbsoluteURL
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$url</span><span class="var-description">: All/part of a url</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetAccount" id="getAccount"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getAccount</span> (line <span class="line-number">556</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets the account record(s) for the user</p>
	<ul class="tags">
				<li><span class="field">return:</span> on success UNL_UCBCN_Error on error.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">object UNL_UCBCN_Account</a></span>
		<span class="method-name">
			getAccount
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: User to get account for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCalendar" id="getCalendar"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCalendar</span> (line <span class="line-number">585</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets the calendar(s) for the given account that the given user has permission  to. Optionally the user can be redirected on creation of a new calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> object on success false if no calendar exists and                             $return_false paramter was passed as true.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
		<span class="method-name">
			getCalendar
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>&nbsp;<span class="var-name">$account</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$return_false</span> = <span class="var-default">true</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$redirecturl</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: User to get the calendar for</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Account.php">UNL_UCBCN_Account</a></span>
				<span class="var-name">$account</span><span class="var-description">: Account to get calendar for.</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$return_false</span><span class="var-description">: If true, will return false if no                                         account exists, if false it invokes                                         createCalendar.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$redirecturl</span><span class="var-description">: A url to redirect on creation of a new                                         record. If set the user will be                                         redirected, otherwise the account will                                         be returned.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetDatabaseConnection" id="getDatabaseConnection"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getDatabaseConnection</span> (line <span class="line-number">707</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets an MDB2 connection object and returns it.</p>
	<ul class="tags">
				<li><span class="field">return:</span> object on success, UNL_UCBCN_Error on error.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">object MDB2_Driver</span>
		<span class="method-name">
			getDatabaseConnection
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetEventCount" id="getEventCount"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getEventCount</span> (line <span class="line-number">182</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function gets the count of events for the given status.</p>
	<ul class="tags">
				<li><span class="field">return:</span> count</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			getEventCount
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'posted'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span><span class="var-description">: Calendar to check.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: [pending|posted|archived]</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetURL" id="getURL"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getURL</span> (line <span class="line-number">739</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the URL for the calendar system.</p>
	<ul class="tags">
				<li><span class="field">return:</span> to this instance.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">URL</span>
		<span class="method-name">
			getURL
		</span>
				()
			</div>
	
		
			
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_UCBCN/UNL_UCBCN_EventInstance.php#methodgetURL">UNL_UCBCN_EventInstance::getURL()</a>
								: This function returns the URL for this event instance.
							</li>
				</ul>
	</div>
<a name="methodgetUser" id="getUser"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getUser</span> (line <span class="line-number">523</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function returns a object for the user with  the given uid.</p>
<div class="description"><p>If a record does not exist, one is inserted then returned.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
		<span class="method-name">
			getUser
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: The unique user identifier to get object for (username).</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgrantPermission" id="grantPermission"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">grantPermission</span> (line <span class="line-number">449</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function adds the given permission for the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> ID on success false on error.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			grantPermission
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$permission_id</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Username to add permission for.</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$calendar_id</span><span class="var-description">: ID of the calendar to add permission for.</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$permission_id</span><span class="var-description">: Permission id you wish to add for the person.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodlocalRedirect" id="localRedirect"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">localRedirect</span> (line <span class="line-number">659</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Redirects to the given full or partial URL.</p>
<div class="description"><p>will turn the given url into an absolute url  using the above getURL() function. This function  does not return.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			localRedirect
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$keepProtocol</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$url</span><span class="var-description">: Full/partial url to redirect to</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$keepProtocol</span><span class="var-description">: Keep the https protocol or to force HTTP?</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetOptions" id="setOptions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setOptions</span> (line <span class="line-number">126</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function sets parameters for this class.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setOptions
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: an associative array of options to set.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetupDBConn" id="setupDBConn"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setupDBConn</span> (line <span class="line-number">104</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function initializes the information used by the database  connections.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setupDBConn
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodshowError" id="showError"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">showError</span> (line <span class="line-number">285</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Simple function which displays the error to the end user.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			showError
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$description</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$description</span><span class="var-description">: Description of the error.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoduserCanEditEvent" id="userCanEditEvent"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">userCanEditEvent</span> (line <span class="line-number">814</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function determines if a user can edit the details of a specific event.</p>
<div class="description"><p>Permission relies on a couple requirements:   User has 'Event Edit' rights over the calendar the event was originally   created under, OR the event was 'recommended for the default calendar', and   this user has permission over the default calendar.</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> true or false</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			userCanEditEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: User to check</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span><span class="var-description">: Event to check</span>			</li>
				</ul>
		
			
	</div>
<a name="methoduserHasPermission" id="userHasPermission"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">userHasPermission</span> (line <span class="line-number">261</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks if a user has a given permission over the account.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true or false</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			userHasPermission
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$permission_name</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: User to check.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$permission_name</span><span class="var-description">: The permission to check for.</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span><span class="var-description">: Calendar to check permissions on.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:43 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>