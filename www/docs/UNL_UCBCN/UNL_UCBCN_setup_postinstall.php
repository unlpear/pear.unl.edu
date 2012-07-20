<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_setup_postinstall</title>";
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
<h2 class="class-name">Class UNL_UCBCN_setup_postinstall</h2>

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
<p class="short-description">Class used by the PEAR installer which is executed after install to do  post installation tasks such as database creation/updates as well as  replacements and configuration.</p>
		<p class="notes">
			Located in <a class="field" href="_UNL_UCBCN_setup.php.php">/UNL_UCBCN_setup.php</a> (line <span class="field">25</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>



	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</span></div>
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
					<a href="#$createDB" title="details" class="var-name">$createDB</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$databaseExists" title="details" class="var-name">$databaseExists</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$dsn" title="details" class="var-name">$dsn</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#$noDBsetup" title="details" class="var-name">$noDBsetup</a>
				</div>
											</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</span></div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																												
												<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#createDatabase" title="details" class="method-name">createDatabase</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#file_str_replace" title="details" class="method-name">file_str_replace</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$search</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#init" title="details" class="method-name">init</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$lastversion</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#outputData" title="details" class="method-name">outputData</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$msg</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#postProcessPrompts" title="details" class="method-name">postProcessPrompts</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$section</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#run" title="details" class="method-name">run</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$phase</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setupPermissions" title="details" class="method-name">setupPermissions</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$answers</span>)
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
			<a name="var$createDB" id="$createDB"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$createDB</span>
						(line <span class="line-number">27</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$databaseExists" id="$databaseExists"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$databaseExists</span>
						(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$dsn" id="$dsn"><!-- --></A>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$dsn</span>
						(line <span class="line-number">30</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var$noDBsetup" id="$noDBsetup"><!-- --></A>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$noDBsetup</span>
						(line <span class="line-number">29</span>)
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
			<A NAME='method_detail'></A>

<a name="methodcreateDatabase" id="createDatabase"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">createDatabase</span> (line <span class="line-number">90</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Creates or updates the calendar system database.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true or false on success or error.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			createDatabase
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Associative array of responses to the questsions asked.</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfile_str_replace" id="file_str_replace"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">file_str_replace</span> (line <span class="line-number">153</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			file_str_replace
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$search</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$search</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$replace</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$file</span>			</li>
				</ul>
		
			
	</div>
<a name="methodinit" id="init"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">init</span> (line <span class="line-number">32</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			init
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type"></span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$lastversion</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$config</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">&$pkg</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$lastversion</span>			</li>
				</ul>
		
			
	</div>
<a name="methodoutputData" id="outputData"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">outputData</span> (line <span class="line-number">230</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">takes in a string and sends it to the client.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			outputData
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$msg</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$msg</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpostProcessPrompts" id="postProcessPrompts"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">postProcessPrompts</span> (line <span class="line-number">43</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			postProcessPrompts
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$section</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$prompts</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$section</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">53</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			run
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type"></span>&nbsp;<span class="var-name">$phase</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$answers</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$phase</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetupPermissions" id="setupPermissions"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setupPermissions</span> (line <span class="line-number">187</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function calls the backend and inserts the default permissions for the system.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setupPermissions
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$answers</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Mon, 22 Jan 2007 17:11:16 -0600 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.3.1</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>