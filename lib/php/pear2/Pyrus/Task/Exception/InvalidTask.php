<?php
/**
 * \pear2\Pyrus\Task\Exception\InvalidTask
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
 * Exception class for Pyrus Tasks that are invalid for other reasons
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.php.net/viewvc/pear2/Pyrus/
 */
namespace pear2\Pyrus\Task\Exception;
class InvalidTask extends \pear2\Pyrus\Task\Exception
{
    function __construct($task, $file, $reason)
    {
        parent::__construct('task <' . $task . '> in file ' . $file .
                    ' is invalid because of "' . $reason . '"');
    }
}