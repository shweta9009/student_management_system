<?php

	include("connection.php");
	mysqli_select_db($conn, 'studentdb');
	
	$name = $_POST['username'];
	$pass = $_POST['password'];


	$q = " SELECT * FROM login where username = '$name' && password = '$pass' "; 
	$result = mysqli_query($conn, $q);
	$num = mysqli_num_rows($result);

	
	if($num)
	{
		header('location:project.php');
	}

	/*$q1 = " select * from login1 where name = '$name' && password = '$pass' ";
	$result1 = mysqli_query($conn, $q1);
	$num1 = mysqli_num_rows($result1);

	elseif ($num1) 
	{
		header('location:home.php');
	}*/

	else
	{
		echo "username or password is inccorect";
		//header('location:login.php');	
		
	}


?>
