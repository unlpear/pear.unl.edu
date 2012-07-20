<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Calendar_has_event</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Calendar_has_event</h2>

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
			Located in <a class="field" href="_UCBCN---Calendar_has_event.php.php">/UCBCN/Calendar_has_event.php</a> (line <span class="field">26</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Calendar_has_event</pre>
	
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
					<a href="#$event_id" title="details" class="var-name">$event_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$source" title="details" class="var-name">$source</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$status" title="details" class="var-name">$status</a>
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
										<a href="#calendarHasEvent" title="details" class="method-name">calendarHasEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
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
										<a href="#processSubscriptions" title="details" class="method-name">processSubscriptions</a>
											([<span class="var-type">bool</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">NULL</span>])
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
			<a name="var$calendar_id" id="$calendar_id"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendar_id</span>
						(line <span class="line-number">33</span>)
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
						(line <span class="line-number">37</span>)
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
						(line <span class="line-number">39</span>)
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
						(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$id" id="$id"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$id</span>
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$source" id="$source"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$source</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$status" id="$status"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$status</span>
						(line <span class="line-number">35</span>)
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
						(line <span class="line-number">38</span>)
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
						(line <span class="line-number">40</span>)
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
			 = <span class="var-default"> 'calendar_has_event'</span>			(line <span class="line-number">31</span>)
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

<a name="methodcalendarHasEvent" id="calendarHasEvent"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">calendarHasEvent</span> (line <span class="line-number">111</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns bool false if the calendar does not have the event,  otherwise returns status.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			calendarHasEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>&nbsp;<span class="var-name">$calendar</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
				<span class="var-name">$calendar</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddelete" id="delete"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">delete</span> (line <span class="line-number">124</span>)
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
		<span class="method-title">insert</span> (line <span class="line-number">48</span>)
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
<a name="methodprocessSubscriptions" id="processSubscriptions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">processSubscriptions</span> (line <span class="line-number">72</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">sets or gets the current status of process subscriptions.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			processSubscriptions
		</span>
					([<span class="var-type">bool</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">NULL</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$status</span><span class="var-description">: true or false</span>			</li>
				</ul>
		
			
	</div>
<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">43</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">update</span> (line <span class="line-number">87</span>)
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
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:10:52 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>