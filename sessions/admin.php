<?php 

session_start();
	
	echo "Bienvenido ". $_SESSION['username'];
	
	$saludo = "<h3>Bienvenido al administrador</h3>";
	echo $saludo."<br>";
	echo "<br><a href ='logout.php'>Logout</a>";
//}

?>

