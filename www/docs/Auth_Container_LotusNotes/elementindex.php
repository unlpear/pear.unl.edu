<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | Auth_Container_LotusNotes | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=Auth_Container_LotusNotes">Auth_Container_LotusNotes</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/Auth_Container_LotusNotes/media/stylesheet.css" />';
$p->titlegraphic = '<h1>Auth_Container_LotusNotes API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/Auth_Container_LotusNotes/li_Auth_Container_LotusNotes.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>Full index</h2>
<h3>Package indexes</h3>
<ul>
	<li><a href="/docs/Auth_Container_LotusNotes/elementindex_Auth_Container_LotusNotes.php">Auth_Container_LotusNotes</a></li>
</ul>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex.html#a">a</a>
</div>

	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						Auth_Container_LotusNotes
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="Auth_Container_LotusNotes/Auth_Container_LotusNotes.php">Auth_Container_LotusNotes</a> in LotusNotes.php</div>
							<div class="index-item-description">Auth container for use with a Lotus Notes LDAP directory.</div>
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
						<span class="include-title">LotusNotes.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="Auth_Container_LotusNotes/_LotusNotes.php.php">LotusNotes.php</a> in LotusNotes.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/Auth_Container_LotusNotes/elementindex.php#a">a</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>