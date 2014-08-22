<?php 
//simple array

$months= array('january','february','march','april','may' );
//print_r($months);
echo $months['4'];

$sites=array('bextrade.com','callmaster','emc.com');

foreach ($sites as $url) {
echo "<li>$url</li>";
}
$nombre = array('Carlos' => 'Formador','Keyser' =>'Programador','Mario'=>'Fundador');
foreach ($nombre as $prof) {
echo "<li>$prof</li>";
}

 ?>