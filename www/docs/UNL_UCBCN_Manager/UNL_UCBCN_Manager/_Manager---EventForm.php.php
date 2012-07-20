<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN_Manager | Docs for page EventForm.php</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN_Manager">UNL_UCBCN_Manager</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN_Manager/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN_Manager API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN_Manager/li_UNL_UCBCN_Manager.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="file-name">/Manager/EventForm.php</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-classes">Classes</a>
			|							<a href="#sec-includes">Includes</a>
												</div>
	<div class="info-box-body">	
		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Basic functions related to the event submission form.</p>
<div class="description"><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
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
			|							<a href="#sec-includes">Includes</a>
																		</div>
		<div class="info-box-body">	
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em; vertical-align: top">
						<a href="../UNL_UCBCN_Manager/UNL_UCBCN_Manager_EventForm.php">UNL_UCBCN_Manager_EventForm</a>
					</td>
					<td>
											This class generates a form for an Event.
										</td>
				</tr>
							</table>
		</div>
	</div>

	<a name="sec-includes"></a>	
	<div class="info-box">
		<div class="info-box-title">Includes</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-classes">Classes</a>
				|						<span class="disabled">Includes</span>
														</div>
		<div class="info-box-body">	
			<div class="evenrow">
	
	<div>
		<span class="include-title">
			<span class="include-type">require_once</span>
			(<span class="include-name">'UNL/UCBCN/Manager/jscalendar.php'</span>)
			(line <span class="line-number">14</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
</div>
		</div>
	</div>
	
	
	
	
	<p class="notes" id="credit">
		Documentation generated on Thu, 19 Feb 2009 13:35:50 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>