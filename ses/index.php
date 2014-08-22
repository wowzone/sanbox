 <?php 

session_start();

define("USERNAME", "keyser");
define("PASSWORD", "1234");



if (isset($_POST['username']) && $_POST['password']) {
	$username = $_POST['username'];
	$password = $_POST['password'];

if ($username == USERNAME || $password == PASSWORD) {
	$_SESSION["username"] = $username;
	header("location: admin.php");

}else{
		$status = "Login erroneo volver a intentarlo";
	 }

}

 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="index.php" method="post">
	<li>
	<label for="username">Username</label>
	<input type="text" name="username" id="username">
	</li>
	<li>
	<label for="password">Password</label>
	<input type="password" name="password" id="password">
	</li>
	<input type="submit" value="Enviar!">
	<?php 

		if (isset($status)) {
			echo $status;
		}

	 ?>
	</form>
	
</body>
</html>