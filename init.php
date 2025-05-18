<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'durval_discos');
define('DB_USER', 'root');
define('DB_PASS', '');
function db_connect() {
    return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
}
?>