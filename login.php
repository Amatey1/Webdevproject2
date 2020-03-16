<html>
<head>
	<title>incident manger:login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel= "stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container"> 
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 first-login">
			<h2> Login Here</h2>
			<form action="check.php" method="post">
				<div class="form-group">
					<label> Email Address</label>
					<input type="text" name="Email" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Password</label>
					<input type="text" name="password" class="form-control" required>
				</div>
				 <button type ="submit" class="btn btn-primary"> Login</button>
			</form>
		</div>
		<div class="col-md-6 second-login">
			<h2> Register Here</h2>
			<form action="register.php" method="post">
				<div class="form-group">
					<label> Email Address</label>
					<input type="text" name="Email" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Password</label>
					<input type="text" name="password" class="form-control" required>
				</div>
				 <button type ="submit" class="btn btn-primary">Register </button>
			</form>
		</div>

		</div>	

		</div>	 

</body>
</html>