<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_HTML_CSS_Sampler | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_HTML_CSS_Sampler">UNL_HTML_CSS_Sampler</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_HTML_CSS_Sampler/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_HTML_CSS_Sampler API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_HTML_CSS_Sampler/li_UNL_HTML_CSS_Sampler.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/UNL_HTML_CSS_Sampler/elementindex_UNL_HTML_CSS_Sampler.php">UNL_HTML_CSS_Sampler</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#b">b</a>
	<a class="index-letter" href="elementindex.html#c">c</a>
	<a class="index-letter" href="elementindex.html#g">g</a>
	<a class="index-letter" href="elementindex.html#o">o</a>
	<a class="index-letter" href="elementindex.html#p">p</a>
	<a class="index-letter" href="elementindex.html#r">r</a>
	<a class="index-letter" href="elementindex.html#s">s</a>
	<a class="index-letter" href="elementindex.html#t">t</a>
	<a class="index-letter" href="elementindex.html#u">u</a>
	<a class="index-letter" href="elementindex.html#_">_</a>
</div>

	<a name="b"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">b</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">buildSampleTable</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodbuildSampleTable">UNL_HTML_CSS_Sampler::buildSampleTable()</a> in Sampler.php</div>
							<div class="index-item-description">Takes selectors parsed from HTML_CSS and builds an HTML table with sample  output for each selector.</div>
					</dd>
			<dt class="field">
						<span class="method-title">buildSampleTableRow</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodbuildSampleTableRow">UNL_HTML_CSS_Sampler::buildSampleTableRow()</a> in Sampler.php</div>
							<div class="index-item-description">Builds and adds a HTML_Table row containing the sample for this selector.</div>
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
						<span class="var-title">$css</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$css">UNL_HTML_CSS_Sampler::$css</a> in Sampler.php</div>
							<div class="index-item-description">HTML_CSS object</div>
					</dd>
			<dt class="field">
						<span class="var-title">$css_array</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$css_array">UNL_HTML_CSS_Sampler::$css_array</a> in Sampler.php</div>
							<div class="index-item-description">HTML_CSS::toArray()</div>
					</dd>
			<dt class="field">
						<span class="var-title">$css_options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$css_options">UNL_HTML_CSS_Sampler::$css_options</a> in Sampler.php</div>
							<div class="index-item-description">Options passed to the constructor for HTML_CSS</div>
					</dd>
			<dt class="field">
						<span class="var-title">$custom_samples</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$custom_samples">UNL_HTML_CSS_Sampler::$custom_samples</a> in Sampler.php</div>
							<div class="index-item-description">An array of custom sample text for specific selectors.</div>
					</dd>
			<dt class="field">
						<span class="method-title">cleanSelectors</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodcleanSelectors">UNL_HTML_CSS_Sampler::cleanSelectors()</a> in Sampler.php</div>
							<div class="index-item-description">cleans the selectors before output.</div>
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
						<span class="method-title">generateSample</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodgenerateSample">UNL_HTML_CSS_Sampler::generateSample()</a> in Sampler.php</div>
							<div class="index-item-description">This is the default sample generator function.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getSampleText</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodgetSampleText">UNL_HTML_CSS_Sampler::getSampleText()</a> in Sampler.php</div>
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
						<span class="var-title">$omit_selectors</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$omit_selectors">UNL_HTML_CSS_Sampler::$omit_selectors</a> in Sampler.php</div>
							<div class="index-item-description">Selectors you do not wish to output samples for.</div>
					</dd>
		</dl>
	<a name="p"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">p</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">parseCSS</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodparseCSS">UNL_HTML_CSS_Sampler::parseCSS()</a> in Sampler.php</div>
							<div class="index-item-description">Initializes the HTML_CSS object which parses the css.</div>
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
						<span class="method-title">run</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodrun">UNL_HTML_CSS_Sampler::run()</a> in Sampler.php</div>
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
						<span class="var-title">$sampletext</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$sampletext">UNL_HTML_CSS_Sampler::$sampletext</a> in Sampler.php</div>
							<div class="index-item-description">Text used as the sample for each selector.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sort</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$sort">UNL_HTML_CSS_Sampler::$sort</a> in Sampler.php</div>
							<div class="index-item-description">Should the selectors be sorted?</div>
					</dd>
			<dt class="field">
						<span class="method-title">Sampler</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodSampler">UNL_HTML_CSS_Sampler::Sampler()</a> in Sampler.php</div>
							<div class="index-item-description">PHP 4-type constructor.</div>
					</dd>
			<dt class="field">
						<span class="method-title">selectorToClass</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodselectorToClass">UNL_HTML_CSS_Sampler::selectorToClass()</a> in Sampler.php</div>
							<div class="index-item-description">Converts a HTML_CSS parsed selector into the class if applicable.</div>
					</dd>
			<dt class="field">
						<span class="method-title">sortSelectors</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodsortSelectors">UNL_HTML_CSS_Sampler::sortSelectors()</a> in Sampler.php</div>
							<div class="index-item-description">Sorts the selectors used for output.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Sampler.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/_UNL---HTML---CSS---Sampler.php.php">Sampler.php</a> in Sampler.php</div>
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
						<span class="var-title">$table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$table">UNL_HTML_CSS_Sampler::$table</a> in Sampler.php</div>
							<div class="index-item-description">HTML_Table object of output</div>
					</dd>
			<dt class="field">
						<span class="var-title">$table_options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#var$table_options">UNL_HTML_CSS_Sampler::$table_options</a> in Sampler.php</div>
							<div class="index-item-description">Options passed to the constructor for HTML_Table</div>
					</dd>
			<dt class="field">
						<span class="method-title">toHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#methodtoHtml">UNL_HTML_CSS_Sampler::toHtml()</a> in Sampler.php</div>
							<div class="index-item-description">Returns the html table of generated samples.</div>
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
						UNL_HTML_CSS_Sampler
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php">UNL_HTML_CSS_Sampler</a> in Sampler.php</div>
							<div class="index-item-description">Main class for the CSS sampler class.</div>
					</dd>
		</dl>
	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_HTML_CSS_Sampler/UNL_HTML_CSS_Sampler.php#method__construct">UNL_HTML_CSS_Sampler::__construct()</a> in Sampler.php</div>
							<div class="index-item-description">Constructor</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_HTML_CSS_Sampler/elementindex.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>