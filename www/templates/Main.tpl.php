<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="ie iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7) ]><html class="ie" lang="en"><![endif]-->
<!--[if !(IEMobile) | !(IE)]><!--><html lang="en"><!-- InstanceBegin template="/Templates/fixed.dwt" codeOutsideHTMLIsLocked="false" --><!--<![endif]-->
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/metanfavico.html'; ?>
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
    
    $Id: fixed.dwt | ea2608181e2b6604db76106fd982b39218ddcb8b | Fri Mar 9 12:20:43 2012 -0600 | Kevin Abel  $
-->
<?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/scriptsandstyles.html'; ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $context->page_title; ?></title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<link rel="alternate" href="<?php echo $frontend->getURL(); ?>?view=latest&amp;format=rss" title="Latest Releases" type="application/atom+xml" />
<!-- Place optional header elements here -->
<link rel="stylesheet" href="<?php echo $frontend->getURL(); ?>css/all.css" />
<!-- InstanceEndEditable -->
<!-- InstanceParam name="class" type="text" value="fixed" -->
</head>
<body class="fixed" data-version="3.1">
    <nav class="skipnav">
        <a class="skipnav" href="#maincontent">Skip Navigation</a>
    </nav>
    <div id="wdn_wrapper">
        <header id="header" role="banner">
            <a id="logo" href="http://www.unl.edu/" title="UNL website">UNL</a>
            <span id="wdn_institution_title">University of Nebraska&ndash;Lincoln</span>
            <span id="wdn_site_title"><!-- InstanceBeginEditable name="titlegraphic" -->
            <?php echo $frontend->getChannel()->summary; ?>
            <!-- InstanceEndEditable --></span>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/idm.html'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/wdnTools.html'; ?>
        </header>
        <div id="wdn_navigation_bar" role="navigation">
            <nav id="breadcrumbs">
            <!-- InstanceBeginEditable name="breadcrumbs" -->
            <ul>
                <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                <li>pear.unl.edu</li>
            </ul>
            <!-- TemplateEndEditable -->
            </nav>
            <div id="wdn_navigation_wrapper">
                <nav id="navigation" role="navigation">
                    <h3 class="wdn_list_descriptor hidden">Navigation</h3>
                    <!-- InstanceBeginEditable name="navlinks" -->
                <ul class="navigation">
                    <li><a href="<?php echo $frontend->getURL('Pyrus\SimpleChannelFrontend\News'); ?>">Home</a></li>
                    <li><a href="<?php echo $frontend->getURL('Pyrus\SimpleChannelFrontend\PackageList'); ?>">Packages</a></li>
                    <li><a href="<?php echo $frontend->getURL('Pyrus\SimpleChannelFrontend\Categories'); ?>">Categories</a></li>
                    <li><a href="<?php echo $frontend->getURL(); ?>docs/">Documentation</a></li>
                    <li><a href="<?php echo $frontend->getURL('Pyrus\SimpleChannelFrontend\Support'); ?>">Support</a></li>
                </ul>
                <!-- InstanceEndEditable -->
                </nav>
            </div>
        </div>
        <div id="wdn_content_wrapper" role="main">
            <div id="pagetitle">
                <!-- InstanceBeginEditable name="pagetitle" -->
                <!-- InstanceEndEditable -->
            </div>
            <div id="maincontent">
                <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
                <!-- InstanceBeginEditable name="maincontentarea" -->
                <?php echo $savant->render($context->page_content); ?>
                <!-- InstanceEndEditable -->
                <div class="clear"></div>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/noscript.html'; ?>
                <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
            </div>
        </div>
        <footer id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col" id="wdn_footer_feedback">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/feedback.html'; ?>
            </div>
            <div class="footer_col" id="wdn_footer_related">
                <!-- InstanceBeginEditable name="leftcollinks" -->
                <h3>Related Links</h3>
                <ul>
                    <li><a href="http://wdn.unl.edu/">UNL Web Developer Network</a></li>
                    <li><a href="http://pear.php.net/">PEAR</a></li>
                </ul>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col" id="wdn_footer_contact">
                <!-- InstanceBeginEditable name="contactinfo" -->
                <h3>Contacting Us</h3>
                <p>
                This PEAR channel is maintained by:<br />
                <strong>Brett Bieber<br />
                University Communications</strong><br />
                Internet and Interactive Media<br />
                bbieber2@unl.edu
                </p>
                <!-- InstanceEndEditable --></div>
            <div class="footer_col" id="wdn_footer_share">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/socialmediashare.html'; ?>
            </div>
            <!-- InstanceBeginEditable name="optionalfooter" -->
            <!-- InstanceEndEditable -->
            <div id="wdn_copyright">
                <div>
                    <!-- InstanceBeginEditable name="footercontent" -->
                &copy; <?php echo date('Y'); ?> University of Nebraska-Lincoln | Lincoln, NE 68588 | 402-472-7211 | <a href="http://www1.unl.edu/comments/" title="Click here to direct your comments and questions">comments?</a>
                <!-- InstanceEndEditable -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/wdn.html'; ?>
                </div>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wdn/templates_3.1/includes/logos.html'; ?>
            </div>
        </footer>
    </div>
</body>
<!-- InstanceEnd --></html>
