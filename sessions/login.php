<?php 

session_start();

//definimos variables, para trabajar con constantes no se 
//necesita usarlas entre comillas solo cuando se definen


define('USERNAME', 'keyser');
define('PASSWORD', 'canada');


if ($_SERVER['REQUEST_METHOD']=='POST'){

// 	echo "posted";
	$username= $_POST['username'];
 

		} else{
			$status= "incorrect login";
		}
    


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<ul>
<form action="login.php" method="post">
	<li>
	<label for="username">Username:</label>
	<input type="text" name="username" id="username">
	</li>
	<li>
	<label for="password">Password:</label>
	<input type="password" name="password" id="password">
	</li>
	<br>
	<input type="submit" value="Enviar!" name="loginForm">
	
</form>
<?php if (isset($status)) {
		echo $status;
	} 
	?>
</ul>
</body>
</html>