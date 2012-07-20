<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_DWT | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_DWT">UNL_DWT</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_DWT/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_DWT API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_DWT/li_UNL_DWT.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#DWT.php">DWT.php</a><br />
<a href="#example_style1.php">example_style1.php</a><br />
<a href="#Generator.php">Generator.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#Region.php">Region.php</a><br />
<a href="#Scanner.php">Scanner.php</a><br />
<a href="#scanner_example.php">scanner_example.php</a><br />
<a href="#Template_style1.php">Template_style1.php</a><br />
<a name="createTemplates.php"></a>
<h1>createTemplates.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 17</strong> - Page-level DocBlock precedes "define UNL_DWT_NO_OVERLOAD", use another DocBlock to document the source element<br />
<a name="DWT.php"></a>
<h1>DWT.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 44</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 45</strong> - Unknown tag "@created" used<br />
<a name="example_style1.php"></a>
<h1>example_style1.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 27</strong> - File "/Users/bbieber/Documents/workspace/UNL_DWT/docs/examples/example_style1.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Generator.php"></a>
<h1>Generator.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 16</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 16</strong> - package default is already in category default, will now replace with category Templates<br />
<strong>Warning on line 16</strong> - Page-level DocBlock precedes "require_once 'UNL/DWT.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 31</strong> - Unknown tag "@created" used<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 65</strong> - File "/Users/bbieber/Documents/workspace/UNL_DWT/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Region.php"></a>
<h1>Region.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 12</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 13</strong> - DocBlock would be page-level, but precedes class "UNL_DWT_Region", use another DocBlock to document the file<br />
<a name="Scanner.php"></a>
<h1>Scanner.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/DWT/Region.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 14</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 25</strong> - Unknown tag "@created" used<br />
<strong>Warning on line 26</strong> - no @package tag was used in a DocBlock for class UNL_DWT_Scanner<br />
<a name="scanner_example.php"></a>
<h1>scanner_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - File "/Users/bbieber/Documents/workspace/UNL_DWT/docs/examples/scanner_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Template_style1.php"></a>
<h1>Template_style1.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - no @package tag was used in a DocBlock for class UNL_DWT_Template_style1<br />
<strong>Warning on line 24</strong> - File "/Users/bbieber/Documents/workspace/UNL_DWT/docs/examples/Template_style1.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:36 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>