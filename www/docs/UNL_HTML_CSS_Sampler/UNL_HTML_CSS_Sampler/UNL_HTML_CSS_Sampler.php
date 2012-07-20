<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_HTML_CSS_Sampler | Docs For Class UNL_HTML_CSS_Sampler</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_HTML_CSS_Sampler">UNL_HTML_CSS_Sampler</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_HTML_CSS_Sampler/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_HTML_CSS_Sampler API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_HTML_CSS_Sampler/li_UNL_HTML_CSS_Sampler.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_HTML_CSS_Sampler</h2>

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
<p class="short-description">Main class for the CSS sampler class.</p>
		<p class="notes">
			Located in <a class="field" href="_UNL---HTML---CSS---Sampler.php.php">/UNL/HTML/CSS/Sampler.php</a> (line <span class="field">22</span>)
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
					<span class="var-type">object HTML_CSS</span>
					<a href="#var_css" title="details" class="var-name">$css</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_css_array" title="details" class="var-name">$css_array</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_css_options" title="details" class="var-name">$css_options</a>
				</div>
																<div class="var-title">
					<span class="var-type">unknown_type</span>
					<a href="#var_custom_samples" title="details" class="var-name">$custom_samples</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_omit_selectors" title="details" class="var-name">$omit_selectors</a>
				</div>
																<div class="var-title">
					<span class="var-type">string</span>
					<a href="#var_sampletext" title="details" class="var-name">$sampletext</a>
				</div>
																<div class="var-title">
					<span class="var-type">bool</span>
					<a href="#var_sort" title="details" class="var-name">$sort</a>
				</div>
																<div class="var-title">
					<span class="var-type">object HTML_Table</span>
					<a href="#var_table" title="details" class="var-name">$table</a>
				</div>
																<div class="var-title">
					<span class="var-type">array</span>
					<a href="#var_table_options" title="details" class="var-name">$table_options</a>
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
											<span class="method-result">UNL_HTML_CSS_Sampler</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$css_options</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$table_options</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#buildSampleTable" title="details" class="method-name">buildSampleTable</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#buildSampleTableRow" title="details" class="method-name">buildSampleTableRow</a>
											(<span class="var-type">unknown_type</span>&nbsp;<span class="var-name">$selector</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#cleanSelectors" title="details" class="method-name">cleanSelectors</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#generateSample" title="details" class="method-name">generateSample</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$selector</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#getSampleText" title="details" class="method-name">getSampleText</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$selector</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#parseCSS" title="details" class="method-name">parseCSS</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#run" title="details" class="method-name">run</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">unknown</span>
										<a href="#Sampler" title="details" class="method-name">Sampler</a>
											([<span class="var-type">array</span>&nbsp;<span class="var-name">$css_options</span> = <span class="var-default">array('filename'=&gt;'')</span>], [<span class="var-type">array</span>&nbsp;<span class="var-name">$table_options</span> = <span class="var-default">array('cellspacing=&quot;0&quot;')</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">selector</span>
										<a href="#selectorToClass" title="details" class="method-name">selectorToClass</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$selector</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#sortSelectors" title="details" class="method-name">sortSelectors</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#toHtml" title="details" class="method-name">toHtml</a>
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
			<a name="var_css" id="var_css"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object HTML_CSS</span>
			<span class="var-name">$css</span>
						(line <span class="line-number">29</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">HTML_CSS object</p>
	
	
		
		

</div>
<a name="var_css_array" id="var_css_array"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$css_array</span>
						(line <span class="line-number">43</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">HTML_CSS::toArray()</p>
	<ul class="tags">
				<li><span class="field">var:</span> Associative array of the parsed css.</li>
			</ul>
	
	
		
		

</div>
<a name="var_css_options" id="var_css_options"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$css_options</span>
						(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Options passed to the constructor for HTML_CSS</p>
	
	
		
		

</div>
<a name="var_custom_samples" id="var_custom_samples"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">unknown_type</span>
			<span class="var-name">$custom_samples</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">85</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">An array of custom sample text for specific selectors.</p>
	
	
		
		

</div>
<a name="var_omit_selectors" id="var_omit_selectors"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$omit_selectors</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">64</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Selectors you do not wish to output samples for.</p>
	
	
		
		

</div>
<a name="var_sampletext" id="var_sampletext"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">string</span>
			<span class="var-name">$sampletext</span>
			 = <span class="var-default"> 'The quick brown fox jumped over the lazy dog\'s back.'</span>			(line <span class="line-number">78</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Text used as the sample for each selector.</p>
	
	
		
		

</div>
<a name="var_sort" id="var_sort"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">bool</span>
			<span class="var-name">$sort</span>
			 = <span class="var-default"> true</span>			(line <span class="line-number">71</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Should the selectors be sorted?</p>
	
	
		
		

</div>
<a name="var_table" id="var_table"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">object HTML_Table</span>
			<span class="var-name">$table</span>
						(line <span class="line-number">36</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">HTML_Table object of output</p>
	
	
		
		

</div>
<a name="var_table_options" id="var_table_options"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">array</span>
			<span class="var-name">$table_options</span>
						(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Options passed to the constructor for HTML_Table</p>
	
	
		
		

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
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">93</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_HTML_CSS_Sampler</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$css_options</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$table_options</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$css_options</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$table_options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodbuildSampleTable" id="buildSampleTable"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">buildSampleTable</span> (line <span class="line-number">159</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Takes selectors parsed from HTML_CSS and builds an HTML table with sample  output for each selector.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			buildSampleTable
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodbuildSampleTableRow" id="buildSampleTableRow"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">buildSampleTableRow</span> (line <span class="line-number">179</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Builds and adds a HTML_Table row containing the sample for this selector.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			buildSampleTableRow
		</span>
					(<span class="var-type">unknown_type</span>&nbsp;<span class="var-name">$selector</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">unknown_type</span>
				<span class="var-name">$selector</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcleanSelectors" id="cleanSelectors"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">cleanSelectors</span> (line <span class="line-number">144</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">cleans the selectors before output.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			cleanSelectors
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgenerateSample" id="generateSample"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">generateSample</span> (line <span class="line-number">196</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This is the default sample generator function.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			generateSample
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$selector</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$selector</span><span class="var-description">: The selector to generate a sample for.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetSampleText" id="getSampleText"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getSampleText</span> (line <span class="line-number">221</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			getSampleText
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$selector</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$selector</span>			</li>
				</ul>
		
			
	</div>
<a name="methodparseCSS" id="parseCSS"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">parseCSS</span> (line <span class="line-number">125</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Initializes the HTML_CSS object which parses the css.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			parseCSS
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">111</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			run
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodSampler" id="Sampler"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Sampler</span> (line <span class="line-number">106</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">PHP 4-type constructor.</p>
	
	<div class="method-signature">
		<span class="method-result">unknown</span>
		<span class="method-name">
			Sampler
		</span>
					([<span class="var-type">array</span>&nbsp;<span class="var-name">$css_options</span> = <span class="var-default">array('filename'=&gt;'')</span>], [<span class="var-type">array</span>&nbsp;<span class="var-name">$table_options</span> = <span class="var-default">array('cellspacing=&quot;0&quot;')</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$css_options</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$table_options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodselectorToClass" id="selectorToClass"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">selectorToClass</span> (line <span class="line-number">235</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Converts a HTML_CSS parsed selector into the class if applicable.</p>
	<ul class="tags">
				<li><span class="field">return:</span> converted to a css class.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">selector</span>
		<span class="method-name">
			selectorToClass
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$selector</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$selector</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsortSelectors" id="sortSelectors"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">sortSelectors</span> (line <span class="line-number">135</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Sorts the selectors used for output.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			sortSelectors
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtoHtml" id="toHtml"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">toHtml</span> (line <span class="line-number">250</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the html table of generated samples.</p>
	<ul class="tags">
				<li><span class="field">return:</span> HTML table</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			toHtml
		</span>
				()
			</div>
	
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>