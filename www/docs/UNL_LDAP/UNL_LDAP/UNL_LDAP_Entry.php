<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAP_Entry</title>";
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
<h2 class="class-name">Class UNL_LDAP_Entry</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Class for handling an ldap entry</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---LDAP---Entry.php.php">/UNL/LDAP/Entry.php</a> (line <span class="field">29</span>)
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
											<span class="method-result">UNL_LDAP_Entry</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">resource</span>&nbsp;<span class="var-name">&$link</span>, <span class="var-type">resource</span>&nbsp;<span class="var-name">$entry</span>)
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry_Attribute.php">UNL_LDAP_Entry_Attribute</a></span>
										<a href="#__get" title="details" class="method-name">__get</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$name</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#__isset" title="details" class="method-name">__isset</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$name</span>)
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

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">43</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Construct an LDAP entry object</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_LDAP_Entry</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">resource</span>&nbsp;<span class="var-name">&$link</span>, <span class="var-type">resource</span>&nbsp;<span class="var-name">$entry</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">resource</span>
				<span class="var-name">&$link</span><span class="var-description">: LDAP connection</span>			</li>
					<li>
				<span class="var-type">resource</span>
				<span class="var-name">$entry</span><span class="var-description">: Entry resource from ldap_next_entry</span>			</li>
				</ul>
		
			
	</div>
<a name="method__get" id="__get"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">__get</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Retrieve the requested attribute</p>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry_Attribute.php">UNL_LDAP_Entry_Attribute</a></span>
		<span class="method-name">
			__get
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$name</span><span class="var-description">: Attribute to get</span>			</li>
				</ul>
		
			
	</div>
<a name="method__isset" id="__isset"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__isset</span> (line <span class="line-number">57</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Determines if a specific attribute is set</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			__isset
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$name</span><span class="var-description">: Attribute name to check</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:46 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>