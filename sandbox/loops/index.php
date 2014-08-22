<?php 


$nombres = array ('keyser', 'Jeff', 'karen');

// foreach ($nombres as $name) {
// 	echo $name;
// }

//////////////////////////////////////////////////////////////


// $colores = array('naranja' => 'amarillo', 'papaya'=>'rosado','manzana'=> 'rojo'	);

// foreach ($colores as $fruta => $color) {
// 	echo "<li>$fruta-$color</li>";
// }

/////////////////////////////////////////////////////////

// for ($i =0; $i<10; $i++) {
// 	echo "<li>$i</li>";
// }

///////////////////////////////////////////////////////

$i = 1;
while ($i <= 10) {
    echo $i++;    /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}

$one = array("10", "20", "30", "40");
$two = array("a", "b", "c", "d");

$i=0;
while($i < count($one)) {
   reset($two);
   while($a = each($two)) {
       echo $a[1]." - ".$one[$i].", "; 
   }
   $i++;
   
}

///////////////////////////////////

$empresas = array(

		array('Agricola'	=> 	'semillas'),
		array('siembra'		=>	'tio pelon'),
		array('cosechas'	=> 	'refrescos','granos'=>'frijoles')
);



 ?>