<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs For Class UNL_DWT_Error</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_DWT">UNL_DWT</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_DWT/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_DWT API Documentation</h1><h2></h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_DWT/li_UNL_DWT.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_DWT_Error</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">UNL_DWT_Error implements a class for reporting template error</p>
<div class="description"><p>messages  Modified from Stig Bakken &lt;ssb@php.net&gt;'s DB_Error class for http://pear.php.net/package/DB</p></div>
		<p class="notes">
			Located in <a class="field" href="_DWT---DWT.php.php">/DWT/DWT.php</a> (line <span class="field">283</span>)
		</p>
		
				
		<pre>PEAR_Error
   |
   --UNL_DWT_Error</pre>
	
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
											<span class="method-result">UNL_DWT_Error</span>
										<a href="#UNL_DWT_Error" title="details" class="method-name">UNL_DWT_Error</a>
											([<span class="var-type">mixed</span>&nbsp;<span class="var-name">$code</span> = <span class="var-default">UNL_DWT_ERROR</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$mode</span> = <span class="var-default">PEAR_ERROR_RETURN</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">E_USER_NOTICE</span>], [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$debuginfo</span> = <span class="var-default">null</span>])
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

<a name="methodUNL_DWT_Error" id="UNL_DWT_Error"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor UNL_DWT_Error</span> (line <span class="line-number">298</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">DB_Error constructor</p>
	<ul class="tags">
				<li><span class="field">see:</span> PEAR_Error</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_DWT_Error</span>
		<span class="method-name">
			UNL_DWT_Error
		</span>
					([<span class="var-type">mixed</span>&nbsp;<span class="var-name">$code</span> = <span class="var-default">UNL_DWT_ERROR</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$mode</span> = <span class="var-default">PEAR_ERROR_RETURN</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">E_USER_NOTICE</span>], [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$debuginfo</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$code</span><span class="var-description">: UNL_DWT error code, or string with error message</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$mode</span><span class="var-description">: what &quot;error mode&quot; to operate in</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$level</span><span class="var-description">: what error level to use for $mode &amp;                            PEAR_ERROR_TRIGGER</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$debuginfo</span><span class="var-description">: additional debug info, such as the last query</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Fri, 01 Feb 2008 12:57:36 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>