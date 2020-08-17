<html>
<head>
<title>login form</title>
<link rel="stylesheet" type="text/css" href"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="login styles.css">
<body>
     <div class="loginbox">
	<img src="avatar.png" class="avatar">
	<h1>Login Here</h1>
	<form action="validation.php" method="post">
		<p>username</p>
		<input type="text" name="user" placeholder="Enter Username" class="form-control" required>
		<p>password</p>
		<input type="password" name="password" placeholder="Enter password" class="form-control" required>
		<input type="submit" name="" value="Login"></button>
		<a href ='#'> Forgot your password?</a><br>
		<a href ='registerform.html'>New user? sign in</a>
	</form>
	</div>
</body>
</head>
</html>