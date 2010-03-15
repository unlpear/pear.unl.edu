<?php
/**
 * \pear2\Pyrus\Registry\Pear1\Package
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
 * Package within the PEAR 1.x registry
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\Registry\Pear1;
class Package extends \pear2\Pyrus\Registry\Package\Base
{
    function fromPackageFile(\pear2\Pyrus\PackageFileInterface $package)
    {
        \pear2\Pyrus\PackageFile\v2::fromPackageFile($package);
        if (isset($this->packageInfo['contents']['dir']['attribs']['baseinstalldir'])) {
            $this->baseinstalldirs = array('/' => $this->packageInfo['contents']['dir']['attribs']['baseinstalldir']);
        }
    }
}