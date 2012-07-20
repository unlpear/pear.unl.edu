<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | Docs For Class UNL_Templates_Version</title>";
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
<h2 class="class-name">Interface UNL_Templates_Version</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Interface for a version of the template files.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">author:</span> Ned Hummel &lt;<a href="mailto:nhummel2@unl.edu">nhummel2@unl.edu</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/">http://pear.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Templates---Version.php.php">/UNL/Templates/Version.php</a> (line <span class="field">15</span>)
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
											<span class="method-result">void</span>
										<a href="#getConfig" title="details" class="method-name">getConfig</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getTemplate" title="details" class="method-name">getTemplate</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$template</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#makeIncludeReplacements" title="details" class="method-name">makeIncludeReplacements</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$html</span>)
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

<a name="methodgetConfig" id="getConfig"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getConfig</span> (line <span class="line-number">17</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getConfig
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetTemplate" id="getTemplate"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getTemplate</span> (line <span class="line-number">18</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getTemplate
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$template</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$template</span>			</li>
				</ul>
		
			
	</div>
<a name="methodmakeIncludeReplacements" id="makeIncludeReplacements"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">makeIncludeReplacements</span> (line <span class="line-number">19</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			makeIncludeReplacements
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$html</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$html</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:35 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>