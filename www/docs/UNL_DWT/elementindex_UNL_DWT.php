<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | </title>";
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
						<a name="top"></a>
<h2>[UNL_DWT] element index</h2>
<a href="/docs/UNL_DWT/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_DWT.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#n">n</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#r">r</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#v">v</a>
	<a class="index-letter" href="elementindex_UNL_DWT.html#_">_</a>
</div>

	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$_regions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#var$_regions">UNL_DWT_Generator::$_regions</a> in Generator.php</div>
							<div class="index-item-description">Assoc array of template region names.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$_regions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#var$_regions">UNL_DWT_Scanner::$_regions</a> in Scanner.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#var$__template">UNL_DWT::$__template</a> in DWT.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">_generateGetters</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#method_generateGetters">UNL_DWT_Generator::_generateGetters()</a> in Generator.php</div>
							<div class="index-item-description">Generate getter methods for class definition</div>
					</dd>
			<dt class="field">
						<span class="method-title">_generateSetters</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#method_generateSetters">UNL_DWT_Generator::_generateSetters()</a> in Generator.php</div>
							<div class="index-item-description">Generate setter methods for class definition</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#method__construct">UNL_DWT::__construct()</a> in DWT.php</div>
							<div class="index-item-description">Constructor</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#method__construct">UNL_DWT_Scanner::__construct()</a> in Scanner.php</div>
							<div class="index-item-description">The contents of the .dwt file you wish to scan.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__get</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#method__get">UNL_DWT_Scanner::__get()</a> in Scanner.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__isset</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#method__isset">UNL_DWT_Scanner::__isset()</a> in Scanner.php</div>
					</dd>
		</dl>
	<a name="c"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">c</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">createTemplateList</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodcreateTemplateList">UNL_DWT_Generator::createTemplateList()</a> in Generator.php</div>
							<div class="index-item-description">Create a list of dwts</div>
					</dd>
			<dt class="field">
						<span class="include-title">createTemplates.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT---createTemplates.php.php">createTemplates.php</a> in createTemplates.php</div>
					</dd>
		</dl>
	<a name="d"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">d</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">debug</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methoddebug">UNL_DWT::debug()</a> in DWT.php</div>
							<div class="index-item-description">Debugger. - use this in your extended classes to output debugging  information.</div>
					</dd>
			<dt class="field">
						<span class="method-title">debugLevel</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methoddebugLevel">UNL_DWT::debugLevel()</a> in DWT.php</div>
							<div class="index-item-description">sets and returns debug level  eg. UNL_DWT::debugLevel(4);</div>
					</dd>
			<dt class="field">
						<span class="include-title">DWT.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT.php.php">DWT.php</a> in DWT.php</div>
					</dd>
		</dl>
	<a name="f"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">f</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$flags</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$flags">UNL_DWT_Region::$flags</a> in Region.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">factory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methodfactory">UNL_DWT::factory()</a> in DWT.php</div>
							<div class="index-item-description">Create a new UNL_DWT object for the specified layout type</div>
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
						<span class="method-title">generateClasses</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodgenerateClasses">UNL_DWT_Generator::generateClasses()</a> in Generator.php</div>
							<div class="index-item-description">Generate the classes for templates in $this-&gt;templates</div>
					</dd>
			<dt class="field">
						<span class="method-title">generateClassName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodgenerateClassName">UNL_DWT_Generator::generateClassName()</a> in Generator.php</div>
							<div class="index-item-description">Generates the class name from a filename.</div>
					</dd>
			<dt class="field">
						<span class="method-title">generateTemplates</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodgenerateTemplates">UNL_DWT_Generator::generateTemplates()</a> in Generator.php</div>
							<div class="index-item-description">Generates .tpl files from .dwt</div>
					</dd>
			<dt class="field">
						<span class="method-title">getRegion</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#methodgetRegion">UNL_DWT_Scanner::getRegion()</a> in Scanner.php</div>
							<div class="index-item-description">returns the region object</div>
					</dd>
			<dt class="field">
						<span class="method-title">getRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#methodgetRegions">UNL_DWT_Scanner::getRegions()</a> in Scanner.php</div>
							<div class="index-item-description">returns array of all the regions found</div>
					</dd>
			<dt class="field">
						<span class="include-title">Generator.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT---Generator.php.php">Generator.php</a> in Generator.php</div>
					</dd>
		</dl>
	<a name="l"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">l</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$len</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$len">UNL_DWT_Region::$len</a> in Region.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$line</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$line">UNL_DWT_Region::$line</a> in Region.php</div>
					</dd>
		</dl>
	<a name="n"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">n</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$name">UNL_DWT_Region::$name</a> in Region.php</div>
					</dd>
		</dl>
	<a name="o"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">o</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#var$options">UNL_DWT::$options</a> in DWT.php</div>
							<div class="index-item-description">Run-time configuration options</div>
					</dd>
		</dl>
	<a name="r"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">r</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">replaceRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methodreplaceRegions">UNL_DWT::replaceRegions()</a> in DWT.php</div>
							<div class="index-item-description">Replaces region tags within a template file wth their contents.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Region.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT---Region.php.php">Region.php</a> in Region.php</div>
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
						<span class="method-title">sanitizeTemplateName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodsanitizeTemplateName">UNL_DWT_Generator::sanitizeTemplateName()</a> in Generator.php</div>
							<div class="index-item-description">Cleans the template filename.</div>
					</dd>
			<dt class="field">
						<span class="method-title">scanRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php#methodscanRegions">UNL_DWT_Scanner::scanRegions()</a> in Scanner.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">scanRegions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodscanRegions">UNL_DWT_Generator::scanRegions()</a> in Generator.php</div>
							<div class="index-item-description">Scans the .dwt for regions - all found are loaded into assoc array  $this-&gt;_regions[$template].</div>
					</dd>
			<dt class="field">
						<span class="method-title">setOption</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methodsetOption">UNL_DWT::setOption()</a> in DWT.php</div>
							<div class="index-item-description">Sets options.</div>
					</dd>
			<dt class="field">
						<span class="method-title">start</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#methodstart">UNL_DWT_Generator::start()</a> in Generator.php</div>
							<div class="index-item-description">begins generation of template files</div>
					</dd>
			<dt class="field">
						<span class="include-title">Scanner.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT---Scanner.php.php">Scanner.php</a> in Scanner.php</div>
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
						<span class="var-title">$template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#var$template">UNL_DWT_Generator::$template</a> in Generator.php</div>
							<div class="index-item-description">Current template being output</div>
					</dd>
			<dt class="field">
						<span class="var-title">$templates</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php#var$templates">UNL_DWT_Generator::$templates</a> in Generator.php</div>
							<div class="index-item-description">Array of template names.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$type</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$type">UNL_DWT_Region::$type</a> in Region.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">toHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php#methodtoHtml">UNL_DWT::toHtml()</a> in DWT.php</div>
							<div class="index-item-description">Returns the given DWT with all regions replaced with their assigned  content.</div>
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
						UNL_DWT
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT.php">UNL_DWT</a> in DWT.php</div>
							<div class="index-item-description">Base class which understands Dreamweaver Templates.</div>
					</dd>
			<dt class="field">
						<span class="method-title">UNL_DWT_between</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT.php.php#functionUNL_DWT_between">UNL_DWT_between()</a> in DWT.php</div>
							<div class="index-item-description">Returns content between two strings</div>
					</dd>
			<dt class="field">
						UNL_DWT_Exception
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Exception.php">UNL_DWT_Exception</a> in DWT.php</div>
							<div class="index-item-description">exception used by the UNL_DWT class</div>
					</dd>
			<dt class="field">
						UNL_DWT_Generator
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Generator.php">UNL_DWT_Generator</a> in Generator.php</div>
							<div class="index-item-description">The generator parses actual .dwt Dreamweaver Template files to create object relationship  files which have member variables for editable regions within the dreamweaver templates.</div>
					</dd>
			<dt class="field">
						<span class="const-title">UNL_DWT_NO_OVERLOAD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/_UNL---DWT---createTemplates.php.php#defineUNL_DWT_NO_OVERLOAD">UNL_DWT_NO_OVERLOAD</a> in createTemplates.php</div>
					</dd>
			<dt class="field">
						UNL_DWT_Region
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php">UNL_DWT_Region</a> in Region.php</div>
							<div class="index-item-description">Object representing a Dreamweaver template region</div>
					</dd>
			<dt class="field">
						UNL_DWT_Scanner
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Scanner.php">UNL_DWT_Scanner</a> in Scanner.php</div>
							<div class="index-item-description">Will scan a dreamweaver templated file for regions and other relevant info.</div>
					</dd>
		</dl>
	<a name="v"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">v</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$value</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_DWT/UNL_DWT_Region.php#var$value">UNL_DWT_Region::$value</a> in Region.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_DWT/elementindex_UNL_DWT.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>