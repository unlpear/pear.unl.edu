<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | Docs For Class UNL_Templates</title>";
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
<h2 class="class-name">Class UNL_Templates</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-descendents">Descendents</a>
			|											<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
											<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
						
			</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Allows you to create UNL Template based HTML pages through an object  oriented interface.</p>
<div class="description"><p>Install on your PHP server with:  pear channel-discover pear.unl.edu  pear install unl/UNL_Templates</p><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-php">&lt;?php</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-inc">require_once&nbsp;</span><span class="src-str">'UNL/Templates.php'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>=&nbsp;<span class="src-id"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span><span class="src-sym">::</span><a href="../UNL_Templates/UNL_Templates.php#methodfactory">factory</a><span class="src-sym">(</span><span class="src-str">'Fixed'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$page</span><span class="src-sym">-&gt;</span><span class="src-id">titlegraphic&nbsp;&nbsp;&nbsp;&nbsp;</span>=&nbsp;<span class="src-str">'&lt;h1&gt;UNL&nbsp;Templates&lt;/h1&gt;'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$page</span><span class="src-sym">-&gt;</span><span class="src-id">maincontentarea&nbsp;</span>=&nbsp;<span class="src-str">'Hello&nbsp;world!'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$page</span><span class="src-sym">-&gt;</span><a href="../UNL_Templates/UNL_Templates.php#methodloadSharedcodeFiles">loadSharedcodeFiles</a><span class="src-sym">(</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;echo&nbsp;<span class="src-var">$page</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">author:</span> Ned Hummel &lt;<a href="mailto:nhummel2@unl.edu">nhummel2@unl.edu</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/">http://pear.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Templates.php.php">/UNL/Templates.php</a> (line <span class="field">47</span>)
		</p>
		
				
		<pre>UNL_DWT
   |
   --UNL_Templates</pre>
	
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
							
															<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
							
					</div>
		<div class="info-box-body">
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Document.php">UNL_Templates_Version2_Document</a></td>
					<td>
											Document template object.
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Fixed.php">UNL_Templates_Version2_Fixed</a></td>
					<td>
											Fixed width template object.
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Liquid.php">UNL_Templates_Version2_Liquid</a></td>
					<td>
											Liquid width template object
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Popup.php">UNL_Templates_Version2_Popup</a></td>
					<td>
											popup template object
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Secure.php">UNL_Templates_Version2_Secure</a></td>
					<td>
											Secure template object
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php">UNL_Templates_Version2_Unlaffiliate</a></td>
					<td>
											Allows you to create UNL Template based HTML pages through an object  oriented interface.
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Unlframework.php">UNL_Templates_Version2_Unlframework</a></td>
					<td>
											Unlframework template object
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php">UNL_Templates_Version2_Unlstandardtemplate</a></td>
					<td>
											Unlstandardtemplate object
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Absolute.php">UNL_Templates_Version3_Absolute</a></td>
					<td>
											Template Definition for absolute.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Document.php">UNL_Templates_Version3_Document</a></td>
					<td>
											Template Definition for document.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Fixed.php">UNL_Templates_Version3_Fixed</a></td>
					<td>
											Template Definition for fixed.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Liquid.php">UNL_Templates_Version3_Liquid</a></td>
					<td>
											Template Definition for liquid.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Popup.php">UNL_Templates_Version3_Popup</a></td>
					<td>
											Template Definition for popup.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Secure.php">UNL_Templates_Version3_Secure</a></td>
					<td>
											Template Definition for secure.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Shared_column_left.php">UNL_Templates_Version3_Shared_column_left</a></td>
					<td>
											Template definition for shared_column_left.dwt
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Templates/UNL_Templates_Version3_Shared_column_right.php">UNL_Templates_Version3_Shared_column_right</a></td>
					<td>
											Template Definition for shared_column_right.dwt
										</td>
				</tr>
							</table>
		</div>
	</div>

	<a name="sec-const-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Class Constant Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendants</a> |
						<span class="disabled">Constants</span> (<a href="#sec-consts">details</a>)
												<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<div class="const-summary">
								<div class="const-title">
					<img src="../media/images/Constant.png" alt=" " />
					<a href="#VERSION2" title="details" class="const-name">VERSION2</a> = 					<span class="var-type"> 2</span>

				</div>
								<div class="const-title">
					<img src="../media/images/Constant.png" alt=" " />
					<a href="#VERSION3" title="details" class="const-name">VERSION3</a> = 					<span class="var-type"> 3</span>

				</div>
							</div>
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
							
															<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
							
					</div>
		<div class="info-box-body">
			<div class="var-summary">
												<div class="var-title">
					static <span class="var-type"><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></span>
					<a href="#var_cache" title="details" class="var-name">$cache</a>
				</div>
																<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_options" title="details" class="var-name">$options</a>
				</div>
																<div class="var-title">
					static <span class="var-type"><a href="../UNL_Templates/UNL_Templates_Version.php">UNL_Templates_Version</a></span>
					<a href="#var_template_version" title="details" class="var-name">$template_version</a>
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
															<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
							
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																																				<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#debug" title="details" class="method-name">debug</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$message</span>, [<span class="var-type">int</span>&nbsp;<span class="var-name">$logtype</span> = <span class="var-default">0</span>], [<span class="var-type">int</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">1</span>])
									</div>
																<div class="method-definition">
					static 						<span class="method-result"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span>
										<a href="#factory" title="details" class="method-name">&amp;factory</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$coptions</span> = <span class="var-default">false</span>])
									</div>
																								<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getCachingService" title="details" class="method-name">getCachingService</a>
										()
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#loadDefaultConfig" title="details" class="method-name">loadDefaultConfig</a>
										()
									</div>
																																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#setCachingService" title="details" class="method-name">setCachingService</a>
											(<span class="var-type"><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></span>&nbsp;<span class="var-name">$cache</span>)
									</div>
																								
												<div class="method-definition">
											<span class="method-result">UNL_Templates</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addHeadLink" title="details" class="method-name">addHeadLink</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$href</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$relation</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$relType</span> = <span class="var-default">'rel'</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$attributes</span> = <span class="var-default">array()</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addScript" title="details" class="method-name">addScript</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/javascript'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addScriptDeclaration" title="details" class="method-name">addScriptDeclaration</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$content</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/javascript'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addStyleDeclaration" title="details" class="method-name">addStyleDeclaration</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$content</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/css'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#addStyleSheet" title="details" class="method-name">addStyleSheet</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$media</span> = <span class="var-default">'all'</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#cleanCache" title="details" class="method-name">cleanCache</a>
											([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$o</span>)
									</div>
																																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getCache" title="details" class="method-name">getCache</a>
										()
									</div>
																																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#loadSharedcodeFiles" title="details" class="method-name">loadSharedcodeFiles</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#makeIncludeReplacements" title="details" class="method-name">makeIncludeReplacements</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$p</span>)
									</div>
																								<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#toHtml" title="details" class="method-name">toHtml</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#__toString" title="details" class="method-name">__toString</a>
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
						
			
												<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
							
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var_cache" id="var_cache"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type"><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></span>
			<span class="var-name">$cache</span>
						(line <span class="line-number">57</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Cache object for output caching</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
<a name="var_options" id="var_options"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$options</span>
			 = <span class="var-default">array(<br />        'debug'                  =&gt; 0,<br />        'sharedcodepath'         =&gt; 'sharedcode',<br />        'templatedependentspath' =&gt; '',<br />        'cache'                  =&gt; array(),'version'=&gt;self::VERSION2)</span>			(line <span class="line-number">59</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_template_version" id="var_template_version"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type"><a href="../UNL_Templates/UNL_Templates_Version.php">UNL_Templates_Version</a></span>
			<span class="var-name">$template_version</span>
						(line <span class="line-number">72</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The version of the templates we're using.</p>
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
																			<a href="#sec-const-summary">Constants</a> (<a href="#sec-consts">details</a>)
							
										<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>
<a name="methoddebug" id="debug"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method debug</span> (line <span class="line-number">300</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Debug handler for messages.</p>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			debug
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$message</span>, <span class="var-type">int</span>&nbsp;<span class="var-name">$logtype</span>, [<span class="var-type">int</span>&nbsp;<span class="var-name">$level</span> = <span class="var-default">1</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$message</span><span class="var-description">: Message to send to debug output</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$logtype</span><span class="var-description">: Which log to send this to</span>			</li>
					<li>
				<span class="var-type">int</span>
				<span class="var-name">$level</span><span class="var-description">: The threshold to send this message or not.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfactory" id="factory"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method factory</span> (line <span class="line-number">114</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The factory returns a template object for any UNL Template style requested:</p>
<div class="description"><p>* Fixed   * Liquid   * Popup   * Document   * Secure   * Unlaffiliate</p><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-var">$page&nbsp;</span>=&nbsp;<span class="src-id"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span><span class="src-sym">::</span><a href="../UNL_Templates/UNL_Templates.php#methodfactory">factory</a><span class="src-sym">(</span><span class="src-str">'Fixed'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	
	<div class="method-signature">
	    static
		<span class="method-result"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span>
		<span class="method-name">
			&amp;factory
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$coptions</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: Type of template to get, Fixed, Liquid, Doc, Popup</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$coptions</span><span class="var-description">: Options for the constructor</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCachingService" id="getCachingService"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getCachingService</span> (line <span class="line-number">323</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getCachingService
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodloadDefaultConfig" id="loadDefaultConfig"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method loadDefaultConfig</span> (line <span class="line-number">88</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Initialize the configuration for the UNL_DWT class</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			loadDefaultConfig
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodsetCachingService" id="setCachingService"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method setCachingService</span> (line <span class="line-number">318</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			setCachingService
		</span>
					(<span class="var-type"><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></span>&nbsp;<span class="var-name">$cache</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"><a href="../UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a></span>
				<span class="var-name">$cache</span>			</li>
				</ul>
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">77</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Construct a UNL_Templates object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_Templates</span>
		<span class="method-name">
			__construct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodaddHeadLink" id="addHeadLink"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addHeadLink</span> (line <span class="line-number">184</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add a link within the head of the page.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addHeadLink
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$href</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$relation</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$relType</span> = <span class="var-default">'rel'</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$attributes</span> = <span class="var-default">array()</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$href</span><span class="var-description">: URI to the resource</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$relation</span><span class="var-description">: Relation of this link element (alternate)</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$relType</span><span class="var-description">: The type of relation (rel)</span>			</li>
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$attributes</span><span class="var-description">: Any additional attribute=&gt;value combinations</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddScript" id="addScript"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">addScript</span> (line <span class="line-number">203</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add a (java)script to the page.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addScript
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/javascript'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$url</span><span class="var-description">: URL to the script</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: Type of script text/javascript</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddScriptDeclaration" id="addScriptDeclaration"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addScriptDeclaration</span> (line <span class="line-number">216</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Adds a script declaration to the page.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addScriptDeclaration
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$content</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/javascript'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$content</span><span class="var-description">: The javascript you wish to add.</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: Type of script tag.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddStyleDeclaration" id="addStyleDeclaration"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">addStyleDeclaration</span> (line <span class="line-number">232</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add a style declaration to the head of the document.</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-var">$page</span><span class="src-sym">-&gt;</span><a href="../UNL_Templates/UNL_Templates.php#methodaddStyleDeclaration">addStyleDeclaration</a><span class="src-sym">(</span><span class="src-str">'.course&nbsp;{font-size:1.5em}'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p></div>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addStyleDeclaration
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$content</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$type</span> = <span class="var-default">'text/css'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$content</span><span class="var-description">: CSS content to add</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$type</span><span class="var-description">: type attribute for the style element</span>			</li>
				</ul>
		
			
	</div>
<a name="methodaddStyleSheet" id="addStyleSheet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">addStyleSheet</span> (line <span class="line-number">245</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add a link to a stylesheet.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			addStyleSheet
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$url</span>, [<span class="var-type">string</span>&nbsp;<span class="var-name">$media</span> = <span class="var-default">'all'</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$url</span><span class="var-description">: Address of the stylesheet, absolute or relative</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$media</span><span class="var-description">: Media target (screen/print/projector etc)</span>			</li>
				</ul>
		
			
	</div>
<a name="methodcleanCache" id="cleanCache"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">cleanCache</span> (line <span class="line-number">313</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Cleans the cache.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true if cache was successfully cleared.</li>
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			cleanCache
		</span>
					([<span class="var-type"></span>&nbsp;<span class="var-name">$object</span> = <span class="var-default">null</span>], <span class="var-type">mixed</span>&nbsp;<span class="var-name">$o</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$o</span><span class="var-description">: Pass a cached object to clean it's cache, or a string id.</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$object</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetCache" id="getCache"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getCache</span> (line <span class="line-number">126</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Attempts to connect to the template server and grabs the latest cache of the  template (.tpl) file. Set options for Cache_Lite in self::$options['cache']</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getCache
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodloadSharedcodeFiles" id="loadSharedcodeFiles"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">loadSharedcodeFiles</span> (line <span class="line-number">156</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Loads standard customized content (sharedcode) files from the filesystem.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			loadSharedcodeFiles
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodmakeIncludeReplacements" id="makeIncludeReplacements"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">makeIncludeReplacements</span> (line <span class="line-number">286</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Populates templatedependents files</p>
<div class="description"><p>Replaces the template dependent include statements with the corresponding  files from the /ucomm/templatedependents/ directory. To specify the location  of your templatedependents directory, use something like  $page-&gt;options['templatedependentspath'] = '/var/www/';  and set the path to the directory containing /ucomm/templatedependents/</p></div>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			makeIncludeReplacements
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$p</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$p</span><span class="var-description">: Page to make replacements in</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtoHtml" id="toHtml"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">toHtml</span> (line <span class="line-number">255</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns the page in HTML form.</p>
	<ul class="tags">
				<li><span class="field">return:</span> THe full HTML of the page.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			toHtml
		</span>
				()
			</div>
	
		
			
	</div>
<a name="method__toString" id="__toString"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__toString</span> (line <span class="line-number">267</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns this template as a string.</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			__toString
		</span>
				()
			</div>
	
		
			
	</div>
						
		</div>
	</div>

	<a name="sec-consts"></a>
	<div class="info-box">
		<div class="info-box-title">Class Constants</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendants</a> |
										<a href="#sec-var-summary">Constants</a> (<span class="disabled">details</span>)
						
			
												<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
														| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="constVERSION2" id="VERSION2"><!-- --></A>
<div class="evenrow">

	<div class="const-header">
		<img src="../media/images/Variable.png" />
		<span class="const-title">
			<span class="const-name">VERSION2</span>
			 = <span class="const-default"> 2</span>
			(line <span class="line-number">49</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
</div>
<a name="constVERSION3" id="VERSION3"><!-- --></A>
<div class="oddrow">

	<div class="const-header">
		<img src="../media/images/Variable.png" />
		<span class="const-title">
			<span class="const-name">VERSION3</span>
			 = <span class="const-default"> 3</span>
			(line <span class="line-number">50</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
</div>
						
		</div>
	</div>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:34 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>