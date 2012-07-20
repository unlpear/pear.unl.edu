<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAPTest</title>";
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
<h2 class="class-name">Class UNL_LDAPTest</h2>

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
<p class="short-description">Test class for UNL_LDAP.</p>
<div class="description"><p>$Id$</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_tests---UNL_LDAPTest.php.php">/tests/UNL_LDAPTest.php</a> (line <span class="field">42</span>)
		</p>
		
				
		<pre>PHPUnit_Framework_TestCase
   |
   --UNL_LDAPTest</pre>
	
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
					<span class="var-type"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
					<a href="#var_object" title="details" class="var-name">$object</a>
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
										<a href="#main" title="details" class="method-name">main</a>
										()
									</div>
																																																
																				<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setUp" title="details" class="method-name">setUp</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#tearDown" title="details" class="method-name">tearDown</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#testGetAttribute" title="details" class="method-name">testGetAttribute</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#testGetConnection" title="details" class="method-name">testGetConnection</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#testGetFirstAttribute" title="details" class="method-name">testGetFirstAttribute</a>
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
			<a name="var_object" id="var_object"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span>
			<span class="var-name">$object</span>
						(line <span class="line-number">48</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
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
<a name="methodmain" id="main"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method main</span> (line <span class="line-number">57</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs the test methods of this class.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			main
		</span>
				()
			</div>
	
		
			
	</div>

<a name="methodsetUp" id="setUp"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setUp</span> (line <span class="line-number">72</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Sets up the fixture, for example, opens a network connection.</p>
<div class="description"><p>This method is called before a test is executed.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setUp
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtearDown" id="tearDown"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">tearDown</span> (line <span class="line-number">85</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Tears down the fixture, for example, closes a network connection.</p>
<div class="description"><p>This method is called after a test is executed.</p></div>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			tearDown
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtestGetAttribute" id="testGetAttribute"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">testGetAttribute</span> (line <span class="line-number">104</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Test get attribute function</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			testGetAttribute
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtestGetConnection" id="testGetConnection"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">testGetConnection</span> (line <span class="line-number">94</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Just tests that you can get a connection to the server.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			testGetConnection
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtestGetFirstAttribute" id="testGetFirstAttribute"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">testGetFirstAttribute</span> (line <span class="line-number">114</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">test getFirstAttribute</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			testGetFirstAttribute
		</span>
				()
			</div>
	
		
			
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