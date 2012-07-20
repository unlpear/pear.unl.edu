<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_TidyTemplate | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_TidyTemplate">UNL_TidyTemplate</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_TidyTemplate/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_TidyTemplate API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_TidyTemplate/li_UNL_TidyTemplate.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#test.php">test.php</a><br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 56</strong> - File "/Users/bbieber/Documents/workspace/TidyTemplate/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="test.php"></a>
<h1>test.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - Page-level DocBlock precedes "require_once 'UNL/TidyTemplate.php'", use another DocBlock to document the source element<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:49 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>