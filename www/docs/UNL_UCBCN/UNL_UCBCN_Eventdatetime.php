<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Eventdatetime</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Eventdatetime</h2>

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
			Located in <a class="field" href="_UCBCN---Eventdatetime.php.php">/UCBCN/Eventdatetime.php</a> (line <span class="field">16</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Eventdatetime</pre>
	
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
					<a href="#$additionalpublicinfo" title="details" class="var-name">$additionalpublicinfo</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$directions" title="details" class="var-name">$directions</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$endtime" title="details" class="var-name">$endtime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$event_id" title="details" class="var-name">$event_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_addFormHeader" title="details" class="var-name">$fb_addFormHeader</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_dateToDatabaseCallback" title="details" class="var-name">$fb_dateToDatabaseCallback</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_elementTypeMap" title="details" class="var-name">$fb_elementTypeMap</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_excludeFromAutoRules" title="details" class="var-name">$fb_excludeFromAutoRules</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_fieldLabels" title="details" class="var-name">$fb_fieldLabels</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_formHeaderText" title="details" class="var-name">$fb_formHeaderText</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_hiddenFields" title="details" class="var-name">$fb_hiddenFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_linkNewValue" title="details" class="var-name">$fb_linkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$hours" title="details" class="var-name">$hours</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$location_id" title="details" class="var-name">$location_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$room" title="details" class="var-name">$room</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$starttime" title="details" class="var-name">$starttime</a>
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
										<a href="#dateToDatabaseCallback" title="details" class="method-name">dateToDatabaseCallback</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$value</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#delete" title="details" class="method-name">delete</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#insert" title="details" class="method-name">insert</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#postGenerateForm" title="details" class="method-name">postGenerateForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preGenerateForm" title="details" class="method-name">preGenerateForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#prepareLinkedDataObject" title="details" class="method-name">prepareLinkedDataObject</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$linkedDataObject</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$field</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preProcessForm" title="details" class="method-name">preProcessForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#staticGet" title="details" class="method-name">staticGet</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#update" title="details" class="method-name">update</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#_array2date" title="details" class="method-name">_array2date</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$dateInput</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$timestamp</span> = <span class="var-default">false</span>])
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
			<a name="var$additionalpublicinfo" id="$additionalpublicinfo"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$additionalpublicinfo</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$directions" id="$directions"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$directions</span>
						(line <span class="line-number">29</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$endtime" id="$endtime"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$endtime</span>
						(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$event_id" id="$event_id"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$event_id</span>
						(line <span class="line-number">23</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$fb_addFormHeader" id="$fb_addFormHeader"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_addFormHeader</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_dateToDatabaseCallback" id="$fb_dateToDatabaseCallback"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_dateToDatabaseCallback</span>
			 = <span class="var-default">array('UNL_UCBCN_Eventdatetime','dateToDatabaseCallback')</span>			(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_elementTypeMap" id="$fb_elementTypeMap"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_elementTypeMap</span>
			 = <span class="var-default">array('datetime'=&gt;'jscalendar')</span>			(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_excludeFromAutoRules" id="$fb_excludeFromAutoRules"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_excludeFromAutoRules</span>
			 = <span class="var-default">array('event_id')</span>			(line <span class="line-number">45</span>)
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
			 = <span class="var-default">array('location_id'			=&gt; 'Location',<br />    										'starttime'				=&gt; 'Start Time',<br />    										'endtime'				=&gt; 'End Time',<br />    										'hours'					=&gt; 'Building Hours',<br />    										'additionalpublicinfo'	=&gt; 'Additional Public Info')</span>			(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_formHeaderText" id="$fb_formHeaderText"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_formHeaderText</span>
			 = <span class="var-default"> 'Event Location, Date and Time'</span>			(line <span class="line-number">48</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_hiddenFields" id="$fb_hiddenFields"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_hiddenFields</span>
			 = <span class="var-default">array('event_id')</span>			(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_linkNewValue" id="$fb_linkNewValue"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkNewValue</span>
			 = <span class="var-default"> true</span>			(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$hours" id="$hours"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$hours</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

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
<a name="var$location_id" id="$location_id"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$location_id</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$room" id="$room"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$room</span>
						(line <span class="line-number">27</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$starttime" id="$starttime"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$starttime</span>
						(line <span class="line-number">25</span>)
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
			 = <span class="var-default"> 'eventdatetime'</span>			(line <span class="line-number">21</span>)
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

<a name="methoddateToDatabaseCallback" id="dateToDatabaseCallback"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">dateToDatabaseCallback</span> (line <span class="line-number">214</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			dateToDatabaseCallback
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$value</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$value</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddelete" id="delete"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">delete</span> (line <span class="line-number">248</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			delete
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodinsert" id="insert"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">230</span>)
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
<a name="methodpostGenerateForm" id="postGenerateForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">89</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			postGenerateForm
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$form</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$fb</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreGenerateForm" id="preGenerateForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">51</span>)
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
<a name="methodprepareLinkedDataObject" id="prepareLinkedDataObject"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">prepareLinkedDataObject</span> (line <span class="line-number">219</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			prepareLinkedDataObject
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$linkedDataObject</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$field</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$linkedDataObject</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$field</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreProcessForm" id="preProcessForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">preProcessForm</span> (line <span class="line-number">105</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preProcessForm
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$values</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$fb</span>			</li>
				</ul>
		
			
	</div>
<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">33</span>)
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
		<span class="method-title">update</span> (line <span class="line-number">239</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			update
		</span>
				()
			</div>
	
		
			
	</div>
<a name="method_array2date" id="_array2date"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">_array2date</span> (line <span class="line-number">119</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			_array2date
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$dateInput</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$timestamp</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$dateInput</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$timestamp</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:10:56 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>