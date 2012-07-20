<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Common_Building_Info | Docs For Class UNL_Common_Building_Info</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Common_Building_Info">UNL_Common_Building_Info</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Common_Building_Info/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Common_Building_Info API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Common_Building_Info/li_UNL_Common_Building_Info.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class UNL_Common_Building_Info</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
													<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
		<p class="notes">
			Located in <a class="field" href="_Info.php.php">/Info.php</a> (line <span class="field">12</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>



	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
																				<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var_db_file" title="details" class="var-name">$db_file</a>
				</div>
																				<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_bldgs" title="details" class="var-name">$bldgs</a>
				</div>
																			</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																												<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getDataDir" title="details" class="method-name">getDataDir</a>
										()
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getDB" title="details" class="method-name">getDB</a>
										()
									</div>
																								<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getTableDefinition" title="details" class="method-name">getTableDefinition</a>
										()
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#importCSV" title="details" class="method-name">importCSV</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$table</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$filename</span>)
									</div>
																<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#tableExists" title="details" class="method-name">tableExists</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$table</span>)
									</div>
																								<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#__connect" title="details" class="method-name">__connect</a>
										()
									</div>
								
												<div class="method-definition">
											<span class="method-result">UNL_Common_Building_Info</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#buildingExists" title="details" class="method-name">buildingExists</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$code</span>)
									</div>
																																<div class="method-definition">
											<span class="method-result">string</span>
										<a href="#getHtml" title="details" class="method-name">getHtml</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$code</span>)
									</div>
																																								<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#_checkDB" title="details" class="method-name">_checkDB</a>
										()
									</div>
																</div>
		</div>
	</div>		

	<a name="sec-vars"></a>
	<div class="info-box">
		<div class="info-box-title">Variables</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
										<a href="#sec-var-summary">Vars</a> (<span class="disabled">details</span>)
						
			
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var_db_file" id="var_db_file"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$db_file</span>
			 = <span class="var-default"> 'building_info.sqlite'</span>			(line <span class="line-number">16</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
<a name="var_bldgs" id="var_bldgs"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$bldgs</span>
						(line <span class="line-number">14</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	
		
		

</div>
						
		</div>
	</div>
	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>
<a name="methodgetDataDir" id="getDataDir"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method getDataDir</span> (line <span class="line-number">102</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getDataDir
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetDB" id="getDB"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getDB</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getDB
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodgetTableDefinition" id="getTableDefinition"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method getTableDefinition</span> (line <span class="line-number">110</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getTableDefinition
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodimportCSV" id="importCSV"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method importCSV</span> (line <span class="line-number">78</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			importCSV
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$table</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$filename</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$table</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$filename</span>			</li>
				</ul>
		
			
	</div>
<a name="methodtableExists" id="tableExists"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">static method tableExists</span> (line <span class="line-number">63</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			tableExists
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$table</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$table</span>			</li>
				</ul>
		
			
	</div>
<a name="method__connect" id="__connect"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method __connect</span> (line <span class="line-number">70</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			__connect
		</span>
				()
			</div>
	
		
			
	</div>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">20</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">UNL_Common_Building_Info</span>
		<span class="method-name">
			__construct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodbuildingExists" id="buildingExists"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">buildingExists</span> (line <span class="line-number">30</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Checks if a building with the given code exists.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true|false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			buildingExists
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$code</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$code</span><span class="var-description">: Building code.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodgetHtml" id="getHtml"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">getHtml</span> (line <span class="line-number">41</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns a HTML snippet of information about a building on campus.</p>
	<ul class="tags">
				<li><span class="field">return:</span> Snippet of text description.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">string</span>
		<span class="method-name">
			getHtml
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$code</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$code</span><span class="var-description">: Building Code for the building you want coordinates of.</span>			</li>
				</ul>
		
			
	</div>
<a name="method_checkDB" id="_checkDB"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">_checkDB</span> (line <span class="line-number">94</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			_checkDB
		</span>
				()
			</div>
	
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:37 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>