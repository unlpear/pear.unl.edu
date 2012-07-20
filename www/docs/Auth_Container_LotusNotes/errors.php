<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | Auth_Container_LotusNotes | phpDocumentor Parser Errors and Warnings</title>";
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
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class Auth_Container_LotusNotes parent Auth_Container_LDAP not found<br />
<a name="LotusNotes.php"></a>
<h1>LotusNotes.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 12</strong> - Page-level DocBlock precedes "require_once 'Auth/Container/LDAP.php'", use another DocBlock to document the source element<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 56</strong> - File "/Users/bbieber/Documents/workspace/Auth_Container_LotusNotes/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:39 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>