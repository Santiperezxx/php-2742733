<?php

$Edad=$_GET['edad'];

if($Edad <= 18) {
    echo"eres menor de edad";
} else{
    echo"eres mayor de edad"; 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio1.php" method="get">

    <label for="number">Edad</label>
    <input type="number" placeholder="Edad" name="edad" id="edad">

    <button type="submit">Enviar</button>
    
    </form>
</body>
</html>