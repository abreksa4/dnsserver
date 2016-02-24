<?php

/**
 * server.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/dnsserver
 * @link      http://www.appserver.io
 */
define('STARTUP_BASE', __DIR__ . '/../');

require (STARTUP_BASE . 'vendor/appserver-io/server/src/AppserverIo/Server/Standalone.php');

// check if first argument is given for configuration
if (isset($argv[1])) {
    $config = $argv[1];
} else {
    $config = STARTUP_BASE . 'etc/dnsserver.xml';
}

$server = new \AppserverIo\Server\Standalone(STARTUP_BASE, $config, STARTUP_BASE . 'vendor/autoload.php');
$server->start();
