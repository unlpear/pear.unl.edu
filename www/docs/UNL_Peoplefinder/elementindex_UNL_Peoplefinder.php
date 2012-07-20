<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Peoplefinder | </title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Peoplefinder">UNL_Peoplefinder</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Peoplefinder/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Peoplefinder API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Peoplefinder/li_UNL_Peoplefinder.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a name="top"></a>
<h2>[UNL_Peoplefinder] element index</h2>
<a href="/docs/UNL_Peoplefinder/elementindex.php">All elements</a>
<br />
<div class="index-letter-menu">
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#a">a</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#b">b</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#c">c</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#d">d</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#e">e</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#f">f</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#g">g</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#h">h</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#j">j</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#l">l</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#m">m</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#n">n</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#o">o</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#p">p</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#q">q</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#r">r</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#s">s</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#t">t</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#u">u</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#v">v</a>
	<a class="index-letter" href="elementindex_UNL_Peoplefinder.html#_">_</a>
</div>

	<a name="_"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">_</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_Serialized.php#method__construct">UNL_Peoplefinder_Renderer_Serialized::__construct()</a> in Serialized.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_StandardFilter.php#method__construct">UNL_Peoplefinder_StandardFilter::__construct()</a> in StandardFilter.php</div>
							<div class="index-item-description">Construct a standard filter.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_TelephoneFilter.php#method__construct">UNL_Peoplefinder_TelephoneFilter::__construct()</a> in TelephoneFilter.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_AdvancedFilter.php#method__construct">UNL_Peoplefinder_AdvancedFilter::__construct()</a> in AdvancedFilter.php</div>
							<div class="index-item-description">Construct an advanced filter.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#method__construct">UNL_Peoplefinder::__construct()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Constructor for the object.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#method__construct">UNL_Peoplefinder_Renderer_HTML::__construct()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_JSON.php#method__construct">UNL_Peoplefinder_Renderer_JSON::__construct()</a> in JSON.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__construct</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_OUFilter.php#method__construct">UNL_Peoplefinder_OUFilter::__construct()</a> in OUFilter.php</div>
							<div class="index-item-description">Create a filter for OU filtering.</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_TelephoneFilter.php#method__toString">UNL_Peoplefinder_TelephoneFilter::__toString()</a> in TelephoneFilter.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_AdvancedFilter.php#method__toString">UNL_Peoplefinder_AdvancedFilter::__toString()</a> in AdvancedFilter.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_StandardFilter.php#method__toString">UNL_Peoplefinder_StandardFilter::__toString()</a> in StandardFilter.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#method__toString">UNL_Peoplefinder_Record::__toString()</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">__toString</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_OUFilter.php#method__toString">UNL_Peoplefinder_OUFilter::__toString()</a> in OUFilter.php</div>
					</dd>
		</dl>
	<a name="a"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">a</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">array_csort</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodarray_csort">UNL_Peoplefinder::array_csort()</a> in Peoplefinder.php</div>
							<div class="index-item-description">sort a multidimensional array</div>
					</dd>
			<dt class="field">
						<span class="include-title">AdvancedFilter.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---AdvancedFilter.php.php">AdvancedFilter.php</a> in AdvancedFilter.php</div>
					</dd>
		</dl>
	<a name="b"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">b</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$baseDN</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$baseDN">UNL_Peoplefinder::$baseDN</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">bind</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodbind">UNL_Peoplefinder::bind()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Binds to the LDAP directory using the bind credentials stored in  bindDN and bindPW</div>
					</dd>
		</dl>
	<a name="c"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">c</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$choose_uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$choose_uid">UNL_Peoplefinder_Renderer_HTML::$choose_uid</a> in HTML.php</div>
							<div class="index-item-description">This defines a mode in which the directory is searched to return one user.</div>
					</dd>
			<dt class="field">
						<span class="var-title">$cn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$cn">UNL_Peoplefinder_Record::$cn</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$connected</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$connected">UNL_Peoplefinder::$connected</a> in Peoplefinder.php</div>
							<div class="index-item-description">Connection details</div>
					</dd>
		</dl>
	<a name="d"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">d</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$detailAttributes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$detailAttributes">UNL_Peoplefinder::$detailAttributes</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$displayLimit</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$displayLimit">UNL_Peoplefinder_Renderer_HTML::$displayLimit</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$displayName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$displayName">UNL_Peoplefinder_Record::$displayName</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$displayResultLimit</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$displayResultLimit">UNL_Peoplefinder::$displayResultLimit</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$displayStudentTelephone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_vCard.php#var$displayStudentTelephone">UNL_Peoplefinder_Renderer_vCard::$displayStudentTelephone</a> in vCard.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayAdvancedForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methoddisplayAdvancedForm">UNL_Peoplefinder::displayAdvancedForm()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Display the advanced form.</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayInstructions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methoddisplayInstructions">UNL_Peoplefinder::displayInstructions()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Displays the instructions for using peoplefinder.</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayPageLinks</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methoddisplayPageLinks">UNL_Peoplefinder_Renderer_HTML::displayPageLinks()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">displayStandardForm</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methoddisplayStandardForm">UNL_Peoplefinder::displayStandardForm()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Display the standard search form.</div>
					</dd>
		</dl>
	<a name="e"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">e</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$eduPersonNickname</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$eduPersonNickname">UNL_Peoplefinder_Record::$eduPersonNickname</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$eduPersonPrimaryAffiliation</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$eduPersonPrimaryAffiliation">UNL_Peoplefinder_Record::$eduPersonPrimaryAffiliation</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">excludeRecords</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_StandardFilter.php#methodexcludeRecords">UNL_Peoplefinder_StandardFilter::excludeRecords()</a> in StandardFilter.php</div>
							<div class="index-item-description">Allows you to exclude specific records from a result set.</div>
					</dd>
		</dl>
	<a name="f"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">f</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">formatAddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodformatAddress">UNL_Peoplefinder_Renderer_HTML::formatAddress()</a> in HTML.php</div>
							<div class="index-item-description">This function takes in an array of address information and formats it</div>
					</dd>
			<dt class="field">
						<span class="method-title">formatCollege</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodformatCollege">UNL_Peoplefinder_Renderer_HTML::formatCollege()</a> in HTML.php</div>
							<div class="index-item-description">Format a three letter college abbreviation into the full college name.</div>
					</dd>
			<dt class="field">
						<span class="method-title">formatMajor</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodformatMajor">UNL_Peoplefinder_Renderer_HTML::formatMajor()</a> in HTML.php</div>
							<div class="index-item-description">Formats a major subject code into a text description.</div>
					</dd>
			<dt class="field">
						<span class="method-title">formatPhone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodformatPhone">UNL_Peoplefinder_Renderer_HTML::formatPhone()</a> in HTML.php</div>
							<div class="index-item-description">This function takes in a string representing a phone number  and formats it to be rendered as a clickable calling link</div>
					</dd>
			<dt class="field">
						<span class="method-title">formatPostalAddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#methodformatPostalAddress">UNL_Peoplefinder_Record::formatPostalAddress()</a> in Record.php</div>
							<div class="index-item-description">Takes in a string from the LDAP directory, usually formatted like:      ### ___ UNL 68588-####     Where ### is the room number, ___ = Building Abbreviation, #### zip extension</div>
					</dd>
			<dt class="field">
						<span class="method-title">fromLDAPEntry</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#methodfromLDAPEntry">UNL_Peoplefinder_Record::fromLDAPEntry()</a> in Record.php</div>
					</dd>
		</dl>
	<a name="g"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">g</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$givenName</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$givenName">UNL_Peoplefinder_Record::$givenName</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getAdvancedSearchMatches</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetAdvancedSearchMatches">UNL_Peoplefinder::getAdvancedSearchMatches()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Get results for an advanced/detailed search.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getExactMatches</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetExactMatches">UNL_Peoplefinder::getExactMatches()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Get records which match the query exactly.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getLikeMatches</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetLikeMatches">UNL_Peoplefinder::getLikeMatches()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Find matches similar to the query given</div>
					</dd>
			<dt class="field">
						<span class="method-title">getPhoneMatches</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetPhoneMatches">UNL_Peoplefinder::getPhoneMatches()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Get an array of records which matche by the phone number.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getRecordsFromResults</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetRecordsFromResults">UNL_Peoplefinder::getRecordsFromResults()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Returns an array of UNL_Peoplefinder_Record objects from the ldap  query result.</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUID</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodgetUID">UNL_Peoplefinder::getUID()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Get the ldap record for a specific uid eg:bbieber2</div>
					</dd>
			<dt class="field">
						<span class="method-title">getUIDLink</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodgetUIDLink">UNL_Peoplefinder_Renderer_HTML::getUIDLink()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">getVCardLink</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodgetVCardLink">UNL_Peoplefinder_Renderer_HTML::getVCardLink()</a> in HTML.php</div>
					</dd>
		</dl>
	<a name="h"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">h</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">HTML.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Renderer---HTML.php.php">HTML.php</a> in HTML.php</div>
					</dd>
		</dl>
	<a name="j"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">j</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">JSON.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Renderer---JSON.php.php">JSON.php</a> in JSON.php</div>
					</dd>
		</dl>
	<a name="l"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">l</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$lastQuery</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$lastQuery">UNL_Peoplefinder::$lastQuery</a> in Peoplefinder.php</div>
							<div class="index-item-description">Result Info</div>
					</dd>
			<dt class="field">
						<span class="var-title">$lastResult</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$lastResult">UNL_Peoplefinder::$lastResult</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$lastResultCount</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$lastResultCount">UNL_Peoplefinder::$lastResultCount</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$ldapServer</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$ldapServer">UNL_Peoplefinder::$ldapServer</a> in Peoplefinder.php</div>
							<div class="index-item-description">Connection credentials</div>
					</dd>
			<dt class="field">
						<span class="var-title">$ldapTimeout</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$ldapTimeout">UNL_Peoplefinder::$ldapTimeout</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$linkID</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$linkID">UNL_Peoplefinder::$linkID</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$listAttributes</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$listAttributes">UNL_Peoplefinder::$listAttributes</a> in Peoplefinder.php</div>
							<div class="index-item-description">Attribute arrays</div>
					</dd>
		</dl>
	<a name="m"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">m</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$mail</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$mail">UNL_Peoplefinder_Record::$mail</a> in Record.php</div>
					</dd>
		</dl>
	<a name="n"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">n</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">net_match</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Renderer---HTML.php.php#functionnet_match">net_match()</a> in HTML.php</div>
							<div class="index-item-description">Determines if a network in the form of 192.168.17.1/16 or</div>
					</dd>
		</dl>
	<a name="o"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">o</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$ou</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$ou">UNL_Peoplefinder_Record::$ou</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">OUFilter.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---OUFilter.php.php">OUFilter.php</a> in OUFilter.php</div>
					</dd>
		</dl>
	<a name="p"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">p</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$page_onclick</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$page_onclick">UNL_Peoplefinder_Renderer_HTML::$page_onclick</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$postalAddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$postalAddress">UNL_Peoplefinder_Record::$postalAddress</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Peoplefinder.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder.php.php">Peoplefinder.php</a> in Peoplefinder.php</div>
					</dd>
		</dl>
	<a name="q"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">q</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="method-title">query</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodquery">UNL_Peoplefinder::query()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Send a query to the ldap directory</div>
					</dd>
		</dl>
	<a name="r"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">r</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$resultLimit</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$resultLimit">UNL_Peoplefinder::$resultLimit</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderAddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodrenderAddress">UNL_Peoplefinder_Renderer_HTML::renderAddress()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderError</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodrenderError">UNL_Peoplefinder_Renderer_HTML::renderError()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderListRecord</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodrenderListRecord">UNL_Peoplefinder_Renderer_HTML::renderListRecord()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderRecord</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_JSON.php#methodrenderRecord">UNL_Peoplefinder_Renderer_JSON::renderRecord()</a> in JSON.php</div>
							<div class="index-item-description">Renders a peoplefinder record object</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderRecord</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_vCard.php#methodrenderRecord">UNL_Peoplefinder_Renderer_vCard::renderRecord()</a> in vCard.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderRecord</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_Serialized.php#methodrenderRecord">UNL_Peoplefinder_Renderer_Serialized::renderRecord()</a> in Serialized.php</div>
							<div class="index-item-description">Renders a peoplefinder record object</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderRecord</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodrenderRecord">UNL_Peoplefinder_Renderer_HTML::renderRecord()</a> in HTML.php</div>
							<div class="index-item-description">Renders a peoplefinder record object</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderSearchResults</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_Serialized.php#methodrenderSearchResults">UNL_Peoplefinder_Renderer_Serialized::renderSearchResults()</a> in Serialized.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderSearchResults</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_JSON.php#methodrenderSearchResults">UNL_Peoplefinder_Renderer_JSON::renderSearchResults()</a> in JSON.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">renderSearchResults</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodrenderSearchResults">UNL_Peoplefinder_Renderer_HTML::renderSearchResults()</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">Record.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Record.php.php">Record.php</a> in Record.php</div>
					</dd>
		</dl>
	<a name="s"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">s</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$sn</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$sn">UNL_Peoplefinder_Record::$sn</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$startTime</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#var$startTime">UNL_Peoplefinder::$startTime</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">setOptions</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#methodsetOptions">UNL_Peoplefinder_Renderer_HTML::setOptions()</a> in HTML.php</div>
							<div class="index-item-description">This function sets parameters for this class.</div>
					</dd>
			<dt class="field">
						<span class="include-title">Serialized.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Renderer---Serialized.php.php">Serialized.php</a> in Serialized.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">StandardFilter.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---StandardFilter.php.php">StandardFilter.php</a> in StandardFilter.php</div>
					</dd>
		</dl>
	<a name="t"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">t</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$telephoneNumber</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$telephoneNumber">UNL_Peoplefinder_Record::$telephoneNumber</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$title</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$title">UNL_Peoplefinder_Record::$title</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$trustedIP</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$trustedIP">UNL_Peoplefinder_Renderer_HTML::$trustedIP</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="include-title">TelephoneFilter.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---TelephoneFilter.php.php">TelephoneFilter.php</a> in TelephoneFilter.php</div>
					</dd>
		</dl>
	<a name="u"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">u</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="var-title">$uid</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$uid">UNL_Peoplefinder_Record::$uid</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uid_onclick</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$uid_onclick">UNL_Peoplefinder_Renderer_HTML::$uid_onclick</a> in HTML.php</div>
							<div class="index-item-description">This can be set to a javascript function name to send the UID to when clicking a uid</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlEmailAlias</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlEmailAlias">UNL_Peoplefinder_Record::$unlEmailAlias</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlHRAddress</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlHRAddress">UNL_Peoplefinder_Record::$unlHRAddress</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlHRPrimaryDepartment</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlHRPrimaryDepartment">UNL_Peoplefinder_Record::$unlHRPrimaryDepartment</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISClassLevel</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISClassLevel">UNL_Peoplefinder_Record::$unlSISClassLevel</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISCollege</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISCollege">UNL_Peoplefinder_Record::$unlSISCollege</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalAddr1</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalAddr1">UNL_Peoplefinder_Record::$unlSISLocalAddr1</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalAddr2</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalAddr2">UNL_Peoplefinder_Record::$unlSISLocalAddr2</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalCity</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalCity">UNL_Peoplefinder_Record::$unlSISLocalCity</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalPhone</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalPhone">UNL_Peoplefinder_Record::$unlSISLocalPhone</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalState</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalState">UNL_Peoplefinder_Record::$unlSISLocalState</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISLocalZip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISLocalZip">UNL_Peoplefinder_Record::$unlSISLocalZip</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISMajor</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISMajor">UNL_Peoplefinder_Record::$unlSISMajor</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISPermAddr1</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISPermAddr1">UNL_Peoplefinder_Record::$unlSISPermAddr1</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISPermAddr2</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISPermAddr2">UNL_Peoplefinder_Record::$unlSISPermAddr2</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISPermCity</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISPermCity">UNL_Peoplefinder_Record::$unlSISPermCity</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISPermState</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISPermState">UNL_Peoplefinder_Record::$unlSISPermState</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$unlSISPermZip</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php#var$unlSISPermZip">UNL_Peoplefinder_Record::$unlSISPermZip</a> in Record.php</div>
					</dd>
			<dt class="field">
						<span class="var-title">$uri</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php#var$uri">UNL_Peoplefinder_Renderer_HTML::$uri</a> in HTML.php</div>
					</dd>
			<dt class="field">
						<span class="method-title">unbind</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php#methodunbind">UNL_Peoplefinder::unbind()</a> in Peoplefinder.php</div>
							<div class="index-item-description">Disconnect from the ldap directory.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder.php">UNL_Peoplefinder</a> in Peoplefinder.php</div>
							<div class="index-item-description">Peoplefinder class for UNL's online directory.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_AdvancedFilter
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_AdvancedFilter.php">UNL_Peoplefinder_AdvancedFilter</a> in AdvancedFilter.php</div>
							<div class="index-item-description">Builds an advanced filter for searching for people records.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_OUFilter
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_OUFilter.php">UNL_Peoplefinder_OUFilter</a> in OUFilter.php</div>
							<div class="index-item-description">Builds a simple ou filter for records.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_Record
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Record.php">UNL_Peoplefinder_Record</a> in Record.php</div>
							<div class="index-item-description">Peoplefinder class for UNL's online directory.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_Renderer_HTML
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_HTML.php">UNL_Peoplefinder_Renderer_HTML</a> in HTML.php</div>
							<div class="index-item-description">Class to render html output for results</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_Renderer_JSON
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_JSON.php">UNL_Peoplefinder_Renderer_JSON</a> in JSON.php</div>
							<div class="index-item-description">Peoplefinder JSON renderer</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_Renderer_Serialized
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_Serialized.php">UNL_Peoplefinder_Renderer_Serialized</a> in Serialized.php</div>
							<div class="index-item-description">Peoplefinder serialized renderer</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_Renderer_vCard
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_Renderer_vCard.php">UNL_Peoplefinder_Renderer_vCard</a> in vCard.php</div>
							<div class="index-item-description">Peoplefinder vcard renderer</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_StandardFilter
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_StandardFilter.php">UNL_Peoplefinder_StandardFilter</a> in StandardFilter.php</div>
							<div class="index-item-description">Class builds a pretty good LDAP filter for searching for people.</div>
					</dd>
			<dt class="field">
						UNL_Peoplefinder_TelephoneFilter
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/UNL_Peoplefinder_TelephoneFilter.php">UNL_Peoplefinder_TelephoneFilter</a> in TelephoneFilter.php</div>
							<div class="index-item-description">Builds a simple telephone filter for searching for records.</div>
					</dd>
			<dt class="field">
						<span class="const-title">UNL_PF_DISPLAY_LIMIT</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder.php.php#defineUNL_PF_DISPLAY_LIMIT">UNL_PF_DISPLAY_LIMIT</a> in Peoplefinder.php</div>
					</dd>
			<dt class="field">
						<span class="const-title">UNL_PF_RESULT_LIMIT</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder.php.php#defineUNL_PF_RESULT_LIMIT">UNL_PF_RESULT_LIMIT</a> in Peoplefinder.php</div>
					</dd>
		</dl>
	<a name="v"></a>
	<div class="index-letter-section">
		<div style="float: left" class="index-letter-title">v</div>
		<div style="float: right"><a href="#top">top</a></div>
		<div style="clear: both"></div>
	</div>
	<dl>
			<dt class="field">
						<span class="include-title">vCard.php</span>
					</dt>
		<dd class="index-item-body">
			<div class="index-item-details"><a href="UNL_Peoplefinder/_UNL---Peoplefinder---Renderer---vCard.php.php">vCard.php</a> in vCard.php</div>
					</dd>
		</dl>

<div class="index-letter-menu">
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#a">a</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#b">b</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#c">c</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#d">d</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#e">e</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#f">f</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#g">g</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#h">h</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#j">j</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#l">l</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#m">m</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#n">n</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#o">o</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#p">p</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#q">q</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#r">r</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#s">s</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#t">t</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#u">u</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#v">v</a>
	<a class="index-letter" href="/docs/UNL_Peoplefinder/elementindex_UNL_Peoplefinder.php#_">_</a>
</div>	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>