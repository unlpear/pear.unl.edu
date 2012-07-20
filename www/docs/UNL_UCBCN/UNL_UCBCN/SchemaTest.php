<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class SchemaTest</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2></h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_UCBCN/li_UNL_UCBCN.php');
$p->leftRandomPromo = '';
ob_start();
?>
			<div class="page-body">			
<h2 class="class-name">Class SchemaTest</h2>

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
<p class="short-description">This class can be used by PHPUnit to test the UNL_UCBCN database schema.</p>
		<p class="notes">
			Located in <a class="field" href="_tests---SchemaTest.php.php">/tests/SchemaTest.php</a> (line <span class="field">20</span>)
		</p>
		
				
		<pre>PHPUnit_Framework_TestCase
   |
   --SchemaTest</pre>
	
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
					<span class="var-type">mixed</span>
					<a href="#var_backup_extension" title="details" class="var-name">$backup_extension</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_database" title="details" class="var-name">$database</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_driver_input_file" title="details" class="var-name">$driver_input_file</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_dsn" title="details" class="var-name">$dsn</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_options" title="details" class="var-name">$options</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_schema" title="details" class="var-name">$schema</a>
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
											<span class="method-result">void</span>
										<a href="#MDB2_Schema_Test" title="details" class="method-name">MDB2_Schema_Test</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$name</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#methodExists" title="details" class="method-name">methodExists</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$class</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$name</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setUp" title="details" class="method-name">setUp</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#tearDown" title="details" class="method-name">tearDown</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#testCreateDatabase" title="details" class="method-name">testCreateDatabase</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#testUpdateDatabase" title="details" class="method-name">testUpdateDatabase</a>
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
			<a name="var_backup_extension" id="var_backup_extension"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$backup_extension</span>
			 = <span class="var-default"> '.before'</span>			(line <span class="line-number">32</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_database" id="var_database"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$database</span>
						(line <span class="line-number">26</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_driver_input_file" id="var_driver_input_file"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$driver_input_file</span>
			 = <span class="var-default"> '../UNL_UCBCN_db.xml'</span>			(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_dsn" id="var_dsn"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$dsn</span>
						(line <span class="line-number">22</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_options" id="var_options"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$options</span>
						(line <span class="line-number">24</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_schema" id="var_schema"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$schema</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

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

<a name="methodMDB2_Schema_Test" id="MDB2_Schema_Test"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">MDB2_Schema_Test</span> (line <span class="line-number">34</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			MDB2_Schema_Test
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$name</span>			</li>
				</ul>
		
			
	</div>
<a name="methodmethodExists" id="methodExists"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">methodExists</span> (line <span class="line-number">63</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			methodExists
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$class</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$class</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$name</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetUp" id="setUp"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setUp</span> (line <span class="line-number">38</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setUp
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtearDown" id="tearDown"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">tearDown</span> (line <span class="line-number">55</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			tearDown
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtestCreateDatabase" id="testCreateDatabase"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">testCreateDatabase</span> (line <span class="line-number">73</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			testCreateDatabase
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodtestUpdateDatabase" id="testUpdateDatabase"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">testUpdateDatabase</span> (line <span class="line-number">97</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			testUpdateDatabase
		</span>
				()
			</div>
	
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 17 Sep 2007 10:34:34 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.0</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>