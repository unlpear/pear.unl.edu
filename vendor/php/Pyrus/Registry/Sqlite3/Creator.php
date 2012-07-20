<?php
/**
 * \Pyrus\Registry\Sqlite3\Creator
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
 * Initialize a sqlite3 registry
 *
 * @category  Pyrus
 * @package   Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2010 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      https://github.com/pyrus/Pyrus
 */
namespace Pyrus\Registry\Sqlite3;
class Creator
{
    /**
     * Initialize the database for the registry
     *
     * Registry information that must be stored:
     *
     * - A list of installed packages
     * - the files in each package
     * - known channels
     */
    function create(\SQLite3 $database)
    {
        $database->enableExceptions(true);
        try {
            $this->_create($database);
        } catch (\Exception $e) {
            $database->enableExceptions(false);
            @$database->exec('ROLLBACK');
            throw new \Pyrus\Registry\Exception('Cannot initialize SQLite3 registry: ' . $e->getMessage(), $e);
        }
        $database->enableExceptions(false);
    }

    function _create(\SQLite3 $database)
    {
        $database->exec('BEGIN');

        $query = '
          CREATE TABLE packages (
           name TEXT(80) NOT NULL,
           lcname TEXT(80) NOT NULL,
           packagetype TEXT(15) NOT NULL,
           channel TEXT(255) NOT NULL,
           version TEXT(20) NOT NULL,
           apiversion TEXT(20) NOT NULL,
           summary TEXT NOT NULL,
           description TEXT NOT NULL,
           stability TEXT(8) NOT NULL,
           apistability TEXT(8) NOT NULL,
           releasedate DATE NOT NULL,
           releasetime TIME,
           license TEXT(50) NOT NULL,
           licenseuri TEXT,
           licensepath TEXT,
           releasenotes TEXT,
           lastinstalledversion TEXT(20),
           installedwithpear TEXT(20),
           installtimeconfig TEXT(50),
           PRIMARY KEY (lcname, channel)
          );';
        $database->exec($query);

        $query = '
          CREATE TABLE configureoptions (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           name TEXT(255) NOT NULL,
           prompt TEXT(255) NOT NULL,
           defaultValue TEXT(255),
           PRIMARY KEY (packages_name, packages_channel, name)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE maintainers (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           role TEXT(11) NOT NULL,
           name TEXT(200) NOT NULL,
           user TEXT(20) NOT NULL,
           email TEXT(100) NOT NULL,
           active CHAR(3) NOT NULL,
           PRIMARY KEY (packages_name, packages_channel, user)
          );';
        $worked = $database->exec($query);

        // configpath is absolute path to role directory
        // relativepath is relative to role directory
        // packagepath is absolute path to full file path
        // this makes moving the database simple, just reconstruct packagepath from
        // the file role + the relative path
        $query = '
          CREATE TABLE files (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           configpath TEXT(255) NOT NULL,
           packagepath TEXT(255) NOT NULL,
           role TEXT(30) NOT NULL,
           relativepath TEXT(255) NOT NULL,
           origpath TEXT(255) NOT NULL,
           baseinstalldir TEXT(255),
           tasks TEXT NOT NULL,
           md5sum TEXT NOT NULL,
           PRIMARY KEY (packagepath, role),
           UNIQUE (packages_name, packages_channel, origpath)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE baseinstalldirs (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           dirname TEXT(255) NOT NULL,
           baseinstall TEXT(255) NOT NULL,
           PRIMARY KEY (packages_name, packages_channel, dirname)
          );';
        $worked = $database->exec($query);

        $query = '
            CREATE TABLE dep_groups (
             packages_name TEXT(80) NOT NULL,
             packages_channel TEXT(255) NOT NULL,
             groupname TEXT(80) NOT NULL,
             grouphint TEXT(255) NOT NULL,
             PRIMARY KEY (packages_name, packages_channel, groupname)
            );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE compatible_releases (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           compat_package TEXT(80) NOT NULL,
           compat_channel TEXT(255) NOT NULL,
           min TEXT(20) NOT NULL,
           max TEXT(20) NOT NULL,
           PRIMARY KEY (packages_name, packages_channel, compat_package, compat_channel)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE compatible_releases_exclude (
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           compat_package TEXT(80) NOT NULL,
           compat_channel TEXT(255) NOT NULL,
           exclude TEXT(20) NOT NULL,
           PRIMARY KEY (packages_name, packages_channel, compat_package, compat_channel, exclude)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE extension_dependencies (
           required BOOL NOT NULL,
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           extension TEXT(80) NOT NULL,
           conflicts BOOL NOT NULL,
           min TEXT(20),
           max TEXT(20),
           recommended TEXT(20),
           groupname TEXT(80),
           PRIMARY KEY (required, packages_name, packages_channel, extension, groupname)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE extension_dependencies_exclude (
           required BOOL NOT NULL,
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           extension TEXT(80) NOT NULL,
           conflicts BOOL NOT NULL,
           exclude TEXT(20) NOT NULL,
           groupname TEXT(80),
           PRIMARY KEY (required, packages_name, packages_channel, extension,
                exclude, groupname)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE package_dependencies (
           required BOOL NOT NULL,
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           deppackage TEXT(80) NOT NULL,
           depchannel TEXT(255) NOT NULL,
           conflicts BOOL NOT NULL,
           min TEXT(20),
           max TEXT(20),
           recommended TEXT(20),
           is_subpackage BOOL NOT NULL,
           groupname TEXT(80),
           providesextension TEXT(80),
           PRIMARY KEY (required, packages_name, packages_channel, deppackage,
                depchannel, is_subpackage, groupname)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE package_dependencies_exclude (
           required BOOL NOT NULL,
           packages_name TEXT(80) NOT NULL,
           packages_channel TEXT(255) NOT NULL,
           deppackage TEXT(80) NOT NULL,
           depchannel TEXT(255) NOT NULL,
           conflicts BOOL NOT NULL,
           exclude TEXT(20) NOT NULL,
           is_subpackage BOOL NOT NULL,
           groupname TEXT(80),
           PRIMARY KEY (required, packages_name, packages_channel, deppackage, depchannel,
                exclude, is_subpackage, groupname)
          );';
        $worked = $database->exec($query);

        $query = '
            CREATE TABLE os_dependencies (
             packages_name TEXT(80) NOT NULL,
             packages_channel TEXT(255) NOT NULL,
             osname TEXT(80),
             conflicts BOOL,
             PRIMARY KEY (packages_name, packages_channel, osname)
            )';
        $worked = $database->exec($query);

        $query = '
            CREATE TABLE arch_dependencies (
             packages_name TEXT(80) NOT NULL,
             packages_channel TEXT(255) NOT NULL,
             pattern TEXT(80),
             conflicts BOOL,
             PRIMARY KEY (packages_name, packages_channel, pattern)
            )';
        $worked = $database->exec($query);

        $query = '
            CREATE TABLE php_dependencies (
             packages_name TEXT(80) NOT NULL,
             packages_channel TEXT(255) NOT NULL,
             min TEXT(20),
             max TEXT(20),
             PRIMARY KEY (packages_name, packages_channel)
            )';
        $worked = $database->exec($query);

        $query = '
             CREATE TABLE php_dependencies_exclude (
              packages_name TEXT(80) NOT NULL,
              packages_channel TEXT(255) NOT NULL,
              exclude TEXT(20) NOT NULL,
              PRIMARY KEY (packages_name, packages_channel, exclude)
             )';
        $worked = $database->exec($query);

        $query = '
            CREATE TABLE pearinstaller_dependencies (
             packages_name TEXT(80) NOT NULL,
             packages_channel TEXT(255) NOT NULL,
             min TEXT(20),
             max TEXT(20),
             PRIMARY KEY (packages_name, packages_channel)
            )';
        $worked = $database->exec($query);

        $query = '
             CREATE TABLE pearinstaller_dependencies_exclude (
              packages_name TEXT(80) NOT NULL,
              packages_channel TEXT(255) NOT NULL,
              exclude TEXT(20) NOT NULL,
              PRIMARY KEY (packages_name, packages_channel, exclude)
             )';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE channels (
           channel TEXT NOT NULL,
           summary TEXT NOT NULL,
           suggestedalias TEXT(50) NOT NULL,
           alias TEXT(50) NOT NULL,
           validatepackageversion TEXT(20) NOT NULL default "default",
           validatepackage NOT NULL default "PEAR_Validate",
           lastmodified TEXT,
           PRIMARY KEY (channel),
           UNIQUE(alias)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE channel_servers (
           channel TEXT NOT NULL,
           server TEXT NOT NULL,
           ssl integer NOT NULL default 0,
           port integer NOT NULL default 80,
           PRIMARY KEY (channel, server)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE channel_server_rest (
           channel TEXT NOT NULL,
           server TEXT NOT NULL,
           type TEXT NOT NULL,
           baseurl TEXT NOT NULL,
           PRIMARY KEY (channel, server, baseurl, type)
          );';
        $worked = $database->exec($query);

        $query = '
          CREATE TABLE pearregistryversion (
           version TEXT(20) NOT NULL
          );

          INSERT INTO pearregistryversion VALUES("1.0.0");
        ';
        $worked = $database->exec($query);

        $query = '
            CREATE TRIGGER package_delete DELETE ON packages
              FOR EACH ROW BEGIN
                DELETE FROM maintainers
                WHERE
                  maintainers.packages_name = old.lcname AND
                  maintainers.packages_channel = old.channel;
                DELETE FROM files
                WHERE
                  files.packages_name = old.lcname AND
                  files.packages_channel = old.channel;
                DELETE FROM baseinstalldirs
                WHERE
                  baseinstalldirs.packages_name = old.lcname AND
                  baseinstalldirs.packages_channel = old.channel;
                DELETE FROM package_dependencies
                WHERE
                  package_dependencies.packages_name = old.lcname AND
                  package_dependencies.packages_channel = old.channel;
                DELETE FROM package_dependencies_exclude
                WHERE
                  package_dependencies_exclude.packages_name = old.lcname AND
                  package_dependencies_exclude.packages_channel = old.channel;
                DELETE FROM os_dependencies
                WHERE
                  os_dependencies.packages_name = old.lcname AND
                  os_dependencies.packages_channel = old.channel;
                DELETE FROM arch_dependencies
                WHERE
                  arch_dependencies.packages_name = old.lcname AND
                  arch_dependencies.packages_channel = old.channel;
                DELETE FROM php_dependencies
                WHERE
                  php_dependencies.packages_name = old.lcname AND
                  php_dependencies.packages_channel = old.channel;
                DELETE FROM php_dependencies_exclude
                WHERE
                  php_dependencies_exclude.packages_name = old.lcname AND
                  php_dependencies_exclude.packages_channel = old.channel;
                DELETE FROM pearinstaller_dependencies
                WHERE
                  pearinstaller_dependencies.packages_name = old.lcname AND
                  pearinstaller_dependencies.packages_channel = old.channel;
                DELETE FROM pearinstaller_dependencies_exclude
                WHERE
                  pearinstaller_dependencies_exclude.packages_name = old.lcname AND
                  pearinstaller_dependencies_exclude.packages_channel = old.channel;
                DELETE FROM extension_dependencies
                WHERE
                  extension_dependencies.packages_name = old.lcname AND
                  extension_dependencies.packages_channel = old.channel;
                DELETE FROM extension_dependencies_exclude
                WHERE
                  extension_dependencies_exclude.packages_name = old.lcname AND
                  extension_dependencies_exclude.packages_channel = old.channel;
                DELETE FROM dep_groups
                WHERE
                  dep_groups.packages_name = old.lcname AND
                  dep_groups.packages_channel = old.channel;
                DELETE FROM configureoptions
                WHERE
                  configureoptions.packages_name = old.lcname AND
                  configureoptions.packages_channel = old.channel;
              END;
        ';
        $worked = $database->exec($query);

        $query = '
            CREATE TRIGGER channel_check BEFORE DELETE ON channels
            BEGIN
             SELECT RAISE(ROLLBACK, \'Cannot delete channel, installed packages use it\')
             WHERE old.channel IN (SELECT channel FROM packages);
            END;';
        $worked = $database->exec($query);

        $query = '
          CREATE TRIGGER channel_delete DELETE ON channels
            FOR EACH ROW BEGIN
              DELETE FROM channel_servers
              WHERE
                channel_servers.channel = old.channel;
              DELETE FROM channel_server_rest
              WHERE
                channel_server_rest.channel = old.channel;
            END;
        ';
        $worked = $database->exec($query);

        $query = '
          CREATE VIEW deps AS
            SELECT
                packages_name,
                packages_channel
                deppackage,
                depchannel,
                null as exclude,
                conflicts,
                min,
                max
            FROM package_dependencies
            UNION
            SELECT
                packages_name,
                packages_channel
                deppackage,
                depchannel,
                exclude,
                conflicts,
                null as min,
                null as max
            FROM package_dependencies_exclude
        ';
        $worked = $database->exec($query);

        $query = '
          CREATE VIEW protocols AS
            SELECT
                channel,
                server,
                baseurl as function,
                type as version,
                "rest" as protocol
            FROM channel_server_rest
        ';
        $worked = $database->exec($query);

        $worked = $database->exec('COMMIT');
    }
}
