<?php

//while
//ciclo que imprime la tabla de multiplicar del 7
$i = 1;

while ($i <= 10) {
  
  
  echo"7x $i"."=" . (7 * $i) . " <br/>";
  $i++;
}

echo"<br/> <br/>";

//for
//lista de nombres solo con j

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "El numero es: $x <br>";
}

echo"<br/> <br/>";

//foreach
//lista de nombres

$nombre= array("jairo", "jaun", "alberto");


 
foreach($nombre as $x ) {
    if($x == "jaun") continue;
    echo"$x <br/>";
}



?>