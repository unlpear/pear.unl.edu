<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs For Class UNL_Peoplefinder_Renderer_HTML</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Peoplefinder_Renderer_HTML</h2>

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
<p class="short-description">Class to render html output for results</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://peoplefinder.unl.edu/">http://peoplefinder.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Peoplefinder---Renderer---HTML.php.php">/UNL/Peoplefinder/Renderer/HTML.php</a> (line <span class="field">41</span>)
		</p>
		
				
		<pre></pre>
	
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
					<a href="#var_choose_uid" title="details" class="var-name">$choose_uid</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_displayLimit" title="details" class="var-name">$displayLimit</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_page_onclick" title="details" class="var-name">$page_onclick</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_trustedIP" title="details" class="var-name">$trustedIP</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uid_onclick" title="details" class="var-name">$uid_onclick</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uri" title="details" class="var-name">$uri</a>
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
											<span class="method-result">UNL_Peoplefinder_Renderer_HTML</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#displayPageLinks" title="details" class="method-name">displayPageLinks</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$num_records</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$start</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$end</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#formatAddress" title="details" class="method-name">formatAddress</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$addressArray</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#formatCollege" title="details" class="method-name">formatCollege</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$college</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#formatMajor" title="details" class="method-name">formatMajor</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$subject</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#formatPhone" title="details" class="method-name">formatPhone</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$phone</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getUIDLink" title="details" class="method-name">getUIDLink</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$linktext</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$onclick</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$class</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getVCardLink" title="details" class="method-name">getVCardLink</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$linktext</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$onclick</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$title</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderAddress" title="details" class="method-name">renderAddress</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$address</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$class</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderError" title="details" class="method-name">renderError</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderListRecord" title="details" class="method-name">renderListRecord</a>
											(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderRecord" title="details" class="method-name">renderRecord</a>
											(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderSearchResults" title="details" class="method-name">renderSearchResults</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$records</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$start</span> = <span class="var-default">0</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$num_rows</span> = <span class="var-default">UNL_PF_DISPLAY_LIMIT</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setOptions" title="details" class="method-name">setOptions</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$options</span>)
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
			<a name="var_choose_uid" id="var_choose_uid"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$choose_uid</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">52</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This defines a mode in which the directory is searched to return one user.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_displayLimit" id="var_displayLimit"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$displayLimit</span>
						(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_page_onclick" id="var_page_onclick"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$page_onclick</span>
						(line <span class="line-number">53</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_trustedIP" id="var_trustedIP"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$trustedIP</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">44</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_uid_onclick" id="var_uid_onclick"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uid_onclick</span>
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This can be set to a javascript function name to send the UID to when clicking a uid</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uri" id="var_uri"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uri</span>
						(line <span class="line-number">45</span>)
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

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">UNL_Peoplefinder_Renderer_HTML</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayPageLinks" id="displayPageLinks"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">displayPageLinks</span> (line <span class="line-number">307</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			displayPageLinks
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$num_records</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$start</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$end</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$num_records</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$start</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$end</span>			</li>
				</ul>
		
			
	</div>
<a name="methodformatAddress" id="formatAddress"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">formatAddress</span> (line <span class="line-number">294</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function takes in an array of address information and formats it</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			formatAddress
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$addressArray</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$addressArray</span><span class="var-description">: Address information  <div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">0</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">Address&nbsp;line&nbsp;</span><span class="src-num">1</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">1</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">Address&nbsp;line&nbsp;</span><span class="src-num">2</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">2</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">City</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">3</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">State</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">4</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">Zip</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$addressArray</span><span class="src-sym">[</span><span class="src-num">5</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-id">Country</span></div></li>
</ol></div></span>			</li>
				</ul>
		
			
	</div>
<a name="methodformatCollege" id="formatCollege"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">formatCollege</span> (line <span class="line-number">434</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Format a three letter college abbreviation into the full college name.</p>
	<ul class="tags">
				<li><span class="field">return:</span> College of Fine &amp;amp; Performing Arts</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			formatCollege
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$college</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$college</span><span class="var-description">: College abbreviation = FPA</span>			</li>
				</ul>
		
			
	</div>
<a name="methodformatMajor" id="formatMajor"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">formatMajor</span> (line <span class="line-number">395</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Formats a major subject code into a text description.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			formatMajor
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$subject</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$subject</span><span class="var-description">: Subject code for the major eg: MSYM</span>			</li>
				</ul>
		
			
	</div>
<a name="methodformatPhone" id="formatPhone"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">formatPhone</span> (line <span class="line-number">267</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function takes in a string representing a phone number  and formats it to be rendered as a clickable calling link</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			formatPhone
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$phone</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$phone</span><span class="var-description">: A telephone number</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetUIDLink" id="getUIDLink"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getUIDLink</span> (line <span class="line-number">370</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getUIDLink
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$linktext</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$onclick</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$class</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$uid</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$linktext</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$onclick</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$class</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetVCardLink" id="getVCardLink"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getVCardLink</span> (line <span class="line-number">445</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getVCardLink
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$uid</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$linktext</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$onclick</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$title</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$uid</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$linktext</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$onclick</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$title</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderAddress" id="renderAddress"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">renderAddress</span> (line <span class="line-number">215</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderAddress
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$address</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$class</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$address</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$type</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$class</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderError" id="renderError"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">renderError</span> (line <span class="line-number">464</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderError
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodrenderListRecord" id="renderListRecord"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">renderListRecord</span> (line <span class="line-number">319</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderListRecord
		</span>
					(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>
				<span class="var-name">$r</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderRecord" id="renderRecord"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">renderRecord</span> (line <span class="line-number">94</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Renders a peoplefinder record object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderRecord
		</span>
					(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>
				<span class="var-name">$r</span><span class="var-description">: record to render</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderSearchResults" id="renderSearchResults"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">renderSearchResults</span> (line <span class="line-number">341</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderSearchResults
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$records</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$start</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$num_rows</span> = <span class="var-default">UNL_PF_DISPLAY_LIMIT</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$records</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$start</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$num_rows</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetOptions" id="setOptions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setOptions</span> (line <span class="line-number">78</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function sets parameters for this class.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setOptions
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: an associative array of options to set.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:48 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>