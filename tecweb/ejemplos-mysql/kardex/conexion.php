<?php

$fuente = "mysql: host=localhost; dbname=kardexdb;";
$usuario = "root";
$contrasena = "";

    try
    {
        $conexion = new PDO($fuente, $usuario, $contrasena);
        //echo 'Conexion establecida...';
        //muestra_todo();
    }

    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

    function muestra_todo()
    {
        global $conexion;
        $sql = "SELECT * FROM calificacion";

        $resultado = $conexion->query($sql);
        while (($fila = $resultado->fetch(PDO::FETCH_NUM)) != false)
        {
            foreach ($fila as $elemento)
            {
                echo $elemento . '<br/>';
            }
        }
    }

    function muestra_renglon()
    {
        global $conexion;
        $sql = "SELECT * FROM calificacion";

        $resultado = $conexion->query($sql);
        //var_dump($resultado->fetch());
        $fila = $resultado->fetch();

        //acceder con numero de indice
        echo $fila[0] . '<br/>';
        echo $fila[1] . '<br/>';
        echo $fila[2] . '<br/>';

        //acceder por nombre
        echo $fila['id'] . '<br/>';
        echo $fila['materia'] . '<br/>';
        echo $fila['calificacion'] . '<br/>';
    }

?>