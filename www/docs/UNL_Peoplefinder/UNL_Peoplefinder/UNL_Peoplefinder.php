<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs For Class UNL_Peoplefinder</title>";
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
<h2 class="class-name">Class UNL_Peoplefinder</h2>

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
<p class="short-description">Peoplefinder class for UNL's online directory.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://peoplefinder.unl.edu/">http://peoplefinder.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Peoplefinder.php.php">/UNL/Peoplefinder.php</a> (line <span class="field">31</span>)
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
					static <span class="var-type">mixed</span>
					<a href="#var_baseDN" title="details" class="var-name">$baseDN</a>
				</div>
																																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_displayResultLimit" title="details" class="var-name">$displayResultLimit</a>
				</div>
																																								<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_ldapServer" title="details" class="var-name">$ldapServer</a>
				</div>
																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_ldapTimeout" title="details" class="var-name">$ldapTimeout</a>
				</div>
																																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_resultLimit" title="details" class="var-name">$resultLimit</a>
				</div>
																																				<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_connected" title="details" class="var-name">$connected</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_detailAttributes" title="details" class="var-name">$detailAttributes</a>
				</div>
																								<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_lastQuery" title="details" class="var-name">$lastQuery</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_lastResult" title="details" class="var-name">$lastResult</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_lastResultCount" title="details" class="var-name">$lastResultCount</a>
				</div>
																																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_linkID" title="details" class="var-name">$linkID</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_listAttributes" title="details" class="var-name">$listAttributes</a>
				</div>
																								<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_startTime" title="details" class="var-name">$startTime</a>
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
											<span class="method-result">UNL_Peoplefinder</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#array_csort" title="details" class="method-name">array_csort</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#bind" title="details" class="method-name">bind</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#displayAdvancedForm" title="details" class="method-name">displayAdvancedForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#displayInstructions" title="details" class="method-name">displayInstructions</a>
											([<span class="var-type">bool</span>&nbsp;<span class="var-name">$adv</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#displayStandardForm" title="details" class="method-name">displayStandardForm</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_Peoplefinder_Record)</span>
										<a href="#getAdvancedSearchMatches" title="details" class="method-name">getAdvancedSearchMatches</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$sn</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$cn</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$eppa</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_Peoplefinder_Record)</span>
										<a href="#getExactMatches" title="details" class="method-name">getExactMatches</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_Peoplefinder_Record)</span>
										<a href="#getLikeMatches" title="details" class="method-name">getLikeMatches</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$excluded_records</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_Peoplefinder_Record)</span>
										<a href="#getPhoneMatches" title="details" class="method-name">getPhoneMatches</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_Peoplefinder_Record)</span>
										<a href="#getRecordsFromResults" title="details" class="method-name">getRecordsFromResults</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>
										<a href="#getUID" title="details" class="method-name">getUID</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#query" title="details" class="method-name">query</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$filter</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$attributes</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$setResult</span> = <span class="var-default">true</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">unknown</span>
										<a href="#unbind" title="details" class="method-name">unbind</a>
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
			<a name="var_baseDN" id="var_baseDN"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$baseDN</span>
			 = <span class="var-default"> 'dc=unl,dc=edu'</span>			(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_displayResultLimit" id="var_displayResultLimit"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$displayResultLimit</span>
			 = <span class="var-default"> UNL_PF_DISPLAY_LIMIT</span>			(line <span class="line-number">52</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_ldapServer" id="var_ldapServer"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$ldapServer</span>
			 = <span class="var-default"> 'ldap.unl.edu ldap-backup.unl.edu'</span>			(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Connection credentials</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_ldapTimeout" id="var_ldapTimeout"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$ldapTimeout</span>
			 = <span class="var-default"> 10</span>			(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_resultLimit" id="var_resultLimit"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$resultLimit</span>
			 = <span class="var-default"> UNL_PF_RESULT_LIMIT</span>			(line <span class="line-number">51</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_connected" id="var_connected"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$connected</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">56</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Connection details</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_detailAttributes" id="var_detailAttributes"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$detailAttributes</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">73</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_lastQuery" id="var_lastQuery"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$lastQuery</span>
						(line <span class="line-number">60</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Result Info</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_lastResult" id="var_lastResult"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$lastResult</span>
						(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_lastResultCount" id="var_lastResultCount"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$lastResultCount</span>
			 = <span class="var-default"> 0</span>			(line <span class="line-number">62</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_linkID" id="var_linkID"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$linkID</span>
						(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_listAttributes" id="var_listAttributes"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$listAttributes</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">70</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Attribute arrays</p>
<div class="description"><p>Attributes are the fields retrieved in an LDAP QUERY, limit this to  ONLY what is USED/DISPLAYED!</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_startTime" id="var_startTime"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$startTime</span>
						(line <span class="line-number">53</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">78</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor for the object.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_Peoplefinder</span>
		<span class="method-name">
			__construct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodarray_csort" id="array_csort"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">array_csort</span> (line <span class="line-number">323</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">sort a multidimensional array</p>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			array_csort
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodbind" id="bind"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">bind</span> (line <span class="line-number">126</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Binds to the LDAP directory using the bind credentials stored in  bindDN and bindPW</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			bind
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methoddisplayAdvancedForm" id="displayAdvancedForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">displayAdvancedForm</span> (line <span class="line-number">213</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Display the advanced form.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			displayAdvancedForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methoddisplayInstructions" id="displayInstructions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">displayInstructions</span> (line <span class="line-number">353</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Displays the instructions for using peoplefinder.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			displayInstructions
		</span>
					([<span class="var-type">bool</span>&nbsp;<span class="var-name">$adv</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$adv</span><span class="var-description">: Show advanced instructions or default instructions.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddisplayStandardForm" id="displayStandardForm"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">displayStandardForm</span> (line <span class="line-number">203</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Display the standard search form.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			displayStandardForm
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetAdvancedSearchMatches" id="getAdvancedSearchMatches"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getAdvancedSearchMatches</span> (line <span class="line-number">259</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get results for an advanced/detailed search.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_Peoplefinder_Record)</span>
		<span class="method-name">
			getAdvancedSearchMatches
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$sn</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$cn</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$eppa</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$sn</span><span class="var-description">: Surname/last name</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$cn</span><span class="var-description">: Common name/first name</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$eppa</span><span class="var-description">: Primary Affiliation</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetExactMatches" id="getExactMatches"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getExactMatches</span> (line <span class="line-number">225</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get records which match the query exactly.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_Peoplefinder_Record)</span>
		<span class="method-name">
			getExactMatches
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$q</span><span class="var-description">: Search string.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetLikeMatches" id="getLikeMatches"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getLikeMatches</span> (line <span class="line-number">275</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Find matches similar to the query given</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_Peoplefinder_Record)</span>
		<span class="method-name">
			getLikeMatches
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$excluded_records</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$q</span><span class="var-description">: Search query</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$excluded_records</span><span class="var-description">: Array of records to exclude.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetPhoneMatches" id="getPhoneMatches"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getPhoneMatches</span> (line <span class="line-number">292</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get an array of records which matche by the phone number.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_Peoplefinder_Record)</span>
		<span class="method-name">
			getPhoneMatches
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$q</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$q</span><span class="var-description">: EG: 472-1598</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetRecordsFromResults" id="getRecordsFromResults"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getRecordsFromResults</span> (line <span class="line-number">239</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an array of UNL_Peoplefinder_Record objects from the ldap  query result.</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_Peoplefinder_Record)</span>
		<span class="method-name">
			getRecordsFromResults
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetUID" id="getUID"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getUID</span> (line <span class="line-number">307</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get the ldap record for a specific uid eg:bbieber2</p>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>
		<span class="method-name">
			getUID
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: The unique ID for the user you want to get.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodquery" id="query"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">query</span> (line <span class="line-number">149</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Send a query to the ldap directory</p>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			query
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$filter</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$attributes</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$setResult</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$filter</span><span class="var-description">: LDAP filter (uid=blah)</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$attributes</span><span class="var-description">: attributes to return for the entries</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$setResult</span><span class="var-description">: whether or not to set the last result</span>			</li>
				</ul>
		
			
	</div>
<a name="methodunbind" id="unbind"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">unbind</span> (line <span class="line-number">192</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Disconnect from the ldap directory.</p>
	
	<div class="method-signature">
		<span class="method-result">unknown</span>
		<span class="method-name">
			unbind
		</span>
				()
			</div>
	
		
			
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