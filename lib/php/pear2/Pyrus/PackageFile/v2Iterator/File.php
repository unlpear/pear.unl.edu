<?php
/**
 * \pear2\Pyrus\PackageFile\v2Iterator\File
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
 * Traverse the complete <contents> tag, one <dir> at a time
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\PackageFile\v2Iterator;
class File extends \RecursiveIteratorIterator
{
    function next()
    {
        parent::next();
        $x = $this->current();
        if (isset($x[0])) {
            parent::next();
            $x = $this->current();
        }
    }
}