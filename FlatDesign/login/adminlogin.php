<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
<link href="loginstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Admin login</h2>
<form action="" method="post">
<label>Brugernavn :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>