<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs For Class UNL_Peoplefinder_Renderer_Serialized</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Peoplefinder_Renderer_Serialized</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Peoplefinder serialized renderer</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://peoplefinder.unl.edu/">http://peoplefinder.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Peoplefinder---Renderer---Serialized.php.php">/UNL/Peoplefinder/Renderer/Serialized.php</a> (line <span class="field">14</span>)
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
											<span class="method-result">UNL_Peoplefinder_Renderer_Serialized</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderRecord" title="details" class="method-name">renderRecord</a>
											(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#renderSearchResults" title="details" class="method-name">renderSearchResults</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$records</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$start</span> = <span class="var-default">0</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$num_rows</span> = <span class="var-default">UNL_PF_DISPLAY_LIMIT</span>])
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

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">16</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">UNL_Peoplefinder_Renderer_Serialized</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderRecord" id="renderRecord"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">renderRecord</span> (line <span class="line-number">26</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Renders a peoplefinder record object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderRecord
		</span>
					(<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>&nbsp;<span class="var-name">$r</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a></span>
				<span class="var-name">$r</span><span class="var-description">: record to render</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrenderSearchResults" id="renderSearchResults"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">renderSearchResults</span> (line <span class="line-number">31</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			renderSearchResults
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$records</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$start</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$num_rows</span> = <span class="var-default">UNL_PF_DISPLAY_LIMIT</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$records</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$start</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$num_rows</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:48 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>