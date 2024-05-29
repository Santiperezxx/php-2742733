<?php session_start();

if($_SERVER["REQUEST_METHOD"] == 'POST'){

$usuario = $_POST ['username'];
$password= $_POST ['password'];

$user_register =isset($_SESSION['userRegister']) ? $_SESSION ['userRegister'] : null;
$pass_register =isset($_SESSION['passRegister']) ? $_SESSION ['passRegister'] : null;

if( empty($usuario) or empty($password) ){

    echo "Rellene completo el formulario";

 } else{
    /* echo $usuario. '-' . $password; */
    try{
        $conexion = new PDO("mysql: host=localhost; dbname=focapp", 'root', ''); 
        echo "Conexion OK". "<br>";
    
    } catch (PDOException $e) {
        echo "Error:" . $e-> getMessage() . "<br>";
    }

    $statement = $conexion -> prepare("SELECT * FROM userapp WHERE username = :username AND contraseña = :pass");
    
    $statement -> execute(array( ":username"=>$usuario, ":pass"=>$password));

    $result = $statement-> fetchAll();

    if($result){
        $_SESSION ['userRegister']= $usuario;
        $_SESSION ['passRegister']= $password;
        header('location:user.php');
    }
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
    
<h1>Pagina de inicio, sesion inicializada</h1>



<form action="index.php" method="post">

    <label for="username">Usuario</label>
    <input id="username" type="text" placeholder="Nombre usuario" name="username">

    <label for="password">Contraseña</label>
    <input type="password" name="password" placeholder="Password" id="password">

    <button type="submit">Inicio sesion</button>

</form>


<a href="./registro.php">Registrate</a>


</body>
</html>