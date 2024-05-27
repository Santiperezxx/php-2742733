<?php session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$usuario = $_POST ['username'];
$password= $_POST ['password'];

if( empty($usuario) or empty($password) ){

    echo "Rellene completo el formulario";

 } else{
    //echo $usuario. '-' . $password;
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    //echo 'variables de sesion guardadas 🎈';

   // header( 'Location: index.php');
 }}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Resgistrate</h1>



<form action="registro.php" method="post">

    <label for="username">Usuario</label>
    <input id="username" type="text" placeholder="Nombre usuario" name="username">

    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Password" id="password">

    <button type="submit">Registrarse</button>

</form>

<?php

if( isset($_SESSION['userRegister'])) : ?>

<p>Datos registrados, ya puedes iniciar sesion</p>
<p><?php  echo $_SESSION['userRegister'].'-' . $_SESSION['passRegister'] ; ?></p>
<a href="index.php">Iniciar sesion</a>

<?php   endif ?>


</body>
</html>