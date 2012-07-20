<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_UCBCN | Docs For Class UNL_UCBCN_setup_postinstall</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_UCBCN">UNL_UCBCN</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_UCBCN/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_UCBCN API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
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
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://code.google.com/p/unl-event-publisher/">http://code.google.com/p/unl-event-publisher/</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---UCBCN_setup.php.php">/UNL/UCBCN_setup.php</a> (line <span class="field">36</span>)
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
					<span class="var-type">mixed</span>
					<a href="#var_createDB" title="details" class="var-name">$createDB</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_databaseExists" title="details" class="var-name">$databaseExists</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_data_dir" title="details" class="var-name">$data_dir</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_dsn" title="details" class="var-name">$dsn</a>
				</div>
																<div class="var-title">
					<span class="var-type">mixed</span>
					<a href="#var_noDBsetup" title="details" class="var-name">$noDBsetup</a>
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
											<span class="method-result">bool</span>
										<a href="#createDatabase" title="details" class="method-name">createDatabase</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#databaseExists" title="details" class="method-name">databaseExists</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$db_name</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#file_str_replace" title="details" class="method-name">file_str_replace</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$search</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#handleDatabase" title="details" class="method-name">handleDatabase</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">true</span>
										<a href="#init" title="details" class="method-name">init</a>
											(<span class="var-type">PEAR_Config</span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type">unknown_type</span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$lastversion</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#outputData" title="details" class="method-name">outputData</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$msg</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">array</span>
										<a href="#postProcessPrompts" title="details" class="method-name">postProcessPrompts</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$section</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#run" title="details" class="method-name">run</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$phase</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#setDSN" title="details" class="method-name">setDSN</a>
											(<span class="var-type">$answers</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">true</span>
										<a href="#setupEventTypes" title="details" class="method-name">setupEventTypes</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">true</span>
										<a href="#setupPermissions" title="details" class="method-name">setupPermissions</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">true</span>
										<a href="#setupSponsors" title="details" class="method-name">setupSponsors</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#upgradeDatabase" title="details" class="method-name">upgradeDatabase</a>
											(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
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
			<a name="var_createDB" id="var_createDB"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$createDB</span>
						(line <span class="line-number">38</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_databaseExists" id="var_databaseExists"><!-- --></a>
<div class="oddrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$databaseExists</span>
						(line <span class="line-number">39</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_data_dir" id="var_data_dir"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$data_dir</span>
			 = <span class="var-default"> '@DATA_DIR@/UNL_UCBCN'</span>			(line <span class="line-number">42</span>)
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
						(line <span class="line-number">41</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	
	
		
		

</div>
<a name="var_noDBsetup" id="var_noDBsetup"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			<span class="var-type">mixed</span>
			<span class="var-name">$noDBsetup</span>
						(line <span class="line-number">40</span>)
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

<a name="methodcreateDatabase" id="createDatabase"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">createDatabase</span> (line <span class="line-number">170</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Create an empty database for use.</p>
	
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
				<span class="var-name">$answers</span><span class="var-description">: answers to questions</span>			</li>
				</ul>
		
			
	</div>
<a name="methoddatabaseExists" id="databaseExists"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">databaseExists</span> (line <span class="line-number">266</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">checks if the database exists already, or not</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			databaseExists
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$db_name</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$db_name</span><span class="var-description">: Database name</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfile_str_replace" id="file_str_replace"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">file_str_replace</span> (line <span class="line-number">304</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Replace text within a file</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			file_str_replace
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$search</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$replace</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$file</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$search</span><span class="var-description">: Text to search for</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$replace</span><span class="var-description">: What to replace with</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$file</span><span class="var-description">: Filename to make replacements in</span>			</li>
				</ul>
		
			
	</div>
<a name="methodhandleDatabase" id="handleDatabase"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">handleDatabase</span> (line <span class="line-number">133</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">handle database postinstall script</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			handleDatabase
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: responses</span>			</li>
				</ul>
		
			
	</div>
<a name="methodinit" id="init"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">init</span> (line <span class="line-number">53</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">initialize the post install script</p>
	
	<div class="method-signature">
		<span class="method-result">true</span>
		<span class="method-name">
			init
		</span>
					(<span class="var-type">PEAR_Config</span>&nbsp;<span class="var-name">&$config</span>, <span class="var-type">unknown_type</span>&nbsp;<span class="var-name">&$pkg</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$lastversion</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">PEAR_Config</span>
				<span class="var-name">&$config</span><span class="var-description">: User's PEAR configuration</span>			</li>
					<li>
				<span class="var-type">unknown_type</span>
				<span class="var-name">&$pkg</span><span class="var-description">: Package object</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$lastversion</span><span class="var-description">: Last version installed, if any</span>			</li>
				</ul>
		
			
	</div>
<a name="methodoutputData" id="outputData"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">outputData</span> (line <span class="line-number">504</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">takes in a string and sends it to the client.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			outputData
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$msg</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$msg</span><span class="var-description">: Text of message</span>			</li>
				</ul>
		
			
	</div>
<a name="methodpostProcessPrompts" id="postProcessPrompts"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">postProcessPrompts</span> (line <span class="line-number">72</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Change questions asked if necessary.</p>
	<ul class="tags">
				<li><span class="field">return:</span> revised prompts</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">array</span>
		<span class="method-name">
			postProcessPrompts
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$prompts</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$section</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$prompts</span><span class="var-description">: questions to prompt for answers</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$section</span><span class="var-description">: section we're asking questions for</span>			</li>
				</ul>
		
			
	</div>
<a name="methodrun" id="run"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">run</span> (line <span class="line-number">90</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Run the postinstall script.</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			run
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$phase</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Responses to questions</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$phase</span><span class="var-description">: Which phase of the install we're in</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetDSN" id="setDSN"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setDSN</span> (line <span class="line-number">154</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Set the DSN based on user responses.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			setDSN
		</span>
					(<span class="var-type">$answers</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">$answers</span>
				<span class="var-name">$answers</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetupEventTypes" id="setupEventTypes"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setupEventTypes</span> (line <span class="line-number">342</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add some event types to the system so they have a starting point.</p>
	
	<div class="method-signature">
		<span class="method-result">true</span>
		<span class="method-name">
			setupEventTypes
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Responses to questions</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetupPermissions" id="setupPermissions"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">setupPermissions</span> (line <span class="line-number">426</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This function calls the backend and inserts the default permissions  for the system.</p>
	
	<div class="method-signature">
		<span class="method-result">true</span>
		<span class="method-name">
			setupPermissions
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: User provided responses to questions</span>			</li>
				</ul>
		
			
	</div>
<a name="methodsetupSponsors" id="setupSponsors"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">setupSponsors</span> (line <span class="line-number">474</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Add some sponsors to the system so they have a starting point.</p>
	
	<div class="method-signature">
		<span class="method-result">true</span>
		<span class="method-name">
			setupSponsors
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Responses to questions</span>			</li>
				</ul>
		
			
	</div>
<a name="methodupgradeDatabase" id="upgradeDatabase"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">upgradeDatabase</span> (line <span class="line-number">200</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Creates or updates the calendar system database.</p>
	<ul class="tags">
				<li><span class="field">return:</span> true or false on success or error.</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			upgradeDatabase
		</span>
					(<span class="var-type">array</span>&nbsp;<span class="var-name">$answers</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">array</span>
				<span class="var-name">$answers</span><span class="var-description">: Responses to the questsions asked.</span>			</li>
				</ul>
		
			
	</div>
						
		</div>
	</div>


	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:43 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	</div>
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>