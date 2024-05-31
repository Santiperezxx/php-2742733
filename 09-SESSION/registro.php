<?php session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$usuario = $_POST ['username'];
$password= $_POST ['password'];
$password_2= $_POST ['password_2'];
$email= $_POST ['email'];}

if( empty($usuario) or empty($password) ){

    echo "Rellene completo el formulario";

 } else{
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['pass2Register'] = $password_2;
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

    if($password == $password_2){
        echo "datos enviados";
    } else {
        echo "contraseñas no coinciden";
    }

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
    <input id="username" type="text" placeholder="Nombre usuario" name="username"> <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Email" required><br>
    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Password" id="password"><br>
    <label for="password_2">Confirmar contraseña</label>
    <input type="password" name="password_2" placeholder="Password" id="password_2"><br>

    <button type="submit">Registrarse</button>

</form>

<?php

if($_SESSION['passRegister'] == $_SESSION ['pass2Register'] ){
    echo"Datos registrados  <br> $usuario <br> $password <br> $email <br>" ;
} else{
    echo"No coinciden";
}



?>


<a href="index.php">Iniciar sesion</a>




</body>
</html>