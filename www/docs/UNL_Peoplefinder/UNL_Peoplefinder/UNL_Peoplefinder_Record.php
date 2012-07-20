<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs For Class UNL_Peoplefinder_Record</title>";
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
<h2 class="class-name">Class UNL_Peoplefinder_Record</h2>

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
			Located in <a class="field" href="_UNL---Peoplefinder---Record.php.php">/UNL/Peoplefinder/Record.php</a> (line <span class="field">13</span>)
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
					<a href="#var_cn" title="details" class="var-name">$cn</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_displayName" title="details" class="var-name">$displayName</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_eduPersonNickname" title="details" class="var-name">$eduPersonNickname</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_eduPersonPrimaryAffiliation" title="details" class="var-name">$eduPersonPrimaryAffiliation</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_givenName" title="details" class="var-name">$givenName</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_mail" title="details" class="var-name">$mail</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_ou" title="details" class="var-name">$ou</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_postalAddress" title="details" class="var-name">$postalAddress</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_sn" title="details" class="var-name">$sn</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_telephoneNumber" title="details" class="var-name">$telephoneNumber</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_title" title="details" class="var-name">$title</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_uid" title="details" class="var-name">$uid</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlEmailAlias" title="details" class="var-name">$unlEmailAlias</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlHRAddress" title="details" class="var-name">$unlHRAddress</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlHRPrimaryDepartment" title="details" class="var-name">$unlHRPrimaryDepartment</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISClassLevel" title="details" class="var-name">$unlSISClassLevel</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISCollege" title="details" class="var-name">$unlSISCollege</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalAddr1" title="details" class="var-name">$unlSISLocalAddr1</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalAddr2" title="details" class="var-name">$unlSISLocalAddr2</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalCity" title="details" class="var-name">$unlSISLocalCity</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalPhone" title="details" class="var-name">$unlSISLocalPhone</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalState" title="details" class="var-name">$unlSISLocalState</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISLocalZip" title="details" class="var-name">$unlSISLocalZip</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISMajor" title="details" class="var-name">$unlSISMajor</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISPermAddr1" title="details" class="var-name">$unlSISPermAddr1</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISPermAddr2" title="details" class="var-name">$unlSISPermAddr2</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISPermCity" title="details" class="var-name">$unlSISPermCity</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISPermState" title="details" class="var-name">$unlSISPermState</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_unlSISPermZip" title="details" class="var-name">$unlSISPermZip</a>
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
					static 						<span class="method-result">void</span>
										<a href="#fromLDAPEntry" title="details" class="method-name">fromLDAPEntry</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$entry</span>)
									</div>
																
												<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#formatPostalAddress" title="details" class="method-name">formatPostalAddress</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">0</span>)
									</div>
																								<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__toString" title="details" class="method-name">__toString</a>
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
			<a name="var_cn" id="var_cn"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$cn</span>
						(line <span class="line-number">15</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_displayName" id="var_displayName"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$displayName</span>
						(line <span class="line-number">20</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_eduPersonNickname" id="var_eduPersonNickname"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$eduPersonNickname</span>
						(line <span class="line-number">17</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_eduPersonPrimaryAffiliation" id="var_eduPersonPrimaryAffiliation"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$eduPersonPrimaryAffiliation</span>
						(line <span class="line-number">18</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_givenName" id="var_givenName"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$givenName</span>
						(line <span class="line-number">19</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_mail" id="var_mail"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$mail</span>
						(line <span class="line-number">21</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_ou" id="var_ou"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$ou</span>
						(line <span class="line-number">16</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_postalAddress" id="var_postalAddress"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$postalAddress</span>
						(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_sn" id="var_sn"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$sn</span>
						(line <span class="line-number">23</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_telephoneNumber" id="var_telephoneNumber"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$telephoneNumber</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_title" id="var_title"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$title</span>
						(line <span class="line-number">25</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uid" id="var_uid"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$uid</span>
						(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlEmailAlias" id="var_unlEmailAlias"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlEmailAlias</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlHRAddress" id="var_unlHRAddress"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlHRAddress</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlHRPrimaryDepartment" id="var_unlHRPrimaryDepartment"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlHRPrimaryDepartment</span>
						(line <span class="line-number">27</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISClassLevel" id="var_unlSISClassLevel"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISClassLevel</span>
						(line <span class="line-number">29</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISCollege" id="var_unlSISCollege"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISCollege</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalAddr1" id="var_unlSISLocalAddr1"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalAddr1</span>
						(line <span class="line-number">31</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalAddr2" id="var_unlSISLocalAddr2"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalAddr2</span>
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalCity" id="var_unlSISLocalCity"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalCity</span>
						(line <span class="line-number">33</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalPhone" id="var_unlSISLocalPhone"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalPhone</span>
						(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalState" id="var_unlSISLocalState"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalState</span>
						(line <span class="line-number">35</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISLocalZip" id="var_unlSISLocalZip"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISLocalZip</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISMajor" id="var_unlSISMajor"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISMajor</span>
						(line <span class="line-number">42</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISPermAddr1" id="var_unlSISPermAddr1"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISPermAddr1</span>
						(line <span class="line-number">37</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISPermAddr2" id="var_unlSISPermAddr2"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISPermAddr2</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISPermCity" id="var_unlSISPermCity"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISPermCity</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISPermState" id="var_unlSISPermState"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISPermState</span>
						(line <span class="line-number">40</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_unlSISPermZip" id="var_unlSISPermZip"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$unlSISPermZip</span>
						(line <span class="line-number">41</span>)
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
<a name="methodfromLDAPEntry" id="fromLDAPEntry"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method fromLDAPEntry</span> (line <span class="line-number">46</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			fromLDAPEntry
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$entry</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$entry</span>			</li>
				</ul>
		
			
	</div>

<a name="methodformatPostalAddress" id="formatPostalAddress"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">formatPostalAddress</span> (line <span class="line-number">65</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Takes in a string from the LDAP directory, usually formatted like:      ### ___ UNL 68588-####     Where ### is the room number, ___ = Building Abbreviation, #### zip extension</p>
	<ul class="tags">
				<li><span class="field">return:</span> Associative array.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			formatPostalAddress
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">0</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">0</span>			</li>
				</ul>
		
			
	</div>
<a name="method__toString" id="__toString"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__toString</span> (line <span class="line-number">104</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__toString
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