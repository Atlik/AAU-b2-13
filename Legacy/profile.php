<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>

<br>
<form method="POST">
<input type="text" name="nytekst">
 <button name="sendbesked" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
</form>

<?php
include("dbconnectadminlogin.php");
if(isset($_POST['sendbesked'])){
	// create vars
	$nytekst = $_POST['nytekst'];
	// validate
	
	
	$sql = "UPDATE `data` SET `data`= ('$nytekst') WHERE 1";
		mysqli_query($connection, $sql);
		echo "Data er opdateret";


}

?>	
</body>
</html>