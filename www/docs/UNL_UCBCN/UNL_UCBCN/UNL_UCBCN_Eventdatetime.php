<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Eventdatetime</title>";
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
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Eventdatetime.php.php">/UNL/UCBCN/Eventdatetime.php</a> (line <span class="field">29</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Eventdatetime</pre>
	
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
					<a href="#var_additionalpublicinfo" title="details" class="var-name">$additionalpublicinfo</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_directions" title="details" class="var-name">$directions</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_endtime" title="details" class="var-name">$endtime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_event_id" title="details" class="var-name">$event_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_addFormHeader" title="details" class="var-name">$fb_addFormHeader</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_dateToDatabaseCallback" title="details" class="var-name">$fb_dateToDatabaseCallback</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_elementTypeMap" title="details" class="var-name">$fb_elementTypeMap</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_excludeFromAutoRules" title="details" class="var-name">$fb_excludeFromAutoRules</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_fieldLabels" title="details" class="var-name">$fb_fieldLabels</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_formHeaderText" title="details" class="var-name">$fb_formHeaderText</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_hiddenFields" title="details" class="var-name">$fb_hiddenFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_linkNewValue" title="details" class="var-name">$fb_linkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_preDefOrder" title="details" class="var-name">$fb_preDefOrder</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_hours" title="details" class="var-name">$hours</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_location_id" title="details" class="var-name">$location_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_room" title="details" class="var-name">$room</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_starttime" title="details" class="var-name">$starttime</a>
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
											<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Location.php">UNL_UCBCN_Location</a></span>
										<a href="#getLocation" title="details" class="method-name">getLocation</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
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
			<a name="var_additionalpublicinfo" id="var_additionalpublicinfo"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$additionalpublicinfo</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_directions" id="var_directions"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$directions</span>
						(line <span class="line-number">42</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_endtime" id="var_endtime"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$endtime</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_event_id" id="var_event_id"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$event_id</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_addFormHeader" id="var_fb_addFormHeader"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_addFormHeader</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">59</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_dateToDatabaseCallback" id="var_fb_dateToDatabaseCallback"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_dateToDatabaseCallback</span>
			 = <span class="var-default">array('UNL_UCBCN_Eventdatetime','dateToDatabaseCallback')</span>			(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_elementTypeMap" id="var_fb_elementTypeMap"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_elementTypeMap</span>
			 = <span class="var-default">array('datetime'=&gt;'jscalendar')</span>			(line <span class="line-number">55</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_excludeFromAutoRules" id="var_fb_excludeFromAutoRules"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_excludeFromAutoRules</span>
			 = <span class="var-default">array('event_id')</span>			(line <span class="line-number">57</span>)
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
			 = <span class="var-default">array('location_id'        =&gt; 'Location',<br />                                            'starttime'            =&gt; 'Start Time',<br />                                            'endtime'              =&gt; 'End Time',<br />                                            'additionalpublicinfo' =&gt; 'Additional Public Info')</span>			(line <span class="line-number">51</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_formHeaderText" id="var_fb_formHeaderText"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_formHeaderText</span>
			 = <span class="var-default"> 'Event Location, Date and Time'</span>			(line <span class="line-number">60</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_hiddenFields" id="var_fb_hiddenFields"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_hiddenFields</span>
			 = <span class="var-default">array('event_id', 'hours')</span>			(line <span class="line-number">56</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_linkNewValue" id="var_fb_linkNewValue"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkNewValue</span>
			 = <span class="var-default"> true</span>			(line <span class="line-number">58</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_preDefOrder" id="var_fb_preDefOrder"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_preDefOrder</span>
			 = <span class="var-default">array('location_id','room')</span>			(line <span class="line-number">62</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_hours" id="var_hours"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$hours</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_id" id="var_id"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$id</span>
						(line <span class="line-number">35</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_location_id" id="var_location_id"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$location_id</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_room" id="var_room"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$room</span>
						(line <span class="line-number">40</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_starttime" id="var_starttime"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$starttime</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var___table" id="var___table"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$__table</span>
			 = <span class="var-default"> 'eventdatetime'</span>			(line <span class="line-number">34</span>)
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

<a name="methoddateToDatabaseCallback" id="dateToDatabaseCallback"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">dateToDatabaseCallback</span> (line <span class="line-number">286</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
		<span class="method-title">delete</span> (line <span class="line-number">320</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			delete
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetLocation" id="getLocation"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getLocation</span> (line <span class="line-number">334</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets an object for the location of this event date and time.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Location.php">UNL_UCBCN_Location</a></span>
		<span class="method-name">
			getLocation
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodinsert" id="insert"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">302</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			insert
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodkeys" id="keys"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">keys</span> (line <span class="line-number">79</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">links</span> (line <span class="line-number">91</span>)
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
<a name="methodpostGenerateForm" id="postGenerateForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">135</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">97</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">prepareLinkedDataObject</span> (line <span class="line-number">291</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preProcessForm</span> (line <span class="line-number">168</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
<a name="methodsequenceKey" id="sequenceKey"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">sequenceKey</span> (line <span class="line-number">86</span>)
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
		<span class="method-title">staticGet</span> (line <span class="line-number">46</span>)
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
		<span class="method-title">table</span> (line <span class="line-number">64</span>)
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
		<span class="method-title">update</span> (line <span class="line-number">311</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			update
		</span>
				()
			</div>
	
		
			
	</div>
<a name="method_array2date" id="_array2date"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">_array2date</span> (line <span class="line-number">191</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
		Documentation generated on Wed, 12 Aug 2009 13:00:42 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>