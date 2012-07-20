<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs For Class UNL_DWT</title>";
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
<h2 class="class-name">Class UNL_DWT</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-descendents">Descendents</a>
			|											<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Base class which understands Dreamweaver Templates.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_DWT">http://pear.unl.edu/package/UNL_DWT</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---DWT.php.php">/UNL/DWT.php</a> (line <span class="field">46</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>

	<a name="sec-descendents"></a>
	<div class="info-box">
		<div class="info-box-title">Direct descendents</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Descendents</span>
			|												<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
								|															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_DWT/UNL_DWT_Generator.php">UNL_DWT_Generator</a></td>
					<td>
											The generator parses actual .dwt Dreamweaver Template files to create object relationship  files which have member variables for editable regions within the dreamweaver templates.
										</td>
				</tr>
							</table>
		</div>
	</div>


	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
												<div class="var-title">
					static <span class="var-type">array</span>
					<a href="#var_options" title="details" class="var-name">$options</a>
				</div>
																																				<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var___template" title="details" class="var-name">$__template</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																				<div class="method-definition">
					static 						<span class="method-result">none</span>
										<a href="#debug" title="details" class="method-name">debug</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$message</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$logtype</span> = <span class="var-default">0</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">1</span>])
									</div>
																								<div class="method-definition">
					static 						<span class="method-result">object a</span>
										<a href="#factory" title="details" class="method-name">&amp;factory</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$coptions</span> = <span class="var-default">false</span>])
									</div>
																																
												<div class="method-definition">
											<span class="method-result">UNL_DWT</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
										()
									</div>
																								<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#debugLevel" title="details" class="method-name">debugLevel</a>
											([<span class="var-type">int</span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">null</span>])
									</div>
																								<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#replaceRegions" title="details" class="method-name">replaceRegions</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$p</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$regions</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setOption" title="details" class="method-name">setOption</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$option</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$value</span>)
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
							<a href="#sec-descendents">Descendents</a> |
										<a href="#sec-var-summary">Vars</a> (<span class="disabled">details</span>)
						
			
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var_options" id="var_options"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">array</span>
			<span class="var-name">$options</span>
			 = <span class="var-default">array(<br />        'debug' =&gt; 0,<br />    )</span>			(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Run-time configuration options</p>
	<ul class="tags">
				<li><span class="field">see:</span> <a href="../UNL_DWT/UNL_DWT.php#methodsetOption">UNL_DWT::setOption()</a></li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var___template" id="var___template"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$__template</span>
						(line <span class="line-number">49</span>)
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
							<a href="#sec-descendents">Descendents</a> |
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>
<a name="methoddebug" id="debug"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method debug</span> (line <span class="line-number">189</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Debugger. - use this in your extended classes to output debugging  information.</p>
<div class="description"><p>Uses UNL_DWT::debugLevel(x) to turn it on</p></div>
	
	<div class="method-signature">
	    static
		<span class="method-result">none</span>
		<span class="method-name">
			debug
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$message</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$logtype</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">1</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$message</span><span class="var-description">: message to output</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$logtype</span><span class="var-description">: bold at start</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$level</span><span class="var-description">: output level</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfactory" id="factory"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method factory</span> (line <span class="line-number">137</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Create a new UNL_DWT object for the specified layout type</p>
	<ul class="tags">
				<li><span class="field">return:</span> new UNL_DWT.  A UNL_DWT_Error object on failure.</li>
				<li><span class="field">see:</span> <a href="../UNL_DWT/UNL_DWT.php#methodsetOption">UNL_DWT::setOption()</a></li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">object a</span>
		<span class="method-name">
			&amp;factory
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type">array</span>&nbsp;<span class="var-name">$coptions</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: the template type (eg &quot;fixed&quot;)</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$coptions</span><span class="var-description">: an associative array of option names and values</span>			</li>
				</ul>
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">64</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_DWT</span>
		<span class="method-name">
			__construct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methoddebugLevel" id="debugLevel"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">debugLevel</span> (line <span class="line-number">227</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">sets and returns debug level  eg. UNL_DWT::debugLevel(4);</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			debugLevel
		</span>
					([<span class="var-type">int</span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$v</span><span class="var-description">: level</span>			</li>
				</ul>
		
			
	</div>
<a name="methodreplaceRegions" id="replaceRegions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">replaceRegions</span> (line <span class="line-number">103</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Replaces region tags within a template file wth their contents.</p>
	<ul class="tags">
				<li><span class="field">return:</span> page with replaced regions</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			replaceRegions
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$p</span>, <span class="var-type">array</span>&nbsp;<span class="var-name">$regions</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$p</span><span class="var-description">: Page with DW Region tags.</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$regions</span><span class="var-description">: Associative array with content to replace.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetOption" id="setOption"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setOption</span> (line <span class="line-number">170</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Sets options.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setOption
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$option</span>, <span class="var-type">mixed</span>&nbsp;<span class="var-name">$value</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$option</span><span class="var-description">: Option to set</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$value</span><span class="var-description">: Value to set for this option</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtoHtml" id="toHtml"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">toHtml</span> (line <span class="line-number">75</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the given DWT with all regions replaced with their assigned  content.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
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
		Documentation generated on Wed, 12 Aug 2009 13:00:36 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>