<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_TidyTemplate | Docs For Class UNL_TidyTemplate</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_TidyTemplate">UNL_TidyTemplate</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_TidyTemplate/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_TidyTemplate API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_TidyTemplate/li_UNL_TidyTemplate.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_TidyTemplate</h2>

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
<p class="short-description">Class which provides basic functionality for Tidy'ing a template.</p>
		<p class="notes">
			Located in <a class="field" href="_TidyTemplate.php.php">/TidyTemplate.php</a> (line <span class="field">28</span>)
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
					<a href="#var_files" title="details" class="var-name">$files</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_fixed" title="details" class="var-name">$fixed</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_unfixable" title="details" class="var-name">$unfixable</a>
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
											<span class="method-result">bool</span>
										<a href="#fileIsTemplate" title="details" class="method-name">fileIsTemplate</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$uri</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uri</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#getEditableRegions" title="details" class="method-name">getEditableRegions</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getTemplateName" title="details" class="method-name">getTemplateName</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#isTemplate" title="details" class="method-name">isTemplate</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#isValidTemplateExtension" title="details" class="method-name">isValidTemplateExtension</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setTemplateRegions" title="details" class="method-name">setTemplateRegions</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$template</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$regions</span>, <span class="var-type">UNL_Template</span>&nbsp;<span class="var-name">$template</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#tidyFile" title="details" class="method-name">tidyFile</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#tidyFragment" title="details" class="method-name">tidyFragment</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$string</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array('indent'        =&gt; true,
													'output-xhtml'  =&gt; true,
													'wrap'          =&gt; false,
													'wrap-attributes' =&gt; false)</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#tidyLocalFiles" title="details" class="method-name">tidyLocalFiles</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$afiles</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#tidyTemplateHTML" title="details" class="method-name">tidyTemplateHTML</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#writeCleanTemplate" title="details" class="method-name">writeCleanTemplate</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$template</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>, <span class="var-type">UNL_Template</span>&nbsp;<span class="var-name">$template</span>)
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
			<a name="var_files" id="var_files"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$files</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">after checking the files, this will contain an associative array  of files and their validation status valid=true|false</p>
	
	
		
		

</div>
<a name="var_fixed" id="var_fixed"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$fixed</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Array of pages fixed by TidyTemplate.</p>
	
	
		
		

</div>
<a name="var_unfixable" id="var_unfixable"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$unfixable</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Could not fix these files, but did what we could.</p>
	
	
		
		

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

<a name="methodfileIsTemplate" id="fileIsTemplate"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">fileIsTemplate</span> (line <span class="line-number">84</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks if the file is using the templates.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true|false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			fileIsTemplate
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$uri</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$uri</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uri</span><span class="var-description">: URI or local filename of the page.</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$uri</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetEditableRegions" id="getEditableRegions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getEditableRegions</span> (line <span class="line-number">220</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Scans a snippet of HTML and returns an array of UNL_DWT_Region</p>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			getEditableRegions
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$html</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$html</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetTemplateName" id="getTemplateName"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getTemplateName</span> (line <span class="line-number">235</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the name of the template file used.</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getTemplateName
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$html</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$html</span>			</li>
				</ul>
		
			
	</div>
<a name="methodisTemplate" id="isTemplate"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">isTemplate</span> (line <span class="line-number">95</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Determines if the HTML page is using the UNL Templates.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true|false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			isTemplate
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$html</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$html</span>			</li>
				</ul>
		
			
	</div>
<a name="methodisValidTemplateExtension" id="isValidTemplateExtension"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">isValidTemplateExtension</span> (line <span class="line-number">110</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks if a file has the correct extension.</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			isValidTemplateExtension
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$file</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$file</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetTemplateRegions" id="setTemplateRegions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setTemplateRegions</span> (line <span class="line-number">197</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Takes an array of UNL_DWT_Region and populates a UNL_Template  with the region values.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setTemplateRegions
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$template</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$regions</span>, <span class="var-type">UNL_Template</span>&nbsp;<span class="var-name">$template</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">UNL_Template</span>
				<span class="var-name">$template</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$regions</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$template</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtidyFile" id="tidyFile"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">tidyFile</span> (line <span class="line-number">133</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Will tidy up a file. First checks if it is a Template file, then  calls tidyTemplateHTML if it is a Tidy File.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			tidyFile
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$file</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtidyFragment" id="tidyFragment"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">tidyFragment</span> (line <span class="line-number">262</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Will run tidy on a snippet of html.</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			tidyFragment
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$string</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">array('indent'        =&gt; true,
													'output-xhtml'  =&gt; true,
													'wrap'          =&gt; false,
													'wrap-attributes' =&gt; false)</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$string</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtidyLocalFiles" id="tidyLocalFiles"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">tidyLocalFiles</span> (line <span class="line-number">56</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This will tidy up all the template files given.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			tidyLocalFiles
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$afiles</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$afiles</span><span class="var-description">: array of filenames.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtidyTemplateHTML" id="tidyTemplateHTML"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">tidyTemplateHTML</span> (line <span class="line-number">149</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Runs tidy on the template html.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			tidyTemplateHTML
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$html</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$html</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$html</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$file</span><span class="var-description">: filename</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$html</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$file</span>			</li>
				</ul>
		
			
	</div>
<a name="methodwriteCleanTemplate" id="writeCleanTemplate"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">writeCleanTemplate</span> (line <span class="line-number">183</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Writes out a template file to the given filename, after  first creating a backup copy, named $file.bak</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			writeCleanTemplate
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$file</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$template</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>, <span class="var-type">UNL_Template</span>&nbsp;<span class="var-name">$template</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$file</span>			</li>
					<li>
				<span class="var-type">UNL_Template</span>
				<span class="var-name">$template</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$file</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$template</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:49 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>