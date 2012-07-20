<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | Docs For Class UNL_Templates_Document</title>";
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
<h2 class="class-name">Class UNL_Templates_Document</h2>

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
<p class="short-description">Document template object.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Ned Hummel &lt;<a href="mailto:nhummel2@unl.edu">nhummel2@unl.edu</a>&gt;</li>
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_Templates---Document.php.php">/Templates/Document.php</a> (line <span class="field">14</span>)
		</p>
		
				
		<pre>UNL_DWT
   |
   --<a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a>
      |
      --UNL_Templates_Document</pre>
	
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
					<a href="#var_breadcrumbs" title="details" class="var-name">$breadcrumbs</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_collegenavigationlist" title="details" class="var-name">$collegenavigationlist</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_doctitle" title="details" class="var-name">$doctitle</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_footercontent" title="details" class="var-name">$footercontent</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_head" title="details" class="var-name">$head</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_maincontentarea" title="details" class="var-name">$maincontentarea</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_optionalfooter" title="details" class="var-name">$optionalfooter</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_titlegraphic" title="details" class="var-name">$titlegraphic</a>
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
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
												
												<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#staticGet" title="details" class="method-name">staticGet</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
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
			<a name="var_breadcrumbs" id="var_breadcrumbs"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$breadcrumbs</span>
			 = <span class="var-default"> &quot;&quot;</span>			(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_collegenavigationlist" id="var_collegenavigationlist"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$collegenavigationlist</span>
			 = <span class="var-default"> &quot;&quot;</span>			(line <span class="line-number">23</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_doctitle" id="var_doctitle"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$doctitle</span>
			 = <span class="var-default"> &quot;&lt;title&gt;UNL | Document Template&lt;/title&gt;&quot;</span>			(line <span class="line-number">20</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_footercontent" id="var_footercontent"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$footercontent</span>
			 = <span class="var-default"> &quot;&lt;!--#include virtual=\&quot;../sharedcode/footer.html\&quot; --&gt;&quot;</span>			(line <span class="line-number">27</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_head" id="var_head"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$head</span>
			 = <span class="var-default"> &quot;&lt;script type=\&quot;text/javascript\&quot;&gt; var navl2Links = 0; //Default navline2 links to display (zero based counting) &lt;/script&gt;&quot;</span>			(line <span class="line-number">21</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_maincontentarea" id="var_maincontentarea"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$maincontentarea</span>
			 = <span class="var-default"> &quot;&lt;p style=\&quot;margin:20px; border:3px solid #CC0000;padding:10px; text-align:center\&quot;&gt; &lt;strong&gt;Delete this box and place your content here.&lt;/strong&gt;&lt;br /&gt; Remember to validate your pages before publishing! Sample layouts are available through the &lt;a href=\&quot;http://www.unl.edu/webdevnet/\&quot;&gt;Web Developer Network&lt;/a&gt;. &lt;br /&gt; &lt;a href=\&quot;http://validator.unl.edu/check/referer\&quot;&gt;Click here to check Validation&lt;/a&gt; &lt;/p&gt;&quot;</span>			(line <span class="line-number">25</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_optionalfooter" id="var_optionalfooter"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$optionalfooter</span>
			 = <span class="var-default"> &quot;&quot;</span>			(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_titlegraphic" id="var_titlegraphic"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$titlegraphic</span>
			 = <span class="var-default"> &quot;&lt;h1&gt;Department&lt;/h1&gt; &lt;h2&gt;Taglines - We Do The Heavy Lifting&lt;/h2&gt;&quot;</span>			(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var___template" id="var___template"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$__template</span>
			 = <span class="var-default"> 'Document.tpl'</span>			(line <span class="line-number">19</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
							<h4>Inherited Variables</h4>
				<a name='inherited_vars'><!-- --></a>
									<p>Inherited from <span class="classname"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span></p>
					<blockquote>
													<span class="var-title">
								<span class="var-name"><a href="../UNL_Templates/UNL_Templates.php#var$options">UNL_Templates::$options</a></span><br />
							</span>
											</blockquote> 
										
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

<a name="methodstaticGet" id="staticGet"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">staticGet</span> (line <span class="line-number">30</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			staticGet
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$k</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$v</span> = <span class="var-default">NULL</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$k</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$v</span>			</li>
				</ul>
		
			
	</div>
							<h4>Inherited Methods</h4>
				<a name='inherited_methods'><!-- --></a>	
									<!-- =========== Summary =========== -->
					<p>Inherited From <span class="classname"><a href="../UNL_Templates/UNL_Templates.php">UNL_Templates</a></span></p>
					<blockquote>
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#method__construct">UNL_Templates::__construct()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodaddHeadLink">UNL_Templates::addHeadLink()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodaddScript">UNL_Templates::addScript()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodaddScriptDeclaration">UNL_Templates::addScriptDeclaration()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodaddStyleDeclaration">UNL_Templates::addStyleDeclaration()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodaddStyleSheet">UNL_Templates::addStyleSheet()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methoddebug">UNL_Templates::debug()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodfactory">UNL_Templates::factory()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodgetCache">UNL_Templates::getCache()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodloadDefaultConfig">UNL_Templates::loadDefaultConfig()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodloadSharedcodeFiles">UNL_Templates::loadSharedcodeFiles()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodmakeIncludeReplacements">UNL_Templates::makeIncludeReplacements()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#methodtoHtml">UNL_Templates::toHtml()</a></span><br />
													<span class="method-name"><a href="../UNL_Templates/UNL_Templates.php#method__toString">UNL_Templates::__toString()</a></span><br />
											</blockquote>
										
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Thu, 19 Feb 2009 13:35:16 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>