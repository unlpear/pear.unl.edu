<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs for page DWT.php</title>";
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
<h2 class="file-name">/DWT.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-classes">Classes</a>
			|													<a href="#sec-functions">Functions</a>
			</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This package is intended to create PHP Class files (Objects) from  Dreamweaver template (.dwt) files. It allows designers to create a  standalone Dreamweaver template for the website design, and developers  to use that design in php pages without interference.</p>
<div class="description"><p>Similar to the way DB_DataObject works, the DWT package uses a  Generator to scan a .dwt file for editable regions and creates an  appropriately named class for that .dwt file with member variables for  each region.</p><p>Once the objects have been generated, you can render a html page from  the template.</p><p>$page = new UNL_DWT::factory('Template_style1');  $page-&gt;pagetitle = &quot;Contact Information&quot;;  $page-&gt;maincontent = &quot;Contact us by telephone at 111-222-3333.&quot;;  echo $page-&gt;toHtml();</p><p>Parts of this package are modeled on (borrowed from) the PEAR package  DB_DataObject.</p><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_DWT">http://pear.unl.edu/package/UNL_DWT</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		
			</div>
</div>
		
	<a name="sec-classes"></a>	
	<div class="info-box">
		<div class="info-box-title">Classes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Classes</span>
			|																<a href="#sec-functions">Functions</a>
					</div>
		<div class="info-box-body">	
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em; vertical-align: top">
						<a href="../UNL_DWT/UNL_DWT.php">UNL_DWT</a>
					</td>
					<td>
											Base class which understands Dreamweaver Templates.
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em; vertical-align: top">
						<a href="../UNL_DWT/UNL_DWT_Exception.php">UNL_DWT_Exception</a>
					</td>
					<td>
											exception used by the UNL_DWT class
										</td>
				</tr>
							</table>
		</div>
	</div>

	
	
	
	<a name="sec-functions"></a>	
	<div class="info-box">
		<div class="info-box-title">Functions</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-classes">Classes</a>
				|															<span class="disabled">Functions</span>
		</div>
		<div class="info-box-body">	
			<a name="functionUNL_DWT_between" id="functionUNL_DWT_between"><!-- --></a>
<div class="oddrow">
	
	<div>
		<span class="method-title">UNL_DWT_between</span> (line <span class="line-number">264</span>)
	</div> 

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns content between two strings</p>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			UNL_DWT_between
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$start</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$end</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$p</span>)
			</div>

			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$start</span><span class="var-description">: String which bounds the start</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$end</span><span class="var-description">: end collecting content when you see this</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$p</span><span class="var-description">: larger body of content to search</span>			</li>
				</ul>
		
	
</div>
		</div>
	</div>
	
	<p class="notes" id="credit">
		Documentation generated on Thu, 19 Feb 2009 13:35:20 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>