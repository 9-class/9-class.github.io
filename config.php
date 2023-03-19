<?php

// Set database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username_here');
define('DB_PASSWORD', 'your_password_here');
define('DB_NAME', 'users_db');

// Attempt to connect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
