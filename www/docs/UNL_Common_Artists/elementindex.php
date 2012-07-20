<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common_Artists | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common_Artists">UNL_Common_Artists</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common_Artists/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common_Artists API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common_Artists/li_UNL_Common_Artists.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/UNL_Common_Artists/elementindex_UNL_Common_Artists.php">UNL_Common_Artists</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#a">a</a>
	<a class="index-letter" href="elementindex.html#d">d</a>
	<a class="index-letter" href="elementindex.html#f">f</a>
	<a class="index-letter" href="elementindex.html#g">g</a>
	<a class="index-letter" href="elementindex.html#i">i</a>
	<a class="index-letter" href="elementindex.html#l">l</a>
	<a class="index-letter" href="elementindex.html#"></a>
	<a class="index-letter" href="elementindex.html#s">s</a>
	<a class="index-letter" href="elementindex.html#t">t</a>
	<a class="index-letter" href="elementindex.html#u">u</a>
</div>

	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">Artists.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/_Artists.php.php">Artists.php</a> in Artists.php</div>
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
						<span class="var-title">$date</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$date">UNL_Common_Sculptures::$date</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$db_file</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$db_file">UNL_Common_Artists::$db_file</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dob</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$dob">UNL_Common_Artists::$dob</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$dod</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$dod">UNL_Common_Artists::$dod</a> in Artists.php</div>
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
						<span class="var-title">$first_name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$first_name">UNL_Common_Artists::$first_name</a> in Artists.php</div>
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
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodgetDataDir">UNL_Common_Artists::getDataDir()</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodgetDB">UNL_Common_Artists::getDB()</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#methodgetTableDefinition">UNL_Common_Sculptures::getTableDefinition()</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodgetTableDefinition">UNL_Common_Artists::getTableDefinition()</a> in Artists.php</div>
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
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$id">UNL_Common_Sculptures::$id</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$id</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$id">UNL_Common_Artists::$id</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$imageurl</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$imageurl">UNL_Common_Sculptures::$imageurl</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$info</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$info">UNL_Common_Artists::$info</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$info</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$info">UNL_Common_Sculptures::$info</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">importCSV</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodimportCSV">UNL_Common_Artists::importCSV()</a> in Artists.php</div>
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
						<span class="var-title">$last_name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$last_name">UNL_Common_Artists::$last_name</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$lat</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$lat">UNL_Common_Sculptures::$lat</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$lon</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$lon">UNL_Common_Sculptures::$lon</a> in Sculptures.php</div>
					</dd>
		</dl>
	<a name="m"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">m</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$media</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$media">UNL_Common_Sculptures::$media</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$middle_name</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$middle_name">UNL_Common_Artists::$middle_name</a> in Artists.php</div>
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
						<span class="include-title">Sculptures.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/_Sculptures.php.php">Sculptures.php</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#methodstaticGet">UNL_Common_Sculptures::staticGet()</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodstaticGet">UNL_Common_Artists::staticGet()</a> in Artists.php</div>
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
						<span class="var-title">$title</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$title">UNL_Common_Sculptures::$title</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">tableExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#methodtableExists">UNL_Common_Artists::tableExists()</a> in Artists.php</div>
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
						UNL_Common_Artists
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php">UNL_Common_Artists</a> in Artists.php</div>
							<div class="index-item-description">DataObject for artist info.</div>
					</dd>
			<dt class="field">
						UNL_Common_Sculptures
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php">UNL_Common_Sculptures</a> in Sculptures.php</div>
							<div class="index-item-description">Dataobject for Sculpture info.</div>
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
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#var$__table">UNL_Common_Artists::$__table</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__table</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Sculptures.php#var$__table">UNL_Common_Sculptures::$__table</a> in Sculptures.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">_checkDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#method_checkDB">UNL_Common_Artists::_checkDB()</a> in Artists.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__connect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common_Artists/UNL_Common_Artists.php#method__connect">UNL_Common_Artists::__connect()</a> in Artists.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#"></a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_Common_Artists/elementindex.php#u">u</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>