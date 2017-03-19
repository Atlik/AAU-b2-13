<?php

$username ="forum";
$password ="Mikkel101";
$server ="localhost";
$db ="test";
$conn = mysqli_connect($server, $username, $password, $db);
if(!isset($conn)){
	echo mysqli_error();
	die();
}

?>