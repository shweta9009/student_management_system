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
	<form action="studentdb.php" method="POST">
		<div class= "container">
		<div class= "row">
		<div class= "col-lg-6">	
			<h3><b>Student Details</b></h3>
			<table border="5" align="center">
				<tr><th>Registration no:</th>
					<td><input type="input" name="registrationno" id="iregistraionno" style="width: 90px; text-align: right;" value=""></td>
				</tr>
				<tr><th>Firstname:</th>
					<td><input type="text" name="firstname" id="ifirstname" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Surname:</th>
					<td><input type="text" name="surname" id="isurname" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>DOB:</th>
					<td><input type="date" name="dateofbirth" id="idateofbirth" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Gender:</th>
					<td><input type="radio" name="gender" id="igender" value="male">male</td>
					<td><input type="radio" name="gender" id="igender" value="female">female</td>
				</tr>
				<tr><th>Father Name:</th>
					<td><input type="text" name="fathername" id="ifathername" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Mother Name:</th>
					<td><input type="text" name="mothername" id="imothername" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Address:</th>
					<td><input type="text" name="address" id="iaddress" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Email:</th>
					<td><input type="email" name="email" id="iemail" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Mobile no:</th>
					<td><input type="input" name="mobileno" id="imobileno" style="width: 90px; text-align: right ;" value=""></td>
				</tr>

				<tr><th>Academic Year:</th>
					<td><input type="input" name="academicyear" id="iacdemicyear" style="width: 90px; text-align: right;" value=""></td>
				</tr>
				<tr><th>Course:</th>
					<td><input type="text" name="course" id="icourse" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Year Level:</th>
					<td><input type="number" name="yearlevel" id="iyearlevel" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Trade:</th>
					<td><input type="text" name="trade" id="itrade" style="width: 90px; text-align: right ;" value=""></td>
				</tr>
				<tr><th>Semester Fee:</th>
					<td><input type="radio" name="semesterfee" id="isemesterfee" value="0000">paid</td>
					<td><input type="radio" name="semesterfee" id="isemesterfee" value="8046">unpaid</td>
				</tr>
				<tr><td>
					<button type="submit" class="btn btn-primary">submit</button>
				</tr>
			</table>

		</div>
		</div>
		</div>			
	</form>				
</body>
</html>


