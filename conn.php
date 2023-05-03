<?php
	$conn = mysqli_connect('localhost', 'root', '', 'nidaclothing');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>