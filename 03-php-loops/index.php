<?php

//while
//ciclo que imprime la tabla de multiplicar del 7
$i = 1;

while ($i <= 10) {


  echo "7x $i" . "=" . (7 * $i) . " <br/>";
  $i++;
}

echo "<br/> <br/>";

//for
//multiplos de 5
$i = 0;

for ($i = 5; $i <= 100; $i++) {
  if ($i % 5 == 0) {
    echo "$i es multiplo de 5"."<br>";
  }
}

echo "<br/> <br/>";

//foreach
//lista de nombres

$nombre = array("jairo", "jaun", "alberto");



foreach ($nombre as $x) {
  if ($x == "jaun") continue;
  echo "$x <br/>";
}



?>