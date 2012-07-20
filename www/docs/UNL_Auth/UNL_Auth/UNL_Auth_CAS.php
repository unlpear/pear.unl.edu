<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | Docs For Class UNL_Auth_CAS</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Auth">UNL_Auth</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Auth/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Auth API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Auth/li_UNL_Auth.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Auth_CAS</h2>

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
<p class="short-description">UNL_Auth_CAS</p>
<div class="description"><p>This is the CAS UserAccount class.  This class takes care of user authentication using CAS and obtains the user  account information via LDAP.</p><p>This class does not handle changes to the user account information. All account  information changes are handled by http://login.unl.edu/</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Auth---CAS.php.php">/UNL/Auth/CAS.php</a> (line <span class="field">39</span>)
		</p>
		
				
		<pre><a href="../UNL_Auth/UNL_Auth.php">UNL_Auth</a>
   |
   --UNL_Auth_CAS</pre>
	
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
					<a href="#var_cas_options" title="details" class="var-name">$cas_options</a>
				</div>
																<div class="var-title">
					<span class="var-type">bool</span>
					<a href="#var_isAuth" title="details" class="var-name">$isAuth</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_uid" title="details" class="var-name">$uid</a>
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
					static 						<span class="method-result"><a href="../UNL_Auth/UNL_Auth_CAS.php">UNL_Auth_CAS</a></span>
										<a href="#getInstance" title="details" class="method-name">getInstance</a>
										()
									</div>
																																																
																				<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getUid" title="details" class="method-name">getUid</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getUser" title="details" class="method-name">getUser</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#isLoggedIn" title="details" class="method-name">isLoggedIn</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#login" title="details" class="method-name">login</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#logout" title="details" class="method-name">logout</a>
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
			<a name="var_cas_options" id="var_cas_options"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$cas_options</span>
			 = <span class="var-default">array('host' =&gt; 'login.unl.edu',<br />                                   'port' =&gt; 443,<br />                                   'path' =&gt; 'cas')</span>			(line <span class="line-number">61</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Options for the CAS server</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_isAuth" id="var_isAuth"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">bool</span>
			<span class="var-name">$isAuth</span>
			 = <span class="var-default"> false</span>			(line <span class="line-number">47</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Boolean flag to if the user is authenticated or not.</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_uid" id="var_uid"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$uid</span>
						(line <span class="line-number">54</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">$uid is the LDAP uid value of the authenticated user.</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_Auth/UNL_Auth.php">UNL_Auth</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_Auth/UNL_Auth.php#var$_instance">UNL_Auth::$_instance</a></span><br />
							</span>
											</blockquote> 
										
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
<a name="methodgetInstance" id="getInstance"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getInstance</span> (line <span class="line-number">90</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">get a singleton instance of this class</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result"><a href="../UNL_Auth/UNL_Auth_CAS.php">UNL_Auth_CAS</a></span>
		<span class="method-name">
			getInstance
		</span>
				()
			</div>
	
		
			<hr class="separator" />
		<div class="notes">Redefinition of:</div>
		<dl>
			<dt><a href="../UNL_Auth/UNL_Auth.php#methodgetInstance">UNL_Auth::getInstance()</a></dt>
					</dl>
			
	</div>

<a name="methodgetUid" id="getUid"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getUid</span> (line <span class="line-number">152</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Stores the LDAP-uid internally in this instance of the class.</p>
	<ul class="tags">
				<li><span class="field">return:</span> The LDAP uid of the logged in user. If the user is not logged in, return false.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getUid
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetUser" id="getUser"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getUser</span> (line <span class="line-number">138</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Get the LDAP-uid.</p>
	<ul class="tags">
				<li><span class="field">return:</span> | bool The LDAP uid of the logged in user.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getUser
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodisLoggedIn" id="isLoggedIn"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">isLoggedIn</span> (line <span class="line-number">128</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks to see if the user is logged in.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true if logged in, false otherwise.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			isLoggedIn
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodlogin" id="login"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">login</span> (line <span class="line-number">102</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Log in the user.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			login
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodlogout" id="logout"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">logout</span> (line <span class="line-number">112</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Log out the user.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			logout
		</span>
				()
			</div>
	
		
			
	</div>
							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname"><a href="../UNL_Auth/UNL_Auth.php">UNL_Auth</a></span></p>
					<blockquote>
													<span class="method-name"><a href="../UNL_Auth/UNL_Auth.php#methoddiscoverAndReturn">UNL_Auth::discoverAndReturn()</a></span><br />
													<span class="method-name"><a href="../UNL_Auth/UNL_Auth.php#methodfactory">UNL_Auth::factory()</a></span><br />
													<span class="method-name"><a href="../UNL_Auth/UNL_Auth.php#methodgetInstance">UNL_Auth::getInstance()</a></span><br />
													<span class="method-name"><a href="../UNL_Auth/UNL_Auth.php#methodPEARFactory">UNL_Auth::PEARFactory()</a></span><br />
													<span class="method-name"><a href="../UNL_Auth/UNL_Auth.php#methodZendFactory">UNL_Auth::ZendFactory()</a></span><br />
											</blockquote>
										
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