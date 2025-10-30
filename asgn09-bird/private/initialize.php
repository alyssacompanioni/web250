<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  ob_start(); // turn on output buffering

  // session_start(); // turn on sessions if needed

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');
  require_once('db_credentials.php');
  require_once('database_functions.php');

  //Manually loads all files in classes folder with a loop
  foreach(glob(__DIR__ . '/classes/*.class.php') as $file) {
    require_once($file);
  }

  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes/' . strtolower($class) . '.class.php');
    }
  }
  spl_autoload_register('my_autoload');

  $database = db_connect();
  DatabaseObject::set_database($database);

?>
