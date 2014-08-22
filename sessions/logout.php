<?php 

session_start();

session_destroy();
$_SESSION =	array();

//delete cookies next lesson

header("Location:login.php");

 ?>
