<?php
include("connection.php");
error_reporting(0);
$_GET['rno'];
$_GET['n'];
$_GET['su'];
$_GET['dob'];
$_GET['g'];
$_GET['fn'];
$_GET['mn'];
$_GET['add'];
$_GET['e'];
$_GET['mno'];
$_GET['ay'];
$_GET['c'];
$_GET['yl'];
$_GET['t'];
$_GET['sf'];

?>

<!DOCTYPE html>
<html>
<head><center>
	<h2><b>STUDENT MANAGEMENT SYSTEM</h2></b>
	</center>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bitnami.css">

</head>
<body  style = "background: url(background.jpg); background-size: cover,background-repeat: no-repeat;">
	<form action="index.php" method="POST">
		<div class= "container">
		<div class= "row">
		<div class= "col-lg-6">	
			<h3><b>Student Details</b></h3>
			<table border="5" align="center">
				<tr><th>Registration no:</th>
					<td><input type="input" name="registrationno" id="iregistraionno" style="width: 90px; text-align: right;" value="<?php echo $_GET['rno']; ?>"></td>
				</tr>
				<tr><th>Firstname:</th>
					<td><input type="text" name="firstname" id="ifirstname" style="width: 90px; text-align: right ;" value="<?php echo $_GET['n']; ?>"></td>
				</tr>
				<tr><th>Surname:</th>
					<td><input type="text" name="surname" id="isurname" style="width: 90px; text-align: right ;" value="<?php echo $_GET['su']; ?>"></td>
				</tr>
				<tr><th>DOB:</th>
					<td><input type="date" name="dateofbirth" id="idateofbirth" style="width: 90px; text-align: right ;" value="<?php echo
					$_GET['dob']; ?>"></td>
				</tr>
				<tr><th>Gender:</th>
					<td><input type="radio" name="gender" id="igender" value="male">male</td>
					<?php
					if($gender=='male')
					{
						echo "checked";
					}
					?>
					<td><input type="radio" name="gender" id="igender" value="female">female</td>
					<?php
					if($gender=='female')
					{
						echo "checked";
					}
					?>
				</tr>
				<tr><th>Father Name:</th>
					<td><input type="text" name="fathername" id="ifathername" style="width: 90px; text-align: right ;" value="<?php echo $_GET['fn']; ?>"></td>
				</tr>
				<tr><th>Mother Name:</th>
					<td><input type="text" name="mothername" id="imothername" style="width: 90px; text-align: right ;" value="<?php echo $_GET['mn']; ?>"></td>
				</tr>
				<tr><th>Address:</th>
					<td><input type="text" name="address" id="iaddress" style="width: 90px; text-align: right ;" value="<?php echo $_GET['add']; ?>"></td>
				</tr>
				<tr><th>Email:</th>
					<td><input type="email" name="email" id="iemail" style="width: 90px; text-align: right ;" value="<?php echo $_GET['e']; ?>"></td>
				</tr>
				<tr><th>Mobile no:</th>
					<td><input type="input" name="mobileno" id="imobileno" style="width: 90px; text-align: right ;" value="<?php echo $_GET['mno']; ?>"></td>
				</tr>

				<tr><th>Academic Year:</th>
					<td><input type="input" name="academicyear" id="iacdemicyear" style="width: 90px; text-align: right;" value="<?php echo $_GET['ay']; ?>"></td>
				</tr>
				<tr><th>Course:</th>
					<td><input type="text" name="course" id="icourse" style="width: 90px; text-align: right ;" value="<?php echo $_GET['c']; ?>"></td>
				</tr>
				<tr><th>Year Level:</th>
					<td><input type="input" name="yearlevel" id="iyearlevel" style="width: 90px; text-align: right ;" value="<?php echo $_GET['yl']; ?>"></td>
				</tr>
				<tr><th>Trade:</th>
					<td><input type="text" name="trade" id="itrade" style="width: 90px; text-align: right ;" value="<?php echo $_GET['t']; ?>"></td>
				</tr>
				<tr><th>Semester Fee:</th>
					<td><input type="radio" name="semesterfee" id="isemesterfee" value="<?php echo $_GET['sf']; ?>">paid</td>
					<td><input type="radio" name="semesterfee" id="isemesterfee" value="<?php echo $_GET['sf']; ?>">unpaid</td>
				</tr>
				<tr><td>
					<button type="submit" class="btn btn-primary">update</button>
				</tr>
			</table>
		</div>
		</div>
		</div>			
	</form>				
</body>
</html>

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

	$q = "UPDATE studentinfo SET firstname='$firstname' , surname='$surname' , dob='$dob' , gender='$gender' , fathername='$fathername' , mothername='$mothername' , address='$address' , email='$email' , mobileno='$mobileno' , academicyear='$academicyear' , course='$course' , yearlevel='$yearlevel' , trade='$trade' , semesterfee='$semesterfee' WHERE registration='$registration' ";
	$result = mysqli_query($conn, $q);
	if ($result) 
	{
		echo "record updated sucessfully";
	}
	else
	{
		echo "error";
	}
?>