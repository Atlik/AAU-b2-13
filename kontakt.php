<?php include("header.php");?>

<div class="container">
<div class="jumbotron vertical-center text-center">
<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Dit navn:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" placeholder="Indtast navn" /><br />
	</div>
	<div class="row">
		<label for="email">Din email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" placeholder="Indtast email" /><br />
	</div>
	<div class="row">
		<label for="message">Din besked:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="SKriv din besked her"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>	
</div>
</div>					
<?php include("footer.php");?>
