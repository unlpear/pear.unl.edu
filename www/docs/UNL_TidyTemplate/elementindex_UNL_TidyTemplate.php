<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_TidyTemplate | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_TidyTemplate">UNL_TidyTemplate</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_TidyTemplate/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_TidyTemplate API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_TidyTemplate/li_UNL_TidyTemplate.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_TidyTemplate] element index</h2>
<a href="/docs/UNL_TidyTemplate/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_TidyTemplate.html#w">w</a>
</div>

	<a name="f"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">f</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$files</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#var$files">UNL_TidyTemplate::$files</a> in TidyTemplate.php</div>
							<div class="index-item-description">after checking the files, this will contain an associative array  of files and their validation status valid=true|false</div>
					</dd>
			<dt class="field">
						<span class="var-title">$fixed</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#var$fixed">UNL_TidyTemplate::$fixed</a> in TidyTemplate.php</div>
							<div class="index-item-description">Array of pages fixed by TidyTemplate.</div>
					</dd>
			<dt class="field">
						<span class="method-title">fileIsTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodfileIsTemplate">UNL_TidyTemplate::fileIsTemplate()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Checks if the file is using the templates.</div>
					</dd>
		</dl>
	<a name="g"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">g</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">getEditableRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodgetEditableRegions">UNL_TidyTemplate::getEditableRegions()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Scans a snippet of HTML and returns an array of UNL_DWT_Region</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTemplateName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodgetTemplateName">UNL_TidyTemplate::getTemplateName()</a> in TidyTemplate.php</div>
							<div class="index-item-description">returns the name of the template file used.</div>
					</dd>
		</dl>
	<a name="i"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">i</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">isTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodisTemplate">UNL_TidyTemplate::isTemplate()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Determines if the HTML page is using the UNL Templates.</div>
					</dd>
			<dt class="field">
						<span class="method-title">isValidTemplateExtension</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodisValidTemplateExtension">UNL_TidyTemplate::isValidTemplateExtension()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Checks if a file has the correct extension.</div>
					</dd>
		</dl>
	<a name="s"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">s</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">setTemplateRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodsetTemplateRegions">UNL_TidyTemplate::setTemplateRegions()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Takes an array of UNL_DWT_Region and populates a UNL_Template  with the region values.</div>
					</dd>
		</dl>
	<a name="t"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">t</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">test.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/_test.php.php">test.php</a> in test.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">tidyFile</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodtidyFile">UNL_TidyTemplate::tidyFile()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Will tidy up a file. First checks if it is a Template file, then  calls tidyTemplateHTML if it is a Tidy File.</div>
					</dd>
			<dt class="field">
						<span class="method-title">tidyFragment</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodtidyFragment">UNL_TidyTemplate::tidyFragment()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Will run tidy on a snippet of html.</div>
					</dd>
			<dt class="field">
						<span class="method-title">tidyLocalFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodtidyLocalFiles">UNL_TidyTemplate::tidyLocalFiles()</a> in TidyTemplate.php</div>
							<div class="index-item-description">This will tidy up all the template files given.</div>
					</dd>
			<dt class="field">
						<span class="include-title">TidyTemplate.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/_TidyTemplate.php.php">TidyTemplate.php</a> in TidyTemplate.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">tidyTemplateHTML</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodtidyTemplateHTML">UNL_TidyTemplate::tidyTemplateHTML()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Runs tidy on the template html.</div>
					</dd>
		</dl>
	<a name="u"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">u</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$unfixable</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#var$unfixable">UNL_TidyTemplate::$unfixable</a> in TidyTemplate.php</div>
							<div class="index-item-description">Could not fix these files, but did what we could.</div>
					</dd>
			<dt class="field">
						UNL_TidyTemplate
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php">UNL_TidyTemplate</a> in TidyTemplate.php</div>
							<div class="index-item-description">Class which provides basic functionality for Tidy'ing a template.</div>
					</dd>
		</dl>
	<a name="w"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">w</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">writeCleanTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_TidyTemplate/UNL_TidyTemplate.php#methodwriteCleanTemplate">UNL_TidyTemplate::writeCleanTemplate()</a> in TidyTemplate.php</div>
							<div class="index-item-description">Writes out a template file to the given filename, after  first creating a backup copy, named $file.bak</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_TidyTemplate/elementindex_UNL_TidyTemplate.php#w">w</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>