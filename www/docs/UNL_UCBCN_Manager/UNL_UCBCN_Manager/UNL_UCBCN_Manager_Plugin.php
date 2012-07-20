<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | Docs For Class UNL_UCBCN_Manager_Plugin</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN_Manager">UNL_UCBCN_Manager</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN_Manager/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN_Manager API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN_Manager/li_UNL_UCBCN_Manager.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_UCBCN_Manager_Plugin</h2>

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
<p class="short-description">Abstract class plugins must extend and implement.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">abstract:</span> </li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Manager---Plugin.php.php">/UNL/UCBCN/Manager/Plugin.php</a> (line <span class="field">27</span>)
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
					<span class="var-type">string</span>
					<a href="#var_author" title="details" class="var-name">$author</a>
				</div>
																<div class="var-title">
					<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
					<a href="#var_manager" title="details" class="var-name">$manager</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_name" title="details" class="var-name">$name</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_uri" title="details" class="var-name">$uri</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_version" title="details" class="var-name">$version</a>
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
											<span class="method-result">void</span>
										<a href="#startup" title="details" class="method-name">startup</a>
											(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">&$manager</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uri</span>)
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
			<a name="var_author" id="var_author"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$author</span>
						(line <span class="line-number">48</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Name of the author of the plugin.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_manager" id="var_manager"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
			<span class="var-name">$manager</span>
						(line <span class="line-number">55</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Manager running this plugin.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_name" id="var_name"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$name</span>
						(line <span class="line-number">34</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Name for the plugin.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_uri" id="var_uri"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$uri</span>
						(line <span class="line-number">62</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The URI to this plugin.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_version" id="var_version"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$version</span>
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Version of the plugin.</p>
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

<a name="methodstartup" id="startup"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">startup</span> (line <span class="line-number">72</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This will be called when the plugin is initialized on load of a page.</p>
	<ul class="tags">
				<li><span class="field">abstract:</span> </li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			startup
		</span>
					(<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>&nbsp;<span class="var-name">&$manager</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uri</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager.php">UNL_UCBCN_Manager</a></span>
				<span class="var-name">&$manager</span><span class="var-description">: The manager object currently running.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uri</span><span class="var-description">: The URI assigned to this plugin.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:45 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>