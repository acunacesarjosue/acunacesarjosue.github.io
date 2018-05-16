<?php

    include 'conexion.php';

    $errores = "";
    $correcto = "";

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM calificacion where id = $id";
            $resultado = $conexion->query($sql);
            $datos = $resultado->fetch(PDO::FETCH_NAMED);
            if($datos == false)
                $errores = "ID no existente";
            $materia = $datos['materia'];
            $calificacion = $datos['calificacion'];
        }
        else
            $errores = "Falta proporcionar parametro ID";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $sql = "DELETE FROM calificacion WHERE id = $id";
            $resultado = $conexion->exec($sql);

            if($resultado == false)
                $errores = 'Error al eliminar';

            else if ($resultado =! 1)
                $errores = 'No se deberia eliminar mas de un registro';

            else
            {
                echo 'Registro eliminado';
                $correcto = 'Registro eliminado';
            }
        }
        else
            $errores = 'Error al eliminar: ID no definido';
            header("Location: index.php");
    }
    //var_dump($sql);
?>

<?php include 'encabezado.php'; ?>

<?php if ($correcto != "") : ?>
    <div class="alert alert-success" role="alert">
        <strong> <?=$correcto?> </strong>
    </div>
    <a href="index.php" class="btn btn-primary"> Regresar </a>

<?php elseif ($errores != "") : ?>
    <div class="alert alert-warning" role="alert">
        <strong> <?=$errores?> </strong>
    </div>

<?php else : ?>
    <?php
    echo 'Eliminar Materia: ';
    echo $materia . ' <br/>' . $calificacion . '<br/>';
    echo 'Estas seguro?';
    ?>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?=$id?>">
        <button type="submit" class="btn btn-danger"> Eliminar </button>
        <a href="index.php" class="btn btn-info"> Cancelar </a>
    </form>

<?php endif ?>

<?php include 'pie.php'; ?>