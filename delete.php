<?php
include("connection.php");
$rn=$_GET['rno'];
$q = "DELETE from studentinfo WHERE registration=$rn";
$result=mysqli_query($conn,$q);
if ($result) 
	{
		header('location:display.php');
	}
	else
	{
		echo "error";
	}



?>