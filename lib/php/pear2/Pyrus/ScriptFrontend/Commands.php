<?php
/**
 * This script handles the command line interface commands to Pyrus
 *
 * PHP version 5
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   SVN: $Id$
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */

/**
 * This script handles the command line interface commands to Pyrus
 *
 * Each command is a separate method, and will be called with the arguments
 * entered by the end user.
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\ScriptFrontend;
class Commands implements \pear2\Pyrus\LogInterface
{
    public $commands = array();
    // for unit-testing ease
    public static $configclass = 'pear2\Pyrus\Config';
    protected $verbose;
    protected $term = array(
        'bold'   => '',
        'normal' => '',
    );
    protected static $commandParser;

    function exceptionHandler($e)
    {
        if ($this->verbose > 3) {
            echo $e;
        }
        if ($e instanceof \pear2\Exception) {
            $causes = array();
            $e->getCauseMessage($causes);
            $causeMsg = '';
            foreach ($causes as $i => $cause) {
                $causeMsg .= str_repeat(' ', $i) . $cause['class'] . ': '
                       . $cause['message'] . "\n";
            }
            echo $causeMsg;
        } else {
            echo $e->getMessage(), "\n";
        }
    }

    function __construct($debugging = false)
    {
        if (!$debugging) {
            set_exception_handler(array($this, 'exceptionHandler'));
        }
        \pear2\Pyrus\Logger::attach($this);
        if (!isset(static::$commandParser)) {
            $schemapath = \pear2\Pyrus\Main::getDataPath() . '/customcommand-2.0.xsd';
            $defaultcommands = \pear2\Pyrus\Main::getDataPath() . '/built-in-commands.xml';
            if (!file_exists($schemapath)) {
                $schemapath = realpath(__DIR__ . '/../../../data/customcommand-2.0.xsd');
                $defaultcommands = realpath(__DIR__ . '/../../../data/built-in-commands.xml');
            }
            $parser = new \pear2\Pyrus\XMLParser;
            $commands = $parser->parse($defaultcommands, $schemapath);
            $commands = $commands['commands']['command'];
            if ('2.0.0a1' == '@'.'PACKAGE_VERSION@') {
                $version = '2.0.0a1'; // running from svn
            } else {
                $version = '2.0.0a1';
            }
            static::$commandParser = new \pear2\Pyrus\ScriptFrontend(array(
                    'version' => $version,
                    'description' => 'Pyrus, the installer for PEAR2',
                    'name' => 'php ' . basename($_SERVER['argv'][0])
                )
            );
            // set up our custom renderer for help options
            static::$commandParser->accept(new \pear2\Pyrus\ScriptFrontend\Renderer(static::$commandParser));
            // set up command-less options and argument
            static::$commandParser->addOption('verbose', array(
                'short_name'  => '-v',
                'long_name'   => '--verbose',
                'action'      => 'Counter',
                'description' => 'increase verbosity'
            ));
            static::$commandParser->addOption('paranoid', array(
                'short_name'  => '-p',
                'long_name'   => '--paranoid',
                'action'      => 'Counter',
                'description' => 'set or increase paranoia level'
            ));
            \pear2\Pyrus\PluginRegistry::registerFrontend($this);
            \pear2\Pyrus\PluginRegistry::addCommand($commands);
        }
        $term = getenv('TERM');
        if (function_exists('posix_isatty') && !posix_isatty(1)) {
            // output is being redirected to a file or through a pipe
        } elseif ($term) {
            if (preg_match('/^(xterm|vt220|linux)/', $term)) {
                $this->term['bold']   = sprintf("%c%c%c%c", 27, 91, 49, 109);
                $this->term['normal'] = sprintf("%c%c%c", 27, 91, 109);
            } elseif (preg_match('/^vt100/', $term)) {
                $this->term['bold']   = sprintf("%c%c%c%c%c%c", 27, 91, 49, 109, 0, 0);
                $this->term['normal'] = sprintf("%c%c%c%c%c", 27, 91, 109, 0, 0);
            }
        }
    }

    function mapCommand($commandinfo)
    {
        $command = static::$commandParser->addCommand($commandinfo['name'], array(
            'description' => $commandinfo['summary'],
            'aliases' => array($commandinfo['shortcut']),
        ));
        if (isset($commandinfo['options']['option'])) {
            $options = $commandinfo['options']['option'];
            if (!isset($options[0])) {
                $options = array($options);
            }
            foreach ($options as $option) {
                switch (key($option['type'])) {
                    case 'bool' :
                        $action = 'StoreTrue';
                        break;
                    case 'string' :
                        $action = 'StoreString';
                        break;
                    case 'int' :
                        $action = 'StoreInt';
                        break;
                    case 'float' :
                        $action = 'StoreFloat';
                        break;
                    case 'counter' :
                        $action = 'Counter';
                        break;
                    case 'callback' :
                        $func = $option['type']['callback'];
                        $class = $commandinfo['class'];
                        $callback = function ($value, $option, $result, $parser) use ($func, $class) {
                            return $class::$func($value);
                        };
                        $action = 'Callback';
                        break;
                    case 'set' :
                        $action = 'StoreString';
                        $choice = $option['set']['value'];
                        settype($choice, 'array');
                        break;
                }
                $info = array(
                    'short_name' => '-' . $option['shortopt'],
                    'long_name' => '--' . $option['name'],
                    'description' => $option['doc'],
                    'action' => $action,
                );
                if ($action == 'Callback') {
                    $info['callback'] = $callback;
                }
                if (isset($option['default'])) {
                    $info['default'] = $option['default'];
                }
                if (isset($choice)) {
                    $info['choices'] = $choice;
                    $choice = null;
                }
                $command->addOption($option['name'], $info);
            }
        }
        if (isset($commandinfo['arguments']['argument'])) {
            $args = $commandinfo['arguments']['argument'];
            if (!isset($args[0])) {
                $args = array($args);
            }
            foreach ($args as $arg) {
                $command->addArgument($arg['name'], array(
                    'description' => $arg['doc'],
                    'multiple' => (bool) $arg['multiple'],
                    'optional' => (bool) $arg['optional'],
                ));
            }
        }
    }

    function _bold($text)
    {
        if (empty($this->term['bold'])) {
            return strtoupper($text);
        }

        return $this->term['bold'] . $text . $this->term['normal'];
    }

    function addDeveloperCommands($type)
    {
        $schemapath = \pear2\Pyrus\Main::getDataPath() . '/customcommand-2.0.xsd';
        $defaultcommands = \pear2\Pyrus\Main::getDataPath() . '/' . $type . 'commands.xml';
        if (!file_exists($schemapath)) {
            $schemapath = realpath(__DIR__ . '/../../../data/customcommand-2.0.xsd');
            $defaultcommands = realpath(__DIR__ . '/../../../data/' . $type . 'commands.xml');
        }
        $parser = new \pear2\Pyrus\XMLParser;
        $commands = $parser->parse($defaultcommands, $schemapath);
        $commands = $commands['commands']['command'];
        \pear2\Pyrus\PluginRegistry::addCommand($commands);
    }

    /**
     * This method acts as a controller which dispatches the request to the
     * correct command/method.
     *
     * <code>
     * $cli = \pear2\Pyrus\ScriptFrontend\Commands();
     * $cli->run($args = array (0 => 'install',
     *                          1 => 'PEAR2/Pyrus_Developer/package.xml'));
     * </code>
     *
     * The above code will dispatch to the install command
     *
     * @param array $args An array of command line arguments.
     *
     * @return void
     */
    function run($args)
    {
        try {
            $sig = \pear2\Pyrus\Main::getSignature();
            if ($sig) {
                echo "Pyrus version ", \pear2\Pyrus\Main::VERSION, ' ',
                     $sig['hash_type'], ': ', $sig['hash'], "\n";
            }
            $this->_findPEAR($args);
            $this->verbose = \pear2\Pyrus\Config::current()->verbose;
            // scan for custom commands/roles/tasks
            \pear2\Pyrus\Config::current()->pluginregistry->scan();
            if (!isset(static::$commandParser->commands['make'])) {
                $this->addDeveloperCommands('developer');
            }
            if (!isset(static::$commandParser->commands['scs-update'])) {
                $this->addDeveloperCommands('scs');
            }
            $result = static::$commandParser->parse(count($args) + 1, array_merge(array('cruft'), $args));
            if ($result->options['verbose']) {
                $this->verbose = $result->options['verbose'];
            }
            if ($result->options['paranoid']) {
                \pear2\Pyrus\Main::$paranoid = $result->options['paranoid'];
            }
            if ($info = \pear2\Pyrus\PluginRegistry::getCommandInfo($result->command_name)) {
                if ($this instanceof $info['class']) {
                    if ($info['function'] == 'dummyStub' || $info['function'] == 'scsDummyStub') {
                        $this->{$info['function']}($result);
                    } else {
                        $this->{$info['function']}($result->command->args, $result->command->options);
                    }
                } else {
                    $class = new $info['class'];
                    $class->{$info['function']}($this, $result->command->args, $result->command->options);
                }
            } else {
                $this->help(array('command' => isset($args[0]) ? $args[0] : null));
            }
        } catch (PEAR2_Console_CommandLine_Exception $e) {
            static::$commandParser->displayError($e->getMessage());
        }
    }

    function ask($question, array $choices = null, $default = null)
    {
        if (is_array($choices)) {
            foreach ($choices as $i => $choice) {
                if (is_int($i) && ($default === null || ($default !== null && !is_string($default)))) {
                    $is_int = false;
                } else {
                    $is_int = true;
                }
                break;
            }
        }
previous:
        echo $question,"\n";
        if ($choices !== null) {
            echo "Please choose:\n";
            foreach ($choices as $i => $choice) {
                if ($is_int) {
                    echo '  ',$choice,"\n";
                } else {
                    echo '  [',$i,'] ',$choice,"\n";
                }
            }
        }
        if ($default !== null) {
            echo '[',$default,']';
        }
        echo ' : ';
        $answer = $this->_readStdin();

        if (!strlen($answer)) {
            if ($default !== null) {
                $answer = $default;
            } else {
                $answer = null;
            }
        } elseif ($choices !== null) {
            if (($is_int && in_array($answer, $choices)) || (!$is_int && array_key_exists($answer, $choices))) {
                return $answer;
            } else {
                echo "Please choose one choice\n";
                goto previous;
            }
        }
        return $answer;
    }

    function _readStdin($amount = 1024)
    {
        return trim(fgets(STDIN, $amount));
    }

    function _findPEAR(&$arr)
    {
        if (isset($arr[0]) && @file_exists($arr[0]) && @is_dir($arr[0])) {
            $maybe = array_shift($arr);
            $maybe = realpath($maybe);
            echo "Using PEAR installation found at $maybe\n";
            $configclass = static::$configclass;
            $config = $configclass::singleton($maybe);
            return;
        }
        $configclass = static::$configclass;
        if (!$configclass::userInitialized()) {
            echo "Pyrus: No user configuration file detected\n";
            if ('yes' === $this->ask("It appears you have not used Pyrus before, welcome!  Initialize install?", array('yes', 'no'), 'yes')) {
                echo "Great.  We will store your configuration in:\n  ",$configclass::getDefaultUserConfigFile(),"\n";
previous:
                $path = $this->ask("Where would you like to install packages by default?", null, getcwd());
                echo "You have chosen:\n", $path, "\n";
                if (!realpath($path)) {
                    echo " this path does not yet exist\n";
                    if ('yes' !== $this->ask("Create it?", array('yes', 'no'), 'yes')) {
                        goto previous;
                    }
                } elseif (!is_dir($path)) {
                    echo $path," exists, and is not a directory\n";
                    goto previous;
                }
                $configclass = static::$configclass;
                $config = $configclass::singleton($path);
                $config->saveConfig();
                echo "Thank you, enjoy using Pyrus\n";
                echo "Documentation is at http://pear.php.net\n";
            } else {
                echo "OK, thank you, finishing execution now\n";
                exit;
            }
        }
        $configclass = static::$configclass;
        $config = $configclass::singleton();
        $path = $config->path;
        if (strpos($path, PATH_SEPARATOR)) {
            echo "Using PEAR installations found at $path\n";
        } else {
            echo "Using PEAR installation found at $path\n";
        }
    }

    function dummyStub($command)
    {
        if ('yes' === $this->ask('The "' . $command->command_name .
                                 '" command is in the developer tools.  Install developer tools?',
                    array('yes', 'no'), 'no')) {
            return $this->upgrade(array('package' => array('pear2.php.net/PEAR2_Pyrus_Developer-alpha')),
                           array('plugin' => true, 'force' => false, 'optionaldeps' => false));
        }
    }

    function scsDummyStub($command)
    {
        if ('yes' === $this->ask('The "' . $command->command_name .
                                 '" command is in the simple channel server tools.  ' .
                                 'Install simple channel server tools?',
                    array('yes', 'no'), 'no')) {
            return $this->upgrade(array('package' => array('pear2.php.net/PEAR2_SimpleChannelServer-alpha')),
                           array('plugin' => true, 'force' => false, 'optionaldeps' => false));
        }
    }

    /**
     * Display the help dialog and list all commands supported.
     *
     * @param array $args Array of command line arguments
     */
    function help($args)
    {
        if (!isset($args['command']) || $args['command'] === 'help') {
            static::$commandParser->displayUsage();
        } else {
            $info = \pear2\Pyrus\PluginRegistry::getCommandInfo($args['command']);
            if (!$info) {
                foreach ($args as $arg) {
                    switch ($arg) {
                        case 'package' :
                        case 'make' :
                        case 'run-phpt' :
                        case 'pickle' :
                            if ('yes' === $this->ask('The "' . $arg .
                                                     '" command is in the developer tools.  Install developer tools?',
                                        array('yes', 'no'), 'no')) {
                                return $this->upgrade(array('package' =>
                                                            array('pear2.php.net/PEAR2_Pyrus_Developer-alpha')),
                                               array('plugin' => true, 'force' => false, 'optionaldeps' => false));
                            }
                        default :
                            break;
                    }
                }
                echo "Unknown command: $args[command]\n";
                static::$commandParser->displayUsage();
            } else {
                static::$commandParser->commands[$args['command']]->displayUsage();
                echo "\n", $info['doc'], "\n";
            }
        }
    }

    /**
     * install a local or remote package
     *
     * @param array $args
     */
    function install($args, $options)
    {
        if ($options['plugin']) {
            \pear2\Pyrus\Main::$options['install-plugins'] = true;
        }
        if ($options['force']) {
            \pear2\Pyrus\Main::$options['force'] = true;
        }
        if (isset($options['packagingroot']) && $options['packagingroot']) {
            \pear2\Pyrus\Main::$options['packagingroot'] = $options['packagingroot'];
        }
        if ($options['optionaldeps']) {
            \pear2\Pyrus\Main::$options['optionaldeps'] = $options['optionaldeps'];
        }
        \pear2\Pyrus\Installer::begin();
        try {
            $packages = array();
            foreach ($args['package'] as $arg) {
                \pear2\Pyrus\Installer::prepare($packages[] = new \pear2\Pyrus\Package($arg));
            }
            \pear2\Pyrus\Installer::commit();
            foreach (\pear2\Pyrus\Installer::getInstalledPackages() as $package) {
                echo 'Installed ' . $package->channel . '/' . $package->name . '-' .
                    $package->version['release'] . "\n";
                if ($package->type === 'extsrc' || $package->type === 'zendextsrc') {
                    echo " ==> To build this PECL package, use the build command\n";
                }
            }
            $optionals = \pear2\Pyrus\Installer::getIgnoredOptionalDeps();
            if (count($optionals)) {
                echo "Optional dependencies that will not be installed, use --optionaldeps:\n";
            }
            foreach ($optionals as $dep => $packages) {
                echo $dep, ' depended on by ', implode(', ', array_keys($packages)), "\n";
            }
        } catch (\Exception $e) {
            $this->exceptionHandler($e);
            exit -1;
        }
    }

    /**
     * uninstall an installed package
     *
     * @param array $args
     */
    function uninstall($args, $options)
    {
        if ($options['plugin']) {
            \pear2\Pyrus\Main::$options['install-plugins'] = true;
        }
        \pear2\Pyrus\Uninstaller::begin();
        $packages = $non = $failed = array();
        foreach ($args['package'] as $arg) {
            try {
                if (!isset(\pear2\Pyrus\Config::current()->registry->package[$arg])) {
                    $non[] = $arg;
                    continue;
                }
                $packages[] = \pear2\Pyrus\Uninstaller::prepare($arg);
            } catch (\Exception $e) {
                $failed[] = $arg;
            }
        }
        \pear2\Pyrus\Uninstaller::commit();
        foreach ($non as $package) {
            echo "Package $package not installed, cannot uninstall\n";
        }
        foreach ($packages as $package) {
            echo 'Uninstalled ', $package->channel, '/', $package->name, "\n";
        }
        foreach ($failed as $package) {
            echo "Package $package could not be uninstalled\n";
        }
    }

    /**
     * download a remote package
     *
     * @param array $args
     */
    function download($args)
    {
        \pear2\Pyrus\Main::$options['downloadonly'] = true;
        \pear2\Pyrus\Config::current()->download_dir = getcwd();
        $packages = array();
        foreach ($args['package'] as $arg) {
            try {
                $packages[] = array(new \pear2\Pyrus\Package($arg), $arg);
            } catch (\Exception $e) {
                echo "failed to init $arg for download (", $e->getMessage(), ")\n";
            }
        }
        foreach ($packages as $package) {
            $arg = $package[1];
            $package = $package[0];
            echo "Downloading ", $arg, '...';
            try {
                if ($package->isRemote()) {
                    $package->download();
                } else {
                    $package->copyTo(getcwd());
                }
                $path = $package->getInternalPackage()->getTarballPath();
                echo "\ndone ($path)\n";
            } catch (\Exception $e) {
                echo 'failed! (', $e->getMessage(), ")\n";
            }
        }
    }

    /**
     * Upgrade a package
     *
     * @param array $args
     */
    function upgrade($args, $options)
    {
        \pear2\Pyrus\Main::$options['upgrade'] = true;
        $this->install($args, $options);
    }

    /**
     * list all the installed packages
     *
     * @param array $args
     */
    function listPackages()
    {
        $reg = \pear2\Pyrus\Config::current()->registry;
        $creg = \pear2\Pyrus\Config::current()->channelregistry;
        $cascade = array(array($reg, $creg));
        $p = $reg;
        $c = $creg;
        while ($p = $p->getParent()) {
            $c = $c->getParent();
            $cascade[] = array($p, $c);
        }
        array_reverse($cascade);
        foreach ($cascade as $p) {
            $c = $p[1];
            $p = $p[0];
            echo "Listing installed packages [", $p->getPath(), "]:\n";
            $packages = array();
            foreach ($c as $channel) {
                \pear2\Pyrus\Config::current()->default_channel = $channel->name;
                foreach ($p->package as $package) {
                    $packages[$channel->name][] = $package->name;
                }
            }
            asort($packages);
            foreach ($packages as $channel => $stuff) {
                echo "[channel $channel]:\n";
                foreach ($stuff as $package) {
                    echo " $package\n";
                }
            }
        }
    }

    /**
     * List all the known channels
     *
     * @param array $args
     */
    function listChannels()
    {
        $creg = \pear2\Pyrus\Config::current()->channelregistry;
        $cascade = array($creg);
        while ($c = $creg->getParent()) {
            $cascade[] = $c;
            $creg = $c;
        }
        array_reverse($cascade);
        foreach ($cascade as $c) {
            echo "Listing channels [", $c->getPath(), "]:\n";
            $chans = array();
            foreach ($c as $channel) {
                $chans[$channel->name] = $channel->alias;
            }
            ksort($chans);
            foreach ($chans as $channel => $alias) {
                echo $channel . ' (' . $alias . ")\n";
            }
        }
    }

    /**
     * remotely connect to a channel server and grab the channel information,
     * then add it to the current pyrus managed repo
     *
     * @param array $args $args[0] should be the channel name, eg:pear.unl.edu
     */
    function channelDiscover($args)
    {
        // try secure first
        $chan = 'https://' . $args['channel'] . '/channel.xml';
        try {
            $response = \pear2\Pyrus\Main::download($chan);
            if ($response->code != 200) {
                throw new \pear2\Pyrus\Exception('Download of channel.xml failed');
            }
addchan_success:    
            $chan = new \pear2\Pyrus\Channel(new \pear2\Pyrus\ChannelFile($response->body, true));
            \pear2\Pyrus\Config::current()->channelregistry->add($chan);
            echo "Discovery of channel ", $chan->name, " successful\n";
        } catch (\Exception $e) {
            try {
                $chan = 'http://' . $args['channel'] . '/channel.xml';
                $response = \pear2\Pyrus\Main::download($chan);
                if ($response->code != 200) {
                    throw new \pear2\Pyrus\Exception('Download of channel.xml failed');
                }
                goto addchan_success;
            } catch (\Exception $e) {
                // failed, re-throw original error
                echo "Discovery of channel ", $args['channel'], " failed: ", $e->getMessage();
            }
        }
    }

    /**
     * add a channel to the current pyrus managed path using the raw channel.xml
     *
     * @param array $args $args[0] should be the channel.xml filename
     */
    function channelAdd($args)
    {
        echo "Adding channel from channel.xml:\n";
        $chan = new \pear2\Pyrus\Channel(new \pear2\Pyrus\ChannelFile($args['channelfile']));
        \pear2\Pyrus\Config::current()->channelregistry->add($chan);
        echo "Adding channel ", $chan->name, " successful\n";
    }

    function channelDel($args)
    {
        $chan = \pear2\Pyrus\Config::current()->channelregistry->get($args['channel'], false);
        if (count(\pear2\Pyrus\Config::current()->registry->listPackages($chan->name))) {
            echo "Cannot remove channel ", $chan->name, " packages are installed\n";
            exit -1;
        }
        \pear2\Pyrus\Config::current()->channelregistry->delete($chan);
        echo "Deleting channel ", $chan->name, " successful\n";
    }

    function upgradeRegistry($args, $options)
    {
        if (!file_exists($args['path']) || !is_dir($args['path'])) {
            echo "Cannot upgrade registries at ", $args['path'], ", path does not exist or is not a directory\n";
            exit -1;
        }
        echo "Upgrading registry at path ", $args['path'], "\n";
        $registries = \pear2\Pyrus\Registry::detectRegistries($args['path']);
        if (!count($registries)) {
            echo "No registries found\n";
            exit;
        }
        if (!in_array('Pear1', $registries)) {
            echo "Registry already upgraded\n";
            exit;
        }
        $pear1 = new \pear2\Pyrus\Registry\Pear1($args['path']);
        if (!in_array('Sqlite3', $registries)) {
            $sqlite3 = new \pear2\Pyrus\Registry\Sqlite3($args['path']);
            $sqlite3->cloneRegistry($pear1);
        }
        if (!in_array('Xml', $registries)) {
            $xml = new \pear2\Pyrus\Registry\Xml($args['path']);
            $sqlite3 = new \pear2\Pyrus\Registry\Sqlite3($args['path']);
            $xml->cloneRegistry($sqlite3);
        }
        if ($options['removeold']) {
            \pear2\Pyrus\Registry\Pear1::removeRegistry($args['path']);
        }
    }

    function runScripts($args)
    {
        $runner = new \pear2\Pyrus\ScriptRunner($this);
        $reg = \pear2\Pyrus\Config::current()->registry;
        foreach ($args['package'] as $package) {
            $package = $reg->package[$package];
            $runner->run($package);
        }
    }

    /**
     * Display pyrus configuration vars
     *
     */
    function configShow($args, $options)
    {
        $conf = $current = \pear2\Pyrus\Config::current();
        if ($options['plugin']) {
            echo "Plugin configuration:\n";
            $conf = \pear2\Pyrus\Config::singleton(\pear2\Pyrus\Config::current()->plugins_dir);
        }
        echo "System paths:\n";
        foreach ($conf->mainsystemvars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
        echo "Custom System paths:\n";
        foreach ($conf->customsystemvars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
        echo "User config (from ", $conf->userfile, "):\n";
        foreach ($conf->mainuservars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
        echo "(variables specific to ", $conf->default_channel, "):\n";
        foreach ($conf->mainchannelvars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
        echo "Custom User config (from " . $conf->userfile . "):\n";
        foreach ($conf->customuservars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
        echo "(variables specific to ", $conf->default_channel, "):\n";
        foreach ($conf->customchannelvars as $var) {
            echo "  $var => " . $conf->$var . "\n";
        }
    }
    
    /**
     * Get a configuration option.
     *
     * @param array $args
     */
    function get($args, $options)
    {
        $conf = $current = \pear2\Pyrus\Config::current();
        if ($options['plugin']) {
            $conf = \pear2\Pyrus\Config::singleton(\pear2\Pyrus\Config::current()->plugins_dir);
        }
        if (in_array($args['variable'], $conf->uservars)
            || in_array($args['variable'], $conf->systemvars)) {
            echo $conf->{$args['variable']} . PHP_EOL;
        } else {
            echo "Unknown config variable: $args[variable]\n";
            exit -1;
        }
        if ($options['plugin']) {
            \pear2\Pyrus\Config::setCurrent($current->path);
        }
    }

    /**
     * Set a configuration option.
     *
     * @param array $args
     */
    function set($args, $options)
    {
        $conf = $current = \pear2\Pyrus\Config::current();
        if ($options['plugin']) {
            $conf = \pear2\Pyrus\Config::singleton(\pear2\Pyrus\Config::current()->plugins_dir);
        }
        if (in_array($args['variable'], $conf->uservars)) {
            echo "Setting $args[variable] in " . $conf->userfile . "\n";
            $conf->{$args['variable']} = $args['value'];
        } elseif (in_array($args['variable'], $conf->systemvars)) {
            echo "Setting $args[variable] in system paths\n";
            $conf->{$args['variable']} = $args['value'];
        } else {
            echo "Unknown config variable: $args[variable]\n";
            exit -1;
        }
        $conf->saveConfig();
        if ($options['plugin']) {
            \pear2\Pyrus\Config::setCurrent($current->path);
        }
    }

    /**
     * Set up a pear path managed by pyrus.
     *
     * @param array $args Arguments
     */
    function mypear($args)
    {
        echo "Setting my pear repositories to:\n";
        echo implode("\n", $args['path']) . "\n";
        $args = implode(PATH_SEPARATOR, $args['path']);
        \pear2\Pyrus\Config::current()->my_pear_path = $args;
        \pear2\Pyrus\Config::current()->saveConfig();
    }

    function build($args)
    {
        echo "Building PECL extensions\n";
        $builder = new \pear2\Pyrus\PECLBuild($this);
        foreach ($args['PackageName'] as $arg) {
            $package = \pear2\Pyrus\Config::current()->registry->package[$arg];
            $builder->installBuiltStuff($package, $builder->build($package));
        }
    }

    function info($args, $options)
    {
        if (!$options['forceremote']) {
            if (file_exists($args['package'])) {
                $package = new \pear2\Pyrus\Package($args['package']);
                $installed = false;
            } elseif (isset(\pear2\Pyrus\Config::current()->registry->package[$args['package']])) {
                $package = \pear2\Pyrus\Config::current()->registry->package[$args['package']];
                $installed = true;
            }
        }
        if (!isset($package)) {
            $installed = false;
            $package = new \pear2\Pyrus\Package($args['package'], $options['forceremote']);
        }
        echo $this->wrap($package->name . ' (' . $package->channel . ' Channel)'), "\n";
        echo str_repeat('-', 80), "\n";
        // this next line ensures we get an accurate reading on a remote abstract package
        if (!$installed && $package->isRemote()) {
            $package->grabEntirePackagexml();
        }
        if (!isset($args['field'])) {
            echo 'Package type: ';
            switch ($package->type) {
                case 'php' :
                    echo "PHP package\n";
                    break;
                case 'extsrc' :
                    echo "Extension source package\n";
                    break;
                case 'zendextsrc' :
                    echo "Zend Extension source package\n";
                    break;
                case 'extbin' :
                    echo "Extension binary package\n";
                    break;
                case 'zendextbin' :
                    echo "Zend Extension binary package\n";
                    break;
                case 'bundle' :
                    echo "Package Bundle\n";
                    break;
            }
            echo 'Version:      ', $package->version['release'], ' (API ', $package->version['api'], "), ";
            echo 'Stability:    ', $package->stability['release'], ' (API ', $package->stability['api'], ")\n";
            echo 'Release Date: ', $package->date;
            if ($package->time) {
                echo ' ', $package->time;
            }
            echo "\n";
            echo "Package Summary: ", $this->columnWrap($package->summary, strlen("Package Summary: ")), "\n";
            echo "Package Description Excerpt:\n   ",
                 $this->columnWrap(substr(rtrim($package->description), 0, 171) . '...', 3), "\n";
            echo '(`php pyrus.phar info ' . $args['package'] . " description` for full description)\n";
            echo "Release Notes Excerpt:\n   ",
                $this->columnWrap(substr(rtrim($package->notes), 0, 171) . '...', 3), "\n";
            echo '(`php pyrus.phar info ' . $args['package'] . " notes` for full release notes)\n";
            if ($installed) {
                // check for upgrades
                try {
                    $tester = new \pear2\Pyrus\Package($package->channel . '/' . $package->name, true);
                    $upgrades = $tester->getAllUpgrades($package->version['release']);
                    if (count($upgrades)) {
                        echo "Upgrades available:\n";
                        foreach ($upgrades as $info) {
                            echo '  Version ', $info['v'], ' (', $info['s'], ")\n";
                        }
                    }
                } catch (\Exception $e) {
                    // ignore problems here, no need to freak out if checking for upgrades fails
                    if ($this->verbose > 3) {
                        echo $e;
                    }
                }
            }
        } elseif ($args['field'] == 'description') {
            echo "Package Description:\n   ", $this->columnWrap(trim($package->description), 3), "\n";
        } elseif ($args['field'] == 'notes') {
            echo "Release Notes:\n   ", $this->columnWrap($package->notes, 3), "\n";
        } elseif ($args['field'] == 'files') {
            if ($installed) {
                echo "Package Files (installed):\n";
                foreach (\pear2\Pyrus\Config::current()->registry->info($package->name, $package->channel,
                                                                       'installedfiles') as $file => $info) {
                    echo $file, ' (', $info['role'], ")\n";
                }
            } else {
                if ($package->isRemote()) {
                    echo "Package Files:\n";
                    foreach ($package->contents as $file) {
                        echo $file->name, ' (', $file->role, ")\n";
                    }
                } else {
                    echo "Package Files (as would be installed):\n";
                    foreach ($package->installcontents as $file) {
                        echo $file->name, ' (', $file->role, ")\n";
                    }
                }
            }
        } else {
            echo "Unknown sub-field ", $args['field'], " must be one of description, notes, or files\n";
        }
    }

    function listUpgrades()
    {
        $config = \pear2\Pyrus\Config::current();
        $reg = $config->registry;
        foreach ($config->channelregistry as $channel) {
            $packages = $reg->listPackages($channel->name);
            if (!count($packages)) {
                echo "(no packages installed in channel ", $channel->name, ")\n";
                continue;
            }
            $upgrades = array();
            foreach ($packages as $package) {
                try {
                    $version = $reg->info($package, $channel->name, 'version');
                    $tester = $channel->remotepackage[$package];
                    // find a version newer than us
                    $fakedep = new \pear2\Pyrus\PackageFile\v2\Dependencies\Package(
                        'required', 'package', null, array('name' => $package,
                                            'channel' => $channel->name, 'uri' => null,
                                            'min' => $version, 'max' => null,
                                            'recommended' => null, 'exclude' => array($version),
                                            'providesextension' => null, 'conflicts' => null), 0);
                    $tester->figureOutBestVersion($fakedep);
                } catch (\Exception $e) {
                    continue;
                }
                $upgrades[$package] = array($tester->version['release'], $tester->stability['release'], $tester->date);
            }
            if (!count($upgrades)) {
                echo "(no upgrades for packages installed in channel ", $channel->name, ")\n";
                continue;
            }
            asort($upgrades);
            echo "Upgrades for channel ", $channel->name, ":\n";
            foreach ($upgrades as $package => $upgrade) {
                echo '  ', $package, ' ', $upgrade[0], ' (' . $upgrade[1], ", released ", $upgrade[2], ")\n";
            }
        }
    }

    function listAll($args, $options)
    {
        $reg = \pear2\Pyrus\Config::current()->registry;
        echo "Remote packages for channel ", $args['channel'], ":\n";
        if ($options['basic']) {
            foreach (\pear2\Pyrus\Config::current()->channelregistry[$args['channel']]->remotecategories as $category) {
                echo $category->name, ":\n";
                foreach ($category->basiclist as $package) {
                    $installed = $reg->exists($package['package'], $args['channel']) ? '  *' : '   ';
                    echo $installed, $package['package'], ' latest stable: ', $package['stable'],
                        ', latest release: ', $package['latest']['v'], ' (', $package['latest']['s'], ")\n";
                }
            }
            return;
        }
        foreach (\pear2\Pyrus\Config::current()->channelregistry[$args['channel']]->remotecategories as $category) {
            echo $category->name, ":\n";
            $pnames = array();
            $summaries = array();
            $pnameinfo = array();
            $versions = array();
            try {
                foreach ($category as $package) {
                    $installed = ' ';
                    if ($package->isUpgradeable()) {
                        $installed = '!';
                    } elseif ($reg->exists($package->name, $args['channel'])) {
                        $installed = '*';
                    }
                    $found = false;
                    foreach ($package as $version => $latest) {
                        $found = true;
                        break;
                    }
                    $pnames[] = $package->name;
                    $summaries[] = $package->summary;
                    if (!$found) {
                        $versions[] = '--';
                        $pnameinfo[$package->name] = array('installed' => $installed,
                                                           'summary' => $package->summary,
                                                           'latest' => 'n/a');
                        continue;
                    }
                    $versions[] = $version;
                    $latest['v'] = $version;
    
                    $pnameinfo[$package->name] = array('installed' => $installed,
                                                       'summary' => $package->summary,
                                                       'latest' => $latest);
                }
            } catch (\Exception $e) {
                echo "Error: Category has broken REST (", $e->getMessage(), ")\n";
                continue;
            }
            $widths = array(1, 25, 8, 51);
            foreach ($pnameinfo as $package => $info) {
                if (is_string($info['latest'])) {
                    $text = array($info['installed'], $package, $info['latest'], $info['summary']);
                } else {
                    $text = array($info['installed'], $package, $info['latest']['v'], $info['summary']);
                }
                echo $this->wrapMultiColumns($text, $widths) . "\n";
            }
            echo "Key: * = installed, ! = upgrades available\n";
        }
    }

    protected function wrap($text)
    {
        return wordwrap($text, 80, "\n", false);
    }

    /**
     * Borrowed from PEAR2_Console_CommandLine
     */
    protected function columnWrap($text, $cw)
    {
        $tokens = explode("\n", $this->wrap($text));
        $ret    = $tokens[0];
        $chunks = $this->wrap(trim(substr($text, strlen($ret))), 80 - $cw);
        $tokens = explode("\n", $chunks);
        foreach ($tokens as $token) {
            if (!empty($token)) {
                $ret .= "\n" . str_repeat(' ', $cw) . $token;
            }
        }
        return $ret;
    }
    static function wrapMultiColumns($text, $widths)
    {
        $max = 0;
        foreach ($text as $col => $cell) {
            $text[$col] = explode("\n", wordwrap($cell, $widths[$col], "\n", false));
            $newtext = array();
            foreach ($text[$col] as $subcell) {
                if (strlen($subcell) > $widths[$col]) {
                    $split = explode("\n", wordwrap($subcell, $widths[$col], "\\\n", true));
                    foreach ($split as $subcell) {
                        $newtext[] = $subcell;
                    }
                } else {
                    $newtext[] = $subcell;
                }
                $text[$col] = $newtext;
            }
            if (count($text[$col]) > $max) {
                $max = count($text[$col]);
            }
        }

        $ret = '';
        for ($i = 0; $i < $max; $i++) {
            if ($ret) {
                $ret .= "\n";
            }
            foreach ($text as $col => $cell) {
                if ($col && !$previousWasLong) {
                    $ret .= ' ';
                }
                if ($col) {
                    $ret .= ' ';
                }
                if (isset($cell[$i])) {
                    $ret .= str_pad($cell[$i], $widths[$col], ' ');
                    if (strlen($cell[$i]) > $widths[$col]) {
                        $previousWasLong = true;
                    } else {
                        $previousWasLong = false;
                    }
                } else {
                    $ret .= str_repeat(' ', $widths[$col]);
                    $previousWasLong = false;
                }
            }
        }
        return $ret;
    }

    function __call($func, $params)
    {
        if ($func === 'confirmDialog') {
            return $this->_confirmDialog($params[0]);
        }
        if ($func === 'display') {
            return $this->_display($params[0]);
        }
        if ($func === 'ask') {
            return call_user_func_array(array($this, 'ask'), $params);
        }
        throw new \Exception('Unknown method ' . $func . ' in class pear2\Pyrus\ScriptFrontend\Commands');
    }

    /**
     * Ask for user input, confirm the answers and continue until the user is satisfied
     * @param array an array of arrays, format array('name' => 'paramname', 'prompt' =>
     *              'text to display', 'type' => 'string'[, default => 'default value'])
     * @return array
     */
    function _confirmDialog($params)
    {
        $answers = $prompts = $types = array();
        foreach ($params as $param) {
            $prompts[$param['name']] = $param['prompt'];
            $types[$param['name']]   = $param['type'];
            $answers[$param['name']] = isset($param['default']) ? $param['default'] : '';
        }

        $tried = false;
        do {
            if ($tried) {
                $i = 1;
                foreach ($answers as $var => $value) {
                    if (!strlen($value)) {
                        echo $this->_bold("* Enter an answer for #" . $i . ": ({$prompts[$var]})\n");
                    }
                    $i++;
                }
            }

            $answers = $this->_userDialog('', $prompts, $types, $answers);
            $tried   = true;
        } while (is_array($answers) && count(array_filter($answers)) != count($prompts));

        return $answers;
    }

    function _display($text)
    {
        echo $text, "\n";
    }

    function _userDialog($command, $prompts, $types = array(), $defaults = array(), $screensize = 20)
    {
        if (!is_array($prompts)) {
            return array();
        }

        $testprompts = array_keys($prompts);
        $result      = $defaults;

        reset($prompts);
        if (count($prompts) === 1) {
            foreach ($prompts as $key => $prompt) {
                $type    = $types[$key];
                $default = isset($defaults[$key]) ? $defaults[$key] : false;
                print "$prompt ";
                if ($default) {
                    print "[$default] ";
                }
                print ": ";

                $line         = $this->_readStdin(2048);
                $result[$key] =  ($default && trim($line) == '') ? $default : trim($line);
            }

            return $result;
        }

        $first_run = true;
        while (true) {
            $descLength = max(array_map('strlen', $prompts));
            $descFormat = "%-{$descLength}s";
            $last       = count($prompts);

            $i = 0;
            foreach ($prompts as $n => $var) {
                $res = isset($result[$n]) ? $result[$n] : null;
                printf("%2d. $descFormat : %s\n", ++$i, $prompts[$n], $res);
            }
            print "\n1-$last, 'all', 'abort', or Enter to continue: ";

            $tmp = $this->_readStdin();
            if (empty($tmp)) {
                break;
            }

            if ($tmp == 'abort') {
                return false;
            }

            if (isset($testprompts[(int)$tmp - 1])) {
                $var     = $testprompts[(int)$tmp - 1];
                $desc    = $prompts[$var];
                $current = @$result[$var];
                print "$desc [$current] : ";
                $tmp = $this->_readStdin();
                if ($tmp !== '') {
                    $result[$var] = $tmp;
                }
            } elseif ($tmp == 'all') {
                foreach ($prompts as $var => $desc) {
                    $current = $result[$var];
                    print "$desc [$current] : ";
                    $tmp = $this->_readStdin();
                    if (trim($tmp) !== '') {
                        $result[$var] = trim($tmp);
                    }
                }
            }

            $first_run = false;
        }

        return $result;
    }

    function log($level, $message)
    {
        static $data = array();
        if (\pear2\Pyrus\Config::initializing()) {
            // we can't check verbose until initializing is complete, so save
            // the message, and only display the log after config is initialized
            $data[] = array($level, $message);
            return;
        }
        if (count($data)) {
            $save = $data;
            $data = array();
            foreach ($save as $info) {
                $this->log($info[0], $info[1]);
            }
        }
        if ($level <= $this->verbose) {
            if (strlen($message)
                && $message[strlen($message)-1] !== "\r") {
                echo $message, "\n";
            } else {
                echo $message;
            }
        }
    }
}
