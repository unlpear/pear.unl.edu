<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Auth | Docs For Class UNL_Auth</title>";
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
			<div class="page-body">			
<h2 class="class-name">Class UNL_Auth</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
							<a href="#sec-descendents">Descendents</a>
			|											<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
						|											<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This is a generic authentication framework for UNL which will return customized  containers for use at UNL.</p>
<div class="description"><p><div class="src-code"><ol><li><div class="src-line">&nbsp;<span class="src-php">&lt;?php</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-inc">require_once&nbsp;</span><span class="src-str">'UNL/Auth.php'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-var">$a&nbsp;</span>=&nbsp;<span class="src-id"><a href="../UNL_Auth/UNL_Auth.php">UNL_Auth</a></span><span class="src-sym">::</span><a href="../UNL_Auth/UNL_Auth.php#methodfactory">factory</a><span class="src-sym">(</span><span class="src-str">'CAS'</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-key">if&nbsp;</span><span class="src-sym">(</span><span class="src-var">$a</span><span class="src-sym">-&gt;</span><span class="src-id">isLoggedIn</span><span class="src-sym">(</span><span class="src-sym">))&nbsp;</span><span class="src-sym">{</span></div></li>
<li><div class="src-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;<span class="src-str">'Hello&nbsp;'&nbsp;</span>.&nbsp;<span class="src-var">$a</span><span class="src-sym">-&gt;</span><span class="src-id">getUser</span><span class="src-sym">(</span><span class="src-sym">)</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-sym">}&nbsp;</span><span class="src-key">else&nbsp;</span><span class="src-sym">{</span></div></li>
<li><div class="src-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;<span class="src-str">'Sorry,&nbsp;you&nbsp;must&nbsp;log&nbsp;in.'</span><span class="src-sym">;</span></div></li>
<li><div class="src-line">&nbsp;<span class="src-sym">}</span></div></li>
</ol></div></p><p>PHP version 5</p></div>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2008 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_Auth">http://pear.unl.edu/package/UNL_Auth</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---Auth.php.php">/UNL/Auth.php</a> (line <span class="field">26</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>

	<a name="sec-descendents"></a>
	<div class="info-box">
		<div class="info-box-title">Direct descendents</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
			<span class="disabled">Descendents</span>
			|												<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
								|															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<table cellpadding="2" cellspacing="0" class="class-table">
				<tr>
					<th class="class-table-header">Class</th>
					<th class="class-table-header">Description</th>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Auth/UNL_Auth_CAS.php">UNL_Auth_CAS</a></td>
					<td>
											UNL_Auth_CAS
										</td>
				</tr>
								<tr>
					<td style="padding-right: 2em"><a href="../UNL_Auth/UNL_Auth_SimpleCAS.php">UNL_Auth_SimpleCAS</a></td>
					<td>
											UNL_Auth_SimpleCAS
										</td>
				</tr>
							</table>
		</div>
	</div>


	<a name="sec-var-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Variable Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
						<span class="disabled">Vars</span> (<a href="#sec-vars">details</a>)
							| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
								</div>
		<div class="info-box-body">
			<div class="var-summary">
												<div class="var-title">
					static <span class="var-type">mixed</span>
					<a href="#var__instance" title="details" class="var-name">$_instance</a>
				</div>
																							</div>
		</div>
	</div>

	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
																		<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
				 
				|
						<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																												<div class="method-definition">
					static 						<span class="method-result">void</span>
										<a href="#getInstance" title="details" class="method-name">getInstance</a>
										()
									</div>
																								
												<div class="method-definition">
											<span class="method-result">object</span>
										<a href="#discoverAndReturn" title="details" class="method-name">discoverAndReturn</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$class</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$class_file</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#factory" title="details" class="method-name">factory</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
																								<div class="method-definition">
											<span class="method-result">mixed</span>
										<a href="#PEARFactory" title="details" class="method-name">PEARFactory</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$loginFunction</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$showLogin</span> = <span class="var-default">true</span>])
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#ZendFactory" title="details" class="method-name">ZendFactory</a>
											(<span class="var-type"></span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
									</div>
								</div>
		</div>
	</div>		

	<a name="sec-vars"></a>
	<div class="info-box">
		<div class="info-box-title">Variables</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
										<a href="#sec-var-summary">Vars</a> (<span class="disabled">details</span>)
						
			
										| 
									<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
							
					</div>
		<div class="info-box-body">
			<a name="var__instance" id="var__instance"><!-- --></a>
<div class="evenrow">

	<div class="var-header">
		<span class="var-title">
			static <span class="var-type">mixed</span>
			<span class="var-name">$_instance</span>
			 = <span class="var-default"> null</span>			(line <span class="line-number">28</span>)
		</span>
	</div>

	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	
		
		

</div>
						
		</div>
	</div>
	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
							<a href="#sec-descendents">Descendents</a> |
															<a href="#sec-var-summary">Vars</a> (<a href="#sec-vars">details</a>)
																	<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>
<a name="methodgetInstance" id="getInstance"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">static method getInstance</span> (line <span class="line-number">30</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
	    static
		<span class="method-result">void</span>
		<span class="method-name">
			getInstance
		</span>
				()
			</div>
	
		
			
			<hr class="separator" />
		<div class="notes">Redefined in descendants as:</div>
		<ul class="redefinitions">
					<li>
				<a href="../UNL_Auth/UNL_Auth_CAS.php#methodgetInstance">UNL_Auth_CAS::getInstance()</a>
								: get a singleton instance of this class
							</li>
					<li>
				<a href="../UNL_Auth/UNL_Auth_SimpleCAS.php#methodgetInstance">UNL_Auth_SimpleCAS::getInstance()</a>
								: get a singleton instance of this class
							</li>
				</ul>
	</div>

<a name="methoddiscoverAndReturn" id="discoverAndReturn"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">discoverAndReturn</span> (line <span class="line-number">98</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">This is a class used to discover and return a new class based given a class  name and file.</p>
	<ul class="tags">
				<li><span class="field">access:</span> protected</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">object</span>
		<span class="method-name">
			discoverAndReturn
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$class</span>, <span class="var-type">string</span>&nbsp;<span class="var-name">$class_file</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$class</span><span class="var-description">: name of the class to load UNL_Auth_CAS</span>			</li>
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$class_file</span><span class="var-description">: ./Auth/CAS.php</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
<a name="methodfactory" id="factory"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">factory</span> (line <span class="line-number">54</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Abstract factory, used to get drivers for any of the authentication methods  on campus.</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			factory
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$auth_type</span><span class="var-description">: CAS, LDAP, LotusNotes, etc</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$options</span><span class="var-description">: Options for the specific container</span>			</li>
				</ul>
		
			
	</div>
<a name="methodPEARFactory" id="PEARFactory"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">PEARFactory</span> (line <span class="line-number">69</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Returns an auth container for use with systems compatible with PEAR Auth</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">mixed</span>
		<span class="method-name">
			PEARFactory
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type">mixed</span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$loginFunction</span> = <span class="var-default">null</span>], [<span class="var-type"></span>&nbsp;<span class="var-name">$showLogin</span> = <span class="var-default">true</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$auth_type</span><span class="var-description">: CAS, LDAP, LotusNotes, etc</span>			</li>
					<li>
				<span class="var-type">mixed</span>
				<span class="var-name">$options</span><span class="var-description">: Options for the container</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$loginFunction</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$showLogin</span>			</li>
				</ul>
		
			
	</div>
<a name="methodZendFactory" id="ZendFactory"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">ZendFactory</span> (line <span class="line-number">79</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			ZendFactory
		</span>
					(<span class="var-type"></span>&nbsp;<span class="var-name">$auth_type</span>, [<span class="var-type"></span>&nbsp;<span class="var-name">$options</span> = <span class="var-default">null</span>])
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type"></span>
				<span class="var-name">$auth_type</span>			</li>
					<li>
				<span class="var-type"></span>
				<span class="var-name">$options</span>			</li>
				</ul>
		
			
	</div>
						
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