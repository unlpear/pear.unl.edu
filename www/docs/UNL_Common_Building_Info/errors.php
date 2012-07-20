<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common_Building_Info | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common_Building_Info">UNL_Common_Building_Info</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common_Building_Info/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common_Building_Info API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common_Building_Info/li_UNL_Common_Building_Info.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#info_example.php">info_example.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a name="Info.php"></a>
<h1>Info.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 9</strong> - Page-level DocBlock precedes "require_once 'UNL/Common/Building.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 12</strong> - no @package tag was used in a DocBlock for class UNL_Common_Building_Info<br />
<a name="info_example.php"></a>
<h1>info_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 29</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Building_Info/examples/info_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 55</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Building_Info/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>