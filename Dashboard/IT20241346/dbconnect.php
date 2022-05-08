<?php 
	
	$db = mysqli_connect("localhost","root","","blueline_vaccine");
	

	if (!$db) {
		die("Connection Failed". mysqli_connect_error());
	}
 ?>