<?php
/**
 * \pear2\Pyrus\Installer\Role\Cfg
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
 * user-customizable configuration role
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\Installer\Role;
class Cfg extends \pear2\Pyrus\Installer\Role\Common
{
    protected $md5 = null;
    /**
     * Do any unusual setup here
     * @param \pear2\Pyrus\Installer
     * @param \pear2\Pyrus\PackageFileInterface
     * @param array file attributes
     * @param string file name
     */
    function setup($installer, $pkg, $atts, $file)
    {
        if (!($package = $installer->wasInstalled($pkg->name, $pkg->channel))) {
            return;
        }

        if (isset($package->files[$file]) && isset($package->files[$file]['attribs']['md5sum'])) {
            $this->md5 = $package->files[$file]['attribs']['md5sum'];
        }
    }

    function getRelativeLocation(\pear2\Pyrus\PackageFileInterface $pkg, \pear2\Pyrus\PackageFile\v2Iterator\FileTag $file,
                                 $retDir = false)
    {
        if ($this->md5 === null) {
            return parent::getRelativeLocation($pkg, $file, $retDir);
        }

        $info = parent::getRelativeLocation($pkg, $file, $retDir);
        $path = \pear2\Pyrus\Config::current()->cfg_dir .
                    DIRECTORY_SEPARATOR;

        if ($retDir) {
            $filepath = $info[1];
        } else {
            $filepath = $info;
        }

        if (@file_exists($path .$filepath)) {
            // configuration has already been installed, check for modifications
            // made by the user
            $md5 = md5_file($path .$filepath);
            $newmd5 = $pkg->files[$file->packagedname]['attribs'];
            if (!isset($newmd5['md5sum'])) {
                $newmd5 = md5_file($pkg->getFilePath($file->packagedname));
            } else {
                $newmd5 = $newmd5['md5sum'];
            }

            // first check to see if the user modified the file
            // next check to see if the config file changed from the last installed version
            // if both tests are satisfied, install the new file under another name and display a warning
            if ($md5 !== $this->md5 && $md5 !== $newmd5) {
                // configuration has been modified, so save our version as
                // configfile.new-version
                $old = $filepath;
                $filepath .= '.new-' . $pkg->version['release'];
                \pear2\Pyrus\Logger::log(0, "WARNING: configuration file $old is being installed as $filepath, " .
                                    "you should manually merge in changes to the existing configuration file");
            }
        }

        if ($retDir) {
            $info[1] = $filepath;
        } else {
            $info = $filepath;
        }

        return $info;
    }
}