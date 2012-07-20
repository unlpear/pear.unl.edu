<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | </title>";
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
						<a name="top"></a>
<h2>[UNL_Auth] element index</h2>
<a href="/docs/UNL_Auth/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Auth.html#a">a</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#m">m</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#p">p</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#z">z</a>
	<a class="index-letter" href="elementindex_UNL_Auth.html#_">_</a>
</div>

	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$_instance</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#var$_instance">UNL_Auth::$_instance</a> in Auth.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#method__construct">UNL_Auth_CAS_PEARAuth::__construct()</a> in PEARAuth.php</div>
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
						<span class="include-title">Auth.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/_UNL---Auth.php.php">Auth.php</a> in Auth.php</div>
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
						<span class="var-title">$cas</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#var$cas">UNL_Auth_CAS_PEARAuth::$cas</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$cas_options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#var$cas_options">UNL_Auth_CAS::$cas_options</a> in CAS.php</div>
							<div class="index-item-description">Options for the CAS server</div>
					</dd>
			<dt class="field">
						<span class="var-title">$client</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#var$client">UNL_Auth_SimpleCAS::$client</a> in SimpleCAS.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">checkAuth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodcheckAuth">UNL_Auth_CAS_PEARAuth::checkAuth()</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">CAS.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/_UNL---Auth---CAS.php.php">CAS.php</a> in CAS.php</div>
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
						<span class="method-title">discoverAndReturn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#methoddiscoverAndReturn">UNL_Auth::discoverAndReturn()</a> in Auth.php</div>
							<div class="index-item-description">This is a class used to discover and return a new class based given a class  name and file.</div>
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
						<span class="method-title">factory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#methodfactory">UNL_Auth::factory()</a> in Auth.php</div>
							<div class="index-item-description">Abstract factory, used to get drivers for any of the authentication methods  on campus.</div>
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
						<span class="method-title">getAuth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodgetAuth">UNL_Auth_CAS_PEARAuth::getAuth()</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getInstance</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#methodgetInstance">UNL_Auth_SimpleCAS::getInstance()</a> in SimpleCAS.php</div>
							<div class="index-item-description">get a singleton instance of this class</div>
					</dd>
			<dt class="field">
						<span class="method-title">getInstance</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodgetInstance">UNL_Auth_CAS::getInstance()</a> in CAS.php</div>
							<div class="index-item-description">get a singleton instance of this class</div>
					</dd>
			<dt class="field">
						<span class="method-title">getInstance</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#methodgetInstance">UNL_Auth::getInstance()</a> in Auth.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getPEARAuth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodgetPEARAuth">UNL_Auth_CAS_PEARAuth::getPEARAuth()</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodgetUid">UNL_Auth_CAS::getUid()</a> in CAS.php</div>
							<div class="index-item-description">Stores the LDAP-uid internally in this instance of the class.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodgetUser">UNL_Auth_CAS::getUser()</a> in CAS.php</div>
							<div class="index-item-description">Get the LDAP-uid.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUser</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#methodgetUser">UNL_Auth_SimpleCAS::getUser()</a> in SimpleCAS.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUsername</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodgetUsername">UNL_Auth_CAS_PEARAuth::getUsername()</a> in PEARAuth.php</div>
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
						<span class="var-title">$isAuth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#var$isAuth">UNL_Auth_SimpleCAS::$isAuth</a> in SimpleCAS.php</div>
							<div class="index-item-description">Boolean flag to if the user is authenticated or not.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$isAuth</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#var$isAuth">UNL_Auth_CAS::$isAuth</a> in CAS.php</div>
							<div class="index-item-description">Boolean flag to if the user is authenticated or not.</div>
					</dd>
			<dt class="field">
						<span class="method-title">isLoggedIn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#methodisLoggedIn">UNL_Auth_SimpleCAS::isLoggedIn()</a> in SimpleCAS.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">isLoggedIn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodisLoggedIn">UNL_Auth_CAS::isLoggedIn()</a> in CAS.php</div>
							<div class="index-item-description">Checks to see if the user is logged in.</div>
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
						<span class="method-title">login</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#methodlogin">UNL_Auth_SimpleCAS::login()</a> in SimpleCAS.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">login</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodlogin">UNL_Auth_CAS::login()</a> in CAS.php</div>
							<div class="index-item-description">Log in the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">login</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodlogin">UNL_Auth_CAS_PEARAuth::login()</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">logout</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#methodlogout">UNL_Auth_SimpleCAS::logout()</a> in SimpleCAS.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">logout</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#methodlogout">UNL_Auth_CAS::logout()</a> in CAS.php</div>
							<div class="index-item-description">Log out the user.</div>
					</dd>
			<dt class="field">
						<span class="method-title">logout</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php#methodlogout">UNL_Auth_CAS_PEARAuth::logout()</a> in PEARAuth.php</div>
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
						<span class="include-title">makepackage.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/_makepackage.php.php">makepackage.php</a> in makepackage.php</div>
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
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#var$options">UNL_Auth_SimpleCAS::$options</a> in SimpleCAS.php</div>
							<div class="index-item-description">Options for the CAS server</div>
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
						<span class="method-title">PEARFactory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#methodPEARFactory">UNL_Auth::PEARFactory()</a> in Auth.php</div>
							<div class="index-item-description">Returns an auth container for use with systems compatible with PEAR Auth</div>
					</dd>
			<dt class="field">
						<span class="include-title">PEARAuth.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/_UNL---Auth---CAS---PEARAuth.php.php">PEARAuth.php</a> in PEARAuth.php</div>
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
						<span class="include-title">SimpleCAS.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/_UNL---Auth---SimpleCAS.php.php">SimpleCAS.php</a> in SimpleCAS.php</div>
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
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php#var$uid">UNL_Auth_SimpleCAS::$uid</a> in SimpleCAS.php</div>
							<div class="index-item-description">$uid is the LDAP uid value of the authenticated user.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php#var$uid">UNL_Auth_CAS::$uid</a> in CAS.php</div>
							<div class="index-item-description">$uid is the LDAP uid value of the authenticated user.</div>
					</dd>
			<dt class="field">
						UNL_Auth
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php">UNL_Auth</a> in Auth.php</div>
							<div class="index-item-description">This is a generic authentication framework for UNL which will return customized  containers for use at UNL.</div>
					</dd>
			<dt class="field">
						UNL_Auth_CAS
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS.php">UNL_Auth_CAS</a> in CAS.php</div>
							<div class="index-item-description">UNL_Auth_CAS</div>
					</dd>
			<dt class="field">
						UNL_Auth_CAS_PEARAuth
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_CAS_PEARAuth.php">UNL_Auth_CAS_PEARAuth</a> in PEARAuth.php</div>
					</dd>
			<dt class="field">
						UNL_Auth_SimpleCAS
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth_SimpleCAS.php">UNL_Auth_SimpleCAS</a> in SimpleCAS.php</div>
							<div class="index-item-description">UNL_Auth_SimpleCAS</div>
					</dd>
		</dl>
	<a name="z"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">z</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">ZendFactory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Auth/UNL_Auth.php#methodZendFactory">UNL_Auth::ZendFactory()</a> in Auth.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#z">z</a>
	<a class="index-letter" href="/docs/UNL_Auth/elementindex_UNL_Auth.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>