<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="logcheck.php">
		<fieldset>
			<legend>
				LOGIN
			</legend>
				<center>
							User ID: <br>
							<input type="text" name="uid" value=""> <br>
							Password: <br>
							<input type="password" name="upassword"> <br> <br>
							<input type="submit" name="submit" value="Login">
							<u><a href="registration.php">Register</a></u>
				</center>
		</fieldset>
	</form>
</body>
</html>