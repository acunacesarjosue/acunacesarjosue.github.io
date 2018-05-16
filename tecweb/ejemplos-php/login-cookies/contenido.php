<?php

if (!isset($_COOKIE['usuario']))
{
    header('Location: index2.php');
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contenido </title>
</head>
<body>
    
    <h1> Contenido </h1>
    <p> <strong> Solo para usuarios que iniciaron sesion </strong> </p>
    <a href="cerrar.php"> Cerrar Sesion </a>

</body>
</html>