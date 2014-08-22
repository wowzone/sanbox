<?php 


$fruta = array(
 'naranja' => array(
                   'propiedad' => 'jugosa',
                   'color' => 'naranja',
                   'sabor' => 'dulce'
                   ),
 'limón' => array(
                   'propiedad' => 'jugoso',
                   'color' => 'amarillo',
                   'sabor' => 'cítrico'
                   )
 );
 
echo $fruta['naranja']['propiedad'];

//////////////////////////////////////////////////

//Two-dimensional Arrays

$shop = array( array("rose", 1.25 , 15),
               array("daisy", 0.75 , 25),
               array("orchid", 1.15 , 7) 
             ); 
echo "<h1>Manual access to each element</h1>";

echo $shop[0][0]." costs ".$shop[0][1]." and you get ".$shop[0][2]."<br />";
echo $shop[1][0]." costs ".$shop[1][1]." and you get ".$shop[1][2]."<br />";
echo $shop[2][0]." costs ".$shop[2][1]." and you get ".$shop[2][2]."<br />";

echo "<h1>Using loops to display array elements</h1>";

echo "<ol>";
for ($row = 0; $row < 3; $row++)
{
    echo "<li><b>The row number $row</b>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++)
    {
        echo "<li>".$shop[$row][$col]."</li>";
    }

    echo "</ul>";
    echo "</li>";
}
echo "</ol>";

//////////////////////////////////////////////


//otra forma de hacer el array  es
$shop1 = array( array( 'Title' => "rose", 
                      'Price' => 1.25,
                      'Number' => 15 
                    ),
               array( 'Title' => "daisy", 
                      'Price' => 0.75,
                      'Number' => 25,
                    ),
               array( 'Title' => "orchid", 
                      'Price' => 1.15,
                      'Number' => 7 
                    )
             );
echo "<h1>Manual access to each element from associative array</h1>";

for ($row = 0; $row < 3; $row++)
{
    echo $shop1[$row]["Title"]." costs ".$shop1[$row]["Price"]." and you get ".$shop1[$row]["Number"];
    echo "<br />";
}

echo "<h1>Using foreach loop to display elements</h1>";

echo "<ol>";
for ($row = 0; $row < 3; $row++)
{
    echo "<li><b>The row number $row</b>";
    echo "<ul>";

    foreach($shop1[$row] as $key => $value)
    {
        echo "<li>".$value."</li>";
    }

    echo "</ul>";
    echo "</li>";
}
echo "</ol>";

/////////////////////////////////////////////////

// Three-dimensional Arrays

$shop3 = array(array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   )
             );


echo "<ul>";
for ( $layer = 0; $layer < 3; $layer++ )
{
    echo "<li>The layer number $layer";
    echo "<ul>";
   
    for ( $row = 0; $row < 3; $row++ ) 
    {
       echo "<li>The row number $row";
       echo "<ul>";
     
        for ( $col = 0; $col < 3; $col++ )
        {
            echo "<li>".$shop3[$layer][$row][$col]."</li>";
        } 
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}   
echo "</ul>";

 ?>