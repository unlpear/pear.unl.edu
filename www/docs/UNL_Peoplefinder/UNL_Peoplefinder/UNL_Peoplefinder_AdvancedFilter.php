<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs For Class UNL_Peoplefinder_AdvancedFilter</title>";
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
<h2 class="class-name">Class UNL_Peoplefinder_AdvancedFilter</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Builds an advanced filter for searching for people records.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://peoplefinder.unl.edu/">http://peoplefinder.unl.edu/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Peoplefinder---AdvancedFilter.php.php">/UNL/Peoplefinder/AdvancedFilter.php</a> (line <span class="field">14</span>)
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
											<span class="method-result">UNL_Peoplefinder_AdvancedFilter</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											([<span class="var-type">string</span>&nbsp;<span class="var-name">$sn</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$cn</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$eppa</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$operator</span> = <span class="var-default">'&amp;'</span>], [<span class="var-type">bool</span>&nbsp;<span class="var-name">$wild</span> = <span class="var-default">false</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__toString" title="details" class="method-name">__toString</a>
										()
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
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">27</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Construct an advanced filter.</p>
	
	<div class="method-signature">
		<span class="method-result">UNL_Peoplefinder_AdvancedFilter</span>
		<span class="method-name">
			__construct
		</span>
					([<span class="var-type">string</span>&nbsp;<span class="var-name">$sn</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$cn</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$eppa</span> = <span class="var-default">''</span>], [<span class="var-type">string</span>&nbsp;<span class="var-name">$operator</span> = <span class="var-default">'&amp;'</span>], [<span class="var-type">bool</span>&nbsp;<span class="var-name">$wild</span> = <span class="var-default">false</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$sn</span><span class="var-description">: Surname 'Bieber'</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$cn</span><span class="var-description">: Common name 'Brett'</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$eppa</span><span class="var-description">: Primary affiliation: student/staff/faculty</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$operator</span><span class="var-description">: LDAP operator to use &amp; or |</span>			</li>
					<li>
				<span class="var-type">bool</span>
				<span class="var-name">$wild</span><span class="var-description">: Append wildcard character to search terms?</span>			</li>
				</ul>
		
			
	</div>
<a name="method__toString" id="__toString"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">__toString</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__toString
		</span>
				()
			</div>
	
		
			
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