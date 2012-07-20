<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | Docs for page makepackage.php</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Auth">UNL_Auth</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Auth/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Auth API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Auth/li_UNL_Auth.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="file-name">/makepackage.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
									<a href="#sec-includes">Includes</a>
												</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Make package file for the UNL_UCBCN package.</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber</li>
			</ul>
		
			</div>
</div>
		

	<a name="sec-includes"></a>	
	<div class="info-box">
		<div class="info-box-title">Includes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
						<span class="disabled">Includes</span>
														</div>
		<div class="info-box-body">	
			<div class="evenrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR/PackageFileManager2.php'</span>)
			(line <span class="line-number">15</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Require the PEAR_PackageFileManager2 classes, and other  necessary classes for package.xml file creation.</p>
	
</div>
<div class="oddrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR/PackageFileManager/File.php'</span>)
			(line <span class="line-number">16</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
</div>
<div class="evenrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR/Task/Postinstallscript/rw.php'</span>)
			(line <span class="line-number">17</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
</div>
<div class="oddrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR/Config.php'</span>)
			(line <span class="line-number">18</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
</div>
<div class="evenrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'PEAR/Frontend.php'</span>)
			(line <span class="line-number">19</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
</div>
		</div>
	</div>
	
	
	
	
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>