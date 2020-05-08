<?php
$db_name = 'style_shope';
$db_user = 'root';
$db_host = 'localhost';
$db_password = '';

// connecting to DataBase
 $conn = mysqli_connect($db_host, $db_user, $db_password,$db_name)
 or die("Failed to connect to MySQL");
