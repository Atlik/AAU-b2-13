<?php
session_start(); // Start session

$error=''; // Variabel til at gemme error message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

// Definer $username og $password
$username=$_POST['username'];
$password=$_POST['password'];

//Start connection 
$connection = mysql_connect("localhost", "forum", "Mikkel101");


// Beskyt mod SQL Injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


// Vælg database
$db = mysql_select_db("company", $connection);

// SQL query for at tjekke login info
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
	$_SESSION['login_user']=$username; // Start session med brugernavn
	header("location: profile.php"); // Redirect til profil sektionen og gennemfør login
} else {
	$error = "Username or Password is invalid";
}
mysql_close($connection); // Afslut connection
}
}
?>