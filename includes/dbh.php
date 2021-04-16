<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bank";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	if(!$conn){
		die("Could not connect to database because of this error --->".mysqli_connect_error());
	}
?>