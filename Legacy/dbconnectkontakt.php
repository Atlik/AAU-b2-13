<?php
$username ="forum";
$password ="Mikkel101";
$server ="localhost";
$db ="kontakt";
$connection = mysqli_connect($server, $username, $password, $db);
if(!isset($connection)){
	echo mysqli_error();
	die();
}

?>