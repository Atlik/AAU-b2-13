<?php
// Start connection
$connection = mysql_connect("localhost", "forum", "Mikkel101");
// Vælg database
$db = mysql_select_db("company", $connection);
session_start();// Start session
// Gem session i variabel
$user_check=$_SESSION['login_user'];
// SQL query for at finde bruger info
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Afslut connection
header('Location: adminlogin.php'); // Redirect til adminlogin for at sikre sessionen.
}
?>