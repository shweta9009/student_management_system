<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bitnami.css">

</head>
<title>student management</title>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<h2>login form</h2>
				

				<form action="validation.php" method="POST">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-contol" placeholder="username">
					</div>	
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-contol" placeholder="password">
					</div>	
					<button type="submit" class="btn btn-primary">login</button>


				
                </form>
            </div>
        </div>
    </div>        
</body>
</html>