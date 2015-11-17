<?php
$db_username = 'root';
$db_password = '';
$db_name = 'test';
$db_host = 'localhost';
$items_per_page = 3;

$connectDB = mysqli_connect($db_host, $db_username, $db_password, $db_name)or die('could not connect to db');
//testing

?>
