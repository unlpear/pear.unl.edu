<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | Docs for page DWT.php</title>";
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
<h2 class="file-name">/DWT/DWT.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-classes">Classes</a>
			|							<a href="#sec-includes">Includes</a>
			|							<a href="#sec-constants">Constants</a>
			|									<a href="#sec-functions">Functions</a>
			</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This package is intended to create PHP Class files (Objects) from Dreamweaver template (.dwt) files.</p>
<div class="description"><p>It allows designers to create a standalone Dreamweaver template for the website design, and developers  to use that design in php pages without interference.</p><p>Similar to the way DB_DataObject works, the DWT package uses a Generator to scan a .dwt file for editable  regions and creates an appropriately named class for that .dwt file with member variables for each region.</p><p>Once the objects have been generated, you can render a html page from the template.</p><p>$page = new UNL_DWT::factory('Template_style1');  $page-&gt;pagetitle = &quot;Contact Information&quot;;  $page-&gt;maincontent = &quot;Contact us by telephone at 111-222-3333.&quot;;  echo $page-&gt;toHtml();</p><p>Parts of this package are modeled on (borrowed from) the PEAR package DB_DataObject.</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber</li>
			</ul>
		
			</div>
</div>
		
	<a name="sec-classes"></a>	
	<div class="info-box">
		<div class="info-box-title">Classes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Classes</span>
			|							<a href="#sec-includes">Includes</a>
				|										<a href="#sec-constants">Constants</a>
				|													<a href="#sec-functions">Functions</a>
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
						<a href="../UNL_DWT/UNL_DWT_Error.php">UNL_DWT_Error</a>
					</td>
					<td>
											UNL_DWT_Error implements a class for reporting template error
										</td>
				</tr>
							</table>
		</div>
	</div>

	<a name="sec-includes"></a>	
	<div class="info-box">
		<div class="info-box-title">Includes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-classes">Classes</a>
				|						<span class="disabled">Includes</span>
			|							<a href="#sec-constants">Constants</a>
				|													<a href="#sec-functions">Functions</a>
					</div>
		<div class="info-box-body">	
			<div class="oddrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR.php'</span>)
			(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Obtain the PEAR class so it can be extended from</p>
	
</div>
		</div>
	</div>
	
	<a name="sec-constants"></a>	
	<div class="info-box">
		<div class="info-box-title">Constants</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-classes">Classes</a>
				|										<a href="#sec-includes">Includes</a>
				|						<span class="disabled">Constants</span>
			|										<a href="#sec-functions">Functions</a>
					</div>
		<div class="info-box-body">	
			<a name="defineUNL_DWT_ERROR"><!-- --></a>
<div class="evenrow">
	
	<div>
		<span class="const-title">
			<span class="const-name">UNL_DWT_ERROR</span> = -1
			(line <span class="line-number">36</span>)
		</span>
	</div>
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Unkown error</p>
	
		
</div>
<a name="defineUNL_DWT_ERROR_NOT_FOUND"><!-- --></a>
<div class="oddrow">
	
	<div>
		<span class="const-title">
			<span class="const-name">UNL_DWT_ERROR_NOT_FOUND</span> = -4
			(line <span class="line-number">41</span>)
		</span>
	</div>
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">An identifier in the query refers to a non-existant object</p>
	
		
</div>
<a name="defineUNL_DWT_OK"><!-- --></a>
<div class="evenrow">
	
	<div>
		<span class="const-title">
			<span class="const-name">UNL_DWT_OK</span> = 1
			(line <span class="line-number">31</span>)
		</span>
	</div>
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">The code returned by many methods upon success</p>
	
		
</div>
		</div>
	</div>
	
	
	<a name="sec-functions"></a>	
	<div class="info-box">
		<div class="info-box-title">Functions</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-classes">Classes</a>
				|										<a href="#sec-includes">Includes</a>
				|										<a href="#sec-constants">Constants</a>
				|									<span class="disabled">Functions</span>
		</div>
		<div class="info-box-body">	
			<a name="functionUNL_DWT_between" id="functionUNL_DWT_between"><!-- --></a>
<div class="oddrow">
	
	<div>
		<span class="method-title">UNL_DWT_between</span> (line <span class="line-number">312</span>)
	</div> 

	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			UNL_DWT_between
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$start</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$end</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$p</span>)
			</div>

			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$start</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$end</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$p</span>			</li>
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