<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Templates">UNL_Templates</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Templates/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Templates API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Templates/li_UNL_Templates.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_Templates] element index</h2>
<a href="/docs/UNL_Templates/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Templates.html#a">a</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#b">b</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#e">e</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#h">h</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#i">i</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#m">m</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#n">n</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#p">p</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#v">v</a>
	<a class="index-letter" href="elementindex_UNL_Templates.html#_">_</a>
</div>

	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$__template">UNL_Templates_Version2_Secure::$__template</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$__template">UNL_Templates_Version3_Secure::$__template</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$__template">UNL_Templates_Version3_Absolute::$__template</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$__template">UNL_Templates_Version3_Shared_column_left::$__template</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$__template">UNL_Templates_Version3_Shared_column_right::$__template</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$__template">UNL_Templates_Version2_Unlstandardtemplate::$__template</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$__template">UNL_Templates_Version2_Unlframework::$__template</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$__template">UNL_Templates_Version2_Unlaffiliate::$__template</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$__template">UNL_Templates_Version3_Popup::$__template</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$__template">UNL_Templates_Version2_Popup::$__template</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$__template">UNL_Templates_Version3_Liquid::$__template</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$__template">UNL_Templates_Version2_Document::$__template</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$__template">UNL_Templates_Version2_Fixed::$__template</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$__template">UNL_Templates_Version3_Document::$__template</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$__template">UNL_Templates_Version3_Fixed::$__template</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$__template</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$__template">UNL_Templates_Version2_Liquid::$__template</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__call</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#method__call">UNL_Templates_CachingService_CacheLite::__call()</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Scanner.php#method__construct">UNL_Templates_Scanner::__construct()</a> in Scanner.php</div>
							<div class="index-item-description">Construct a remote file.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#method__construct">UNL_Templates::__construct()</a> in Templates.php</div>
							<div class="index-item-description">Construct a UNL_Templates object</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#method__construct">UNL_Templates_CachingService_CacheLite::__construct()</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#method__toString">UNL_Templates::__toString()</a> in Templates.php</div>
							<div class="index-item-description">returns this template as a string.</div>
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
						<span class="method-title">addHeadLink</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodaddHeadLink">UNL_Templates::addHeadLink()</a> in Templates.php</div>
							<div class="index-item-description">Add a link within the head of the page.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addScript</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodaddScript">UNL_Templates::addScript()</a> in Templates.php</div>
							<div class="index-item-description">Add a (java)script to the page.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addScriptDeclaration</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodaddScriptDeclaration">UNL_Templates::addScriptDeclaration()</a> in Templates.php</div>
							<div class="index-item-description">Adds a script declaration to the page.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addStyleDeclaration</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodaddStyleDeclaration">UNL_Templates::addStyleDeclaration()</a> in Templates.php</div>
							<div class="index-item-description">Add a style declaration to the head of the document.</div>
					</dd>
			<dt class="field">
						<span class="method-title">addStyleSheet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodaddStyleSheet">UNL_Templates::addStyleSheet()</a> in Templates.php</div>
							<div class="index-item-description">Add a link to a stylesheet.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Absolute.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Absolute.php.php">Absolute.php</a> in Absolute.php</div>
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
						<span class="var-title">$bigfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$bigfooter">UNL_Templates_Version2_Unlframework::$bigfooter</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$breadcrumbs">UNL_Templates_Version3_Shared_column_right::$breadcrumbs</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$breadcrumbs">UNL_Templates_Version3_Shared_column_left::$breadcrumbs</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$breadcrumbs">UNL_Templates_Version2_Unlaffiliate::$breadcrumbs</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$breadcrumbs">UNL_Templates_Version2_Secure::$breadcrumbs</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$breadcrumbs">UNL_Templates_Version2_Unlframework::$breadcrumbs</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$breadcrumbs">UNL_Templates_Version2_Unlstandardtemplate::$breadcrumbs</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$breadcrumbs">UNL_Templates_Version3_Secure::$breadcrumbs</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$breadcrumbs">UNL_Templates_Version3_Document::$breadcrumbs</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$breadcrumbs">UNL_Templates_Version2_Document::$breadcrumbs</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$breadcrumbs">UNL_Templates_Version2_Fixed::$breadcrumbs</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$breadcrumbs">UNL_Templates_Version3_Fixed::$breadcrumbs</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$breadcrumbs">UNL_Templates_Version3_Liquid::$breadcrumbs</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$breadcrumbs">UNL_Templates_Version2_Liquid::$breadcrumbs</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$breadcrumbs</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$breadcrumbs">UNL_Templates_Version3_Absolute::$breadcrumbs</a> in Absolute.php</div>
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
						<span class="var-title">$cache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#var$cache">UNL_Templates_CachingService_CacheLite::$cache</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$cache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#var$cache">UNL_Templates::$cache</a> in Templates.php</div>
							<div class="index-item-description">Cache object for output caching</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$collegenavigationlist">UNL_Templates_Version2_Secure::$collegenavigationlist</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$collegenavigationlist">UNL_Templates_Version2_Popup::$collegenavigationlist</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$collegenavigationlist">UNL_Templates_Version2_Unlframework::$collegenavigationlist</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$collegenavigationlist">UNL_Templates_Version2_Unlstandardtemplate::$collegenavigationlist</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$collegenavigationlist">UNL_Templates_Version2_Fixed::$collegenavigationlist</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$collegenavigationlist">UNL_Templates_Version2_Liquid::$collegenavigationlist</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$collegenavigationlist</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$collegenavigationlist">UNL_Templates_Version2_Document::$collegenavigationlist</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$contactinfo">UNL_Templates_Version3_Fixed::$contactinfo</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$contactinfo">UNL_Templates_Version3_Shared_column_right::$contactinfo</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$contactinfo">UNL_Templates_Version3_Shared_column_left::$contactinfo</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$contactinfo">UNL_Templates_Version3_Liquid::$contactinfo</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$contactinfo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$contactinfo">UNL_Templates_Version3_Absolute::$contactinfo</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">clean</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#methodclean">UNL_Templates_CachingService_CacheLite::clean()</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">clean</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService.php#methodclean">UNL_Templates_CachingService::clean()</a> in CachingService.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">cleanCache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodcleanCache">UNL_Templates::cleanCache()</a> in Templates.php</div>
							<div class="index-item-description">Cleans the cache.</div>
					</dd>
			<dt class="field">
						<span class="include-title">CacheLite.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---CachingService---CacheLite.php.php">CacheLite.php</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">CachingService.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---CachingService.php.php">CachingService.php</a> in CachingService.php</div>
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
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$doctitle">UNL_Templates_Version2_Secure::$doctitle</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$doctitle">UNL_Templates_Version3_Secure::$doctitle</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$doctitle">UNL_Templates_Version2_Popup::$doctitle</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$doctitle">UNL_Templates_Version3_Shared_column_left::$doctitle</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$doctitle">UNL_Templates_Version3_Shared_column_right::$doctitle</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$doctitle">UNL_Templates_Version2_Unlstandardtemplate::$doctitle</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$doctitle">UNL_Templates_Version2_Unlframework::$doctitle</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$doctitle">UNL_Templates_Version2_Unlaffiliate::$doctitle</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$doctitle">UNL_Templates_Version3_Absolute::$doctitle</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$doctitle">UNL_Templates_Version3_Popup::$doctitle</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$doctitle">UNL_Templates_Version3_Liquid::$doctitle</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$doctitle">UNL_Templates_Version2_Document::$doctitle</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$doctitle">UNL_Templates_Version2_Fixed::$doctitle</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$doctitle">UNL_Templates_Version3_Document::$doctitle</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$doctitle">UNL_Templates_Version2_Liquid::$doctitle</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$doctitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$doctitle">UNL_Templates_Version3_Fixed::$doctitle</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">debug</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methoddebug">UNL_Templates::debug()</a> in Templates.php</div>
							<div class="index-item-description">Debug handler for messages.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Document.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Document.php.php">Document.php</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Document.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Document.php.php">Document.php</a> in Document.php</div>
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
						<span class="include-title">example1.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_docs---examples---example1.php.php">example1.php</a> in example1.php</div>
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
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$footercontent">UNL_Templates_Version2_Secure::$footercontent</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$footercontent">UNL_Templates_Version3_Secure::$footercontent</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$footercontent">UNL_Templates_Version2_Popup::$footercontent</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$footercontent">UNL_Templates_Version3_Shared_column_left::$footercontent</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$footercontent">UNL_Templates_Version3_Shared_column_right::$footercontent</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$footercontent">UNL_Templates_Version2_Unlstandardtemplate::$footercontent</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$footercontent">UNL_Templates_Version2_Unlaffiliate::$footercontent</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$footercontent">UNL_Templates_Version3_Popup::$footercontent</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$footercontent">UNL_Templates_Version3_Liquid::$footercontent</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$footercontent">UNL_Templates_Version3_Document::$footercontent</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$footercontent">UNL_Templates_Version2_Document::$footercontent</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$footercontent">UNL_Templates_Version3_Absolute::$footercontent</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$footercontent">UNL_Templates_Version2_Fixed::$footercontent</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$footercontent">UNL_Templates_Version2_Liquid::$footercontent</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$footercontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$footercontent">UNL_Templates_Version3_Fixed::$footercontent</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">factory</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodfactory">UNL_Templates::factory()</a> in Templates.php</div>
							<div class="index-item-description">The factory returns a template object for any UNL Template style requested:</div>
					</dd>
			<dt class="field">
						<span class="include-title">Fixed.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Fixed.php.php">Fixed.php</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Fixed.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Fixed.php.php">Fixed.php</a> in Fixed.php</div>
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
						<span class="method-title">get</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService.php#methodget">UNL_Templates_CachingService::get()</a> in CachingService.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">get</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#methodget">UNL_Templates_CachingService_CacheLite::get()</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCache</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodgetCache">UNL_Templates::getCache()</a> in Templates.php</div>
							<div class="index-item-description">Attempts to connect to the template server and grabs the latest cache of the  template (.tpl) file. Set options for Cache_Lite in self::$options['cache']</div>
					</dd>
			<dt class="field">
						<span class="method-title">getCachingService</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodgetCachingService">UNL_Templates::getCachingService()</a> in Templates.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getConfig</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3.php#methodgetConfig">UNL_Templates_Version3::getConfig()</a> in Version3.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getConfig</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2.php#methodgetConfig">UNL_Templates_Version2::getConfig()</a> in Version2.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getConfig</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version.php#methodgetConfig">UNL_Templates_Version::getConfig()</a> in Version.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3.php#methodgetTemplate">UNL_Templates_Version3::getTemplate()</a> in Version3.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version.php#methodgetTemplate">UNL_Templates_Version::getTemplate()</a> in Version.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getTemplate</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2.php#methodgetTemplate">UNL_Templates_Version2::getTemplate()</a> in Version2.php</div>
					</dd>
		</dl>
	<a name="h"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">h</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$head">UNL_Templates_Version3_Shared_column_left::$head</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$head">UNL_Templates_Version2_Secure::$head</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$head">UNL_Templates_Version3_Secure::$head</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$head">UNL_Templates_Version3_Shared_column_right::$head</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$head">UNL_Templates_Version2_Unlaffiliate::$head</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$head">UNL_Templates_Version2_Unlstandardtemplate::$head</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$head">UNL_Templates_Version2_Unlframework::$head</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$head">UNL_Templates_Version2_Popup::$head</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$head">UNL_Templates_Version3_Popup::$head</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$head">UNL_Templates_Version3_Document::$head</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$head">UNL_Templates_Version2_Document::$head</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$head">UNL_Templates_Version2_Fixed::$head</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$head">UNL_Templates_Version3_Fixed::$head</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$head">UNL_Templates_Version3_Liquid::$head</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$head">UNL_Templates_Version2_Liquid::$head</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$head</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$head">UNL_Templates_Version3_Absolute::$head</a> in Absolute.php</div>
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
						<span class="var-title">$identitymanagement</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$identitymanagement">UNL_Templates_Version3_Secure::$identitymanagement</a> in Secure.php</div>
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
						<span class="var-title">$leftcolcontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$leftcolcontent">UNL_Templates_Version2_Unlframework::$leftcolcontent</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$leftcollinks">UNL_Templates_Version3_Shared_column_left::$leftcollinks</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$leftcollinks">UNL_Templates_Version3_Absolute::$leftcollinks</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$leftcollinks">UNL_Templates_Version3_Shared_column_right::$leftcollinks</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$leftcollinks">UNL_Templates_Version2_Unlaffiliate::$leftcollinks</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$leftcollinks">UNL_Templates_Version2_Unlstandardtemplate::$leftcollinks</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$leftcollinks">UNL_Templates_Version3_Liquid::$leftcollinks</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$leftcollinks">UNL_Templates_Version2_Secure::$leftcollinks</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$leftcollinks">UNL_Templates_Version2_Liquid::$leftcollinks</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$leftcollinks">UNL_Templates_Version2_Fixed::$leftcollinks</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftcollinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$leftcollinks">UNL_Templates_Version3_Fixed::$leftcollinks</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftRandomPromo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$leftRandomPromo">UNL_Templates_Version2_Unlaffiliate::$leftRandomPromo</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftRandomPromo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$leftRandomPromo">UNL_Templates_Version2_Unlstandardtemplate::$leftRandomPromo</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftRandomPromo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$leftRandomPromo">UNL_Templates_Version2_Liquid::$leftRandomPromo</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$leftRandomPromo</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$leftRandomPromo">UNL_Templates_Version2_Fixed::$leftRandomPromo</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">loadDefaultConfig</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodloadDefaultConfig">UNL_Templates::loadDefaultConfig()</a> in Templates.php</div>
							<div class="index-item-description">Initialize the configuration for the UNL_DWT class</div>
					</dd>
			<dt class="field">
						<span class="method-title">loadSharedcodeFiles</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodloadSharedcodeFiles">UNL_Templates::loadSharedcodeFiles()</a> in Templates.php</div>
							<div class="index-item-description">Loads standard customized content (sharedcode) files from the filesystem.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Liquid.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Liquid.php.php">Liquid.php</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Liquid.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Liquid.php.php">Liquid.php</a> in Liquid.php</div>
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
						<span class="var-title">$maincolcontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$maincolcontent">UNL_Templates_Version2_Unlframework::$maincolcontent</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$maincontent">UNL_Templates_Version2_Unlstandardtemplate::$maincontent</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$maincontentarea">UNL_Templates_Version2_Secure::$maincontentarea</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$maincontentarea">UNL_Templates_Version3_Shared_column_left::$maincontentarea</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$maincontentarea">UNL_Templates_Version3_Absolute::$maincontentarea</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$maincontentarea">UNL_Templates_Version2_Unlaffiliate::$maincontentarea</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$maincontentarea">UNL_Templates_Version2_Popup::$maincontentarea</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$maincontentarea">UNL_Templates_Version3_Shared_column_right::$maincontentarea</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$maincontentarea">UNL_Templates_Version3_Secure::$maincontentarea</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$maincontentarea">UNL_Templates_Version3_Document::$maincontentarea</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$maincontentarea">UNL_Templates_Version2_Document::$maincontentarea</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$maincontentarea">UNL_Templates_Version3_Popup::$maincontentarea</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$maincontentarea">UNL_Templates_Version2_Fixed::$maincontentarea</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$maincontentarea">UNL_Templates_Version2_Liquid::$maincontentarea</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$maincontentarea">UNL_Templates_Version3_Liquid::$maincontentarea</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$maincontentarea</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$maincontentarea">UNL_Templates_Version3_Fixed::$maincontentarea</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">makeIncludeReplacements</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3.php#methodmakeIncludeReplacements">UNL_Templates_Version3::makeIncludeReplacements()</a> in Version3.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">makeIncludeReplacements</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2.php#methodmakeIncludeReplacements">UNL_Templates_Version2::makeIncludeReplacements()</a> in Version2.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">makeIncludeReplacements</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version.php#methodmakeIncludeReplacements">UNL_Templates_Version::makeIncludeReplacements()</a> in Version.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">makeIncludeReplacements</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodmakeIncludeReplacements">UNL_Templates::makeIncludeReplacements()</a> in Templates.php</div>
							<div class="index-item-description">Populates templatedependents files</div>
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
						<span class="var-title">$navcontent</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$navcontent">UNL_Templates_Version2_Unlstandardtemplate::$navcontent</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$navlinks">UNL_Templates_Version3_Shared_column_left::$navlinks</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$navlinks">UNL_Templates_Version3_Shared_column_right::$navlinks</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$navlinks">UNL_Templates_Version2_Unlaffiliate::$navlinks</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$navlinks">UNL_Templates_Version2_Secure::$navlinks</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$navlinks">UNL_Templates_Version3_Secure::$navlinks</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$navlinks">UNL_Templates_Version2_Fixed::$navlinks</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$navlinks">UNL_Templates_Version3_Fixed::$navlinks</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$navlinks">UNL_Templates_Version2_Liquid::$navlinks</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$navlinks">UNL_Templates_Version3_Liquid::$navlinks</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$navlinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$navlinks">UNL_Templates_Version3_Absolute::$navlinks</a> in Absolute.php</div>
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
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$optionalfooter">UNL_Templates_Version3_Shared_column_left::$optionalfooter</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$optionalfooter">UNL_Templates_Version2_Secure::$optionalfooter</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$optionalfooter">UNL_Templates_Version3_Shared_column_right::$optionalfooter</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$optionalfooter">UNL_Templates_Version2_Unlaffiliate::$optionalfooter</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$optionalfooter">UNL_Templates_Version2_Unlstandardtemplate::$optionalfooter</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$optionalfooter">UNL_Templates_Version3_Absolute::$optionalfooter</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$optionalfooter">UNL_Templates_Version2_Popup::$optionalfooter</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$optionalfooter">UNL_Templates_Version2_Document::$optionalfooter</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$optionalfooter">UNL_Templates_Version2_Fixed::$optionalfooter</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$optionalfooter">UNL_Templates_Version3_Fixed::$optionalfooter</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$optionalfooter">UNL_Templates_Version2_Liquid::$optionalfooter</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$optionalfooter</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$optionalfooter">UNL_Templates_Version3_Liquid::$optionalfooter</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$options</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#var$options">UNL_Templates::$options</a> in Templates.php</div>
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
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$pagetitle">UNL_Templates_Version3_Popup::$pagetitle</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$pagetitle">UNL_Templates_Version3_Secure::$pagetitle</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$pagetitle">UNL_Templates_Version3_Shared_column_left::$pagetitle</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$pagetitle">UNL_Templates_Version3_Shared_column_right::$pagetitle</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$pagetitle">UNL_Templates_Version3_Absolute::$pagetitle</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$pagetitle">UNL_Templates_Version3_Fixed::$pagetitle</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$pagetitle">UNL_Templates_Version3_Liquid::$pagetitle</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$pagetitle</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$pagetitle">UNL_Templates_Version3_Document::$pagetitle</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Popup.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Popup.php.php">Popup.php</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Popup.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Popup.php.php">Popup.php</a> in Popup.php</div>
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
						<span class="var-title">$sharedcolumn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$sharedcolumn">UNL_Templates_Version3_Shared_column_left::$sharedcolumn</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$sharedcolumn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$sharedcolumn">UNL_Templates_Version3_Shared_column_right::$sharedcolumn</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$shelf</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$shelf">UNL_Templates_Version2_Unlstandardtemplate::$shelf</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$shelf</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$shelf">UNL_Templates_Version2_Unlframework::$shelf</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$shelf</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$shelf">UNL_Templates_Version2_Unlaffiliate::$shelf</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$siteheader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$siteheader">UNL_Templates_Version2_Unlaffiliate::$siteheader</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$siteheader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$siteheader">UNL_Templates_Version2_Unlframework::$siteheader</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$siteheader</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$siteheader">UNL_Templates_Version2_Unlstandardtemplate::$siteheader</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">save</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php#methodsave">UNL_Templates_CachingService_CacheLite::save()</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">save</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService.php#methodsave">UNL_Templates_CachingService::save()</a> in CachingService.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setCachingService</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodsetCachingService">UNL_Templates::setCachingService()</a> in Templates.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#methodstaticGet">UNL_Templates_Version3_Shared_column_left::staticGet()</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#methodstaticGet">UNL_Templates_Version2_Unlaffiliate::staticGet()</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#methodstaticGet">UNL_Templates_Version3_Shared_column_right::staticGet()</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#methodstaticGet">UNL_Templates_Version2_Unlstandardtemplate::staticGet()</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#methodstaticGet">UNL_Templates_Version2_Unlframework::staticGet()</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#methodstaticGet">UNL_Templates_Version2_Secure::staticGet()</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#methodstaticGet">UNL_Templates_Version2_Liquid::staticGet()</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#methodstaticGet">UNL_Templates_Version3_Liquid::staticGet()</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#methodstaticGet">UNL_Templates_Version3_Fixed::staticGet()</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#methodstaticGet">UNL_Templates_Version2_Fixed::staticGet()</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#methodstaticGet">UNL_Templates_Version2_Document::staticGet()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#methodstaticGet">UNL_Templates_Version3_Document::staticGet()</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#methodstaticGet">UNL_Templates_Version3_Popup::staticGet()</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#methodstaticGet">UNL_Templates_Version2_Popup::staticGet()</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#methodstaticGet">UNL_Templates_Version3_Absolute::staticGet()</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">staticGet</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#methodstaticGet">UNL_Templates_Version3_Secure::staticGet()</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Scanner.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Scanner.php.php">Scanner.php</a> in Scanner.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Secure.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Secure.php.php">Secure.php</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Secure.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Secure.php.php">Secure.php</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Shared_column_left.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Shared_column_left.php.php">Shared_column_left.php</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Shared_column_right.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3---Shared_column_right.php.php">Shared_column_right.php</a> in Shared_column_right.php</div>
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
						<span class="var-title">$template_version</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#var$template_version">UNL_Templates::$template_version</a> in Templates.php</div>
							<div class="index-item-description">The version of the templates we're using.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php#var$titlegraphic">UNL_Templates_Version3_Shared_column_right::$titlegraphic</a> in Shared_column_right.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php#var$titlegraphic">UNL_Templates_Version2_Secure::$titlegraphic</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php#var$titlegraphic">UNL_Templates_Version3_Shared_column_left::$titlegraphic</a> in Shared_column_left.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php#var$titlegraphic">UNL_Templates_Version2_Unlaffiliate::$titlegraphic</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php#var$titlegraphic">UNL_Templates_Version2_Unlstandardtemplate::$titlegraphic</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php#var$titlegraphic">UNL_Templates_Version2_Unlframework::$titlegraphic</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php#var$titlegraphic">UNL_Templates_Version3_Absolute::$titlegraphic</a> in Absolute.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php#var$titlegraphic">UNL_Templates_Version3_Secure::$titlegraphic</a> in Secure.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php#var$titlegraphic">UNL_Templates_Version3_Fixed::$titlegraphic</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php#var$titlegraphic">UNL_Templates_Version2_Fixed::$titlegraphic</a> in Fixed.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php#var$titlegraphic">UNL_Templates_Version3_Document::$titlegraphic</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php#var$titlegraphic">UNL_Templates_Version2_Document::$titlegraphic</a> in Document.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php#var$titlegraphic">UNL_Templates_Version2_Popup::$titlegraphic</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php#var$titlegraphic">UNL_Templates_Version3_Liquid::$titlegraphic</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php#var$titlegraphic">UNL_Templates_Version2_Liquid::$titlegraphic</a> in Liquid.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$titlegraphic</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php#var$titlegraphic">UNL_Templates_Version3_Popup::$titlegraphic</a> in Popup.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">toHtml</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#methodtoHtml">UNL_Templates::toHtml()</a> in Templates.php</div>
							<div class="index-item-description">Returns the page in HTML form.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Templates.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates.php.php">Templates.php</a> in Templates.php</div>
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
						<span class="include-title">Unlaffiliate.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Unlaffiliate.php.php">Unlaffiliate.php</a> in Unlaffiliate.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Unlframework.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Unlframework.php.php">Unlframework.php</a> in Unlframework.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Unlstandardtemplate.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2---Unlstandardtemplate.php.php">Unlstandardtemplate.php</a> in Unlstandardtemplate.php</div>
					</dd>
			<dt class="field">
						UNL_Templates
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php">UNL_Templates</a> in Templates.php</div>
							<div class="index-item-description">Allows you to create UNL Template based HTML pages through an object  oriented interface.</div>
					</dd>
			<dt class="field">
						UNL_Templates_CachingService
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService.php">UNL_Templates_CachingService</a> in CachingService.php</div>
							<div class="index-item-description">An interface for a caching service.</div>
					</dd>
			<dt class="field">
						UNL_Templates_CachingService_CacheLite
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_CachingService_CacheLite.php">UNL_Templates_CachingService_CacheLite</a> in CacheLite.php</div>
					</dd>
			<dt class="field">
						UNL_Templates_Scanner
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Scanner.php">UNL_Templates_Scanner</a> in Scanner.php</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version.php">UNL_Templates_Version</a> in Version.php</div>
							<div class="index-item-description">Interface for a version of the template files.</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2.php">UNL_Templates_Version2</a> in Version2.php</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Document
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Document.php">UNL_Templates_Version2_Document</a> in Document.php</div>
							<div class="index-item-description">Document template object.</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Fixed
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Fixed.php">UNL_Templates_Version2_Fixed</a> in Fixed.php</div>
							<div class="index-item-description">Fixed width template object.</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Liquid
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Liquid.php">UNL_Templates_Version2_Liquid</a> in Liquid.php</div>
							<div class="index-item-description">Liquid width template object</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Popup
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Popup.php">UNL_Templates_Version2_Popup</a> in Popup.php</div>
							<div class="index-item-description">popup template object</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Secure
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Secure.php">UNL_Templates_Version2_Secure</a> in Secure.php</div>
							<div class="index-item-description">Secure template object</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Unlaffiliate
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlaffiliate.php">UNL_Templates_Version2_Unlaffiliate</a> in Unlaffiliate.php</div>
							<div class="index-item-description">Allows you to create UNL Template based HTML pages through an object  oriented interface.</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Unlframework
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlframework.php">UNL_Templates_Version2_Unlframework</a> in Unlframework.php</div>
							<div class="index-item-description">Unlframework template object</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version2_Unlstandardtemplate
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version2_Unlstandardtemplate.php">UNL_Templates_Version2_Unlstandardtemplate</a> in Unlstandardtemplate.php</div>
							<div class="index-item-description">Unlstandardtemplate object</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3.php">UNL_Templates_Version3</a> in Version3.php</div>
							<div class="index-item-description">Base class for Version 3 (2009) template files.</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Absolute
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Absolute.php">UNL_Templates_Version3_Absolute</a> in Absolute.php</div>
							<div class="index-item-description">Template Definition for absolute.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Document
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Document.php">UNL_Templates_Version3_Document</a> in Document.php</div>
							<div class="index-item-description">Template Definition for document.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Fixed
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Fixed.php">UNL_Templates_Version3_Fixed</a> in Fixed.php</div>
							<div class="index-item-description">Template Definition for fixed.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Liquid
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Liquid.php">UNL_Templates_Version3_Liquid</a> in Liquid.php</div>
							<div class="index-item-description">Template Definition for liquid.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Popup
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Popup.php">UNL_Templates_Version3_Popup</a> in Popup.php</div>
							<div class="index-item-description">Template Definition for popup.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Secure
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Secure.php">UNL_Templates_Version3_Secure</a> in Secure.php</div>
							<div class="index-item-description">Template Definition for secure.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Shared_column_left
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_left.php">UNL_Templates_Version3_Shared_column_left</a> in Shared_column_left.php</div>
							<div class="index-item-description">Template definition for shared_column_left.dwt</div>
					</dd>
			<dt class="field">
						UNL_Templates_Version3_Shared_column_right
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates_Version3_Shared_column_right.php">UNL_Templates_Version3_Shared_column_right</a> in Shared_column_right.php</div>
							<div class="index-item-description">Template Definition for shared_column_right.dwt</div>
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
						<span class="include-title">Version.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version.php.php">Version.php</a> in Version.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Version2.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version2.php.php">Version2.php</a> in Version2.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Version3.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/_UNL---Templates---Version3.php.php">Version3.php</a> in Version3.php</div>
					</dd>
			<dt class="field">
						VERSION2
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#constVERSION2">UNL_Templates::VERSION2</a> in Templates.php</div>
					</dd>
			<dt class="field">
						VERSION3
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Templates/UNL_Templates.php#constVERSION3">UNL_Templates::VERSION3</a> in Templates.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#h">h</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#i">i</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_Templates/elementindex_UNL_Templates.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>