<?php

$Metros = $_POST['metros'];

$Muro = $_POST['muro'];


if ($Muro == 'liso') {
    echo "El valor de todo es de " . ($Metros * 2000 + 15000);
} else {
    echo "El valor de todo es de " . ($Metros * 4000 + 15000);
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

    <form action="ejercicio4.php" method="post">

        <label for="number">Ingrese los m2</label>
        <input type="number" name="metros" id="metros" placeholder="Ingresa cuantos m2 son..">
        <br>
        <label for="text">Ingrese su tipo de muros</label>
        <input type="text" name="muro" required id="muro" placeholder="liso/no liso..">
        <br>

        <button type="submit">Enviar</button>

    </form>


</body>

</html>