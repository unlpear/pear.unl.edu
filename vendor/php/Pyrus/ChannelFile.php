<?php
/**
 * \Pyrus\ChannelFile
 *
 * PHP version 5
 *
 * @category  Pyrus
 * @package   Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      https://github.com/pyrus/Pyrus
 */

/**
 * Base class for a PEAR2 package file
 *
 * @category  Pyrus
 * @package   Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      https://github.com/pyrus/Pyrus
 */
namespace Pyrus;
class ChannelFile implements \Pyrus\ChannelFileInterface
{
    protected $info;
    public $path;

    /**
     * Take a local channel.xml and parse it.
     * @param string file name, or xml string
     */
    function __construct($file)
    {
        if (is_string($file)) {
            $file = trim($file);
        }

        $data = false;
        $this->path = $file;
        $parser = new ChannelFile\Parser\v1;
        if (is_string($file) && substr($file, 0, 5) === '<?xml') {
            $data = $file;
        } elseif (is_string($file) && file_exists($file)) { // Local
            $data = $file;
        } elseif (is_string($file)) {
            if (strpos($file, 'http://') === 0 || strpos($file, 'https://') === 0) {
                $data = $this->_fromURL($file);
            } else {
                try {
                    $xml_url = 'https://' . $file . '/channel.xml';
                    $data = $this->_fromURL($xml_url);
                } catch (\Exception $e) {
                    // try insecure
                    try {
                        $xml_url = 'http://' . $file . '/channel.xml';
                        $data = $this->_fromURL($xml_url);
                    } catch (\Exception $e2) {
                        // failed, re-throw original error
                        throw $e;
                    }
                }
            }
        }

        if ($data === false || empty($data)) {
            throw new ChannelFile\Exception('Unable to open channel xml file '
                . $file . ' or file was empty.');
        }

        $this->info = $parser->parse($data);
    }

    function __get($var)
    {
        if ($var === 'internal') {
            return $this->info;
        }

        return $this->info->$var;
    }

    function __set($var, $value)
    {
        $this->info->$var = $value;
    }

    function __call($func, $args)
    {
        // delegate to the internal object
        if (!is_callable(array($this->info, $func))) {
            throw new ChannelFile\Exception('unknown method: ' . @get_class($this->info) . '::' .
                                                        $func);
        }

        return call_user_func_array(array($this->info, $func), $args);
    }

    function __toString()
    {
        return $this->info->__toString();
    }

    /**
     * Attempts to get the xml from the URL specified.
     *
     * @param string $xml_url URL to the channel xml http://pear.php.net/channel.xml
     *
     * @return string Channel XML
     */
    protected function _fromURL($xml_url)
    {
        $response = Main::download($xml_url);
        return $response->body;
    }
}