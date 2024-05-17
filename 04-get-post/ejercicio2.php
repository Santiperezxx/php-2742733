<?php

$Horalab= $_POST['horalab'];

$Ganaxhora= $_POST['ganasxhora'];

$Multiplicado= ($Horalab * $Ganaxhora);

echo"Su salario mensual es de". "$Multiplicado";

echo"<br>";

if ($Multiplicado > 2200000){
    echo"Debe pagar impuesto retencion en la fuente"."<br>";
} else{
    echo"No paga impuesto retencion en la fuente"."<br>";
}
echo"<br>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio2.php" method="post">

    <label for="number">Horas</label>
    <input id="horalab" type="number" placeholder="Horas" name="horalab">
<br>
    <label for="number">Gana</label>
    <input id="ganasxhora" type="number" placeholder="Gana" name="ganasxhora">
    <br>
    <button type="submit">Enviar</button>

</form>


</body>
</html>