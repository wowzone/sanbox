<?php 


$meses = array('enero', 'febrero', 'marzo','abril', 'mayo' );


foreach ($meses as $lista) {
	echo "<li> $lista </li>";
}

//añade un elemento 
array_push($meses, 'junio');
//otra forma de agregar un elemento
$meses[] = 'Julio';

//remueve el ultimo elemento del array
array_pop($meses);

//remueve el primer elemento del array.

array_shift($meses);

//añade un elemento al inicio del array.
array_unshift($meses, 'enero');


//filtra los valores de un array

$filtro	= array_filter($meses, function ($item) { return strlen($item) == 5; });
print_r($filtro);



// imprime el el elemento y valor del array.


//print_r($meses);

 ?>