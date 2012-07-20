<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_InputFilterInterface</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2></h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN/li_UNL_UCBCN.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Interface UNL_UCBCN_InputFilterInterface</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This interface defines an object which can  be used as a callback to filter  input from the end user.</p>
		<p class="notes">
			Located in <a class="field" href="_UCBCN---InputFilterInterface.php.php">/UCBCN/InputFilterInterface.php</a> (line <span class="field">13</span>)
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
										<a href="#filterObject" title="details" class="method-name">filterObject</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$el</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$els</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#filterString" title="details" class="method-name">filterString</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$str</span>)
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

<a name="methodfilterObject" id="filterObject"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">filterObject</span> (line <span class="line-number">15</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			filterObject
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$el</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$els</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$el</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$els</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfilterString" id="filterString"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">filterString</span> (line <span class="line-number">17</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			filterString
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$str</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$str</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 17 Sep 2007 10:34:31 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.0</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>