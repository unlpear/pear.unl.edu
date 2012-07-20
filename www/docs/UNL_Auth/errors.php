<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Auth">UNL_Auth</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Auth/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Auth API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Auth/li_UNL_Auth.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#CASPEARAuth_example.php">CASPEARAuth_example.php</a><br />
<a href="#CasZendAuthAdapter.php">CasZendAuthAdapter.php</a><br />
<a href="#CAS_example.php">CAS_example.php</a><br />
<a href="#PEARAuth.php">PEARAuth.php</a><br />
<a href="#SimpleCAS.php">SimpleCAS.php</a><br />
<a href="#SimpleCAS_example.php">SimpleCAS_example.php</a><br />
<a href="#ZendAuth.php">ZendAuth.php</a><br />
<a href="#Zend_SimpleCAS_example.php">Zend_SimpleCAS_example.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - Class UNL_Auth_CAS_PEARAuth parent Auth_Container not found<br />
<a name="CAS.php"></a>
<h1>CAS.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 24</strong> - Page-level DocBlock precedes "require_once 'CAS.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 24</strong> - package default is already in category Default, will now replace with category Authentication<br />
<strong>Warning on line 39</strong> - no @package tag was used in a DocBlock for class UNL_Auth_CAS<br />
<a name="CASPEARAuth_example.php"></a>
<h1>CASPEARAuth_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 25</strong> - File "/Users/bbieber/Documents/workspace/UNL_Auth/docs/examples/CASPEARAuth_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="CasZendAuthAdapter.php"></a>
<h1>CasZendAuthAdapter.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 37</strong> - package default is already in category Authentication, will now replace with category default<br />
<strong>Warning on line 37</strong> - no @package tag was used in a DocBlock for file /Users/bbieber/Documents/workspace/UNL_Auth/UNL/CasZendAuthAdapter.php<br />
<strong>Warning on line 42</strong> - no @package tag was used in a DocBlock for class UNL_CasZendAuthAdapter<br />
<a name="CAS_example.php"></a>
<h1>CAS_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - File "/Users/bbieber/Documents/workspace/UNL_Auth/docs/examples/CAS_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="PEARAuth.php"></a>
<h1>PEARAuth.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - package default is already in category default, will now replace with category Default<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "include_once 'Auth/Container.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 18</strong> - no @package tag was used in a DocBlock for class UNL_Auth_CAS_PEARAuth<br />
<a name="SimpleCAS.php"></a>
<h1>SimpleCAS.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'SimpleCAS/Autoload.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 14</strong> - package default is already in category default, will now replace with category Authentication<br />
<strong>Warning on line 29</strong> - no @package tag was used in a DocBlock for class UNL_Auth_SimpleCAS<br />
<h2>Errors:</h2><br />
<strong>Error on line 14</strong> - require_once include's DocBlock has @package tag, illegal. ignoring tag "@package UNL_Auth"<br />
<a name="SimpleCAS_example.php"></a>
<h1>SimpleCAS_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - File "/Users/bbieber/Documents/workspace/UNL_Auth/docs/examples/SimpleCAS_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="ZendAuth.php"></a>
<h1>ZendAuth.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 33</strong> - package default is already in category Authentication, will now replace with category default<br />
<strong>Warning on line 33</strong> - no @package tag was used in a DocBlock for file /Users/bbieber/Documents/workspace/UNL_Auth/UNL/Auth/SimpleCAS/ZendAuth.php<br />
<strong>Warning on line 38</strong> - no @package tag was used in a DocBlock for class UNL_Auth_SimpleCAS_ZendAuth<br />
<a name="Zend_SimpleCAS_example.php"></a>
<h1>Zend_SimpleCAS_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 24</strong> - File "/Users/bbieber/Documents/workspace/UNL_Auth/docs/examples/Zend_SimpleCAS_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>