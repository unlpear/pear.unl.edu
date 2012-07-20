<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs For Class UNL_DWT_Scanner</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_DWT">UNL_DWT</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_DWT/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_DWT API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_DWT/li_UNL_DWT.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_DWT_Scanner</h2>

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
<p class="short-description">Will scan a dreamweaver templated file for regions and other relevant info.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_DWT">http://pear.unl.edu/package/UNL_DWT</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---DWT---Scanner.php.php">/UNL/DWT/Scanner.php</a> (line <span class="field">26</span>)
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
					<a href="#var__regions" title="details" class="var-name">$_regions</a>
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
											<span class="method-result">UNL_DWT_Scanner</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$dwt</span>)
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_DWT/UNL_DWT_Region.php">UNL_DWT_Region</a></span>
										<a href="#getRegion" title="details" class="method-name">getRegion</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$region</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array(UNL_DWT_Region)</span>
										<a href="#getRegions" title="details" class="method-name">getRegions</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#scanRegions" title="details" class="method-name">scanRegions</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$dwt</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__get" title="details" class="method-name">__get</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$region</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__isset" title="details" class="method-name">__isset</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$region</span>)
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
			<a name="var__regions" id="var__regions"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$_regions</span>
						(line <span class="line-number">28</span>)
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
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">35</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The contents of the .dwt file you wish to scan.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_DWT_Scanner</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$dwt</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$dwt</span><span class="var-description">: Source of the .dwt file</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetRegion" id="getRegion"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getRegion</span> (line <span class="line-number">98</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the region object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_DWT/UNL_DWT_Region.php">UNL_DWT_Region</a></span>
		<span class="method-name">
			getRegion
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$region</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$region</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetRegions" id="getRegions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getRegions</span> (line <span class="line-number">111</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns array of all the regions found</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array(UNL_DWT_Region)</span>
		<span class="method-name">
			getRegions
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodscanRegions" id="scanRegions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">scanRegions</span> (line <span class="line-number">40</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			scanRegions
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$dwt</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$dwt</span>			</li>
				</ul>
		
			
	</div>
<a name="method__get" id="__get"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__get</span> (line <span class="line-number">121</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__get
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$region</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$region</span>			</li>
				</ul>
		
			
	</div>
<a name="method__isset" id="__isset"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">__isset</span> (line <span class="line-number">116</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__isset
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$region</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$region</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:36 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>