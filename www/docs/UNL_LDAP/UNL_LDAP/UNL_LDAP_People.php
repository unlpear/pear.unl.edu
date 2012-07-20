<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAP_People</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_LDAP">UNL_LDAP</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_LDAP/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_LDAP API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_LDAP/li_UNL_LDAP.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_LDAP_People</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Class for managing records for people.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---LDAP---People.php.php">/UNL/LDAP/People.php</a> (line <span class="field">34</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>




	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
												<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																																																												
												<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCity" title="details" class="method-name">getCity</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCommonName" title="details" class="method-name">getCommonName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCountry" title="details" class="method-name">getCountry</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getEmail" title="details" class="method-name">getEmail</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getFax" title="details" class="method-name">getFax</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getFirstName" title="details" class="method-name">getFirstName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getLastName" title="details" class="method-name">getLastName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getState" title="details" class="method-name">getState</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getStreet" title="details" class="method-name">getStreet</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getTelephone" title="details" class="method-name">getTelephone</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getZip" title="details" class="method-name">getZip</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
								</div>
		</div>
	</div>		

	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="methodgetCity" id="getCity"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCity</span> (line <span class="line-number">115</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'l' (locality) LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's city.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCity
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCommonName" id="getCommonName"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getCommonName</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'cn' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's common name (typically givenname + cn).</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCommonName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCountry" id="getCountry"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCountry</span> (line <span class="line-number">151</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'country' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's zipcode.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCountry
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetEmail" id="getEmail"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getEmail</span> (line <span class="line-number">163</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'mail' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's email address.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getEmail
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetFax" id="getFax"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getFax</span> (line <span class="line-number">91</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'facsimiletelephonenumber' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's fax number.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getFax
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetFirstName" id="getFirstName"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getFirstName</span> (line <span class="line-number">67</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'givenname' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's first name.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getFirstName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetLastName" id="getLastName"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getLastName</span> (line <span class="line-number">43</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'sn' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's lastname.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getLastName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetState" id="getState"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getState</span> (line <span class="line-number">127</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'st' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's state.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getState
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetStreet" id="getStreet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getStreet</span> (line <span class="line-number">103</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'street' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's street address.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getStreet
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetTelephone" id="getTelephone"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getTelephone</span> (line <span class="line-number">79</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'telephonenumber' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's telephone number.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getTelephone
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetZip" id="getZip"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getZip</span> (line <span class="line-number">139</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the 'postalcode' LDAP attribute of the user.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The user's zipcode.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getZip
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique ID for the user</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>