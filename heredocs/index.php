<?php 

$post = array(
	'author'		 => 'Keyser Abarca',
	'title'			 => 'My Aweson Post',
	'body' 			 => 'here is my body',
	'published-date' => '6-10-2012',
	'cathegory'		 => 'Personal Post',
	'footer'		 => 'Esto es el footer'
	);

//extrae un elemento del array ver ejemplo
extract($post); // esta funcion es solo para los arrays asociativos no para los multidimensionales.
//usando esta funcion podemos añadir dentro de las etiquetas de html las variables del array
//echo "$author";

$email = <<<EOT
<h1>$title</h1>
<p>By: $author</p>
<div> 
$cathegory:<hr width=25% align='left'></br>

	$body 
</div><hr width=25% align='left'></br>
<div>$footer</div>
EOT;

echo "$email";

 ?>