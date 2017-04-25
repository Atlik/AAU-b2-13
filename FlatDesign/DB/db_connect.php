<?php

	$connection = mysqli_connect('localhost','root','','worldkitchen_blog');

	if(!$connection){
		die("cannot connect to database" .mysqli_connect_error());
	}
	
	$query = "SELECT * FROM blog_details";
	$results = mysqli_query($connection, $query);

	if(!$results){
		die("could not query the database");
	}

?>
