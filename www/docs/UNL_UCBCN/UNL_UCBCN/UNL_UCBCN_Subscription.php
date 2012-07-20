<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Subscription</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Subscription</h2>

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
<p class="short-description">ORM for a record within the database.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Subscription.php.php">/UNL/UCBCN/Subscription.php</a> (line <span class="field">31</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Subscription</pre>
	
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
					<a href="#var_automaticapproval" title="details" class="var-name">$automaticapproval</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_calendar_id" title="details" class="var-name">$calendar_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_datecreated" title="details" class="var-name">$datecreated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_datelastupdated" title="details" class="var-name">$datelastupdated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_expirationdate" title="details" class="var-name">$expirationdate</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_enumFields" title="details" class="var-name">$fb_enumFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_enumOptions" title="details" class="var-name">$fb_enumOptions</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_fieldLabels" title="details" class="var-name">$fb_fieldLabels</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_hiddenFields" title="details" class="var-name">$fb_hiddenFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_linkElementTypes" title="details" class="var-name">$fb_linkElementTypes</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_name" title="details" class="var-name">$name</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_searchcriteria" title="details" class="var-name">$searchcriteria</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_timeperiod" title="details" class="var-name">$timeperiod</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uidcreated" title="details" class="var-name">$uidcreated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uidlastupdated" title="details" class="var-name">$uidlastupdated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var___table" title="details" class="var-name">$__table</a>
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
											<span class="method-result">int</span>
										<a href="#calendarHasSubscribers" title="details" class="method-name">calendarHasSubscribers</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getApprovalStatus" title="details" class="method-name">getApprovalStatus</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#getCalendars" title="details" class="method-name">getCalendars</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$searchcriteria</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#insert" title="details" class="method-name">insert</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#keys" title="details" class="method-name">keys</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#links" title="details" class="method-name">links</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">MDB2_Result</span>
										<a href="#matchingEvents" title="details" class="method-name">matchingEvents</a>
											([<span class="var-type">bool</span>&nbsp;<span class="var-name">$exclude_existing</span> = <span class="var-default">true</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#postGenerateForm" title="details" class="method-name">postGenerateForm</a>
											(<span class="var-type">HTML_QuickForm</span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preGenerateForm" title="details" class="method-name">preGenerateForm</a>
											(<span class="var-type">object</span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preProcessForm" title="details" class="method-name">preProcessForm</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type">object</span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#process" title="details" class="method-name">process</a>
											([<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#sequenceKey" title="details" class="method-name">sequenceKey</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#staticGet" title="details" class="method-name">staticGet</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#table" title="details" class="method-name">table</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#update" title="details" class="method-name">update</a>
											([<span class="var-type">object</span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#updateSubscribedCalendars" title="details" class="method-name">updateSubscribedCalendars</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, [<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
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
			<a name="var_automaticapproval" id="var_automaticapproval"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$automaticapproval</span>
						(line <span class="line-number">40</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_calendar_id" id="var_calendar_id"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendar_id</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_datecreated" id="var_datecreated"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$datecreated</span>
						(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_datelastupdated" id="var_datelastupdated"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$datelastupdated</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_expirationdate" id="var_expirationdate"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$expirationdate</span>
						(line <span class="line-number">42</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_enumFields" id="var_fb_enumFields"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_enumFields</span>
			 = <span class="var-default">array('automaticapproval')</span>			(line <span class="line-number">59</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_enumOptions" id="var_fb_enumOptions"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_enumOptions</span>
			 = <span class="var-default">array('automaticapproval'=&gt;array('No (send to pending)','Yes (send to posted)'))</span>			(line <span class="line-number">60</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_fieldLabels" id="var_fb_fieldLabels"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_fieldLabels</span>
			 = <span class="var-default">array('automaticapproval'=&gt;'Automatically approve events (send to posted)?',<br />                                    'expirationdate'=&gt;'Expiration Date',<br />                                    'name'=&gt;'Subscription Title')</span>			(line <span class="line-number">56</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_hiddenFields" id="var_fb_hiddenFields"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_hiddenFields</span>
			 = <span class="var-default">array('datecreated',<br />                                    'uidcreated',<br />                                    'datelastupdated',<br />                                    'uidlastupdated',<br />                                    'calendar_id',<br />                                    'timeperiod',<br />                                    'expirationdate')</span>			(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_linkElementTypes" id="var_fb_linkElementTypes"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkElementTypes</span>
			 = <span class="var-default">array('automaticapproval'=&gt;'radio')</span>			(line <span class="line-number">68</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_id" id="var_id"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$id</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_name" id="var_name"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$name</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_searchcriteria" id="var_searchcriteria"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$searchcriteria</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_timeperiod" id="var_timeperiod"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$timeperiod</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uidcreated" id="var_uidcreated"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidcreated</span>
						(line <span class="line-number">45</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uidlastupdated" id="var_uidlastupdated"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidlastupdated</span>
						(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var___table" id="var___table"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$__table</span>
			 = <span class="var-default"> 'subscription'</span>			(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
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

<a name="methodcalendarHasSubscribers" id="calendarHasSubscribers"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">calendarHasSubscribers</span> (line <span class="line-number">359</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks if a calendar has subscribers.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			calendarHasSubscribers
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$calendar_id</span><span class="var-description">: The id of the calendar to check.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetApprovalStatus" id="getApprovalStatus"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getApprovalStatus</span> (line <span class="line-number">295</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the string equivalent of the automatic approval status, for  inserting into the calendar_has_event database.</p>
<div class="description"><p>It will return 'posted' if automatic approval is true.  'pending' otherwise.</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> the Status.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getApprovalStatus
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetCalendars" id="getCalendars"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCalendars</span> (line <span class="line-number">137</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Translates search criteria into calendars.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Array of the calendars which match this criteria.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			getCalendars
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$searchcriteria</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$searchcriteria</span><span class="var-description">: Array of calendars to check.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodinsert" id="insert"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">207</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Inserts a record into the subscription table, and processes the subscription  for matching events.</p>
	<ul class="tags">
				<li><span class="field">return:</span> ID of inserted record on success.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			insert
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodkeys" id="keys"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">keys</span> (line <span class="line-number">87</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			keys
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodlinks" id="links"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">links</span> (line <span class="line-number">99</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			links
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodmatchingEvents" id="matchingEvents"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">matchingEvents</span> (line <span class="line-number">312</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Finds the events matching this subscription.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">MDB2_Result</span>
		<span class="method-name">
			matchingEvents
		</span>
					([<span class="var-type">bool</span>&nbsp;<span class="var-name">$exclude_existing</span> = <span class="var-default">true</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$exclude_existing</span><span class="var-description">: If existing events on this calendar should be excluded.</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$event_id</span><span class="var-description">: Optional parameter for checking an individual event.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpostGenerateForm" id="postGenerateForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">160</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called after the form is generated for form modifications.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			postGenerateForm
		</span>
					(<span class="var-type">HTML_QuickForm</span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$formBuilder</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">HTML_QuickForm</span>
				<span class="var-name">&$form</span><span class="var-description">: The form object</span>			</li>
					<li>
				<span class="var-type">DB_DataObject_FormBuilder</span>
				<span class="var-name">&$formBuilder</span><span class="var-description">: Formbuilder object</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreGenerateForm" id="preGenerateForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">113</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called before the form is generated.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preGenerateForm
		</span>
					(<span class="var-type">object</span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$fb</span><span class="var-description">: Formbuilder object.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreProcessForm" id="preProcessForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">preProcessForm</span> (line <span class="line-number">186</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called before the form is processed to modify certain values.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preProcessForm
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type">object</span>&nbsp;<span class="var-name">&$formBuilder</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">&$values</span><span class="var-description">: Associative array of values posted.</span>			</li>
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$formBuilder</span><span class="var-description">: Formbuilder object.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodprocess" id="process"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">process</span> (line <span class="line-number">260</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Processes this subscription and adds events not currently  added to the calendar this subscription is for.</p>
	<ul class="tags">
				<li><span class="field">return:</span> number of events added to the calendar</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			process
		</span>
					([<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$event_id</span><span class="var-description">: Optionally only add the event with the mathcing id.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsequenceKey" id="sequenceKey"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">sequenceKey</span> (line <span class="line-number">94</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			sequenceKey
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">50</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			staticGet
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$k</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$v</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtable" id="table"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">table</span> (line <span class="line-number">70</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			table
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodupdate" id="update"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">update</span> (line <span class="line-number">236</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Performs an update on this subscription. This will re-evaluate all the events  to see if they match the subscription and add them in.</p>
<div class="description"><p>Calls UNL_UCBCN_process() if update was successful.</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> true on success</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			update
		</span>
					([<span class="var-type">object</span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">object</span>
				<span class="var-name">$do</span><span class="var-description">: Dataobject</span>			</li>
				</ul>
		
			
	</div>
<a name="methodupdateSubscribedCalendars" id="updateSubscribedCalendars"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">updateSubscribedCalendars</span> (line <span class="line-number">336</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function is called when a calendar has just had an event added. Called  from UNL_UCBCN_Calendar_has_event-&gt;insert();</p>
	<ul class="tags">
				<li><span class="field">return:</span> Number of calenars updated (if any).</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			updateSubscribedCalendars
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, [<span class="var-type">int</span>&nbsp;<span class="var-name">$event_id</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$calendar_id</span><span class="var-description">: The primary key of the calendar which was updated.</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$event_id</span><span class="var-description">: Optionally, the id of the event to add.</span>			</li>
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