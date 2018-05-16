<?php

include("conexion2.php");
$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['usuario']) && isset($_POST['password']))
    {
        $errores = "adentro";
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if($password == $password2)
        {
            $sql = "select * from usuarios where usuario = $usuario";
            $resultado = $conexion->query($sql);
            $datos = $resultado->fetch(PDO::FETCH_NAMED);
            var_dump($datos);
            if($datos == false)
            {
                $sql =  "insert into usuarios (usuario, contrasena) values ('$usuario', '$password')";
                $resultado = $conexion->exec($sql);
                setcookie('usuario', '$usuario');
            }    
            else
                $errores = 'Nombre de usuario ya existe';

            if($resultado == false)
            $errores = 'Error al crear cuenta';

            else
            header("Location: index2.php");
        }

        else
            $errores = 'No coinciden los passwords';
    }
    else
        $errores = 'Se deben llenar ambos campos';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sign Up </title>
</head>
<body>
    
    <h1> Log In </h1>
    <form action="" method="POST">
        <input type="text" name="usuario" 
        placeholder="Nombre del usuario">
        <input type="password" name="password" 
        placeholder="Password">
        <input type="password" name="password2" 
        placeholder="Confirma Password">
        <button type="submit"> Dar de Alta </button>
    </form>
    <?php if($errores != "") : ?>
        <p> <?=$errores?> </p>
    <?php endif ?> 
    <br/>
        <a href="index2.php"> Regresar </a>

</body>
</html>