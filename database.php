<?php
$db_host = 'localhost'; // Server Name
$db_user = 'linuxadmin'; // Username
$db_pass = 'Linux@QA'; // Password
$db_name = 'booking_db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

?>



