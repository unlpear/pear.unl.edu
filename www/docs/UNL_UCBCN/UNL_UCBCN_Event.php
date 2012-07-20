<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Event</title>";
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
		<p class="notes">
			Located in <a class="field" href="_UCBCN---Event.php.php">/UCBCN/Event.php</a> (line <span class="field">16</span>)
		</p>
		
				
		<pre>DB_DataObject
   |
   --UNL_UCBCN_Event</pre>
	
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
					<a href="#$approvedforcirculation" title="details" class="var-name">$approvedforcirculation</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$classification" title="details" class="var-name">$classification</a>
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
					<a href="#$description" title="details" class="var-name">$description</a>
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
					<a href="#$fb_formHeaderText" title="details" class="var-name">$fb_formHeaderText</a>
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
					<a href="#$fb_linkNewValue" title="details" class="var-name">$fb_linkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_preDefOrder" title="details" class="var-name">$fb_preDefOrder</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_reverseLinkNewValue" title="details" class="var-name">$fb_reverseLinkNewValue</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_reverseLinks" title="details" class="var-name">$fb_reverseLinks</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$fb_textAreaFields" title="details" class="var-name">$fb_textAreaFields</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$icalendar" title="details" class="var-name">$icalendar</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$id" title="details" class="var-name">$id</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$imagedata" title="details" class="var-name">$imagedata</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$imagemime" title="details" class="var-name">$imagemime</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$imagetitle" title="details" class="var-name">$imagetitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$imageurl" title="details" class="var-name">$imageurl</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$listingcontactemail" title="details" class="var-name">$listingcontactemail</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$listingcontactname" title="details" class="var-name">$listingcontactname</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$listingcontactphone" title="details" class="var-name">$listingcontactphone</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$listingcontactuid" title="details" class="var-name">$listingcontactuid</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$othereventtype" title="details" class="var-name">$othereventtype</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$otherkeywords" title="details" class="var-name">$otherkeywords</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$privatecomment" title="details" class="var-name">$privatecomment</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$refreshments" title="details" class="var-name">$refreshments</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$shortdescription" title="details" class="var-name">$shortdescription</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$status" title="details" class="var-name">$status</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$subtitle" title="details" class="var-name">$subtitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$title" title="details" class="var-name">$title</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$transparency" title="details" class="var-name">$transparency</a>
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
					<a href="#$webpageurl" title="details" class="var-name">$webpageurl</a>
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
										<a href="#addToCalendar" title="details" class="method-name">addToCalendar</a>
											(<span class="var-type">int</span>&nbsp;<span class="var-name">$calendar_id</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$status</span> = <span class="var-default">'pending'</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$sourcemsg</span> = <span class="var-default">'unknown'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#checkURL" title="details" class="method-name">checkURL</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$val</span>)
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
										<a href="#isOrphaned" title="details" class="method-name">isOrphaned</a>
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
										<a href="#prepareLinkedDataObject" title="details" class="method-name">prepareLinkedDataObject</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$linkedDataObject</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$field</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#processFileAttachments" title="details" class="method-name">processFileAttachments</a>
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
											([<span class="var-type"></span>&nbsp;<span class="var-name">$do</span> = <span class="var-default">false</span>])
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
			<a name="var$approvedforcirculation" id="$approvedforcirculation"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$approvedforcirculation</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$classification" id="$classification"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$classification</span>
						(line <span class="line-number">29</span>)
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
						(line <span class="line-number">45</span>)
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
						(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$description" id="$description"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$description</span>
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
			 = <span class="var-default">array('approvedforcirculation')</span>			(line <span class="line-number">93</span>)
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
			 = <span class="var-default">array('approvedforcirculation'=&gt;array(	'Private (Your event will only be available to your calendar)&lt;br /&gt;',<br />																				'Public (Your event will be available to any university calendar)&lt;br /&gt;'))</span>			(line <span class="line-number">94</span>)
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
			 = <span class="var-default">array(	'othereventtype'		=&gt; 'Secondary Event Type',<br />    								'shortdescription'		=&gt; 'Short Description',<br />    								'webpageurl'			=&gt; 'Event Webpage',<br />    								'privatecomment'		=&gt; 'Internal Note',<br />    								'imageurl'				=&gt; 'Existing Image URL',<br />    								'imagedata'             =&gt; 'Upload/Attach an Image',<br />    								'imagetitle'			=&gt; 'Image Title',<br />    								'approvedforcirculation'=&gt;'',<br />    								'otherkeywords'			=&gt; 'Other Keywords',<br />    								'listingcontactname'	=&gt; 'Listing Contact Name',<br />    								'listingcontactphone'	=&gt; 'Listing Contact Phone',<br />    								'listingcontactemail'	=&gt; 'Listing Contact Email',<br />    								'__reverseLink_eventdatetime_event_id' =&gt; '',<br />    								'__reverseLink_event_has_eventtype_event_id'=&gt;'',<br />    								'consider'=&gt;'')</span>			(line <span class="line-number">67</span>)
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
			 = <span class="var-default"> 'Event Sharing Status'</span>			(line <span class="line-number">56</span>)
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
			 = <span class="var-default">array(	'datecreated',<br />									'uidcreated',<br />									'datelastupdated',<br />									'uidlastupdated',<br />									'status',<br />									'classification',<br />									'transparency',<br />									'imagemime',<br />									'icalendar')</span>			(line <span class="line-number">83</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_linkElementTypes" id="$fb_linkElementTypes"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkElementTypes</span>
			 = <span class="var-default">array('__reverseLink_eventdatetime_event_id'=&gt;'subForm',<br />	                                        '__reverseLink_event_has_eventtype_event_id'=&gt;'subForm',<br />											'approvedforcirculation'=&gt;'radio')</span>			(line <span class="line-number">104</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_linkNewValue" id="$fb_linkNewValue"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_linkNewValue</span>
			 = <span class="var-default">array(<br />											'__reverseLink_eventdatetime_event_idlocation_id_1',<br />											'location_id')</span>			(line <span class="line-number">97</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_preDefOrder" id="$fb_preDefOrder"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_preDefOrder</span>
			 = <span class="var-default">array(<br />    								'approvedforcirculation',<br />    								'consider',<br />									'title',<br />    								'subtitle',<br />    								'description',<br />    								'__reverseLink_event_has_eventtype_event_id',<br />    								'othereventtype',<br />    								'__reverseLink_eventdatetime_event_id')</span>			(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_reverseLinkNewValue" id="$fb_reverseLinkNewValue"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_reverseLinkNewValue</span>
			 = <span class="var-default"> true</span>			(line <span class="line-number">103</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_reverseLinks" id="$fb_reverseLinks"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_reverseLinks</span>
			 = <span class="var-default">array(array(	'table'=&gt;'eventdatetime'),array('table'=&gt;'event_has_eventtype'))</span>			(line <span class="line-number">101</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$fb_textAreaFields" id="$fb_textAreaFields"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$fb_textAreaFields</span>
			 = <span class="var-default">array('description')</span>			(line <span class="line-number">108</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$icalendar" id="$icalendar"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$icalendar</span>
						(line <span class="line-number">42</span>)
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
						(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$imagedata" id="$imagedata"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagedata</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$imagemime" id="$imagemime"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagemime</span>
						(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$imagetitle" id="$imagetitle"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imagetitle</span>
						(line <span class="line-number">35</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$imageurl" id="$imageurl"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$imageurl</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$listingcontactemail" id="$listingcontactemail"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactemail</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$listingcontactname" id="$listingcontactname"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactname</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$listingcontactphone" id="$listingcontactphone"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactphone</span>
						(line <span class="line-number">40</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$listingcontactuid" id="$listingcontactuid"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listingcontactuid</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$othereventtype" id="$othereventtype"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$othereventtype</span>
						(line <span class="line-number">25</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$otherkeywords" id="$otherkeywords"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$otherkeywords</span>
						(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$privatecomment" id="$privatecomment"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$privatecomment</span>
						(line <span class="line-number">33</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$refreshments" id="$refreshments"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$refreshments</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$shortdescription" id="$shortdescription"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$shortdescription</span>
						(line <span class="line-number">27</span>)
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
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$subtitle" id="$subtitle"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$subtitle</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$title" id="$title"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$title</span>
						(line <span class="line-number">23</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$transparency" id="$transparency"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$transparency</span>
						(line <span class="line-number">31</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$uidcreated" id="$uidcreated"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidcreated</span>
						(line <span class="line-number">46</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$uidlastupdated" id="$uidlastupdated"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uidlastupdated</span>
						(line <span class="line-number">48</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var$webpageurl" id="$webpageurl"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$webpageurl</span>
						(line <span class="line-number">37</span>)
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
			 = <span class="var-default"> 'event'</span>			(line <span class="line-number">21</span>)
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

<a name="methodaddToCalendar" id="addToCalendar"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">addToCalendar</span> (line <span class="line-number">319</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function will add the current event to the default calendar.</p>
<p class="description"><p>It assumes that the global default_calendar_id is set.</p></p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">checkURL</span> (line <span class="line-number">200</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Simple function to test for a valid URL</p>
<p class="description"><p>Used to check webpageurl and imageurl fields.</p></p>
	<ul class="tags">
				<li><span class="field">return:</span> 0 | 1</li>
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
				<span class="var-name">$val</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddelete" id="delete"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">delete</span> (line <span class="line-number">333</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">insert</span> (line <span class="line-number">248</span>)
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
<a name="methodisOrphaned" id="isOrphaned"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">isOrphaned</span> (line <span class="line-number">348</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Check whether this event belongs to any calendars.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			isOrphaned
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodpostGenerateForm" id="postGenerateForm"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">postGenerateForm</span> (line <span class="line-number">142</span>)
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
		<span class="method-title">preGenerateForm</span> (line <span class="line-number">110</span>)
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
		<span class="method-title">prepareLinkedDataObject</span> (line <span class="line-number">205</span>)
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
<a name="methodprocessFileAttachments" id="processFileAttachments"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">processFileAttachments</span> (line <span class="line-number">237</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function processes any posted files,  sepcifically the images for an event.</p>
<p class="description"><p>Called from insert() or update().</p></p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			processFileAttachments
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">51</span>)
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
		<span class="method-title">table</span> (line <span class="line-number">216</span>)
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
		<span class="method-title">update</span> (line <span class="line-number">277</span>)
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
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:10:53 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>