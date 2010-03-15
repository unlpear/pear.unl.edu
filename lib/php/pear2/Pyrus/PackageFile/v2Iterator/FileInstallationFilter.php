<?php
/**
 * \pear2\Pyrus\PackageFile\v2Iterator\FileInstallationFilter
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
 * filtered iterator for file installation
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\PackageFile\v2Iterator;
class FileInstallationFilter extends \FilterIterator
{
    static private $_parent;
    static private $_installGroup;

    static function setParent(\pear2\Pyrus\PackageFile\v2 $parent)
    {
        self::$_parent = $parent;
        $errs = new \pear2\MultiErrors;
        $depchecker = new \pear2\Pyrus\Dependency\Validator(
            array('channel' => self::$_parent->channel,
                  'package' => self::$_parent->name),
            \pear2\Pyrus\Validate::INSTALLING, $errs);
        foreach (self::$_parent->installGroup as $instance) {
            try {
                if (isset($instance['installconditions'])) {
                    $installconditions = $instance['installconditions'];
                    if (is_array($installconditions)) {
                        foreach ($installconditions as $type => $conditions) {
                            if (!isset($conditions[0])) {
                                $conditions = array($conditions);
                            }

                            foreach ($conditions as $condition) {
                                $condition = new \pear2\Pyrus\PackageFile\v2\Dependencies\Dep(null, $condition, $type);
                                $ret = $depchecker->{"validate{$type}Dependency"}($condition);
                            }
                        }
                    }
                }
            } catch (\Exception $e) {
                // can't use this release
                continue;
            }

            $release = array('install' => array(), 'ignore' => array());
            // this is the release to use
            if (isset($instance['filelist'])) {
                // ignore files
                if (isset($instance['filelist']['ignore'])) {
                    $ignore = isset($instance['filelist']['ignore'][0]) ?
                        $instance['filelist']['ignore'] :
                        array($instance['filelist']['ignore']);
                    foreach ($ignore as $ig) {
                        $release['ignore'][$ig['attribs']['name']] = true;
                    }
                }
                // install files as this name
                if (isset($instance['filelist']['install'])) {
                    $installas = isset($instance['filelist']['install'][0]) ?
                        $instance['filelist']['install'] :
                        array($instance['filelist']['install']);
                    foreach ($installas as $as) {
                        $release['install'][$as['attribs']['name']] =
                            $as['attribs']['as'];
                    }
                }
            }
            self::$_installGroup = $release;
            return;
        }
    }

    function current()
    {
        $file = $this->key();
        $curfile = parent::current();
        if (isset(self::$_installGroup['install'][$file])) {
            // add the install-as attribute for these files
            $curfile['attribs']['install-as'] = self::$_installGroup['install'][$file];
        }

        if ($b = self::$_parent->getBaseInstallDir($file)) {
            $curfile['attribs']['baseinstalldir'] = $b;
        }

        return new FileTag($curfile, '', self::$_parent);
    }

    function accept()
    {
        $file = $this->getInnerIterator()->key();
        if (isset(self::$_installGroup['ignore'][$file])) {
            // skip ignored files
            return false;
        }

        return true;
    }
}