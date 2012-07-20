<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_Error</title>";
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
<h2 class="class-name">Class UNL_UCBCN_Error</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Extend PEAR_Error for error handling.</p>
		<p class="notes">
			Located in <a class="field" href="_UCBCN---Error.php.php">/UCBCN/Error.php</a> (line <span class="field">28</span>)
		</p>
		
				
		<pre>PEAR_Error
   |
   --UNL_UCBCN_Error</pre>
	
			</div>
</div>




	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</span></div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
												<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
												
												<div class="method-definition">
											<span class="method-result">UNL_UCBCN_Error</span>
										<a href="#UNL_UCBCN_Error" title="details" class="method-name">UNL_UCBCN_Error</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$message</span> = <span class="var-default">''</span>], [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$code</span> = <span class="var-default">NULL</span>], [<span class="var-type">integer</span>&nbsp;<span class="var-name">$mode</span> = <span class="var-default">PEAR_ERROR_RETURN</span>], [<span class="var-type">integer</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">E_USER_NOTICE</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$debuginfo</span>)
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
			<A NAME='method_detail'></A>

<a name="methodUNL_UCBCN_Error" id="UNL_UCBCN_Error"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor UNL_UCBCN_Error</span> (line <span class="line-number">42</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_UCBCN_Error constructor.</p>
	<ul class="tags">
				<li><span class="field">see:</span> PEAR_Error</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_UCBCN_Error</span>
		<span class="method-name">
			UNL_UCBCN_Error
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$message</span> = <span class="var-default">''</span>], [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$code</span> = <span class="var-default">NULL</span>], [<span class="var-type">integer</span>&nbsp;<span class="var-name">$mode</span> = <span class="var-default">PEAR_ERROR_RETURN</span>], [<span class="var-type">integer</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">E_USER_NOTICE</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$debuginfo</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$code</span><span class="var-description">: Error code, or string with error message.</span>			</li>
					<li>
				<span class="var-type">integer</span>
				<span class="var-name">$mode</span><span class="var-description">: what &quot;error mode&quot; to operate in</span>			</li>
					<li>
				<span class="var-type">integer</span>
				<span class="var-name">$level</span><span class="var-description">: what error level to use for $mode &amp; PEAR_ERROR_TRIGGER</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$debuginfo</span><span class="var-description">: additional debug info, such as the last query</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$message</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:10:53 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>