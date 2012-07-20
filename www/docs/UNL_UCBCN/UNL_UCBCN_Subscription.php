<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Subscription</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2></h2>';
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
		<p class="notes">
			Located in <a class="field" href="_UCBCN---Subscription.php.php">/UCBCN/Subscription.php</a> (line <span class="field">16</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Subscription</pre>
	
			</div>
</div>



	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</span></div>
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
					<a href="#$automaticapproval" title="details" class="var-name">$automaticapproval</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$calendar_id" title="details" class="var-name">$calendar_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$datecreated" title="details" class="var-name">$datecreated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$datelastupdated" title="details" class="var-name">$datelastupdated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$expirationdate" title="details" class="var-name">$expirationdate</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_enumFields" title="details" class="var-name">$fb_enumFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_enumOptions" title="details" class="var-name">$fb_enumOptions</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_fieldLabels" title="details" class="var-name">$fb_fieldLabels</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_hiddenFields" title="details" class="var-name">$fb_hiddenFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_linkElementTypes" title="details" class="var-name">$fb_linkElementTypes</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$name" title="details" class="var-name">$name</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$searchcriteria" title="details" class="var-name">$searchcriteria</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$timeperiod" title="details" class="var-name">$timeperiod</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$uidcreated" title="details" class="var-name">$uidcreated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$uidlastupdated" title="details" class="var-name">$uidlastupdated</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$__table" title="details" class="var-name">$__table</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</span></div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																																																																				
												<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#calendarHasSubscribers" title="details" class="method-name">calendarHasSubscribers</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$calendar_id</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getApprovalStatus" title="details" class="method-name">getApprovalStatus</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getCalendars" title="details" class="method-name">getCalendars</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$searchcriteria</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$text</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#insert" title="details" class="method-name">insert</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">MDB2_Result</span>
										<a href="#matchingEvents" title="details" class="method-name">matchingEvents</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$exclude_existing</span> = <span class="var-default">true</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#postGenerateForm" title="details" class="method-name">postGenerateForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preGenerateForm" title="details" class="method-name">preGenerateForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preProcessForm" title="details" class="method-name">preProcessForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#process" title="details" class="method-name">process</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#staticGet" title="details" class="method-name">staticGet</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#update" title="details" class="method-name">update</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#updateSubscribedCalendars" title="details" class="method-name">updateSubscribedCalendars</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$calendar_id</span>)
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
			<a name="var$automaticapproval" id="$automaticapproval"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$automaticapproval</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$calendar_id" id="$calendar_id"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendar_id</span>
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$datecreated" id="$datecreated"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$datecreated</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$datelastupdated" id="$datelastupdated"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$datelastupdated</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$expirationdate" id="$expirationdate"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$expirationdate</span>
						(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$fb_enumFields" id="$fb_enumFields"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_enumFields</span>
			 = <span class="var-default">array('automaticapproval')</span>			(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_enumOptions" id="$fb_enumOptions"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_enumOptions</span>
			 = <span class="var-default">array('automaticapproval'=&gt;array('No (send to pending)','Yes (send to posted)'))</span>			(line <span class="line-number">45</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_fieldLabels" id="$fb_fieldLabels"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_fieldLabels</span>
			 = <span class="var-default">array('automaticapproval'=&gt;'Automatically approve events (send to posted)?',<br />                                'expirationdate'=&gt;'Expiration Date',<br />                                'name'=&gt;'Subscription Title')</span>			(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_hiddenFields" id="$fb_hiddenFields"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_hiddenFields</span>
			 = <span class="var-default">array(	'datecreated',<br />									'uidcreated',<br />									'datelastupdated',<br />									'uidlastupdated',<br />                                    'calendar_id',<br />                                    'timeperiod',<br />                                    'expirationdate')</span>			(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_linkElementTypes" id="$fb_linkElementTypes"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkElementTypes</span>
			 = <span class="var-default">array('automaticapproval'=&gt;'radio')</span>			(line <span class="line-number">53</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$id" id="$id"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$id</span>
						(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$name" id="$name"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$name</span>
						(line <span class="line-number">23</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$searchcriteria" id="$searchcriteria"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$searchcriteria</span>
						(line <span class="line-number">27</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$timeperiod" id="$timeperiod"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$timeperiod</span>
						(line <span class="line-number">25</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$uidcreated" id="$uidcreated"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidcreated</span>
						(line <span class="line-number">29</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$uidlastupdated" id="$uidlastupdated"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidlastupdated</span>
						(line <span class="line-number">31</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$__table" id="$__table"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$__table</span>
			 = <span class="var-default"> 'subscription'</span>			(line <span class="line-number">21</span>)
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
			<A NAME='method_detail'></A>

<a name="methodcalendarHasSubscribers" id="calendarHasSubscribers"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">calendarHasSubscribers</span> (line <span class="line-number">232</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			calendarHasSubscribers
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$calendar_id</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$calendar_id</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetApprovalStatus" id="getApprovalStatus"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getApprovalStatus</span> (line <span class="line-number">190</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the string equivalent of the automatic approval status, for  inserting into the calendar_has_event database.</p>
<p class="description"><p>It will return 'posted' if automatic approval is true.  'pending' otherwise.</p></p>
	<ul class="tags">
				<li><span class="field">return:</span> the Status.</li>
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
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCalendars</span> (line <span class="line-number">77</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Translates search criteria into calendars.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getCalendars
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$searchcriteria</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$text</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$text</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$searchcriteria</span>			</li>
				</ul>
		
			
	</div>
<a name="methodinsert" id="insert"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">112</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			insert
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodmatchingEvents" id="matchingEvents"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">matchingEvents</span> (line <span class="line-number">204</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Finds the events matching this subscription.</p>
	
	<div class="method-signature">
		<span class="method-result">MDB2_Result</span>
		<span class="method-name">
			matchingEvents
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$exclude_existing</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$exclude_existing</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpostGenerateForm" id="postGenerateForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">92</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			postGenerateForm
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$formBuilder</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$form</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$formBuilder</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreGenerateForm" id="preGenerateForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preGenerateForm
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$fb</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreProcessForm" id="preProcessForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preProcessForm</span> (line <span class="line-number">97</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preProcessForm
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$formBuilder</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$values</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$formBuilder</span>			</li>
				</ul>
		
			
	</div>
<a name="methodprocess" id="process"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">process</span> (line <span class="line-number">153</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Processes this subscription and adds events not currently  added to the calendar this subscription is for.</p>
	<ul class="tags">
				<li><span class="field">return:</span> number of events added to the calendar</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			process
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">35</span>)
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
<a name="methodupdate" id="update"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">update</span> (line <span class="line-number">131</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			update
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$do</span>			</li>
				</ul>
		
			
	</div>
<a name="methodupdateSubscribedCalendars" id="updateSubscribedCalendars"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">updateSubscribedCalendars</span> (line <span class="line-number">216</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			updateSubscribedCalendars
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$calendar_id</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$calendar_id</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:11:12 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>