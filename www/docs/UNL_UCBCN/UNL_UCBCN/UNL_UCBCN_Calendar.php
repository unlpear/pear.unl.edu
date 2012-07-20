<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Calendar</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Calendar</h2>

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
			Located in <a class="field" href="_UNL---UCBCN---Calendar.php.php">/UNL/UCBCN/Calendar.php</a> (line <span class="field">30</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Calendar</pre>
	
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
					<a href="#var_account_id" title="details" class="var-name">$account_id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_calendardaterange" title="details" class="var-name">$calendardaterange</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_calendarstatus" title="details" class="var-name">$calendarstatus</a>
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
					<a href="#var_emaillists" title="details" class="var-name">$emaillists</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_eventreleasepreference" title="details" class="var-name">$eventreleasepreference</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_externalforms" title="details" class="var-name">$externalforms</a>
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
					<a href="#var_fb_linkDisplayFields" title="details" class="var-name">$fb_linkDisplayFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_formatcalendardata" title="details" class="var-name">$formatcalendardata</a>
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
					<a href="#var_recommendationswithinaccount" title="details" class="var-name">$recommendationswithinaccount</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_shortname" title="details" class="var-name">$shortname</a>
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
					<a href="#var_uploadedcss" title="details" class="var-name">$uploadedcss</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uploadedxsl" title="details" class="var-name">$uploadedxsl</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_website" title="details" class="var-name">$website</a>
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
					static 						<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
										<a href="#getByShortname" title="details" class="method-name">getByShortname</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$shortname</span>)
									</div>
																																																																																								
												<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#addEvent" title="details" class="method-name">addEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addUser" title="details" class="method-name">addUser</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
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
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preGenerateForm" title="details" class="method-name">preGenerateForm</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#processSubscriptions" title="details" class="method-name">processSubscriptions</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#removeEvent" title="details" class="method-name">removeEvent</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#removeUser" title="details" class="method-name">removeUser</a>
											(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
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
			<a name="var_account_id" id="var_account_id"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$account_id</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_calendardaterange" id="var_calendardaterange"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendardaterange</span>
						(line <span class="line-number">42</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_calendarstatus" id="var_calendarstatus"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$calendarstatus</span>
						(line <span class="line-number">47</span>)
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
						(line <span class="line-number">48</span>)
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
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_emaillists" id="var_emaillists"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$emaillists</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_eventreleasepreference" id="var_eventreleasepreference"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$eventreleasepreference</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_externalforms" id="var_externalforms"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$externalforms</span>
						(line <span class="line-number">52</span>)
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
			 = <span class="var-default">array('eventreleasepreference')</span>			(line <span class="line-number">76</span>)
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
			 = <span class="var-default">array('eventreleasepreference'=&gt;array('Immediate','Pending'))</span>			(line <span class="line-number">77</span>)
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
			 = <span class="var-default">array('eventreleasepreference' =&gt; 'Event Release Preference',<br />	                                      'shortname'  =&gt; 'Short Name (this will change your calendar web address)',<br />	                                      'emaillists' =&gt; 'Email Lists (separated by commas)',<br />                                          'recommendationswithinaccount' =&gt; 'Allow event recommendations within this account')</span>			(line <span class="line-number">72</span>)
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
			 = <span class="var-default">array(   'account_id',<br />	                                        'uploadedcss',<br />	                                        'uploadedxsl',<br />	                                        'calendarstatus',<br />	                                        'formatcalendardata',<br />	                                        'calendardaterange',<br />	                                        'datecreated',<br />	                                        'uidcreated',<br />	                                        'datelastupdated',<br />	                                        'uidlastupdated',<br />	                                        'externalforms')</span>			(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_linkDisplayFields" id="var_fb_linkDisplayFields"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkDisplayFields</span>
			 = <span class="var-default">array('name','shortname')</span>			(line <span class="line-number">78</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_formatcalendardata" id="var_formatcalendardata"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$formatcalendardata</span>
						(line <span class="line-number">43</span>)
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
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_name" id="var_name"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$name</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_recommendationswithinaccount" id="var_recommendationswithinaccount"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$recommendationswithinaccount</span>
						(line <span class="line-number">53</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_shortname" id="var_shortname"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$shortname</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uidcreated" id="var_uidcreated"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidcreated</span>
						(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uidlastupdated" id="var_uidlastupdated"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidlastupdated</span>
						(line <span class="line-number">51</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uploadedcss" id="var_uploadedcss"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uploadedcss</span>
						(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uploadedxsl" id="var_uploadedxsl"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uploadedxsl</span>
						(line <span class="line-number">45</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_website" id="var_website"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$website</span>
						(line <span class="line-number">40</span>)
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
			 = <span class="var-default"> 'calendar'</span>			(line <span class="line-number">35</span>)
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
<a name="methodgetByShortname" id="getByShortname"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getByShortname</span> (line <span class="line-number">177</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets a calendar by shortname.</p>
	
	<div class="method-signature">
	    static
		<span class="method-result"><a href="../UNL_UCBCN/UNL_UCBCN_Calendar.php">UNL_UCBCN_Calendar</a></span>
		<span class="method-name">
			getByShortname
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$shortname</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$shortname</span><span class="var-description">: The shortname of the calendar you wish to get.</span>			</li>
				</ul>
		
			
	</div>

<a name="methodaddEvent" id="addEvent"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">addEvent</span> (line <span class="line-number">216</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Adds the event to the current calendar.</p>
	<ul class="tags">
				<li><span class="field">return:</span> &gt; 0 on success.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			addEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$status</span>, <span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: posted | pending | archived</span>			</li>
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span><span class="var-description">: the user adding this event</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$source</span><span class="var-description">: create event form, subscription.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddUser" id="addUser"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addUser</span> (line <span class="line-number">154</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Adds a user to the calendar. Grants all permissions to the  user for the current calendar.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addUser
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodkeys" id="keys"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">keys</span> (line <span class="line-number">104</span>)
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
		<span class="method-title">links</span> (line <span class="line-number">116</span>)
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
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">131</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">123</span>)
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
<a name="methodprocessSubscriptions" id="processSubscriptions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">processSubscriptions</span> (line <span class="line-number">260</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Finds the subscriptions this calendar has, and processes them.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			processSubscriptions
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodremoveEvent" id="removeEvent"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">removeEvent</span> (line <span class="line-number">243</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Removes the given event from the calendar_has_event table.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			removeEvent
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>&nbsp;<span class="var-name">$event</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_Event.php">UNL_UCBCN_Event</a></span>
				<span class="var-name">$event</span><span class="var-description">: The event to remove from this calendar.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodremoveUser" id="removeUser"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">removeUser</span> (line <span class="line-number">195</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Removes a user from the current calendar.</p>
<div class="description"><p>Basically removes all permissions for the user on the current calendar.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			removeUser
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>&nbsp;<span class="var-name">$user</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN/UNL_UCBCN_User.php">UNL_UCBCN_User</a></span>
				<span class="var-name">$user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsequenceKey" id="sequenceKey"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">sequenceKey</span> (line <span class="line-number">111</span>)
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
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">56</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">table</span> (line <span class="line-number">80</span>)
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