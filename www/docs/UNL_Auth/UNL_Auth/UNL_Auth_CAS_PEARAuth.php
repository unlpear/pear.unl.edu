<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | Docs For Class UNL_Auth_CAS_PEARAuth</title>";
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
<h2 class="class-name">Class UNL_Auth_CAS_PEARAuth</h2>

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
		<p class="notes">
			Located in <a class="field" href="_UNL---Auth---CAS---PEARAuth.php.php">/UNL/Auth/CAS/PEARAuth.php</a> (line <span class="field">18</span>)
		</p>
		
				
		<pre>Auth_Container
   |
   --UNL_Auth_CAS_PEARAuth</pre>
	
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
					<a href="#var_cas" title="details" class="var-name">$cas</a>
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
											<span class="method-result">UNL_Auth_CAS_PEARAuth</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#checkAuth" title="details" class="method-name">checkAuth</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getAuth" title="details" class="method-name">getAuth</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getPEARAuth" title="details" class="method-name">getPEARAuth</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$loginFunction</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$showLogin</span> = <span class="var-default">true</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getUsername" title="details" class="method-name">getUsername</a>
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
			<a name="var_cas" id="var_cas"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$cas</span>
						(line <span class="line-number">20</span>)
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

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">22</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_Auth_CAS_PEARAuth</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcheckAuth" id="checkAuth"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">checkAuth</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			checkAuth
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetAuth" id="getAuth"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getAuth</span> (line <span class="line-number">50</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getAuth
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetPEARAuth" id="getPEARAuth"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getPEARAuth</span> (line <span class="line-number">27</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getPEARAuth
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$loginFunction</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$showLogin</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$loginFunction</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$showLogin</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetUsername" id="getUsername"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getUsername</span> (line <span class="line-number">60</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getUsername
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodlogin" id="login"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">login</span> (line <span class="line-number">40</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
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
		<span class="method-title">logout</span> (line <span class="line-number">45</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			logout
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