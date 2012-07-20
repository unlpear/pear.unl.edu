<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAP</title>";
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
<h2 class="class-name">Class UNL_LDAP</h2>

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
<p class="short-description">This class is a singleton class for operating with the UNL LDAP directory.</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-var">$options</span><span class="src-sym">[</span><span class="src-str">'bind_dn'</span><span class="src-sym">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>=&nbsp;<span class="src-str">'uid=youruseridhere,ou=service,dc=unl,dc=edu'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$options</span><span class="src-sym">[</span><span class="src-str">'bind_password'</span><span class="src-sym">]&nbsp;</span>=&nbsp;<span class="src-str">'passwordhere'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;echo&nbsp;<span class="src-id"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span><span class="src-sym">::</span><a href="../UNL_LDAP/UNL_LDAP.php#methodgetConnection">getConnection</a><span class="src-sym">(</span><span class="src-var">$options</span><span class="src-sym">)</span><span class="src-sym">-&gt;</span><a href="../UNL_LDAP/UNL_LDAP.php#methodgetFirstAttribute">getFirstAttribute</a><span class="src-sym">(</span><span class="src-str">'bbieber2'</span><span class="src-sym">,&nbsp;</span><span class="src-str">'sn'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---LDAP.php.php">/UNL/LDAP.php</a> (line <span class="field">35</span>)
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
					<span class="var-type">array</span>
					<a href="#var_options" title="details" class="var-name">$options</a>
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
					static 						<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
										<a href="#getConnection" title="details" class="method-name">getConnection</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																																								
												<div class="method-definition">
											<span class="method-result">UNL_LDAP</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__destruct" title="details" class="method-name">__destruct</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
										<a href="#connect" title="details" class="method-name">connect</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#disconnect" title="details" class="method-name">disconnect</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#getAttribute" title="details" class="method-name">getAttribute</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$attribute</span>)
									</div>
																								<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getFirstAttribute" title="details" class="method-name">getFirstAttribute</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$attribute</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">resource</span>
										<a href="#getLink" title="details" class="method-name">&amp;getLink</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Result.php">UNL_LDAP_Result</a></span>
										<a href="#search" title="details" class="method-name">search</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$base</span> = <span class="var-default">null</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$filter</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$params</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setOptions" title="details" class="method-name">setOptions</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
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
			<a name="var_options" id="var_options"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$options</span>
			 = <span class="var-default">array('uri'           =&gt; 'ldap://ldap.unl.edu/ ldap://ldap-backup.unl.edu/',<br />                            'base'          =&gt; 'dc=unl,dc=edu',<br />                            'suffix'        =&gt; 'ou=People,dc=unl,dc=edu',<br />                            'bind_dn'       =&gt; 'get this from the identity management team',<br />                            'bind_password' =&gt; 'get this from the identity management team')</span>			(line <span class="line-number">48</span>)
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
<a name="methodgetConnection" id="getConnection"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method getConnection</span> (line <span class="line-number">112</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get the LDAP connection</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-var">$conn&nbsp;</span>=&nbsp;<span class="src-id"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span><span class="src-sym">::</span><a href="../UNL_LDAP/UNL_LDAP.php#methodgetConnection">getConnection</a><span class="src-sym">(</span><span class="src-var">$options</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
		<span class="method-name">
			getConnection
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options to set.</span>			</li>
				</ul>
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">61</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description"><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-id"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span><span class="src-sym">::</span><a href="../UNL_LDAP/UNL_LDAP.php#methodgetConnection">getConnection</a><span class="src-sym">(</span><span class="src-var">$options</span><span class="src-sym">)</span><span class="src-sym">-&gt;</span><span class="src-id">getAttribute</span><span class="src-sym">(</span><span class="src-str">'bbieber'</span><span class="src-sym">,</span><span class="src-str">'cn'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_LDAP</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options.</span>			</li>
				</ul>
		
			
	</div>
<a name="method__destruct" id="__destruct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Destructor __destruct</span> (line <span class="line-number">210</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">destroy the object</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__destruct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodconnect" id="connect"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">connect</span> (line <span class="line-number">87</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Connect &amp; bind to the directory.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
		<span class="method-name">
			connect
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methoddisconnect" id="disconnect"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">disconnect</span> (line <span class="line-number">200</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">unbinds from the ldap directory.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			disconnect
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetAttribute" id="getAttribute"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getAttribute</span> (line <span class="line-number">126</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get an attribute from LDAP given the LDAP-uid and attribute name.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The array of attribute values.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			getAttribute
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$attribute</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: The LDAP-uid of the user we are looking for.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$attribute</span><span class="var-description">: The attribute name we are interested in.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetFirstAttribute" id="getFirstAttribute"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getFirstAttribute</span> (line <span class="line-number">151</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Return the first attribute of an entry</p>
	<ul class="tags">
				<li><span class="field">return:</span> | false</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getFirstAttribute
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$attribute</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: The LDAP uid of the user we are looking for.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$attribute</span><span class="var-description">: The attribute name we are interested in.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetLink" id="getLink"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getLink</span> (line <span class="line-number">190</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the ldap connection resource link</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">resource</span>
		<span class="method-name">
			&amp;getLink
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodsearch" id="search"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">search</span> (line <span class="line-number">169</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Search the directory for matching entries.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Result.php">UNL_LDAP_Result</a></span>
		<span class="method-name">
			search
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$base</span> = <span class="var-default">null</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$filter</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$params</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$base</span><span class="var-description">: Search base</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$filter</span><span class="var-description">: LDAP filter to use</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$params</span><span class="var-description">: Optional parameters to add to the LDAP query</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetOptions" id="setOptions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setOptions</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Set options for the ldap connection.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setOptions
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span><span class="var-description">: Associative array of options to set.</span>			</li>
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