<?php
$db_username = 'root';
$db_password = ''; 
$db_name = 'db_rai'; 
$db_host = 'localhost';

$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('Error: Could not connect to database.');
?>