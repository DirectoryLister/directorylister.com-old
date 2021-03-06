<?php
// Define path to application directory
defined('APPLICATION_PATH')
	|| define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

	
// Define application environment
defined('APPLICATION_ENV')
	|| define('APPLICATION_ENV',
		(getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

	
/** Zend_Application */
// This sets up the autoloader so you don't have to worry about it.
require_once 'Zend/Application.php';


// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/config/bootstrap.ini'
);
$application->bootstrap()->run();