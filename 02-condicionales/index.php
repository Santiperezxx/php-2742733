<?php

echo 'Eejcutando condicionales...';




/* <!-- ejercicio 1.1 --> */




$articulos = "40";


if($articulos < 12) {
    echo "caja lenta";
} else {
    echo "caja rapida ";
}
/* 
echo"<br> <br>"."Siguiente ejercicio"."<br> <br> " */

echo "<br> <br>";


/* <!-- ejercicio 1.2 --> */



$edad="19";



if ($edad > 18) {
    echo "si";
} else {
    echo "no";
}

echo "<br> <br>";


/* <!-- ejercicio 2 --> */



$Edad= "18";
$Nombre= "Carlos" ;



if($Edad < 18){
    echo "no puede ingresar <br/>";
} else {
    echo "puede ingresar <br/>";
} if($Nombre == "Carlos" xor $Nombre== "Mario"){
    echo "va a VIP";
}
echo "<br/> <br/> <br/>";



/* <!-- ejercicio 3 --> */



$years= "17";

$velocidad= "28";

$estatura= "174";

if ($velocidad > 27 && $estatura > 170)
{
    echo "puede ingresar al equipo <br/>";
 } else {
    echo "no puede ingresar <br/>";
 } if ($velocidad > 27 && $estatura > 170 &&$years>18){
    echo "vas a ligas mayores";
 } else{
    echo "Vas a ligas menores";
 } echo"<br/><br/>";



/* ><!-- ejercicio 4 -- */


$aire= "amarillo";


switch($aire){
    case "verde":
        echo "calidad del aire es buena";
    break;
    case "amarillo":
        echo "calidad del aire es moderada";
    break;
    case "naranja":
        echo "calidad del aire no es saludable para grupos sensibles";
    break;
    case "rojo":
        echo "calidad del aire no es saludable";
    break;
    case "púrpura":
        echo "calidad del aire es muy poco saludable";
    break;
    case "marrón":
        echo "calidad del aire es peligrosa";
    break;
    default:
        echo "el color no es válido";
    break;
}

?>

