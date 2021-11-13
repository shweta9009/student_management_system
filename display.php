<style>
	th{
		width: 50px;
		font-size: 15px;
		height: 50px;
		background: #ffb6c1;
		margin: 10px;
		box-shadow: 0 5px 15px -5px #00000070;
		
	}
	td{
		padding: 20px;
		font-size: 12px;
		width: 50px;
		height: 50px;
		background: #b0e0e6;
		margin: 10px;
		box-shadow: 0 5px 15px -5px #00000070;
		color: #000000;
		overflow: hidden;
		position: relative;

	}

	body{
		background: url(smoke.jpg);  background-size: cover, background-repeat: no-repeat;
	}
</style>



<?php


	include("connection.php");
	mysqli_select_db($conn, 'studentdb');

	$q = "SELECT * FROM studentinfo";
	$result = mysqli_query($conn,$q);
	$total = mysqli_num_rows($result);

?>
<table border="5" width="100%">
	<tr>
		<th>registrationno</th>
		<th>firstname</th>
		<th>surname</th>
		<th>dob</th>
		<th>gender</th>
		<th>fathername</th>
		<th>mothername</th>
		<th>address</th>
		<th>email</th>
		<th>mobileno</th>
		<th>academicyear</th>
		<th>course</th>
		<th>yearlevel</th>
		<th>trade</th>
		<th>semesterfee</th>
		<th colspan="2">operaions</th>
	</tr>


	<?php
	if($total !=0)
	{
	while ($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>
				<td> ".$row["registration"]."</td>
				<td> ".$row["firstname"]."</td>
				<td> ".$row["surname"]."</td> 
				<td> ".$row["dob"]."</td>
				<td> ".$row["gender"]."</td>
				<td> ".$row["fathername"]."</td>
				<td> ".$row["mothername"]."</td>
				<td> ".$row["address"]."</td>
				<td> ".$row["email"]."</td>
				<td> ".$row["mobileno"]."</td>
				<td> ".$row["academicyear"]."</td>
				<td> ".$row["course"]."</td>
				<td> ".$row["yearlevel"]."</td>
				<td> ".$row["trade"]."</td>
				<td> ".$row["semesterfee"]."</td> 
				<td> <a href='index.php?rno=$row[registration] &n=$row[firstname] &su=$row[surname] &dob=$row[dob] &g=$row[gender] &fn=$row[fathername] &mn=$row[mothername] &add=$row[address] &e=$row[email] &mno=$row[mobileno] &ay=$row[academicyear] &c=$row[course] &yl=$row[yearlevel] &t=$row[trade] &sf=$row[semesterfee]'>update</a></td>
				<td> <a href='delete.php?rno=$row[registration]''>delete</a></td>




				</tr>";
	}
    }
    else
    {
    	echo "no record found";
    }
    ?>
</table>
