<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="form";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if (!$con) {
		die("connection failed".mysqli_connect_error());
	}
?>