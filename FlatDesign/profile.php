<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>

<br>
<div class="well">
	<form>
	<p>ændre højre tekstelement her</p>
	<input type="text" name="nytekst">
 	<button name="s_tekst" type="submit" >Opdater</button>
	</form>

</div>
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

if(isset($_POST['s_tekst'])){
	// create vars
	$nytekst = $_POST['nytekst'];
	
	
	
	$sql = "UPDATE `data` SET `data`= '$nytekst' WHERE 1";
		mysqli_query($conn, $sql);
		echo "Data er opdateret";


}

?>	
</body>
</html>