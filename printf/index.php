<?php 

$name = "keyser";
$age= 27;

//$greeting="my name is keyser i am $_GET['age']";

 $greeting = sprintf("my name is %s i am %d",$name, $age);

 echo $greeting;

$posted=sprintf("today is %s, %s %d",'june','7','2012');
echo "$posted";

 $results= sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);

 print_r($results);

list($month, $day, $year)= sscanf("June 7th, 2012", "%s %[^,], %d");


 ?>