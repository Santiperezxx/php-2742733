<?php session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$usuario = $_POST ['username'];
$password= $_POST ['password'];
$email= $_POST ['email'];}

if( empty($usuario) or empty($password) ){

    echo "Rellene completo el formulario";

 } else{
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['emailRegister'] = $email;

    try{
        $conexion = new PDO("mysql: host=localhost; dbname=focapp", 'root', ''); 
        echo "Conexion OK". "<br>";
    
    } catch (PDOException $e) {
        echo "Error:" . $e-> getMessage() . "<br>";
    }

    $statement = $conexion -> prepare("INSERT INTO `userapp` (`ID` ,`username`, `correo`,`contraseña`) 
    VALUES (NULL, :username, :email, :pass)");
    
    $statement -> execute(array( ":username"=>$usuario, ":email"=>$email, ":pass"=>$password));

    $statement = $statement-> fetchAll();

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
    
<h1>Resgistrate</h1>



<form action="registro.php" method="post">

    <label for="username">Usuario</label>
    <input id="username" type="text" placeholder="Nombre usuario" name="username">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Password" id="password">

    <button type="submit">Registrarse</button>

</form>

<?php

if( isset($_SESSION['userRegister'])) : ?>

<p>Datos registrados, ya puedes iniciar sesion</p>
<p><?php  echo $_SESSION['userRegister'].'-' . $_SESSION['passRegister'] . '-' . $_SESSION['emailRegister'] ; ?></p>
<a href="index.php">Iniciar sesion</a>

<?php   endif ?>


</body>
</html>