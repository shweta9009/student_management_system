<style>
	body{
		background: url("background.jpg") no-repeat;
		height: 100vh;
		background-size: cover;
		
	}
	.menu{
		width: 100%;
		height: 100px;
		margin: 0px auto;
		position: absolute;
		padding-left: 670px;
	}
	.menu ul li ul{
		display: none;
	}
	.menu ul li{
			float: left;
			background-color: black;
			color: white;
			width: 200px;
			line-height: 50px;
			font-size: 25px;
			text-align: center;
			list-style: none;
			opacity: 0.6;
			text-transform: capitalize;
			border-left: 4px solid transparent;
	}
	.menu ul li:hover{
		background-color: blue; 
		border-left: 4px solid;
		border-left-color: black;
		opacity: 0.9;
	}
</style>
<!DOCTYPE html>
<head>
	<title>student management</title>
	<link rel="stylesheet" type="text/css" href="bitnami.css">

</head>
<body>
<div class = "menu">	
	<ul>
		<li><a href="display.php">home</a></li>
		<li><a href="home.php">new student</a></li>
		<li><a href="student mangement.php">logout</a></li>
	</ul>
</div>
</body>
</html>	
