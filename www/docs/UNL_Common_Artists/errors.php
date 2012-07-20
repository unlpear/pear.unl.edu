<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common_Artists | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common_Artists">UNL_Common_Artists</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common_Artists/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common_Artists API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common_Artists/li_UNL_Common_Artists.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#artists_example.php">artists_example.php</a><br />
<a href="#Artists_sculptures.php">Artists_sculptures.php</a><br />
<a href="#config.inc.php">config.inc.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#Sculptures.php">Sculptures.php</a><br />
<a href="#sculpture_example.php">sculpture_example.php</a><br />
<a href="#setupdb.php">setupdb.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_Common_Artists parent DB_DataObject not found<br />
<strong>Warning</strong> - Class UNL_Common_Sculptures parent DB_DataObject not found<br />
<a name="Artists.php"></a>
<h1>Artists.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject.php'", use another DocBlock to document the source element<br />
<a name="artists_example.php"></a>
<h1>artists_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 23</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Artists/examples/artists_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Artists_sculptures.php"></a>
<h1>Artists_sculptures.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject.php'", use another DocBlock to document the source element<br />
<a name="config.inc.php"></a>
<h1>config.inc.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject.php'", use another DocBlock to document the source element<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 56</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Artists/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Sculptures.php"></a>
<h1>Sculptures.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - Page-level DocBlock precedes "require_once 'DB/DataObject.php'", use another DocBlock to document the source element<br />
<a name="sculpture_example.php"></a>
<h1>sculpture_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 24</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Artists/examples/sculpture_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="setupdb.php"></a>
<h1>setupdb.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - File "/Users/bbieber/Documents/workspace/UNL_Common_Artists/setupdb.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:38 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>