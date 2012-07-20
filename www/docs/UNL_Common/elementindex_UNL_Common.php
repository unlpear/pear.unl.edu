<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common">UNL_Common</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common/li_UNL_Common.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_Common] element index</h2>
<a href="/docs/UNL_Common/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Common.html#b">b</a>
	<a class="index-letter" href="elementindex_UNL_Common.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_Common.html#e">e</a>
	<a class="index-letter" href="elementindex_UNL_Common.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Common.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Common.html#_">_</a>
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
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_East.php#method_checkDB">UNL_Common_Building_East::_checkDB()</a> in East.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">_checkDB</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_City.php#method_checkDB">UNL_Common_Building_City::_checkDB()</a> in City.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_City.php#method__construct">UNL_Common_Building_City::__construct()</a> in City.php</div>
							<div class="index-item-description">Constructor connects to database and loads codes and names.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_East.php#method__construct">UNL_Common_Building_East::__construct()</a> in East.php</div>
							<div class="index-item-description">Constructor connects to database and loads codes and names.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php#method__construct">UNL_Common_Building::__construct()</a> in Building.php</div>
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
						<span class="method-title">buildingExists</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php#methodbuildingExists">UNL_Common_Building::buildingExists()</a> in Building.php</div>
							<div class="index-item-description">Checks if a building with the given code exists.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Building.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/_Common---Building.php.php">Building.php</a> in Building.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Building.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/_Common---examples---Building.php.php">Building.php</a> in Building.php</div>
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
						<span class="var-title">$codes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_East.php#var$codes">UNL_Common_Building_East::$codes</a> in East.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$codes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php#var$codes">UNL_Common_Building::$codes</a> in Building.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$codes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_City.php#var$codes">UNL_Common_Building_City::$codes</a> in City.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$colleges</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Colleges.php#var$colleges">UNL_Common_Colleges::$colleges</a> in Colleges.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">City.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/_Common---Building---City.php.php">City.php</a> in City.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Colleges.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/_Common---Colleges.php.php">Colleges.php</a> in Colleges.php</div>
					</dd>
		</dl>
	<a name="e"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">e</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">East.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/_Common---Building---East.php.php">East.php</a> in East.php</div>
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
						<span class="method-title">getAllCodes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php#methodgetAllCodes">UNL_Common_Building::getAllCodes()</a> in Building.php</div>
							<div class="index-item-description">Return all the codes</div>
					</dd>
			<dt class="field">
						<span class="method-title">getAllColleges</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Colleges.php#methodgetAllColleges">UNL_Common_Colleges::getAllColleges()</a> in Colleges.php</div>
							<div class="index-item-description">Return all the codes</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCampus</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php#methodgetCampus">UNL_Common_Building::getCampus()</a> in Building.php</div>
							<div class="index-item-description">returns city or east</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_East.php#methodgetTableDefinition">UNL_Common_Building_East::getTableDefinition()</a> in East.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTableDefinition</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_City.php#methodgetTableDefinition">UNL_Common_Building_City::getTableDefinition()</a> in City.php</div>
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
						UNL_Common_Building
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building.php">UNL_Common_Building</a> in Building.php</div>
							<div class="index-item-description">Simple object which can retreive the buildings on both city and east campus.</div>
					</dd>
			<dt class="field">
						UNL_Common_Building_City
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_City.php">UNL_Common_Building_City</a> in City.php</div>
							<div class="index-item-description">Class which can retrieve the buildings and codes for City Campus</div>
					</dd>
			<dt class="field">
						UNL_Common_Building_East
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Building_East.php">UNL_Common_Building_East</a> in East.php</div>
							<div class="index-item-description">Class which can retrieve the buildings and codes for East Campus</div>
					</dd>
			<dt class="field">
						UNL_Common_Colleges
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Colleges.php">UNL_Common_Colleges</a> in Colleges.php</div>
							<div class="index-item-description">Class which holds an array of all the colleges on campus.</div>
					</dd>
			<dt class="field">
						<span class="method-title">UNL_Common_Colleges</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Common/UNL_Common_Colleges.php#methodUNL_Common_Colleges">UNL_Common_Colleges::UNL_Common_Colleges()</a> in Colleges.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Common/elementindex_UNL_Common.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>