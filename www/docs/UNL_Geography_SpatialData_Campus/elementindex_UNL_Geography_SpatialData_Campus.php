<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Geography_SpatialData_Campus | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Geography_SpatialData_Campus">UNL_Geography_SpatialData_Campus</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Geography_SpatialData_Campus/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Geography_SpatialData_Campus API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Geography_SpatialData_Campus/li_UNL_Geography_SpatialData_Campus.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_Geography_SpatialData_Campus] element index</h2>
<a href="/docs/UNL_Geography_SpatialData_Campus/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#b">b</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Geography_SpatialData_Campus.html#_">_</a>
</div>

	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">_checkDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#method_checkDB">UNL_Geography_SpatialData_Campus::_checkDB()</a> in Campus.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__connect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#method__connect">UNL_Geography_SpatialData_Campus::__connect()</a> in Campus.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#method__construct">UNL_Geography_SpatialData_Campus::__construct()</a> in Campus.php</div>
					</dd>
		</dl>
	<a name="b"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">b</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$bldgs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#var$bldgs">UNL_Geography_SpatialData_Campus::$bldgs</a> in Campus.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">buildingExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodbuildingExists">UNL_Geography_SpatialData_Campus::buildingExists()</a> in Campus.php</div>
							<div class="index-item-description">Checks if a building with the given code exists.</div>
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
						<span class="include-title">Campus.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/_Campus.php.php">Campus.php</a> in Campus.php</div>
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
						<span class="var-title">$db_file</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#var$db_file">UNL_Geography_SpatialData_Campus::$db_file</a> in Campus.php</div>
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
						<span class="method-title">getDataDir</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodgetDataDir">UNL_Geography_SpatialData_Campus::getDataDir()</a> in Campus.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodgetDB">UNL_Geography_SpatialData_Campus::getDB()</a> in Campus.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getGeoCoordinates</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodgetGeoCoordinates">UNL_Geography_SpatialData_Campus::getGeoCoordinates()</a> in Campus.php</div>
							<div class="index-item-description">Returns the geographical coordinates for a building.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getMapURL</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodgetMapURL">UNL_Geography_SpatialData_Campus::getMapURL()</a> in Campus.php</div>
							<div class="index-item-description">returns the map url for a given building.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodgetTableDefinition">UNL_Geography_SpatialData_Campus::getTableDefinition()</a> in Campus.php</div>
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
						<span class="method-title">importCSV</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodimportCSV">UNL_Geography_SpatialData_Campus::importCSV()</a> in Campus.php</div>
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
						<span class="method-title">tableExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php#methodtableExists">UNL_Geography_SpatialData_Campus::tableExists()</a> in Campus.php</div>
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
						UNL_Geography_SpatialData_Campus
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Geography_SpatialData_Campus/UNL_Geography_SpatialData_Campus.php">UNL_Geography_SpatialData_Campus</a> in Campus.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Geography_SpatialData_Campus/elementindex_UNL_Geography_SpatialData_Campus.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>