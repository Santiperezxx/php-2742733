<!-- <?php
/* 
session_start(); //inicializa la sesion

$_SESSION['nombre']= 'josefa';
$_SESSION['pais']= 'Colombia';
 */
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Pagina de inicio, sesion inicializada</h1>



<form action="registro.php" method="post">

    <label for="username">Usuario</label>
    <input id="username" type="text" placeholder="Nombre usuario" name="username">

    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Contraseña" id="password">

    <button type="submit">Registro</button>

</form>



    

<a href="./user.php">User Page</a>
<a href="./cerrar.php">Cerrar</a>

</body>
</html>