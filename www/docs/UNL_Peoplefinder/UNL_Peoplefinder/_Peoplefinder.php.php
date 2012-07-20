<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs for page Peoplefinder.php</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2></h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="file-name">/Peoplefinder.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-classes">Classes</a>
			|							<a href="#sec-includes">Includes</a>
			|							<a href="#sec-constants">Constants</a>
										</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Peoplefinder class for UNL's online directory.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2007 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://peoplefinder.unl.edu/">http://peoplefinder.unl.edu/</a></li>
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
			|							<a href="#sec-includes">Includes</a>
				|										<a href="#sec-constants">Constants</a>
															</div>
		<div class="info-box-body">	
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em; vertical-align: top">
						<a href="../UNL_Peoplefinder/Peoplefinder.php">Peoplefinder</a>
					</td>
					<td>
											Peoplefinder class for UNL's online directory.
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
															</div>
		<div class="info-box-body">	
			<div class="oddrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name"><a href="../UNL_Peoplefinder/_Peoplefinder---Record.php.php">'Peoplefinder/Record.php'</a></span>)
			(line <span class="line-number">16</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
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
											</div>
		<div class="info-box-body">	
			<a name="defineDISPLAY_LIMIT"><!-- --></a>
<div class="evenrow">
	
	<div>
		<span class="const-title">
			<span class="const-name">DISPLAY_LIMIT</span> = 30
			(line <span class="line-number">13</span>)
		</span>
	</div>
	
	<!-- ========== Info from phpDoc block ========= -->
	
		
</div>
<a name="defineRESULT_LIMIT"><!-- --></a>
<div class="oddrow">
	
	<div>
		<span class="const-title">
			<span class="const-name">RESULT_LIMIT</span> = 100
			(line <span class="line-number">14</span>)
		</span>
	</div>
	
	<!-- ========== Info from phpDoc block ========= -->
	
		
</div>
		</div>
	</div>
	
	
	
	<p class="notes" id="credit">
		Documentation generated on Wed, 09 Jan 2008 11:51:55 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>