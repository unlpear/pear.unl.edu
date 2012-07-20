<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<h1 align="center">README</h1>
<pre>
This code runs the website at http://peoplefinder.unl.edu/

REQUIREMENTS:
PHP 5 with the LDAP extension
Connection credentials for the LDAP directory - contact John Thiltges

SETUP:
To use, copy the config-sample.inc.php to config.inc.php and provide your LDAP
username and password. Then browse to http://localhost/peoplefinder/ and try it out.

TODO:
Move LDAP connection into a singleton class UNL_LDAP
Change renderers to work like Savant/Zend_View
Change UNL_Peoplefinder_Record to use overloading with __get/__set for all attributes

LICENSE
This code is covered by a BSD style license.
http://www1.unl.edu/wdn/wiki/Software_License

</pre>
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:48 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>