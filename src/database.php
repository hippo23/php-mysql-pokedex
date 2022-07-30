<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pokemon');

try {
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
} catch (Exception $e) {
  echo '<script>alert("Warning: The site was unable to connect to the local database. Functions will not work.")</script>';
}
