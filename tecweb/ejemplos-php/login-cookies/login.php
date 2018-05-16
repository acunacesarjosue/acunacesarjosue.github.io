<?php

include("conexion2.php");
$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['usuario']) && isset($_POST['password']))
    {
        //$errores = "adentro";
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql =  "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$password'";
        //var_dump($sql);
        $resultado = $conexion->query($sql);
        var_dump($resultado);
        $datos = $resultado->fetch(PDO::FETCH_NAMED);
        echo '<br/>';
        var_dump($datos);

        if($datos != false)
        {
            //$errores = "ID no existente";
            setcookie('usuario', '$usuario');
            header("location: contenido.php");
            $errores = "AQUI";
        }
        else 
            $errores = "Your Login Name or Password is invalid";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Log In </title>
</head>
<body>
    
    <h1> Log In </h1>
    <form action="" method="POST">
        <input type="text" name="usuario" 
        placeholder="Nombre del usuario">
        <input type="password" name="password" 
        placeholder="Password">
        <button type="submit"> Acceder </button>
    </form>
    <?php if($errores != "") : ?>
        <p> <?=$errores?> </p>
    <?php endif ?> 
    <br/>
        <a href="index2.php"> Regresar </a>

</body>
</html>