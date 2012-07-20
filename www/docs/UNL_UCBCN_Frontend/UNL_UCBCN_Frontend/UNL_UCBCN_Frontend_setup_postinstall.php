<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Frontend | Docs For Class UNL_UCBCN_Frontend_setup_postinstall</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN_Frontend">UNL_UCBCN_Frontend</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN_Frontend/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN_Frontend API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN_Frontend/li_UNL_UCBCN_Frontend.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_UCBCN_Frontend_setup_postinstall</h2>

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
<p class="short-description">This is the post install setup script for the frontend.</p>
<div class="description"><p>It takes in responses to questions and handles updating the default  template as well as creating a sample index page.</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN---Frontend_setup.php.php">/UNL/UCBCN/Frontend_setup.php</a> (line <span class="field">29</span>)
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
					<a href="#var_createFiles" title="details" class="var-name">$createFiles</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_createIndex" title="details" class="var-name">$createIndex</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_dsn" title="details" class="var-name">$dsn</a>
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
											<span class="method-result">mixed</span>
										<a href="#createFiles" title="details" class="method-name">createFiles</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#dircpy" title="details" class="method-name">dircpy</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$dest</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$overwrite</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#file_str_replace" title="details" class="method-name">file_str_replace</a>
											(<span class="var-type">mixed</span>&nbsp;<span class="var-name">$search</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#init" title="details" class="method-name">init</a>
											(<span class="var-type">object</span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type">object</span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$lastversion</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#outputData" title="details" class="method-name">outputData</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$msg</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">prompts</span>
										<a href="#postProcessPrompts" title="details" class="method-name">postProcessPrompts</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$section</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#run" title="details" class="method-name">run</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$phase</span>)
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
			<a name="var_createFiles" id="var_createFiles"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$createFiles</span>
						(line <span class="line-number">31</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_createIndex" id="var_createIndex"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$createIndex</span>
						(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_dsn" id="var_dsn"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$dsn</span>
						(line <span class="line-number">33</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
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

<a name="methodcreateFiles" id="createFiles"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">createFiles</span> (line <span class="line-number">112</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function creates/upgrades the template files, as well as the sample index page.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			createFiles
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Associative array of answers from the user.</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddircpy" id="dircpy"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">dircpy</span> (line <span class="line-number">187</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function copies files from source to destination.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			dircpy
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$source</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$dest</span>, [<span class="var-type">bool</span>&nbsp;<span class="var-name">$overwrite</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$source</span><span class="var-description">: Directory within the filesystem.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$dest</span><span class="var-description">: Destination directory in the filesystem.</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$overwrite</span><span class="var-description">: Should this overwrite existing files?</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfile_str_replace" id="file_str_replace"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">file_str_replace</span> (line <span class="line-number">148</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Replaces text within files.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			file_str_replace
		</span>
					(<span class="var-type">mixed</span>&nbsp;<span class="var-name">$search</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$search</span><span class="var-description">: An array or string of text to search for.</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$replace</span><span class="var-description">: An array or string of text to replace the matched text with.</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$file</span><span class="var-description">: An array or string of filenames to search and replace text in.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodinit" id="init"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">init</span> (line <span class="line-number">44</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Initialize the post-install task.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			init
		</span>
					(<span class="var-type">object</span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type">object</span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$lastversion</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$config</span><span class="var-description">: PEAR_Config Pear configuration object.</span>			</li>
					<li>
				<span class="var-type">object</span>
				<span class="var-name">&$pkg</span><span class="var-description">: The object for the installed pear package.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$lastversion</span><span class="var-description">: The previously installed version (if any).</span>			</li>
				</ul>
		
			
	</div>
<a name="methodoutputData" id="outputData"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">outputData</span> (line <span class="line-number">224</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">takes in a string and sends it to the client.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			outputData
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$msg</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$msg</span><span class="var-description">: A string of text to send to the user.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpostProcessPrompts" id="postProcessPrompts"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">postProcessPrompts</span> (line <span class="line-number">63</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Optionally used to alter responses from the prompted questions.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">prompts</span>
		<span class="method-name">
			postProcessPrompts
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$section</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$prompts</span><span class="var-description">: Array of prompts.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$section</span><span class="var-description">: The section currently being executed.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">80</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Hub for the post-install task.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true | false</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			run
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$phase</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Associative array of answers from the user.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$phase</span><span class="var-description">: The phase of the installation.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>