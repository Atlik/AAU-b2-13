<?php include("header.php");?>
<?php include("sendkontakt.php"); ?>



<div class="container">
<div class="jumbotron vertical-center text-center">
<form action="" method="post">
First Name: <input type="text" name="k_fnavn"><br>
Last Name: <input type="text" name="k_enavn"><br>
Email: <input type="text" name="k_email"><br>
Emne: <input type="text" name="k_emne"><br>
Message:<br><textarea rows="5" name="besked" cols="30"></textarea><br>
<input type="submit" name="sendbesked" value="Submit">
</form>

</div>
</div>	
 
<?php include("footer.php");?>
