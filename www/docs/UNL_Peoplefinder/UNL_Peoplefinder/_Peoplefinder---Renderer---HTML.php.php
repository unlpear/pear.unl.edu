<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | Docs for page HTML.php</title>";
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
<h2 class="file-name">/Peoplefinder/Renderer/HTML.php</h2>

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
<p class="short-description">Peoplefinder HTML Renderer</p>
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
						<a href="../UNL_Peoplefinder/Peoplefinder_Renderer_HTML.php">Peoplefinder_Renderer_HTML</a>
					</td>
					<td>
											
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
			<a name="functionnet_match" id="functionnet_match"><!-- --></a>
<div class="evenrow">
	
	<div>
		<span class="method-title">net_match</span> (line <span class="line-number">21</span>)
	</div> 

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Determines if a network in the form of 192.168.17.1/16 or</p>
<div class="description"><p>127.0.0.1/255.255.255.255 or 10.0.0.1 matches a given ip</p></div>
	<ul class="tags">
				<li><span class="field">return:</span> true or false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			net_match
		</span>
					(<span class="var-type">$network</span>&nbsp;<span class="var-name">$network</span>, <span class="var-type">$ip</span>&nbsp;<span class="var-name">$ip</span>)
			</div>

			<ul class="parameters">
					<li>
				<span class="var-type">$network</span>
				<span class="var-name">$network</span><span class="var-description">: The network and mask</span>			</li>
					<li>
				<span class="var-type">$ip</span>
				<span class="var-name">$ip</span><span class="var-description">: The ip to check</span>			</li>
				</ul>
		
	
</div>
		</div>
	</div>
	
	<p class="notes" id="credit">
		Documentation generated on Wed, 09 Jan 2008 11:51:54 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>