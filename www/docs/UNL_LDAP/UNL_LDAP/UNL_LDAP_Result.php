<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_LDAP | Docs For Class UNL_LDAP_Result</title>";
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
<h2 class="class-name">Class UNL_LDAP_Result</h2>

<a name="sec-description"></a>
<div class="info-box">
	<div class="info-box-title">Description</div>
	<div class="nav-bar">
					<span class="disabled">Description</span> |
															<a href="#sec-method-summary">Methods</a> (<a href="#sec-methods">details</a>)
						
					</div>
	<div class="info-box-body">
                <p class="implements">
            Implements interfaces:
        </p>
        <ul>
            <li>Countable (internal interface)</li><li>Iterator (internal interface)</li>        </ul>
        		<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">LDAP result record</p>
	<ul class="tags">
				<li><span class="field">author:</span> Brett Bieber &lt;<a href="mailto:brett.bieber@gmail.com">brett.bieber@gmail.com</a>&gt;</li>
				<li><span class="field">copyright:</span> 2009 Regents of the University of Nebraska</li>
				<li><span class="field">link:</span> <a href="http://pear.unl.edu/package/UNL_LDAP">http://pear.unl.edu/package/UNL_LDAP</a></li>
				<li><span class="field">license:</span> <a href="http://www1.unl.edu/wdn/wiki/Software_License">BSD License</a></li>
			</ul>
		<p class="notes">
			Located in <a class="field" href="_UNL---LDAP---Result.php.php">/UNL/LDAP/Result.php</a> (line <span class="field">28</span>)
		</p>
		
				
		<pre></pre>
	
			</div>
</div>




	<a name="sec-method-summary"></a>
	<div class="info-box">
		<div class="info-box-title">Method Summary</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
												<span class="disabled">Methods</span> (<a href="#sec-methods">details</a>)
		</div>
		<div class="info-box-body">			
			<div class="method-summary">
																																																																												
												<div class="method-definition">
											<span class="method-result">UNL_LDAP_Result</span>
										<a href="#__construct" title="details" class="method-name">__construct</a>
											(<span class="var-type">resource</span>&nbsp;<span class="var-name">&$link</span>, <span class="var-type">resource</span>&nbsp;<span class="var-name">&$result</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#__destruct" title="details" class="method-name">__destruct</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">int</span>
										<a href="#count" title="details" class="method-name">count</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a></span>
										<a href="#current" title="details" class="method-name">current</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">unknown</span>
										<a href="#key" title="details" class="method-name">key</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a></span>
										<a href="#next" title="details" class="method-name">next</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#rewind" title="details" class="method-name">rewind</a>
										()
									</div>
																<div class="method-definition">
											<span class="method-result">void</span>
										<a href="#sort" title="details" class="method-name">sort</a>
											(<span class="var-type">string</span>&nbsp;<span class="var-name">$attr</span>)
									</div>
																<div class="method-definition">
											<span class="method-result">bool</span>
										<a href="#valid" title="details" class="method-name">valid</a>
										()
									</div>
								</div>
		</div>
	</div>		

	
	<a name="sec-methods"></a>
	<div class="info-box">
		<div class="info-box-title">Methods</div>
		<div class="nav-bar">
			<a href="#sec-description">Description</a> |
																<a href="#sec-method-summary">Methods</a> (<span class="disabled">details</span>)
						
		</div>
		<div class="info-box-body">
			<a name='method_detail'></a>

<a name="method__construct" id="__construct"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">Constructor __construct</span> (line <span class="line-number">112</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Construct an LDAP Result object</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">UNL_LDAP_Result</span>
		<span class="method-name">
			__construct
		</span>
					(<span class="var-type">resource</span>&nbsp;<span class="var-name">&$link</span>, <span class="var-type">resource</span>&nbsp;<span class="var-name">&$result</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">resource</span>
				<span class="var-name">&$link</span><span class="var-description">: Connected ldap link</span>			</li>
					<li>
				<span class="var-type">resource</span>
				<span class="var-name">&$result</span><span class="var-description">: Identifier for the result</span>			</li>
				</ul>
		
			
	</div>
<a name="method__destruct" id="__destruct"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">Destructor __destruct</span> (line <span class="line-number">126</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">frees the ldap result set</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			__destruct
		</span>
				()
			</div>
	
		
			
	</div>
<a name="methodcount" id="count"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">count</span> (line <span class="line-number">101</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the size of the result</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">int</span>
		<span class="method-name">
			count
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Countable::count</dt>
					</dl>
			
	</div>
<a name="methodcurrent" id="current"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">current</span> (line <span class="line-number">53</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns the current entry in the result iteration</p>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a></span>
		<span class="method-name">
			current
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Iterator::current</dt>
					</dl>
			
	</div>
<a name="methodkey" id="key"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">key</span> (line <span class="line-number">80</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns a key for this entry within the array</p>
	
	<div class="method-signature">
		<span class="method-result">unknown</span>
		<span class="method-name">
			key
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Iterator::key</dt>
					</dl>
			
	</div>
<a name="methodnext" id="next"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">next</span> (line <span class="line-number">63</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Advances the iterator to the next entry</p>
	<ul class="tags">
				<li><span class="field">return:</span> | false</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result"><a href="../UNL_LDAP/UNL_LDAP_Entry.php">UNL_LDAP_Entry</a></span>
		<span class="method-name">
			next
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Iterator::next</dt>
					</dl>
			
	</div>
<a name="methodrewind" id="rewind"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">rewind</span> (line <span class="line-number">43</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Resets the iterator to the first entry in the result set.</p>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			rewind
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Iterator::rewind</dt>
					</dl>
			
	</div>
<a name="methodsort" id="sort"><!-- --></a>
<div class="oddrow">
	
	<div class="method-header">
		<span class="method-title">sort</span> (line <span class="line-number">139</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">Sort the returned results by a specific attribute</p>
	<ul class="tags">
				<li><span class="field">access:</span> public</li>
			</ul>
	
	<div class="method-signature">
		<span class="method-result">void</span>
		<span class="method-name">
			sort
		</span>
					(<span class="var-type">string</span>&nbsp;<span class="var-name">$attr</span>)
			</div>
	
			<ul class="parameters">
					<li>
				<span class="var-type">string</span>
				<span class="var-name">$attr</span><span class="var-description">: Attribute to sort by</span>			</li>
				</ul>
		
			
	</div>
<a name="methodvalid" id="valid"><!-- --></a>
<div class="evenrow">
	
	<div class="method-header">
		<span class="method-title">valid</span> (line <span class="line-number">91</span>)
	</div> 
	
	<!-- ========== Info from phpDoc block ========= -->
<p class="short-description">returns whether this result is valid or not</p>
	
	<div class="method-signature">
		<span class="method-result">bool</span>
		<span class="method-name">
			valid
		</span>
				()
			</div>
	
		
				<hr class="separator" />
		<div class="notes">Implementation of:</div>
			<dl>
			<dt>Iterator::valid</dt>
					</dl>
			
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