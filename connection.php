<?php
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "studentdb";
	// connection
	$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	if ($conn) 
	{
	}
	else
	{
		die("connection failed because ".mysqli_connect_error());
	}
?>