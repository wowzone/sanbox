<?php 

// se le añade un valor al  variable
$month= 'january';

///////////////////////////////////////////////////
// se le da un comparativo a la variable
//$month=='january';

// if($month == 'january'){
// 	echo "it is jan!";

// }else if($month=='february'){
//  echo "it is feb!";
// }

//  else{
//  	echo "not the right one";
//  }

////////////////////////////////////////////


// switch ($month) {
// 	case 'january':
// 		echo"It is Jan!";
// 		break;

// 	case 'february':
// 	echo "it is feb!";
// 	break;
	
// 	default:
// 		echo "not the right one!!";
// 		break;
// }

////////////////////////////////////////////////

// $months = array(
// 	'january' => 'It is Jan',
// 	'february'=> 'it is feb',
// 	'march'=> 'it is march'
// );

// diferentes ejemplos de copiar.ctrl + d pone el cursor en varios puntos
//echo $months[$month];
// doferentes ejemplos de copiar.
//echo $months ['february'];

$color = array('rojo', 'amarillo','naranja','azul','melon','celeste','blanco','negro');
echo "Esta es la lista de colores"."</br></br>";
foreach ($color as $colores) {
	echo "<li>$colores</li>";
}
 ?>