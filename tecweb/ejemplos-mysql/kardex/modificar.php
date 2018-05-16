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
            $materia = $_POST['materia'];
            $calificacion = $_POST['calificacion'];
            $sql = "UPDATE calificacion SET materia='$materia', calificacion='$calificacion' WHERE id = $id";
            $resultado = $conexion->exec($sql);

            if($resultado == false)
                $errores = 'Error al modificar';

            else if ($resultado =! 1)
                $errores = 'No se deberia modificar mas de un registro';

            else
            {
                $correcto = 'Registro modificado';
                header("Location: index.php");
            }
        }
        else
            $errores = 'Error al eliminar: ID no definido';
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

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
          <label for=""> Materia </label>
          <input type="text" 
            class="form-control" name="materia" id="materia" value="<?=$materia?>">
        </div>
        <div class="form-group">
          <label for=""> Calificacion </label>
          <input type="number" 
            class="form-control" name="calificacion" id="calificacion" value="<?=$calificacion?>">
        </div>
        <button type="submit" class="btn btn-danger"> Modificar </button>
        <a href="index.php" class="btn btn-info"> Cancelar </a>
    </form>

<?php endif ?>

<?php include 'pie.php'; ?>