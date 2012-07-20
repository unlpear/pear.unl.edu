<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Event</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Event</h2>

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
			Located in <a class="field" href="_UNL---UCBCN---Event.php.php">/UNL/UCBCN/Event.php</a> (line <span class="field">32</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Event</pre>
	
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
					<a href="#var_approvedforcirculation" title="details" class="var-name">$approvedforcirculation</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_classification" title="details" class="var-name">$classification</a>
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
					<a href="#var_description" title="details" class="var-name">$description</a>
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
					<a href="#var_fb_formHeaderText" title="details" class="var-name">$fb_formHeaderText</a>
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
					<a href="#var_fb_linkNewValue" title="details" class="var-name">$fb_linkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_preDefOrder" title="details" class="var-name">$fb_preDefOrder</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_reverseLinkNewValue" title="details" class="var-name">$fb_reverseLinkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_reverseLinks" title="details" class="var-name">$fb_reverseLinks</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_fb_textAreaFields" title="details" class="var-name">$fb_textAreaFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_icalendar" title="details" class="var-name">$icalendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_imagedata" title="details" class="var-name">$imagedata</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_imagemime" title="details" class="var-name">$imagemime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_imagetitle" title="details" class="var-name">$imagetitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_imageurl" title="details" class="var-name">$imageurl</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_listingcontactemail" title="details" class="var-name">$listingcontactemail</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_listingcontactname" title="details" class="var-name">$listingcontactname</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_listingcontactphone" title="details" class="var-name">$listingcontactphone</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_listingcontactuid" title="details" class="var-name">$listingcontactuid</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_othereventtype" title="details" class="var-name">$othereventtype</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_otherkeywords" title="details" class="var-name">$otherkeywords</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_privatecomment" title="details" class="var-name">$privatecomment</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_refreshments" title="details" class="var-name">$refreshments</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_shortdescription" title="details" class="var-name">$shortdescription</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_status" title="details" class="var-name">$status</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_subtitle" title="details" class="var-name">$subtitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_title" title="details" class="var-name">$title</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_transparency" title="details" class="var-name">$transparency</a>
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
					<a href="#var_webpageurl" title="details" class="var-name">$webpageurl</a>
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
											<span class="method-result">int|false</span>
										<a href="#addToCalendar" title="details" class="method-name">addToCalendar</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'pending'</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$sourcemsg</span> = <span class="var-default">'unknown'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#checkURL" title="details" class="method-name">checkURL</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$val</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#delete" title="details" class="method-name">delete</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#insert" title="details" class="method-name">insert</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#isOrphaned" title="details" class="method-name">isOrphaned</a>
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
											(<span class="var-type">HTML_QuickForm</span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type">DB_DataObject_Formbuilder</span>&nbsp;<span class="var-name">&$formBuilder</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preGenerateForm" title="details" class="method-name">preGenerateForm</a>
											(<span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#prepareLinkedDataObject" title="details" class="method-name">prepareLinkedDataObject</a>
											(<span class="var-type">object</span>&nbsp;<span class="var-name">&$linkedDataObject</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$field</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#preProcessForm" title="details" class="method-name">preProcessForm</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$fb</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#processFileAttachments" title="details" class="method-name">processFileAttachments</a>
										()
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
											<span class="method-result">array</span>
										<a href="#table" title="details" class="method-name">table</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#update" title="details" class="method-name">update</a>
											([<span class="var-type">mixed</span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
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
			<a name="var_approvedforcirculation" id="var_approvedforcirculation"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$approvedforcirculation</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_classification" id="var_classification"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$classification</span>
						(line <span class="line-number">45</span>)
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
						(line <span class="line-number">61</span>)
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
						(line <span class="line-number">63</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_description" id="var_description"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$description</span>
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
			 = <span class="var-default">array('approvedforcirculation')</span>			(line <span class="line-number">114</span>)
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
			 = <span class="var-default">array('approvedforcirculation'=&gt;array('Private (Your event will only be available to your calendar)&lt;br /&gt;',<br />                                                                           'Public (Your event will be available to any calendar)&lt;br /&gt;'))</span>			(line <span class="line-number">115</span>)
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
			 = <span class="var-default">array( 'othereventtype'         =&gt; 'Secondary Event Type',<br />                                    'shortdescription'       =&gt; 'Short Description',<br />                                    'webpageurl'             =&gt; 'Event Webpage',<br />                                    'privatecomment'         =&gt; 'Internal Note',<br />                                    'imageurl'               =&gt; 'Existing Image URL',<br />                                    'imagedata'              =&gt; 'Upload/Attach an Image',<br />                                    'imagetitle'             =&gt; 'Image Title',<br />                                    'approvedforcirculation' =&gt; '',<br />                                    'otherkeywords'          =&gt; 'Other Keywords',<br />                                    'listingcontactname'     =&gt; 'Name',<br />                                    'listingcontactphone'    =&gt; 'Phone',<br />                                    'listingcontactemail'    =&gt; 'Email',<br />                                    '__reverseLink_eventdatetime_event_id' =&gt; '',<br />                                    '__reverseLink_event_has_eventtype_event_id'=&gt;'',<br />                                    '__reverseLink_event_has_sponsor_event_id'=&gt;'',<br />                                    'consider'=&gt;'')</span>			(line <span class="line-number">86</span>)
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
			 = <span class="var-default"> 'Event Sharing Status'</span>			(line <span class="line-number">72</span>)
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
			 = <span class="var-default">array('datecreated',<br />                                    'uidcreated',<br />                                    'datelastupdated',<br />                                    'uidlastupdated',<br />                                    'status',<br />                                    'othereventtype',<br />                                    'classification',<br />                                    'transparency',<br />                                    'imagemime',<br />                                    'icalendar')</span>			(line <span class="line-number">103</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_linkElementTypes" id="var_fb_linkElementTypes"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkElementTypes</span>
			 = <span class="var-default">array('__reverseLink_eventdatetime_event_id'=&gt;'subForm',<br />                                           '__reverseLink_event_has_eventtype_event_id'=&gt;'subForm',<br />                                           '__reverseLink_event_has_sponsor_event_id'=&gt;'subForm',<br />                                           'approvedforcirculation'=&gt;'radio')</span>			(line <span class="line-number">127</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_linkNewValue" id="var_fb_linkNewValue"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkNewValue</span>
			 = <span class="var-default">array('__reverseLink_eventdatetime_event_idlocation_id_1',<br />                                            'location_id')</span>			(line <span class="line-number">118</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_preDefOrder" id="var_fb_preDefOrder"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_preDefOrder</span>
			 = <span class="var-default">array(<br />                                    'approvedforcirculation',<br />                                    'consider',<br />                                    'title',<br />                                    'subtitle',<br />                                    'description',<br />                                    '__reverseLink_event_has_eventtype_event_id',<br />                                    'othereventtype',<br />                                    '__reverseLink_eventdatetime_event_id',<br />                                    'listingcontactname',<br />                                    'listingcontactphone',<br />                                    'listingcontactemail')</span>			(line <span class="line-number">73</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_reverseLinkNewValue" id="var_fb_reverseLinkNewValue"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_reverseLinkNewValue</span>
			 = <span class="var-default"> true</span>			(line <span class="line-number">125</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_reverseLinks" id="var_fb_reverseLinks"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_reverseLinks</span>
			 = <span class="var-default">array(array('table'=&gt;'eventdatetime'),array('table'=&gt;'event_has_eventtype'),array('table'=&gt;'event_has_sponsor'))</span>			(line <span class="line-number">121</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_fb_textAreaFields" id="var_fb_textAreaFields"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_textAreaFields</span>
			 = <span class="var-default">array('description')</span>			(line <span class="line-number">132</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_icalendar" id="var_icalendar"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$icalendar</span>
						(line <span class="line-number">58</span>)
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
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_imagedata" id="var_imagedata"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagedata</span>
						(line <span class="line-number">59</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_imagemime" id="var_imagemime"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagemime</span>
						(line <span class="line-number">60</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_imagetitle" id="var_imagetitle"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagetitle</span>
						(line <span class="line-number">51</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_imageurl" id="var_imageurl"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imageurl</span>
						(line <span class="line-number">52</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_listingcontactemail" id="var_listingcontactemail"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactemail</span>
						(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_listingcontactname" id="var_listingcontactname"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactname</span>
						(line <span class="line-number">55</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_listingcontactphone" id="var_listingcontactphone"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactphone</span>
						(line <span class="line-number">56</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_listingcontactuid" id="var_listingcontactuid"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactuid</span>
						(line <span class="line-number">54</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_othereventtype" id="var_othereventtype"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$othereventtype</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_otherkeywords" id="var_otherkeywords"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$otherkeywords</span>
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_privatecomment" id="var_privatecomment"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$privatecomment</span>
						(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_refreshments" id="var_refreshments"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$refreshments</span>
						(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_shortdescription" id="var_shortdescription"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$shortdescription</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_status" id="var_status"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$status</span>
						(line <span class="line-number">48</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_subtitle" id="var_subtitle"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$subtitle</span>
						(line <span class="line-number">40</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_title" id="var_title"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$title</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_transparency" id="var_transparency"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$transparency</span>
						(line <span class="line-number">47</span>)
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
						(line <span class="line-number">62</span>)
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
						(line <span class="line-number">64</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_webpageurl" id="var_webpageurl"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$webpageurl</span>
						(line <span class="line-number">53</span>)
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
			 = <span class="var-default"> 'event'</span>			(line <span class="line-number">37</span>)
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

<a name="methodaddToCalendar" id="addToCalendar"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addToCalendar</span> (line <span class="line-number">457</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function will add the current event to the default calendar.</p>
<div class="description"><p>It assumes that the global default_calendar_id is set.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int|false</span>
		<span class="method-name">
			addToCalendar
		</span>
					(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'pending'</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$sourcemsg</span> = <span class="var-default">'unknown'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$calendar_id</span><span class="var-description">: ID of the calendar to add the event to</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$status</span><span class="var-description">: Status to add as, pending | posted | archived</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$sourcemsg</span><span class="var-description">: Message for the source of this addition.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcheckURL" id="checkURL"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">checkURL</span> (line <span class="line-number">260</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Simple function to test for a valid URL</p>
<div class="description"><p>Used to check webpageurl and imageurl fields.</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> 0 | 1</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			checkURL
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$val</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$val</span><span class="var-description">: URL to check</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddelete" id="delete"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">delete</span> (line <span class="line-number">476</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Performs a delete of this event and all child records</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			delete
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodinsert" id="insert"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">377</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Inserts a new event in the database.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			insert
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodisOrphaned" id="isOrphaned"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">isOrphaned</span> (line <span class="line-number">500</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Check whether this event belongs to any calendars.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			isOrphaned
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodkeys" id="keys"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">keys</span> (line <span class="line-number">334</span>)
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
		<span class="method-title">links</span> (line <span class="line-number">346</span>)
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
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">198</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called after the form is generated for additional formatting.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			postGenerateForm
		</span>
					(<span class="var-type">HTML_QuickForm</span>&nbsp;<span class="var-name">&$form</span>, <span class="var-type">DB_DataObject_Formbuilder</span>&nbsp;<span class="var-name">&$formBuilder</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">HTML_QuickForm</span>
				<span class="var-name">&$form</span><span class="var-description">: The form</span>			</li>
					<li>
				<span class="var-type">DB_DataObject_Formbuilder</span>
				<span class="var-name">&$formBuilder</span><span class="var-description">: The formbuilder</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreGenerateForm" id="preGenerateForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">158</span>)
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
					(<span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">DB_DataObject_FormBuilder</span>
				<span class="var-name">&$fb</span><span class="var-description">: The FormBuilder</span>			</li>
				</ul>
		
			
	</div>
<a name="methodprepareLinkedDataObject" id="prepareLinkedDataObject"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">prepareLinkedDataObject</span> (line <span class="line-number">273</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called before linked dataobjects are used to restrict the results to a subset</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			prepareLinkedDataObject
		</span>
					(<span class="var-type">object</span>&nbsp;<span class="var-name">&$linkedDataObject</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$field</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$linkedDataObject</span><span class="var-description">: The dataobject to be linked.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$field</span><span class="var-description">: The field which the linked object is used for</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpreProcessForm" id="preProcessForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">preProcessForm</span> (line <span class="line-number">142</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Called before the form values are processed and populate the object.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			preProcessForm
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">&$values</span>, <span class="var-type">DB_DataObject_FormBuilder</span>&nbsp;<span class="var-name">&$fb</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">&$values</span><span class="var-description">: Associative array of post data.</span>			</li>
					<li>
				<span class="var-type">DB_DataObject_FormBuilder</span>
				<span class="var-name">&$fb</span><span class="var-description">: Formbuilder object</span>			</li>
				</ul>
		
			
	</div>
<a name="methodprocessFileAttachments" id="processFileAttachments"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">processFileAttachments</span> (line <span class="line-number">361</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function processes any posted files,  sepcifically the images for an event.</p>
<div class="description"><p>Called from insert() or update().</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			processFileAttachments
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodsequenceKey" id="sequenceKey"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">sequenceKey</span> (line <span class="line-number">341</span>)
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
		<span class="method-title">staticGet</span> (line <span class="line-number">67</span>)
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
		<span class="method-title">table</span> (line <span class="line-number">292</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an associative array of the fields for this table.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			table
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodupdate" id="update"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">update</span> (line <span class="line-number">413</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Updates the record for this event in the database.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			update
		</span>
					([<span class="var-type">mixed</span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$do</span><span class="var-description">: DataObject</span>			</li>
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