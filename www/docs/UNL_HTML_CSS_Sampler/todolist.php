<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_HTML_CSS_Sampler | Todo List</title>";
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
						<div align="center"><h1>Todo List</h1></div>
<h2>UNL_HTML_CSS_Sampler</h2>
<h3><a href="UNL_HTML_CSS_Sampler/_UNL---HTML---CSS---Sampler.php.php">Sampler.php</a></h3>
<ul>
    <li>* Parse all selectors using HTML_CSS built in functions.                  * Sort selectors more accurately.                  * Allow regular expressions for omitted selectors.                  * Allow a custom sample generator function for selectors.</li>
</ul>
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>