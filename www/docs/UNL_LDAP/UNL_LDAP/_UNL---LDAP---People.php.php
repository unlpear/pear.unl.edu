<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs for page People.php</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_LDAP">UNL_LDAP</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_LDAP/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_LDAP API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_LDAP/li_UNL_LDAP.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="file-name">/UNL/LDAP/People.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-classes">Classes</a>
														</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">A class for obtaining info about People from the LDAP directory.</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-inc">include_once&nbsp;</span><span class="src-str">'UNL/LDAP.php'</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-inc">include_once&nbsp;</span><span class="src-str">'UNL/LDAP/People.php'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;</div></li>
<li><div class="src-line">&nbsp;echo&nbsp;<span class="src-id"><a href="../UNL_LDAP/UNL_LDAP_People.php">UNL_LDAP_People</a></span><span class="src-sym">::</span><a href="../UNL_LDAP/UNL_LDAP_People.php#methodgetCommonName">getCommonName</a><span class="src-sym">(</span><span class="src-str">'bbieber2'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
</ol></div></p><p>PHP version 5</p><p>$Id$</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		
			</div>
</div>
		
	<a name="sec-classes"></a>	
	<div class="info-box">
		<div class="info-box-title">Classes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Classes</span>
																	</div>
		<div class="info-box-body">	
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em; vertical-align: top">
						<a href="../UNL_LDAP/UNL_LDAP_People.php">UNL_LDAP_People</a>
					</td>
					<td>
											Class for managing records for people.
										</td>
				</tr>
							</table>
		</div>
	</div>

	
	
	
	
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 12:59:47 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>