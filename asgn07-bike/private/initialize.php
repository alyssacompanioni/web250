<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

ob_start(); // turn on output buffering

// session_start(); // turn on sessions if needed

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/chain_gang/public');
// define("WWW_ROOT", '');
// * Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('db_credentials.php');
require_once('database_functions.php');

// Load class definitions manually

// -> Individually
// require_once('classes/bicycle.class.php');

// Load class definitions manually
//The following doesn't work bc the glob() is using a relative path that might not work correctly on SiteGround depending on where PHP is executing from.
//The __DIR__ constant gives you the absolute path to the directory where initialize.php is located, so it will always find the classes folder correctly.
//Local (XAMPP): Relative paths often work because of how Windows handles paths
// SiteGround (Linux): Relative paths depend on the current working directory, which can be different than you expect
// foreach(glob('classes/*.class.php') as $file) {
//   require_once($file);
// }

foreach (glob(__DIR__ . '/classes/*.class.php') as $file) {
  require_once($file);
}


// Autoload class definitions
//Use: include('classes/' . strtolower($class) . '.class.php');
// to ensure classes are loaded properly
function my_autoload($class)
{
  if (preg_match('/\A\w+\Z/', $class)) {
    include('classes/' . $class . '.class.php');
  }
}
spl_autoload_register('my_autoload');

$database = db_connect();
