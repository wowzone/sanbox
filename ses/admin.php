<?php 

session_start();

echo "Usuario:".  $_SESSION["username"]; 

?>

<a href="logout.php">logout</a>