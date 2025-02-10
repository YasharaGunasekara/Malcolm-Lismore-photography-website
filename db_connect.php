<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "db_hnd_91/93";

	$con = mysqli_connect($server,$username,$password,$db_name);

	if (!$con) {
		die("Connection Failed !!!");
	}else {
		// echo "Successfully Connected !!!";
	}

 ?>