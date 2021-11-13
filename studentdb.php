<?php

$registration = $_POST['registrationno'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$dob = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$academicyear = $_POST['academicyear'];
$course = $_POST['course'];
$yearlevel = $_POST['yearlevel'];
$trade = $_POST['trade'];
$semesterfee = $_POST['semesterfee'];

if (!empty($registration) || !empty($firstname) || !empty($surname) || !empty($dob) || !empty($gender) || !empty($fathername) || !empty($mothername) || !empty($address) || !empty($email) || !empty($mobileno) || !empty($academicyear) || !empty($course) || !empty($yearlevel) || !empty($trade) || !empty($semesterfee))
{
	include("connection.php");// connection

	if ($conn) 
	{
		$sql = "INSERT INTO studentinfo VALUES('$registration' , '$firstname' , '$surname' , '$dob' , '$gender' , '$fathername' , '$mothername' , '$address' , '$email' , '$mobileno' , '$academicyear' , '$course' , '$yearlevel' , '$trade' , '$semesterfee')";
		
		$result = mysqli_query($conn,$sql);

		if ($result)
		{
			echo "inserted sucessfully";
		}
		else
		{
			echo "error";
		}
		$conn->close();
	}
	else
	{
		echo "not connected";
	}

}



?>