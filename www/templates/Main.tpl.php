<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/php.fixed.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!--
    Membership and regular participation in the UNL Web Developer Network
    is required to use the UNL templates. Visit the WDN site at 
    http://wdn.unl.edu/. Click the WDN Registry link to log in and
    register your unl.edu site.
    All UNL template code is the property of the UNL Web Developer Network.
    The code seen in a source code view is not, and may not be used as, a 
    template. You may not use this code, a reverse-engineered version of 
    this code, or its associated visual presentation in whole or in part to
    create a derivative work.
    This message may not be removed from any pages based on the UNL site template.
    
    $Id: php.fixed.dwt.php 536 2009-07-23 15:47:30Z bbieber2 $
-->
<link rel="stylesheet" type="text/css" media="screen" href="/wdn/templates_3.0/css/all.css" />
<link rel="stylesheet" type="text/css" media="print" href="/wdn/templates_3.0/css/print.css" />
<script type="text/javascript" src="/wdn/templates_3.0/scripts/all.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/browserspecifics.html'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/metanfavico.html'; ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $context->page_title; ?></title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<link rel="events" href="http://events.unl.edu/wdn/" title="Web Developer Network" />
<!-- Place optional header elements here -->
<link rel="stylesheet" href="<?php echo pear2\SimpleChannelFrontend\Main::getURL(); ?>css/all.css" />
<!-- InstanceEndEditable -->
</head>
<body class="fixed">
<p class="skipnav"> <a class="skipnav" href="#maincontent">Skip Navigation</a> </p>
<div id="wdn_wrapper">
    <div id="header"> <a href="http://www.unl.edu/" title="UNL website"><img src="/wdn/templates_3.0/images/logo.png" alt="UNL graphic identifier" id="logo" /></a>
        <h1>University of Nebraska&ndash;Lincoln</h1>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/wdnTools.html'; ?>
    </div>
    <div id="wdn_navigation_bar">
        <div id="breadcrumbs">
            <!-- WDN: see glossary item 'breadcrumbs' -->
            <!-- InstanceBeginEditable name="breadcrumbs" -->
            <ul>
                <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                <li>pear.unl.edu</li>
            </ul>
            <!-- InstanceEndEditable --></div>
        <div id="wdn_navigation_wrapper">
            <div id="navigation"><!-- InstanceBeginEditable name="navlinks" -->
                <ul class="navigation">
                    <li><a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL('pear2\SimpleChannelFrontend\News'); ?>">Home</a></li>
                    <li><a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL('pear2\SimpleChannelFrontend\PackageList'); ?>">Packages</a></li>
                    <li><a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL('pear2\SimpleChannelFrontend\Categories'); ?>">Categories</a></li>
                    <li><a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL('pear2\SimpleChannelFrontend\Support'); ?>">Support</a></li>
                </ul>
                <!-- InstanceEndEditable --></div>
        </div>
    </div>
    <div id="wdn_content_wrapper">
        <div id="titlegraphic"><!-- InstanceBeginEditable name="titlegraphic" -->
            <h1><?php echo pear2\SimpleChannelFrontend\Main::$channel->summary; ?></h1>
            <!-- InstanceEndEditable --></div>
        <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --> <!-- InstanceEndEditable --></div>
        <div id="maincontent">
            <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
            <!-- InstanceBeginEditable name="maincontentarea" -->
            <?php echo $savant->render($context->page_content); ?>
            <!-- InstanceEndEditable -->
            <div class="clear"></div>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/noscript.html'; ?>
            <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
        </div>
        <div id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/feedback.html'; ?>
            </div>
            <div class="footer_col"><!-- InstanceBeginEditable name="leftcollinks" -->
                <h3>Related Links</h3>
                <ul>
                    <li><a href="http://wdn.unl.edu/">UNL Web Developer Network</a></li>
                    <li><a href="http://pear.php.net/">PEAR</a></li>
                </ul>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col"><!-- InstanceBeginEditable name="contactinfo" -->
                <h3>Contacting Us</h3>
                <p>
                This PEAR channel is maintained by:<br />
                <strong>Brett Bieber<br />
                University Communications</strong><br />
                Internet and Interactive Media<br />
                bbieber2@unl.edu
                </p>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/socialmediashare.html'; ?>
            </div>
            <!-- InstanceBeginEditable name="optionalfooter" --> <!-- InstanceEndEditable -->
            <div id="wdn_copyright"><!-- InstanceBeginEditable name="footercontent" -->
                &copy; 2010 University of Nebraska-Lincoln | Lincoln, NE 68588 | 402-472-7211 | <a href="http://www1.unl.edu/comments/" title="Click here to direct your comments and questions">comments?</a>
                <!-- InstanceEndEditable -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.0/includes/wdn.html'; ?>
                | <a href="http://validator.unl.edu/check/referer">W3C</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS</a> <a href="http://www.unl.edu/" title="UNL Home" id="wdn_unl_wordmark"><img src="/wdn/templates_3.0/css/footer/images/wordmark.png" alt="UNL's wordmark" /></a> </div>
        </div>
    </div>
    <div id="wdn_wrapper_footer"> </div>
</div>
</body>
<!-- InstanceEnd --></html>
