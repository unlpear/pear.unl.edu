<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_HTML_CSS_Sampler | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_HTML_CSS_Sampler">UNL_HTML_CSS_Sampler</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_HTML_CSS_Sampler/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_HTML_CSS_Sampler API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_HTML_CSS_Sampler/li_UNL_HTML_CSS_Sampler.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#Sampler.php">Sampler.php</a><br />
<a href="#sampler_example.php">sampler_example.php</a><br />
<a href="#sampler_example2.php">sampler_example2.php</a><br />
<a href="#unl_sampler.php">unl_sampler.php</a><br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 52</strong> - File "/Users/bbieber/Documents/workspace/UNL_HTML_CSS_Sampler/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Sampler.php"></a>
<h1>Sampler.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "require_once 'HTML/CSS.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 13</strong> - Unknown tag "@created" used<br />
<a name="sampler_example.php"></a>
<h1>sampler_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 39</strong> - File "/Users/bbieber/Documents/workspace/UNL_HTML_CSS_Sampler/examples/sampler_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="sampler_example2.php"></a>
<h1>sampler_example2.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 43</strong> - File "/Users/bbieber/Documents/workspace/UNL_HTML_CSS_Sampler/examples/sampler_example2.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="unl_sampler.php"></a>
<h1>unl_sampler.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 100</strong> - File "/Users/bbieber/Documents/workspace/UNL_HTML_CSS_Sampler/examples/unl_sampler.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>