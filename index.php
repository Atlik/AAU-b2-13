
<?php include("header.php");?>

<div class="col-12">
<div class="jumbotron vertical-center text-center">
<h2>Event information</h2>
<p>Næste event afholdes d. 20/5 kl. 13:00 i Musikhuset.</p>
<p>Temaet er <strong>Ukraine</strong></p>
<button type="button" class="btn btn-default">Køb billet</button>


</div>
</div>

<div class="container">
<div class="col-6">
<div class="jumbotron vertical-center text-center">
<h2>Meet ambassadors</h2>
<button type="button" class="btn btn-default">Meet them</button>
</div>
</div>

<div class="container">
<div class="col-6">
<div class="jumbotron vertical-center text-center">
<table>
<tr>
<p>hej</p>
<?php
$servername = "localhost";
$username = "forum";
$password = "Mikkel101";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT data FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["data"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tr>
</table>
</div>
</div>
</div>
</div>
<div class="container">
<div class="col-12">
<div class="jumbotron vertical-center text-center">

  <form method="post">
    Email<input name="n_email" type="email" required /><br>
    <input type="submit" name="registrer" value="Done"/>
    </form>

</div>
</div>
</div>
<?php
 include("dbconnect.php");

if(isset($_POST['registrer'])){
	// create vars
	$email = $_POST['n_email'];
	// validate
	if(!strpos($email, "@") | !strpos($email, ".") | strpos($email, " "))
		die("<p>invalid email</p>");

	$email_exists = mysqli_query($connection, "SELECT * FROM `brugere` WHERE `email` LIKE '$email'") or die();

	if(mysqli_num_rows($email_exists) > 0){
		die("Denne email er allerede tilmeldt");

	}

	$sql = "INSERT INTO `brugere` (`email`) VALUES ('$email')";
		mysqli_query($connection, $sql);
		echo "Account created";
}

?>	
		


<?php include("footer.php");?>
