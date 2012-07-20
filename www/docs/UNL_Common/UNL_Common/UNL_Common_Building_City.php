<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common | Docs For Class UNL_Common_Building_City</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common">UNL_Common</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common/li_UNL_Common.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Common_Building_City</h2>

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
<p class="short-description">Class which can retrieve the buildings and codes for City Campus</p>
		<p class="notes">
			Located in <a class="field" href="_Common---Building---City.php.php">/Common/Building/City.php</a> (line <span class="field">16</span>)
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
					<a href="#var_codes" title="details" class="var-name">$codes</a>
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
					static 						<span class="method-result">void</span>
										<a href="#getTableDefinition" title="details" class="method-name">getTableDefinition</a>
										()
									</div>
																
												<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
										()
									</div>
																								<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#_checkDB" title="details" class="method-name">_checkDB</a>
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
			<a name="var_codes" id="var_codes"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$codes</span>
			 = <span class="var-default">array()</span>			(line <span class="line-number">18</span>)
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
<a name="methodgetTableDefinition" id="getTableDefinition"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method getTableDefinition</span> (line <span class="line-number">42</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getTableDefinition
		</span>
				()
			</div>
	
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">24</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Constructor connects to database and loads codes and names.</p>
	<ul class="tags">
				<li><span class="field">return:</span> False on error</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			__construct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="method_checkDB" id="_checkDB"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">_checkDB</span> (line <span class="line-number">34</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			_checkDB
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