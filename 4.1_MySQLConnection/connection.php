<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'twitter'); //make sure to set your database


//connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if(mysqli_connect_errno())
{
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
}
var_dump($connection);

 ?>
