<?php
require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | UNL_Templates | phpDocumentor Parser Errors and Warnings</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=UNL_Templates">UNL_Templates</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/UNL_Templates/media/stylesheet.css" />';
$p->titlegraphic = '<h1>UNL_Templates API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/UNL_Templates/li_UNL_Templates.php');
$p->leftRandomPromo = '';
ob_start();
?>
						<a href="#Post-parsing">Post-parsing</a><br />
<a href="#AcyclicTest.php">AcyclicTest.php</a><br />
<a href="#all-tests.php">all-tests.php</a><br />
<a href="#BasicGraph.php">BasicGraph.php</a><br />
<a href="#bench.php">bench.php</a><br />
<a href="#bench2.php">bench2.php</a><br />
<a href="#bench3.php">bench3.php</a><br />
<a href="#CacheLite.php">CacheLite.php</a><br />
<a href="#cache_lite_base.inc">cache_lite_base.inc</a><br />
<a href="#cache_lite_file_base.inc">cache_lite_file_base.inc</a><br />
<a href="#cache_lite_function_base.inc">cache_lite_function_base.inc</a><br />
<a href="#cache_lite_output_base.inc">cache_lite_output_base.inc</a><br />
<a href="#CachingService.php">CachingService.php</a><br />
<a href="#callcache.inc">callcache.inc</a><br />
<a href="#ChannelFile.php">ChannelFile.php</a><br />
<a href="#Config.php">Config.php</a><br />
<a href="#CustomClass.php">CustomClass.php</a><br />
<a href="#customization_example.php">customization_example.php</a><br />
<a href="#Document.php">Document.php</a><br />
<a href="#ErrorStack.php">ErrorStack.php</a><br />
<a href="#example.php">example.php</a><br />
<a href="#example1.php">example1.php</a><br />
<a href="#Exception.php">Exception.php</a><br />
<a href="#File.php">File.php</a><br />
<a href="#Fixed.php">Fixed.php</a><br />
<a href="#FixPHP5PEARWarnings.php">FixPHP5PEARWarnings.php</a><br />
<a href="#Function.php">Function.php</a><br />
<a href="#Getopt.php">Getopt.php</a><br />
<a href="#Guess.php">Guess.php</a><br />
<a href="#Liquid.php">Liquid.php</a><br />
<a href="#Lite.php">Lite.php</a><br />
<a href="#makepackage.php">makepackage.php</a><br />
<a href="#Mirror.php">Mirror.php</a><br />
<a href="#Output.php">Output.php</a><br />
<a href="#PackageFile.php">PackageFile.php</a><br />
<a href="#PEAR.php">PEAR.php</a><br />
<a href="#PEAR5.php">PEAR5.php</a><br />
<a href="#pearcmd.php">pearcmd.php</a><br />
<a href="#peclcmd.php">peclcmd.php</a><br />
<a href="#Popup.php">Popup.php</a><br />
<a href="#scanner.php">scanner.php</a><br />
<a href="#Scanner.php">Scanner.php</a><br />
<a href="#Secure.php">Secure.php</a><br />
<a href="#server.php">server.php</a><br />
<a href="#Shared_column_left.php">Shared_column_left.php</a><br />
<a href="#Shared_column_right.php">Shared_column_right.php</a><br />
<a href="#System.php">System.php</a><br />
<a href="#Tar.php">Tar.php</a><br />
<a href="#tmpdir.inc">tmpdir.inc</a><br />
<a href="#Unlaffiliate.php">Unlaffiliate.php</a><br />
<a href="#Unlframework.php">Unlframework.php</a><br />
<a href="#Unlstandardtemplate.php">Unlstandardtemplate.php</a><br />
<a href="#UNL_TemplatesTest.php">UNL_TemplatesTest.php</a><br />
<a href="#Util.php">Util.php</a><br />
<a href="#v1.php">v1.php</a><br />
<a href="#Version.php">Version.php</a><br />
<a href="#Version2.php">Version2.php</a><br />
<a href="#Version3.php">Version3.php</a><br />
<a name="Post-parsing"></a>
<h1>Post-parsing</h1>
<h2>Warnings:</h2><br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_HTTP_PROXY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_MASTER_SERVER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_SYSCONFDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOC_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_BIN_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEST_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_WWW_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CFG_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DATA_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CHANNEL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_RUNTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/peclcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELS_PACKAGE_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_CHANNELS_PACKAGE_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELS_SERVER_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_CHANNELS_SERVER_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_COMMON_CHANNEL_DOWNLOAD_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMON_CHANNEL_DOWNLOAD_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_RUNTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_RUNTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_RUNTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/scripts/peclcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_RUNTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/scripts/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEMP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_PUSHANDLOG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_PUSH" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_INSTALLER_ERROR_NO_PREF_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_INSTALLER_SKIPPED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_INSTALLER_FAILED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_LOG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_IGNORE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_INSTALLER_NOBINARY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Installer.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_ERR_OBJTOSTRING" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_ERR_NONCLASS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERRORSTACK_DIE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_INSTALLER_OK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_DOWNLOADER_PACKAGE_PHPVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader/Package.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PREFERRED_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_VERBOSE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOWNLOAD_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_UMASK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_TTL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_DOWNLOADER_PACKAGE_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Downloader/Package.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_KEYDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_TYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELS_NAME_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_CHANNELS_NAME_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_VERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_VERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "FILE_WIN32" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/tmpdir.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "CACHE_LITE_ERROR_DIE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Cache/Lite.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "CACHE_LITE_ERROR_RETURN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Cache/Lite.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_XML_EXT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_CANT_MAKE_PARSER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_SUMMARY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_PARSER_ERROR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "ARCHIVE_TAR_END_BLOCK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Archive/Tar.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "ARCHIVE_TAR_ATT_SEPARATOR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Archive/Tar.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "multipleCallCache3_1" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "multipleCallCache2" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "callCache2" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "multipleCallCache" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "multipleCallCache3_2" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "tmpDir" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/tmpdir.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "error_handler" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "cmdHelp" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "usage" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "_PEAR_call_destructors" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_MULTILINE_SUMMARY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_HOST" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMAND_CHANNELS_CHANNEL_EXISTS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Command/Channels.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMON_ERROR_INVALIDPHP" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_SSL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_URI_CANT_MIRROR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NOBASEURLTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_COMMON_PACKAGE_NAME_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMON_PACKAGE_NAME_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMON_PACKAGE_DOWNLOAD_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_COMMON_PACKAGE_DOWNLOAD_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_COMMON_PACKAGE_VERSION_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "_PEAR_COMMON_PACKAGE_VERSION_PREG" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_STATICVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_PORT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_MIRRORTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_MIRROR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_INVALID_HOST" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_EMPTY_REGEX" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_FUNCTIONVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_MIRROR_NOT_FOUND" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NOVALIDATE_VERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NOVALIDATE_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_CHANNELFILE_ERROR_NO_FUNCTIONNAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ChannelFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_XML_EXT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_CANT_MAKE_PARSER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_VALIDATE_UNINSTALLING" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Validate.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_VALIDATE_NORMAL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Validate.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_VALIDATE_INSTALLING" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Validate.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_PACKAGEANDINSTALL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_INSTALL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_VALIDATE_DOWNLOADING" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Validate.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_VALIDATE_PACKAGING" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Validate.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_DIE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_TRIGGER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_PRINT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_RETURN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_PACKAGE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_ERROR_INVALID" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_REGISTRY_ERROR_FILE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Registry.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_REGISTRY_ERROR_FORMAT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Registry.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_REGISTRY_ERROR_LOCK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Registry.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_PACKAGEVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_REGISTRY_ERROR_CONFLICT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Registry.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_REGISTRY_ERROR_CHANNEL_FILE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Registry.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_ERROR_WRONG_ATTRIB_VALUE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_ERROR_MISSING_ATTRIB" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_TASK_ERROR_NOATTRIBS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Task/Common.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "DETAILED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/RunTest.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_CALLBACK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ERROR_EXCEPTION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ENTITIES_XML" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ENTITIES_XML_REQUIRED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ENTITIES_NONE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_CDATA_SECTION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_REPLACE_ENTITIES" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ENTITIES_HTML" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_COLLAPSE_ALL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate global variable element "$GLOBALS['_PEAR_ERRORSTACK_DEFAULT_LOGGER']" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate global variable element "$GLOBALS['_PEAR_ERRORSTACK_DEFAULT_CALLBACK']" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate global variable element "$GLOBALS['_PEAR_ERRORSTACK_SINGLETON']" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/ErrorStack.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_COLLAPSE_XHTML_ONLY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ERROR_NO_TAG_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ERROR_NON_SCALAR_CONTENT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_OS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "OS_UNIX" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "OS_WINDOWS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_ZE2" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_IGNORE_BACKTRACE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/pearcmd.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "STRUCTURES_GRAPH_ERROR_GENERIC" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Structures/Graph.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ERROR_INVALID_START" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_ERROR_INVALID_CHARS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/XML/Util.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "XML_UTIL_DIR_PHPT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/XML_Util/tests/AllTests.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PHPUnit_MAIN_METHOD" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/XML_Util/tests/AllTests.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_PACKAGEVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_FILENAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_MAINTHANDLE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_MAINTROLE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_MAINTAINERS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_NOTES" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_DATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_MAINTNAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_MAINTEMAIL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DEPREL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DEPTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DEPNAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_MAINTROLE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_SUMMARY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_NAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_PARSER_ERROR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_MULTILINE_SUMMARY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DESCRIPTION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_VERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_VERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_LICENSE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DEPVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_DEPREL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_CHANNELVAL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_FILE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_FILES" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_UNKNOWN_CHANNEL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_PHP5" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_FILE_NOTFOUND" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_LEAD" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_DEPPHPVERSION" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NON_ISO_CHARS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_PHP_NO_NOT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_PNAME_PREFIX" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_PHPFILE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_UNKNOWN_DEPCHANNEL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_DEPNAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_DEPOPTIONAL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_DEPTYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_DEPVERSION_IGNORED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_DEPNAME_IGNORED" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_FILEROLE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_INVALID_FILEROLE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_CONFPROMPT" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate define element "PEAR_PACKAGEFILE_ERROR_NO_CONFNAME" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/PackageFile/v1.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "callCache" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - 
duplicate function element "function_to_bench" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/bench3.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning</strong> - Class UNL_Templates parent UNL_DWT not found<br />
<strong>Warning</strong> - Class UNL_Templates_Scanner parent UNL_DWT_Scanner not found<br />
<a name="Absolute.php"></a>
<h1>Absolute.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="AcyclicTest.php"></a>
<h1>AcyclicTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 32</strong> - package default is already in category pear, will now replace with category default<br />
<strong>Warning on line 32</strong> - package default is already in category pear, will now replace with category default<br />
<a name="all-tests.php"></a>
<h1>all-tests.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 38</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Structures_Graph-1.0.2/tests/all-tests.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 38</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Structures_Graph/tests/all-tests.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="BasicGraph.php"></a>
<h1>BasicGraph.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 33</strong> - no @package tag was used in a DocBlock for class BasicGraph<br />
<strong>Warning on line 33</strong> - no @package tag was used in a DocBlock for class BasicGraph<br />
<strong>Warning on line 181</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Structures_Graph-1.0.2/tests/testCase/BasicGraph.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 181</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Structures_Graph/tests/testCase/BasicGraph.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="bench.php"></a>
<h1>bench.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 26</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/bench.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 26</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/bench.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="bench2.php"></a>
<h1>bench2.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 23</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/bench2.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 23</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/bench2.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="bench3.php"></a>
<h1>bench3.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 36</strong> - no @package tag was used in a DocBlock for class bench<br />
<strong>Warning on line 36</strong> - no @package tag was used in a DocBlock for class bench<br />
<strong>Warning on line 59</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/bench3.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 59</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/bench3.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="CacheLite.php"></a>
<h1>CacheLite.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - package default is already in category XML, will now replace with category Templates<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates/CachingService.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 16</strong> - no @package tag was used in a DocBlock for class UNL_Templates_CachingService_CacheLite<br />
<a name="cache_lite_base.inc"></a>
<h1>cache_lite_base.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/cache_lite_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/cache_lite_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="cache_lite_file_base.inc"></a>
<h1>cache_lite_file_base.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/cache_lite_file_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/cache_lite_file_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="cache_lite_function_base.inc"></a>
<h1>cache_lite_function_base.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/cache_lite_function_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/cache_lite_function_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="cache_lite_output_base.inc"></a>
<h1>cache_lite_output_base.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/cache_lite_output_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 5</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/cache_lite_output_base.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="CachingService.php"></a>
<h1>CachingService.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - DocBlock would be page-level, but precedes class "UNL_Templates_CachingService", use another DocBlock to document the file<br />
<a name="callcache.inc"></a>
<h1>callcache.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 148</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/callcache.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 148</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/callcache.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="ChannelFile.php"></a>
<h1>ChannelFile.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 1067</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1067</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1067</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1067</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1170</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1170</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1170</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1170</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1210</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1210</strong> - Unknown tag "@warning" used<br />
<strong>Warning on line 1210</strong> - Unknown tag "@error" used<br />
<strong>Warning on line 1210</strong> - Unknown tag "@warning" used<br />
<h2>Errors:</h2><br />
<strong>Error on line 159</strong> - DocBlock has multiple @access tags, illegal. ignoring additional tag "@access private"<br />
<strong>Error on line 159</strong> - DocBlock has multiple @access tags, illegal. ignoring additional tag "@access private"<br />
<a name="Config.php"></a>
<h1>Config.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 51</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CHANNEL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 51</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CHANNEL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 57</strong> - 
duplicate define element "PEAR_CONFIG_SYSCONFDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 57</strong> - 
duplicate define element "PEAR_CONFIG_SYSCONFDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 59</strong> - 
duplicate define element "PEAR_CONFIG_SYSCONFDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 59</strong> - 
duplicate define element "PEAR_CONFIG_SYSCONFDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 66</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_MASTER_SERVER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 66</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_MASTER_SERVER" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 73</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_HTTP_PROXY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 73</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_HTTP_PROXY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 75</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_HTTP_PROXY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 75</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_HTTP_PROXY" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 83</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 83</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 85</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 85</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 94</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 94</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 97</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 97</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 99</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 99</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 101</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 101</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_EXT_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 110</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOC_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 110</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOC_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 117</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_BIN_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 117</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_BIN_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 125</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DATA_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 125</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DATA_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 133</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CFG_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 133</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CFG_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 141</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_WWW_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 141</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_WWW_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 149</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEST_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 149</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEST_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 158</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEMP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 158</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_TEMP_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 167</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 167</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 176</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOWNLOAD_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 176</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_DOWNLOAD_DIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 184</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 184</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PHP_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 191</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_VERBOSE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 191</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_VERBOSE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 198</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PREFERRED_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 198</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_PREFERRED_STATE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 205</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_UMASK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 205</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_UMASK" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 212</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_TTL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 212</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_CACHE_TTL" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 219</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_TYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 219</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_TYPE" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 228</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 228</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_BIN" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 236</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_KEYDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 236</strong> - 
duplicate define element "PEAR_CONFIG_DEFAULT_SIG_KEYDIR" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/Config.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="CustomClass.php"></a>
<h1>CustomClass.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 5</strong> - no @package tag was used in a DocBlock for class CustomClass<br />
<strong>Warning on line 101</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/customization/CustomClass.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="customization_example.php"></a>
<h1>customization_example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 7</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/customization/customization_example.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Document.php"></a>
<h1>Document.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="ErrorStack.php"></a>
<h1>ErrorStack.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 42</strong> - package default is already in category pear, will now replace with category Debugging<br />
<strong>Warning on line 42</strong> - package default is already in category pear, will now replace with category Debugging<br />
<h2>Errors:</h2><br />
<strong>Error on line 86</strong> - global variable $GLOBALS['_PEAR_ERRORSTACK_DEFAULT_LOGGER'] specified in @global tag was never found<br />
<strong>Error on line 86</strong> - global variable $GLOBALS['_PEAR_ERRORSTACK_DEFAULT_LOGGER'] specified in @global tag was never found<br />
<a name="example.php"></a>
<h1>example.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 52</strong> - package default is already in category default, will now replace with category XML<br />
<strong>Warning on line 52</strong> - package default is already in category default, will now replace with category XML<br />
<a name="example1.php"></a>
<h1>example1.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 11</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="Exception.php"></a>
<h1>Exception.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 95</strong> - package default is already in category Debugging, will now replace with category pear<br />
<strong>Warning on line 95</strong> - package default is already in category Debugging, will now replace with category pear<br />
<a name="File.php"></a>
<h1>File.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 17</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 17</strong> - package default is already in category File_Formats, will now replace with category default<br />
<strong>Warning on line 17</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 17</strong> - package default is already in category File_Formats, will now replace with category default<br />
<strong>Warning on line 20</strong> - no @package tag was used in a DocBlock for class Cache_Lite_File<br />
<strong>Warning on line 20</strong> - no @package tag was used in a DocBlock for class Cache_Lite_File<br />
<a name="Fixed.php"></a>
<h1>Fixed.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="FixPHP5PEARWarnings.php"></a>
<h1>FixPHP5PEARWarnings.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 6</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR/FixPHP5PEARWarnings.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 6</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR/FixPHP5PEARWarnings.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Function.php"></a>
<h1>Function.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 18</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 21</strong> - no @package tag was used in a DocBlock for class Cache_Lite_Function<br />
<strong>Warning on line 21</strong> - no @package tag was used in a DocBlock for class Cache_Lite_Function<br />
<a name="Getopt.php"></a>
<h1>Getopt.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 28</strong> - no @package tag was used in a DocBlock for class Console_Getopt<br />
<strong>Warning on line 28</strong> - no @package tag was used in a DocBlock for class Console_Getopt<br />
<strong>Warning on line 289</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Console_Getopt-1.2.3/Console/Getopt.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 289</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/Console/Getopt.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Guess.php"></a>
<h1>Guess.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - package default is already in category Caching, will now replace with category pear<br />
<strong>Warning on line 18</strong> - package default is already in category Caching, will now replace with category pear<br />
<a name="Liquid.php"></a>
<h1>Liquid.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="Lite.php"></a>
<h1>Lite.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 25</strong> - package default is already in category default, will now replace with category Caching<br />
<strong>Warning on line 25</strong> - package default is already in category default, will now replace with category Caching<br />
<strong>Warning on line 25</strong> - Page-level DocBlock precedes "define CACHE_LITE_ERROR_RETURN", use another DocBlock to document the source element<br />
<strong>Warning on line 25</strong> - Page-level DocBlock precedes "define CACHE_LITE_ERROR_RETURN", use another DocBlock to document the source element<br />
<strong>Warning on line 29</strong> - no @package tag was used in a DocBlock for class Cache_Lite<br />
<strong>Warning on line 29</strong> - no @package tag was used in a DocBlock for class Cache_Lite<br />
<h2>Errors:</h2><br />
<strong>Error on line 295</strong> - DocBlock has multiple @var tags, illegal. ignoring additional tag "@var mixed value of the option"<br />
<strong>Error on line 295</strong> - DocBlock has multiple @var tags, illegal. ignoring additional tag "@var mixed value of the option"<br />
<a name="makepackage.php"></a>
<h1>makepackage.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 111</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/makepackage.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Mirror.php"></a>
<h1>Mirror.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 87</strong> - Unknown tag "@throw" used<br />
<strong>Warning on line 87</strong> - Unknown tag "@throw" used<br />
<a name="Output.php"></a>
<h1>Output.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 13</strong> - Page-level DocBlock precedes "require_once 'Cache/Lite.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 16</strong> - no @package tag was used in a DocBlock for class Cache_Lite_Output<br />
<strong>Warning on line 16</strong> - no @package tag was used in a DocBlock for class Cache_Lite_Output<br />
<a name="PackageFile.php"></a>
<h1>PackageFile.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 298</strong> - Unknown tag "@using" used<br />
<strong>Warning on line 298</strong> - Unknown tag "@using" used<br />
<strong>Warning on line 298</strong> - Unknown tag "@using" used<br />
<strong>Warning on line 298</strong> - Unknown tag "@using" used<br />
<a name="PEAR.php"></a>
<h1>PEAR.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 43</strong> - 
duplicate define element "OS_WINDOWS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 43</strong> - 
duplicate define element "OS_WINDOWS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 44</strong> - 
duplicate define element "OS_UNIX" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 44</strong> - 
duplicate define element "OS_UNIX" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 45</strong> - 
duplicate define element "PEAR_OS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<strong>Warning on line 45</strong> - 
duplicate define element "PEAR_OS" in file /Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR.php will be ignored.
Use an @ignore tag on the original if you want this case to be documented.<br />
<a name="PEAR5.php"></a>
<h1>PEAR5.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 6</strong> - no @package tag was used in a DocBlock for class PEAR5<br />
<strong>Warning on line 6</strong> - no @package tag was used in a DocBlock for class PEAR5<br />
<strong>Warning on line 32</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/php/PEAR5.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 32</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/PEAR-1.8.1/PEAR5.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="pearcmd.php"></a>
<h1>pearcmd.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - Page-level DocBlock precedes "define PEAR_RUNTYPE", use another DocBlock to document the source element<br />
<strong>Warning on line 21</strong> - Page-level DocBlock precedes "define PEAR_RUNTYPE", use another DocBlock to document the source element<br />
<strong>Warning on line 27</strong> - Unknown tag "@nodep" used<br />
<strong>Warning on line 27</strong> - Unknown tag "@nodep" used<br />
<a name="peclcmd.php"></a>
<h1>peclcmd.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 21</strong> - Unknown tag "@nodep" used<br />
<strong>Warning on line 21</strong> - Unknown tag "@nodep" used<br />
<a name="Popup.php"></a>
<h1>Popup.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="scanner.php"></a>
<h1>scanner.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 10</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/scanner.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Scanner.php"></a>
<h1>Scanner.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - Page-level DocBlock precedes "require_once 'UNL/DWT/Scanner.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 19</strong> - no @package tag was used in a DocBlock for class UNL_Templates_Scanner<br />
<a name="Secure.php"></a>
<h1>Secure.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="server.php"></a>
<h1>server.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 42</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/server.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Shared_column_left.php"></a>
<h1>Shared_column_left.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="Shared_column_right.php"></a>
<h1>Shared_column_right.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="System.php"></a>
<h1>System.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 18</strong> - package default is already in category default, will now replace with category pear<br />
<a name="Tar.php"></a>
<h1>Tar.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 42</strong> - package default is already in category XML, will now replace with category File_Formats<br />
<strong>Warning on line 42</strong> - package default is already in category XML, will now replace with category File_Formats<br />
<strong>Warning on line 42</strong> - Page-level DocBlock precedes "require_once 'PEAR.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 42</strong> - Page-level DocBlock precedes "require_once 'PEAR.php'", use another DocBlock to document the source element<br />
<a name="tmpdir.inc"></a>
<h1>tmpdir.inc</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 63</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/tests/Cache_Lite/tests/tmpdir.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<strong>Warning on line 63</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/docs/examples/includes/pear/download/Cache_Lite-1.7.7/tests/tmpdir.inc" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Unlaffiliate.php"></a>
<h1>Unlaffiliate.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 17</strong> - no @package tag was used in a DocBlock for class UNL_Templates_Version2_Unlaffiliate<br />
<a name="Unlframework.php"></a>
<h1>Unlframework.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="Unlstandardtemplate.php"></a>
<h1>Unlstandardtemplate.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates.php'", use another DocBlock to document the source element<br />
<a name="UNL_TemplatesTest.php"></a>
<h1>UNL_TemplatesTest.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - no @package tag was used in a DocBlock for class UNL_TemplatesTest<br />
<strong>Warning on line 171</strong> - File "/Users/bbieber/Documents/workspace/UNL_Templates/tests/UNL_TemplatesTest.php" has no page-level DocBlock, use @package in the first DocBlock to create one<br />
<a name="Util.php"></a>
<h1>Util.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 51</strong> - package default is already in category pear, will now replace with category XML<br />
<a name="Version.php"></a>
<h1>Version.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 15</strong> - DocBlock would be page-level, but precedes class "UNL_Templates_Version", use another DocBlock to document the file<br />
<a name="Version2.php"></a>
<h1>Version2.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates/Version.php'", use another DocBlock to document the source element<br />
<strong>Warning on line 17</strong> - no @package tag was used in a DocBlock for class UNL_Templates_Version2<br />
<a name="Version3.php"></a>
<h1>Version3.php</h1>
<h2>Warnings:</h2><br />
<strong>Warning on line 14</strong> - Page-level DocBlock precedes "require_once 'UNL/Templates/Version.php'", use another DocBlock to document the source element<br />
<a name="v1.php"></a>
<h1>v1.php</h1>
<h2>Errors:</h2><br />
<strong>Error on line 288</strong> - DocBlock has multiple @access tags, illegal. ignoring additional tag "@access private"<br />
<strong>Error on line 288</strong> - DocBlock has multiple @access tags, illegal. ignoring additional tag "@access private"<br />
	<p class="notes" id="credit">
		Documentation generated on Wed, 12 Aug 2009 13:00:35 -0500 by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor 1.4.2</a>
	</p>
	
<?php
$p->maincontentarea = ob_get_clean();
echo $p->toHtml();
?>