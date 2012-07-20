<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Services_Peoplefinder | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Services_Peoplefinder">UNL_Services_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Services_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Services_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Services_Peoplefinder/li_UNL_Services_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/UNL_Services_Peoplefinder/elementindex_UNL_Services_Peoplefinder.php">UNL_Services_Peoplefinder</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#e">e</a>
	<a class="index-letter" href="elementindex.html#g">g</a>
	<a class="index-letter" href="elementindex.html#m">m</a>
	<a class="index-letter" href="elementindex.html#"></a>
	<a class="index-letter" href="elementindex.html#s">s</a>
	<a class="index-letter" href="elementindex.html#t">t</a>
</div>

	<a name="e"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">e</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">example.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_docs---examples---example.php.php">example.php</a> in example.php</div>
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
						<span class="include-title">getemail.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_docs---examples---getemail.php.php">getemail.php</a> in getemail.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getEmail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_Peoplefinder.php#methodgetEmail">UNL_Services_Peoplefinder::getEmail()</a> in Peoplefinder.php</div>
							<div class="index-item-description">returns the email address for the given uid</div>
					</dd>
			<dt class="field">
						<span class="method-title">getFullName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_Peoplefinder.php#methodgetFullName">UNL_Services_Peoplefinder::getFullName()</a> in Peoplefinder.php</div>
							<div class="index-item-description">returns the name for a given uid</div>
					</dd>
			<dt class="field">
						<span class="method-title">getHCard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_Peoplefinder.php#methodgetHCard">UNL_Services_Peoplefinder::getHCard()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Gets an hcard for the uid given.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getVCard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_Peoplefinder.php#methodgetVCard">UNL_Services_Peoplefinder::getVCard()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Gets a vcard for the given uid.</div>
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
						<span class="method-title">main</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodmain">UNL_Services_PeoplefinderTest::main()</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Runs the test methods of this class.</div>
					</dd>
			<dt class="field">
						<span class="include-title">makepackage.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_makepackage.php.php">makepackage.php</a> in makepackage.php</div>
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
						<span class="include-title">Peoplefinder.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_Peoplefinder.php.php">Peoplefinder.php</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="const-title">PHPUnit_MAIN_METHOD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_tests---UNL_Services_PeoplefinderTest.php.php#definePHPUnit_MAIN_METHOD">PHPUnit_MAIN_METHOD</a> in UNL_Services_PeoplefinderTest.php</div>
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
						<span class="method-title">setUp</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodsetUp">UNL_Services_PeoplefinderTest::setUp()</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Sets up the fixture, for example, open a network connection.</div>
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
						<span class="method-title">tearDown</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodtearDown">UNL_Services_PeoplefinderTest::tearDown()</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Tears down the fixture, for example, close a network connection.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetEmail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodtestGetEmail">UNL_Services_PeoplefinderTest::testGetEmail()</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Test getting the Email for a uid.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetFullName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodtestGetFullName">UNL_Services_PeoplefinderTest::testGetFullName()</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Tests getting the full name of a user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetHCard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodtestGetHCard">UNL_Services_PeoplefinderTest::testGetHCard()</a> in UNL_Services_PeoplefinderTest.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetVCard</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#methodtestGetVCard">UNL_Services_PeoplefinderTest::testGetVCard()</a> in UNL_Services_PeoplefinderTest.php</div>
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
						<span class="var-title">$uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php#var$uid">UNL_Services_PeoplefinderTest::$uid</a> in UNL_Services_PeoplefinderTest.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">UNL_Services_PeoplefinderTest.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/_tests---UNL_Services_PeoplefinderTest.php.php">UNL_Services_PeoplefinderTest.php</a> in UNL_Services_PeoplefinderTest.php</div>
					</dd>
			<dt class="field">
						UNL_Services_Peoplefinder
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_Peoplefinder.php">UNL_Services_Peoplefinder</a> in Peoplefinder.php</div>
							<div class="index-item-description">This is the basic class for utilizing the UNL Peoplefinder service which can  give you various pieces of information about a given uid (uniue user id).</div>
					</dd>
			<dt class="field">
						UNL_Services_PeoplefinderTest
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Services_Peoplefinder/UNL_Services_PeoplefinderTest.php">UNL_Services_PeoplefinderTest</a> in UNL_Services_PeoplefinderTest.php</div>
							<div class="index-item-description">Test class for UNL_Services_Peoplefinder.</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#"></a>
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_Services_Peoplefinder/elementindex.php#t">t</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>