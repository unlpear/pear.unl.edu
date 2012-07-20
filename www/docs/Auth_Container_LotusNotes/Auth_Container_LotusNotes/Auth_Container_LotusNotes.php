<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | Auth_Container_LotusNotes | Docs For Class Auth_Container_LotusNotes</title>";
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
			<div class="page-body">			
<h2 class="class-name">Class Auth_Container_LotusNotes</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
											</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Auth container for use with a Lotus Notes LDAP directory.</p>
		<p class="notes">
			Located in <a class="field" href="_LotusNotes.php.php">/LotusNotes.php</a> (line <span class="field">21</span>)
		</p>
		
				
		<pre>Auth_Container_LDAP
   |
   --Auth_Container_LotusNotes</pre>
	
			</div>
</div>





	


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:39 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>