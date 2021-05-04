<?php 
	$db=mysqli_connect("localhost","root","","gestion-livre")or die("Couldn't connect to database");

	 mysqli_select_db($db,"gestion-livre")or die(mysqli_error($db));

 ?>