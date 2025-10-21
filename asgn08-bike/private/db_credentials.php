<?php

// Keep database credentials in a separate file
// 1. Easy to exclude this file from source code managers
// 2. Unique credentials on development and production servers
// 3. Unique credentials if working with multiple developers

// localhost credentials
define("DB_SERVER", "localhost");
define("DB_USER", "chain_gang_user");
define("DB_PASS", "P@ssword1");
define("DB_NAME", "chain_gang");

// define('DB_SERVER', 'localhost');
// define('DB_USER', 'umy8becxgkrxf');
// define('DB_PASS', 'P@ssword-1234');
// define('DB_NAME', 'db4tr7crgwbcis');

?>
