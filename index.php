
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
include("dbconnectadminlogin.php");
include("admingetcontent.php");

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
include("nyhedsbrev.php");



?>	
		


<?php include("footer.php");?>
