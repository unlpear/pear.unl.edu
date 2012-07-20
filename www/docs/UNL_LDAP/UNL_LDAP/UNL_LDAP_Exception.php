<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAP_Exception</title>";
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
<h2 class="class-name">Class UNL_LDAP_Exception</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
													<a href="#sec-vars">Vars</a>
						|											<a href="#sec-methods">Methods</a>
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Class for exception handling</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---LDAP---Exception.php.php">/UNL/LDAP/Exception.php</a> (line <span class="field">27</span>)
		</p>
		
				
		<pre>Exception
   |
   --UNL_LDAP_Exception</pre>
	
			</div>
</div>





	<a name="sec-vars"></a>
	<div class="info-box">
		<div class="info-box-title">Variables</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
										<span class="disabled">Vars</span>
						
			
										| 
									<a href="#sec-methods">Methods</a>
							
					</div>
		<div class="info-box-body">
										<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname">Exception (Internal Class)</span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name">$code</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$file</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$line</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$message</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$previous</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$string</span><br />
							</span>
													<span class="var-title">
								<span class="var-name">$trace</span><br />
							</span>
											</blockquote> 
										
		</div>
	</div>
	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
															<a href="#sec-vars">Vars</a>
																	<span class="disabled">Methods</span>
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname">Exception (Internal Class)</span></p>
					<blockquote>
													<span class="method-name">constructor __construct ( [$message = ], [$code = ], [$previous = ] )</span><br />
													<span class="method-name">getCode (  )</span><br />
													<span class="method-name">getFile (  )</span><br />
													<span class="method-name">getLine (  )</span><br />
													<span class="method-name">getMessage (  )</span><br />
													<span class="method-name">getPrevious (  )</span><br />
													<span class="method-name">getTrace (  )</span><br />
													<span class="method-name">getTraceAsString (  )</span><br />
													<span class="method-name">__clone (  )</span><br />
													<span class="method-name">__toString (  )</span><br />
											</blockquote>
										
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