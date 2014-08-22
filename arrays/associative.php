<?php 

$sites= array('url'=>'bextrade.com','url2'=>'callmaster.com','url3'=>'emc.com');

foreach ($sites as $key => $value) {
	echo "<li>".$key ."-". ucwords($value)."-"."</li>";
}

$pais = array('cr' => 'Costa Rica', 'us' => 'USA', 'pa' => 'Panama','co'=> 'Colombia');

foreach ($pais as $code=>$country) {
	echo "<li>".$code."=".$country."</li>";
}

?>