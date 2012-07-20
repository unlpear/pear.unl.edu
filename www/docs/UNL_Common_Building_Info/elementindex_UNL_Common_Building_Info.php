<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common_Building_Info | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common_Building_Info">UNL_Common_Building_Info</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common_Building_Info/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common_Building_Info API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common_Building_Info/li_UNL_Common_Building_Info.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_Common_Building_Info] element index</h2>
<a href="/docs/UNL_Common_Building_Info/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#b">b</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Common_Building_Info.html#_">_</a>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#method_checkDB">UNL_Common_Building_Info::_checkDB()</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__connect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#method__connect">UNL_Common_Building_Info::__connect()</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#method__construct">UNL_Common_Building_Info::__construct()</a> in Info.php</div>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#var$bldgs">UNL_Common_Building_Info::$bldgs</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">buildingExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodbuildingExists">UNL_Common_Building_Info::buildingExists()</a> in Info.php</div>
							<div class="index-item-description">Checks if a building with the given code exists.</div>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#var$db_file">UNL_Common_Building_Info::$db_file</a> in Info.php</div>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodgetDataDir">UNL_Common_Building_Info::getDataDir()</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodgetDB">UNL_Common_Building_Info::getDB()</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodgetHtml">UNL_Common_Building_Info::getHtml()</a> in Info.php</div>
							<div class="index-item-description">Returns a HTML snippet of information about a building on campus.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodgetTableDefinition">UNL_Common_Building_Info::getTableDefinition()</a> in Info.php</div>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodimportCSV">UNL_Common_Building_Info::importCSV()</a> in Info.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Info.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/_Info.php.php">Info.php</a> in Info.php</div>
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
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php#methodtableExists">UNL_Common_Building_Info::tableExists()</a> in Info.php</div>
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
						UNL_Common_Building_Info
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Building_Info/UNL_Common_Building_Info.php">UNL_Common_Building_Info</a> in Info.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Common_Building_Info/elementindex_UNL_Common_Building_Info.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>