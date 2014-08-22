<?php

function say_hello($name)
{
    return "Hello $name";
}
$gretting= say_hello('John Doe');
echo $gretting;
////////////////////////////////////////
function something()
{
$posicion	= array('Keyser' => 'CEO' , 'Joe'	=>	'Gerente', 'Pamela'	=>	'Secretaria' );

// foreach ($posicion as $name => $poc) {
// 	echo "<li>$name-$poc</li>";
// }
for ($i=0; $i < =(sizeof($posicion)); $i++) { 
	# code...
}
}
$lista = something();
echo "$lista";



