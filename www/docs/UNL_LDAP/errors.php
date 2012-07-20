<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | phpDocumentor Parser Errors and Warnings</title>";
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
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#config.sample.php">config.sample.php</a><br />
<a href="#Entry.php">Entry.php</a><br />
<a href="#LDAP.php">LDAP.php</a><br />
<a href="#Result.php">Result.php</a><br />
<a href="#simpleSearch.php">simpleSearch.php</a><br />
<a href="#twodirectories.php">twodirectories.php</a><br />
<a href="#UNL_LDAPTest.php">UNL_LDAPTest.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_LDAPTest parent PHPUnit_Framework_TestCase not found<br />
<a name="config.inc.php"></a>
<h1>config.inc.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - File "/Users/bbieber/Documents/workspace/UNL_LDAP/config.inc.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="config.sample.php"></a>
<h1>config.sample.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/LDAP.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 15</strong> - package default is already in category default, will now replace with category Default<br />
<a name="Entry.php"></a>
<h1>Entry.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/LDAP/Entry/Attribute.php'", use another DocBlock to document the source element<br />
<a name="LDAP.php"></a>
<h1>LDAP.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/LDAP/Exception.php'", use another DocBlock to document the source element<br />
<a name="Result.php"></a>
<h1>Result.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/LDAP/Entry.php'", use another DocBlock to document the source element<br />
<a name="simpleSearch.php"></a>
<h1>simpleSearch.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/LDAP.php'", use another DocBlock to document the source element<br />
<a name="twodirectories.php"></a>
<h1>twodirectories.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 44</strong> - File "/Users/bbieber/Documents/workspace/UNL_LDAP/docs/examples/twodirectories.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="UNL_LDAPTest.php"></a>
<h1>UNL_LDAPTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 19</strong> - Page-level DocBlock precedes "define PHPUNIT_MAIN_METHOD", use another DocBlock to document the source element<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>