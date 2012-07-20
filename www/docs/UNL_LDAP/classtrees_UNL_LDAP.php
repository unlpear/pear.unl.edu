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
						
<!-- Start of Class Data -->
<h2>
	
</h2>
<h2>Root class UNL_LDAP</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP.php">UNL_LDAP</a></li></ul>

<h2>Root class UNL_LDAP_Entry</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a></li></ul>

<h2>Root class UNL_LDAP_Entry_Attribute</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP_Entry_Attribute.php">UNL_LDAP_Entry_Attribute</a></li></ul>

<h2>Root class UNL_LDAP_People</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP_People.php">UNL_LDAP_People</a></li></ul>

<h2>Root class UNL_LDAP_Result</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP_Result.php">UNL_LDAP_Result</a></li></ul>

<h2>Root class Exception</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAP_Exception.php">UNL_LDAP_Exception</a></li></ul>

<h2>Root class PHPUnit_Framework_TestCase</h2>
<ul>
<li><a href="UNL_LDAP/UNL_LDAPTest.php">UNL_LDAPTest</a></li></ul>

	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:46 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>