<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Geography_SpatialData_Campus | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Geography_SpatialData_Campus">UNL_Geography_SpatialData_Campus</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Geography_SpatialData_Campus/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Geography_SpatialData_Campus API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Geography_SpatialData_Campus/li_UNL_Geography_SpatialData_Campus.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#spatialdata_example.php">spatialdata_example.php</a><br />
<a name="Campus.php"></a>
<h1>Campus.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - Page-level DocBlock precedes "require_once 'UNL/Common/Building.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 13</strong> - no @package tag was used in a DocBlock for class UNL_Geography_SpatialData_Campus<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 58</strong> - File "/Users/bbieber/Documents/workspace/UNL_Geography_SpatialData_Campus/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="spatialdata_example.php"></a>
<h1>spatialdata_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 30</strong> - File "/Users/bbieber/Documents/workspace/UNL_Geography_SpatialData_Campus/examples/spatialdata_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:38 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>