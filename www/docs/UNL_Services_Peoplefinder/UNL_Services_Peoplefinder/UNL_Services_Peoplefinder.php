<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Services_Peoplefinder | Docs For Class UNL_Services_Peoplefinder</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Services_Peoplefinder">UNL_Services_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Services_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Services_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Services_Peoplefinder/li_UNL_Services_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Services_Peoplefinder</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This is the basic class for utilizing the UNL Peoplefinder service which can  give you various pieces of information about a given uid (uniue user id).</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/">http://pear.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_Peoplefinder.php.php">/Peoplefinder.php</a> (line <span class="field">26</span>)
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
											<span class="method-result">string|false</span>
										<a href="#getEmail" title="details" class="method-name">getEmail</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string|false</span>
										<a href="#getFullName" title="details" class="method-name">getFullName</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string|false</span>
										<a href="#getHCard" title="details" class="method-name">getHCard</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">string|false</span>
										<a href="#getVCard" title="details" class="method-name">getVCard</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
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

<a name="methodgetEmail" id="getEmail"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getEmail</span> (line <span class="line-number">58</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the email address for the given uid</p>
	
	<div class="method-signature">
		<span class="method-result">string|false</span>
		<span class="method-name">
			getEmail
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique id for the user to get info about.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetFullName" id="getFullName"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getFullName</span> (line <span class="line-number">36</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the name for a given uid</p>
	
	<div class="method-signature">
		<span class="method-result">string|false</span>
		<span class="method-name">
			getFullName
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique id for the user to get info about.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetHCard" id="getHCard"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getHCard</span> (line <span class="line-number">80</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets an hcard for the uid given.</p>
	
	<div class="method-signature">
		<span class="method-result">string|false</span>
		<span class="method-name">
			getHCard
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique id for the user to get info about.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetVCard" id="getVCard"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">getVCard</span> (line <span class="line-number">96</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Gets a vcard for the given uid.</p>
	
	<div class="method-signature">
		<span class="method-result">string|false</span>
		<span class="method-name">
			getVCard
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$uid</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$uid</span><span class="var-description">: Unique id for the user to get info about.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:39 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>