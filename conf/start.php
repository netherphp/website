<?php

ini_set('error_reporting',E_ALL);
ini_set('display_errors',true);

define('PROJECT_ROOT',dirname(dirname(__FILE__)));

// bring in composer autoloading //////////////////////////////////////////////
require(sprintf(
	'%s/vendor/autoload.php',
	PROJECT_ROOT
));

Nether\Option::Set([
	'app-name' => 'Nether',
	'app-short-desc' => 'Lightweight componentised framework for PHP 5.5',
	'nether-web-root' => sprintf('%s/www',PROJECT_ROOT)
]);

if(defined('WEB')) {
	new Nether\Surface;
}
