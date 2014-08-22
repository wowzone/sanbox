<?php 

//$name= 'buddy' hace un valor por defecto
// 	function say_hello($name= 'buddy')
// 	{
// 	return "HI, THERE $name";
// 	}

// echo say_hello('keyser');

/////////////////////////////////////////

	function pp($value)
	{
	echo "<pre>";
	print_r($value);
	echo "</pre>";
	}

$arr = array('name' => 'keyser', 'age'=> 37, 'occupation'=>'teacher' );

// pp($arr);


////////////////////////////////////////////////////////

// en este ejemplo lo que veremos sera como sacar un valor de varios arrays unidos en uno.
// esto se da a traves de la funcion que vemos, la funcion recibe dos parametros el valor a sacar 
//y el array de donde lo sacaremos


// function array_pluck($Topluck, $arr){
// 	$ret= array();

// 	foreach ($arr as $item) {
// 		$ret[]=$item[$Topluck];
// 	}

// 	return $ret;
// }

// arriba esta la funcion.

$people =array(
	 array('name' => 'Keyser','age'=>37,'occupation'=>'Web Developer' ),
	 array('name' => 'Cesar','age'=>28,'occupation'=>'Teacher' ),
	 array('name' => 'Rodrigo','age'=>40,'occupation'=>'Marketing' )
	);

$empresas = array(

	array('Categoria' =>'mercadeo', 'tipo'=> 'Marketing', 'nombre'=>'Bextrade', 'tiempo'=> '35'),
	array('Categoria' => 'Automotriz', 'tipo'=> 'Autos Usados' , 'nombre'=> 'Taller carlitos', 'tiempo' => '29'),
	array('Categoria' => 'Turismo', 'tipo'=> 'Hoteleria', 'nombre'=> 'San Jose Palacio' , 'tiempo'=> '78')
    
);


extract($arr);

echo "$name $age $occupation";

pp($empresas);

$miFecha = array(

array(

array("13 de enero de 2015", "11 de febrero de 2018"),

array("13 de enero de 2020", "11 de febrero de 2015"),

),

array(

array("3 de agosto de 2017", "1 de octubre de 2016"),

array("3 de agosto de 2013", "1 de octubre de 2019"),

),

array(

array("10 de junio de 2020", "11 de marzo de 2019"),

),

array(

array("22 de marzo de 2020", "28 de mayo de 2019"),

array("22 de marzo de 2019", "28 de mayo de 2018"),

array("22 de marzo de 2018", "28 de mayo de 2017"),

array("22 de marzo de 2017", "28 de mayo de 2016"),

)

);

echo "<br/>   " . $miFecha[3][2][0];
// $plucked= array_pluck('name',$people);// referenciamos el indice o valor que queremos sacar y el array de donde lo sacaremos

// foreach ($plucked as $name => $value) {
// 	echo "<li>$value</li>";
// 	echo "</br>";
// }

// print_r($plucked);


///////////////////////////////////////////////////////////////////////////


 ?>
