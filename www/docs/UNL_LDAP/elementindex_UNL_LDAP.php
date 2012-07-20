<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_LDAP">UNL_LDAP</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_LDAP/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_LDAP API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_LDAP/li_UNL_LDAP.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_LDAP] element index</h2>
<a href="/docs/UNL_LDAP/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_LDAP.html#a">a</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#e">e</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#k">k</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#m">m</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#n">n</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#p">p</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#r">r</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#v">v</a>
	<a class="index-letter" href="elementindex_UNL_LDAP.html#_">_</a>
</div>

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
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#method__construct">UNL_LDAP_Entry_Attribute::__construct()</a> in Attribute.php</div>
							<div class="index-item-description">construct an ldap attribute object</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#method__construct">UNL_LDAP::__construct()</a> in LDAP.php</div>
							<div class="index-item-description"><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-id"><a href="UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></span><span class="src-sym">::</span><a href="UNL_LDAP/UNL_LDAP.php#methodgetConnection">getConnection</a><span class="src-sym">(</span><span class="src-var">$options</span><span class="src-sym">)</span><span class="src-sym">-&gt;</span><span class="src-id">getAttribute</span><span class="src-sym">(</span><span class="src-str">'bbieber'</span><span class="src-sym">,</span><span class="src-str">'cn'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#method__construct">UNL_LDAP_Result::__construct()</a> in Result.php</div>
							<div class="index-item-description">Construct an LDAP Result object</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry.php#method__construct">UNL_LDAP_Entry::__construct()</a> in Entry.php</div>
							<div class="index-item-description">Construct an LDAP entry object</div>
					</dd>
			<dt class="field">
						<span class="method-title">__destruct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#method__destruct">UNL_LDAP_Result::__destruct()</a> in Result.php</div>
							<div class="index-item-description">frees the ldap result set</div>
					</dd>
			<dt class="field">
						<span class="method-title">__destruct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#method__destruct">UNL_LDAP::__destruct()</a> in LDAP.php</div>
							<div class="index-item-description">destroy the object</div>
					</dd>
			<dt class="field">
						<span class="method-title">__get</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry.php#method__get">UNL_LDAP_Entry::__get()</a> in Entry.php</div>
							<div class="index-item-description">Retrieve the requested attribute</div>
					</dd>
			<dt class="field">
						<span class="method-title">__isset</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry.php#method__isset">UNL_LDAP_Entry::__isset()</a> in Entry.php</div>
							<div class="index-item-description">Determines if a specific attribute is set</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#method__toString">UNL_LDAP_Entry_Attribute::__toString()</a> in Attribute.php</div>
							<div class="index-item-description">Returns the first attribute entry</div>
					</dd>
		</dl>
	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">Attribute.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP---Entry---Attribute.php.php">Attribute.php</a> in Attribute.php</div>
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
						<span class="include-title">config.sample.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_config.sample.php.php">config.sample.php</a> in config.sample.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">connect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodconnect">UNL_LDAP::connect()</a> in LDAP.php</div>
							<div class="index-item-description">Connect &amp; bind to the directory.</div>
					</dd>
			<dt class="field">
						<span class="method-title">count</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodcount">UNL_LDAP_Result::count()</a> in Result.php</div>
							<div class="index-item-description">returns the size of the result</div>
					</dd>
			<dt class="field">
						<span class="method-title">count</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodcount">UNL_LDAP_Entry_Attribute::count()</a> in Attribute.php</div>
							<div class="index-item-description">Return the total number of attributes</div>
					</dd>
			<dt class="field">
						<span class="method-title">current</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodcurrent">UNL_LDAP_Result::current()</a> in Result.php</div>
							<div class="index-item-description">returns the current entry in the result iteration</div>
					</dd>
			<dt class="field">
						<span class="method-title">current</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodcurrent">UNL_LDAP_Entry_Attribute::current()</a> in Attribute.php</div>
							<div class="index-item-description">returns the current attribute iterated over</div>
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
						<span class="method-title">disconnect</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methoddisconnect">UNL_LDAP::disconnect()</a> in LDAP.php</div>
							<div class="index-item-description">unbinds from the ldap directory.</div>
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
						<span class="include-title">Entry.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP---Entry.php.php">Entry.php</a> in Entry.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Exception.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP---Exception.php.php">Exception.php</a> in Exception.php</div>
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
						<span class="method-title">getAttribute</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodgetAttribute">UNL_LDAP::getAttribute()</a> in LDAP.php</div>
							<div class="index-item-description">Get an attribute from LDAP given the LDAP-uid and attribute name.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCity</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetCity">UNL_LDAP_People::getCity()</a> in People.php</div>
							<div class="index-item-description">Returns the 'l' (locality) LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCommonName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetCommonName">UNL_LDAP_People::getCommonName()</a> in People.php</div>
							<div class="index-item-description">Returns the 'cn' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getConnection</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodgetConnection">UNL_LDAP::getConnection()</a> in LDAP.php</div>
							<div class="index-item-description">Get the LDAP connection</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCountry</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetCountry">UNL_LDAP_People::getCountry()</a> in People.php</div>
							<div class="index-item-description">Returns the 'country' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getEmail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetEmail">UNL_LDAP_People::getEmail()</a> in People.php</div>
							<div class="index-item-description">Returns the 'mail' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getFax</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetFax">UNL_LDAP_People::getFax()</a> in People.php</div>
							<div class="index-item-description">Returns the 'facsimiletelephonenumber' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getFirstAttribute</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodgetFirstAttribute">UNL_LDAP::getFirstAttribute()</a> in LDAP.php</div>
							<div class="index-item-description">Return the first attribute of an entry</div>
					</dd>
			<dt class="field">
						<span class="method-title">getFirstName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetFirstName">UNL_LDAP_People::getFirstName()</a> in People.php</div>
							<div class="index-item-description">Returns the 'givenname' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getLastName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetLastName">UNL_LDAP_People::getLastName()</a> in People.php</div>
							<div class="index-item-description">Returns the 'sn' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getLink</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodgetLink">UNL_LDAP::getLink()</a> in LDAP.php</div>
							<div class="index-item-description">returns the ldap connection resource link</div>
					</dd>
			<dt class="field">
						<span class="method-title">getState</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetState">UNL_LDAP_People::getState()</a> in People.php</div>
							<div class="index-item-description">Returns the 'st' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getStreet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetStreet">UNL_LDAP_People::getStreet()</a> in People.php</div>
							<div class="index-item-description">Returns the 'street' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTelephone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetTelephone">UNL_LDAP_People::getTelephone()</a> in People.php</div>
							<div class="index-item-description">Returns the 'telephonenumber' LDAP attribute of the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getZip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php#methodgetZip">UNL_LDAP_People::getZip()</a> in People.php</div>
							<div class="index-item-description">Returns the 'postalcode' LDAP attribute of the user.</div>
					</dd>
		</dl>
	<a name="k"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">k</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">key</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodkey">UNL_LDAP_Result::key()</a> in Result.php</div>
							<div class="index-item-description">returns a key for this entry within the array</div>
					</dd>
			<dt class="field">
						<span class="method-title">key</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodkey">UNL_LDAP_Entry_Attribute::key()</a> in Attribute.php</div>
							<div class="index-item-description">retrieve a unique key for this attribute, in this case it will  be an int</div>
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
						<span class="include-title">LDAP.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP.php.php">LDAP.php</a> in LDAP.php</div>
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
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodmain">UNL_LDAPTest::main()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Runs the test methods of this class.</div>
					</dd>
			<dt class="field">
						<span class="include-title">makepackage.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_makepackage.php.php">makepackage.php</a> in makepackage.php</div>
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
						<span class="method-title">next</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodnext">UNL_LDAP_Result::next()</a> in Result.php</div>
							<div class="index-item-description">Advances the iterator to the next entry</div>
					</dd>
			<dt class="field">
						<span class="method-title">next</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodnext">UNL_LDAP_Entry_Attribute::next()</a> in Attribute.php</div>
							<div class="index-item-description">advance to the next attribute</div>
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
						<span class="var-title">$object</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#var$object">UNL_LDAPTest::$object</a> in UNL_LDAPTest.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#var$options">UNL_LDAP::$options</a> in LDAP.php</div>
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
						<span class="const-title">PHPUNIT_MAIN_METHOD</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_tests---UNL_LDAPTest.php.php#definePHPUNIT_MAIN_METHOD">PHPUNIT_MAIN_METHOD</a> in UNL_LDAPTest.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">People.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP---People.php.php">People.php</a> in People.php</div>
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
						<span class="method-title">rewind</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodrewind">UNL_LDAP_Result::rewind()</a> in Result.php</div>
							<div class="index-item-description">Resets the iterator to the first entry in the result set.</div>
					</dd>
			<dt class="field">
						<span class="method-title">rewind</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodrewind">UNL_LDAP_Entry_Attribute::rewind()</a> in Attribute.php</div>
							<div class="index-item-description">Reset to the first attribute in the set.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Result.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_UNL---LDAP---Result.php.php">Result.php</a> in Result.php</div>
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
						<span class="include-title">simpleSearch.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_docs---examples---simpleSearch.php.php">simpleSearch.php</a> in simpleSearch.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">search</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodsearch">UNL_LDAP::search()</a> in LDAP.php</div>
							<div class="index-item-description">Search the directory for matching entries.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php#methodsetOptions">UNL_LDAP::setOptions()</a> in LDAP.php</div>
							<div class="index-item-description">Set options for the ldap connection.</div>
					</dd>
			<dt class="field">
						<span class="method-title">setUp</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodsetUp">UNL_LDAPTest::setUp()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Sets up the fixture, for example, opens a network connection.</div>
					</dd>
			<dt class="field">
						<span class="method-title">sort</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodsort">UNL_LDAP_Result::sort()</a> in Result.php</div>
							<div class="index-item-description">Sort the returned results by a specific attribute</div>
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
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodtearDown">UNL_LDAPTest::tearDown()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Tears down the fixture, for example, closes a network connection.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetAttribute</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodtestGetAttribute">UNL_LDAPTest::testGetAttribute()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Test get attribute function</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetConnection</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodtestGetConnection">UNL_LDAPTest::testGetConnection()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Just tests that you can get a connection to the server.</div>
					</dd>
			<dt class="field">
						<span class="method-title">testGetFirstAttribute</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php#methodtestGetFirstAttribute">UNL_LDAPTest::testGetFirstAttribute()</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">test getFirstAttribute</div>
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
						<span class="include-title">UNL_LDAPTest.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/_tests---UNL_LDAPTest.php.php">UNL_LDAPTest.php</a> in UNL_LDAPTest.php</div>
					</dd>
			<dt class="field">
						UNL_LDAP
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a> in LDAP.php</div>
							<div class="index-item-description">This class is a singleton class for operating with the UNL LDAP directory.</div>
					</dd>
			<dt class="field">
						UNL_LDAPTest
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAPTest.php">UNL_LDAPTest</a> in UNL_LDAPTest.php</div>
							<div class="index-item-description">Test class for UNL_LDAP.</div>
					</dd>
			<dt class="field">
						UNL_LDAP_Entry
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a> in Entry.php</div>
							<div class="index-item-description">Class for handling an ldap entry</div>
					</dd>
			<dt class="field">
						UNL_LDAP_Entry_Attribute
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php">UNL_LDAP_Entry_Attribute</a> in Attribute.php</div>
							<div class="index-item-description">Class representing an LDAP entry's attribute</div>
					</dd>
			<dt class="field">
						UNL_LDAP_Exception
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Exception.php">UNL_LDAP_Exception</a> in Exception.php</div>
							<div class="index-item-description">Class for exception handling</div>
					</dd>
			<dt class="field">
						UNL_LDAP_People
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_People.php">UNL_LDAP_People</a> in People.php</div>
							<div class="index-item-description">Class for managing records for people.</div>
					</dd>
			<dt class="field">
						UNL_LDAP_Result
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php">UNL_LDAP_Result</a> in Result.php</div>
							<div class="index-item-description">LDAP result record</div>
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
						<span class="method-title">valid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Result.php#methodvalid">UNL_LDAP_Result::valid()</a> in Result.php</div>
							<div class="index-item-description">returns whether this result is valid or not</div>
					</dd>
			<dt class="field">
						<span class="method-title">valid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php#methodvalid">UNL_LDAP_Entry_Attribute::valid()</a> in Attribute.php</div>
							<div class="index-item-description">whether the attributes can be iterated over or not.</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#k">k</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_LDAP/elementindex_UNL_LDAP.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>