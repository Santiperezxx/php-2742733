
<?php

$Numero1=$_POST['numero1'];

$Numero2=$_POST['numero2'];

$Numero3=$_POST['numero3'];

echo"$Numero1 $Numero2 $Numero3 <br>";

$mayor = $Numero1;

if($Numero2 > $mayor ){
    $mayor = $Numero2;
} 
if($Numero3 > $mayor){
    $mayor = $Numero3;
}

echo"El numero mayor es $mayor";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio3.php" method="post">

<label for="number" >Ingrese un numero</label>
<input type="number" name="numero1" id="numero1" placeholder="Ingresa un numero..">
<br>
<label for="number" >Ingrese un numero</label>
<input type="number" name="numero2" id="numero2" placeholder="Ingresa un numero..">
<br>
<label for="number" >Ingrese un numero</label>
<input type="number" name="numero3" id="numero3" placeholder="Ingresa un numero..">
<br>
<button type="submit">Enviar</button>

</form>


</body>
</html>