<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | Docs For Class UNL_Templates_CachingService_CacheLite</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Templates">UNL_Templates</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Templates/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Templates API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Templates/li_UNL_Templates.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Templates_CachingService_CacheLite</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
													<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
                <p class="implements">
            Implements interfaces:
        </p>
        <ul>
            <li><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></li>        </ul>
        		<!-- ========== Info from phpDoc block ========= -->
		<p class="notes">
			Located in <a class="field" href="_UNL---Templates---CachingService---CacheLite.php.php">/UNL/Templates/CachingService/CacheLite.php</a> (line <span class="field">16</span>)
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
					<a href="#var_cache" title="details" class="var-name">$cache</a>
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
											<span class="method-result">UNL_Templates_CachingService_CacheLite</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#clean" title="details" class="method-name">clean</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#get" title="details" class="method-name">get</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$key</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#save" title="details" class="method-name">save</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$data</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$key</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__call" title="details" class="method-name">__call</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$method</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$params</span>)
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
			<a name="var_cache" id="var_cache"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$cache</span>
						(line <span class="line-number">18</span>)
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
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">20</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">UNL_Templates_CachingService_CacheLite</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodclean" id="clean"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">clean</span> (line <span class="line-number">37</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			clean
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$object</span>			</li>
				</ul>
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt><a href="../UNL_Templates/UNL_Templates_CachingService.php#methodclean">UNL_Templates_CachingService::clean()</a></dt>
					</dl>
			
	</div>
<a name="methodget" id="get"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">get</span> (line <span class="line-number">27</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			get
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$key</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$key</span>			</li>
				</ul>
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt><a href="../UNL_Templates/UNL_Templates_CachingService.php#methodget">UNL_Templates_CachingService::get()</a></dt>
					</dl>
			
	</div>
<a name="methodsave" id="save"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">save</span> (line <span class="line-number">32</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			save
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$data</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$key</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$data</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$key</span>			</li>
				</ul>
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt><a href="../UNL_Templates/UNL_Templates_CachingService.php#methodsave">UNL_Templates_CachingService::save()</a></dt>
					</dl>
			
	</div>
<a name="method__call" id="__call"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__call</span> (line <span class="line-number">59</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__call
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$method</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$params</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$method</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$params</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:34 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>