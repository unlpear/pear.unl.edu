<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs For Class UNL_DWT_Generator</title>";
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
<h2 class="class-name">Class UNL_DWT_Generator</h2>

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
<p class="short-description">The generator parses actual .dwt Dreamweaver Template files to create object relationship  files which have member variables for editable regions within the dreamweaver templates.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_DWT">http://pear.unl.edu/package/UNL_DWT</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---DWT---Generator.php.php">/UNL/DWT/Generator.php</a> (line <span class="field">32</span>)
		</p>
		
				
		<pre><a href="../UNL_DWT/UNL_DWT.php">UNL_DWT</a>
   |
   --UNL_DWT_Generator</pre>
	
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
					<a href="#var_template" title="details" class="var-name">$template</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_templates" title="details" class="var-name">$templates</a>
				</div>
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
											<span class="method-result">void</span>
										<a href="#createTemplateList" title="details" class="method-name">createTemplateList</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#generateClasses" title="details" class="method-name">generateClasses</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#generateClassName" title="details" class="method-name">generateClassName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$filename</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#generateTemplates" title="details" class="method-name">generateTemplates</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#sanitizeTemplateName" title="details" class="method-name">sanitizeTemplateName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$filename</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#scanRegions" title="details" class="method-name">scanRegions</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$dwt</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#start" title="details" class="method-name">start</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#_generateGetters" title="details" class="method-name">_generateGetters</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$input</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#_generateSetters" title="details" class="method-name">_generateSetters</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$input</span>)
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
			<a name="var_template" id="var_template"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$template</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Current template being output</p>
	
	
		
		

</div>
<a name="var_templates" id="var_templates"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$templates</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Array of template names.</p>
	
	
		
		

</div>
<a name="var__regions" id="var__regions"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$_regions</span>
						(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Assoc array of template region names.</p>
<div class="description"><p>$_regions[$template] = array();</p></div>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_DWT/UNL_DWT.php">UNL_DWT</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_DWT/UNL_DWT.php#var$options">UNL_DWT::$options</a></span><br />
							</span>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_DWT/UNL_DWT.php#var$__template">UNL_DWT::$__template</a></span><br />
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

<a name="methodcreateTemplateList" id="createTemplateList"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">createTemplateList</span> (line <span class="line-number">121</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Create a list of dwts</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			createTemplateList
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgenerateClasses" id="generateClasses"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">generateClasses</span> (line <span class="line-number">152</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generate the classes for templates in $this-&gt;templates</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			generateClasses
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgenerateClassName" id="generateClassName"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">generateClassName</span> (line <span class="line-number">189</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generates the class name from a filename.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Sanitized filename prefixed with the class_prefix                 defined in the ini.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			generateClassName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$filename</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$filename</span><span class="var-description">: The filename of the template.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgenerateTemplates" id="generateTemplates"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">generateTemplates</span> (line <span class="line-number">86</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generates .tpl files from .dwt</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			generateTemplates
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodsanitizeTemplateName" id="sanitizeTemplateName"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">sanitizeTemplateName</span> (line <span class="line-number">204</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Cleans the template filename.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Sanitized template name</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			sanitizeTemplateName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$filename</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$filename</span><span class="var-description">: Filename of the template</span>			</li>
				</ul>
		
			
	</div>
<a name="methodscanRegions" id="scanRegions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">scanRegions</span> (line <span class="line-number">218</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Scans the .dwt for regions - all found are loaded into assoc array  $this-&gt;_regions[$template].</p>
	<ul class="tags">
				<li><span class="field">return:</span> derived template file.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			scanRegions
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$dwt</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$dwt</span><span class="var-description">: Dreamweaver template file to scan.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodstart" id="start"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">start</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">begins generation of template files</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			start
		</span>
				()
			</div>
	
		
			
	</div>
<a name="method_generateGetters" id="_generateGetters"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">_generateGetters</span> (line <span class="line-number">377</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generate getter methods for class definition</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			_generateGetters
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$input</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$input</span><span class="var-description">: Existing class contents</span>			</li>
				</ul>
		
			
	</div>
<a name="method_generateSetters" id="_generateSetters"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">_generateSetters</span> (line <span class="line-number">430</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Generate setter methods for class definition</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			_generateSetters
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$input</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$input</span><span class="var-description">: Existing class contents</span>			</li>
				</ul>
		
			
	</div>
							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname"><a href="../UNL_DWT/UNL_DWT.php">UNL_DWT</a></span></p>
					<blockquote>
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#method__construct">UNL_DWT::__construct()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methoddebug">UNL_DWT::debug()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methoddebugLevel">UNL_DWT::debugLevel()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methodfactory">UNL_DWT::factory()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methodreplaceRegions">UNL_DWT::replaceRegions()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methodsetOption">UNL_DWT::setOption()</a></span><br />
													<span class="method-name"><a href="../UNL_DWT/UNL_DWT.php#methodtoHtml">UNL_DWT::toHtml()</a></span><br />
											</blockquote>
										
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