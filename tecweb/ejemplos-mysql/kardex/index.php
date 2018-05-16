<?php

include 'conexion.php';
$sql = "select * from calificacion";
$resultado = $conexion->query($sql);
//Diferente de falso, sino tendriamos error de sintaxis
if($resultado != false)
{
    $calificaciones = $resultado->fetchAll(PDO::FETCH_NAMED);
    //Si ponemos numero, duplicamos ingotmacion
}
else
{
    die("Error en la consulta");
}
//var_dump($calificaciones);
?>

    <?php include 'encabezado.php'; ?>
     <div class="row">
      <div class="col-md-8">
        <table class="table">

            <thead>
                <tr>
                    <th scope="col"> Numero </th>
                    <th scope="col"> Materia </th>
                    <th scope="col"> Calificacion </th>
                    <th> Operaciones </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($calificaciones as $calificacion): ?>
                <tr>
                    <th>
                        <?php echo $calificacion['id']; ?>
                    </th>
                    <td>
                        <span class="text-center">
                            <?php echo $calificacion['materia']; ?>
                        </span>
                    </td>
                    <td>
                        <?php echo $calificacion['calificacion']; ?>
                    </td>
                    <td>
                        <span class="mr-3 h4">
                            <a href="eliminar.php?id=<?=$calificacion['id']?>"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                        </span>
                        <span class="ml-3 h4">
                            <a href="modificar.php?id=<?=$calificacion['id']?>"> <i class="fa fa-pencil-square" aria-hidden="true"></i> </a>
                        </span>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
        <a name="" id="" class="btn btn-warning" href="agregar.php" role="button">Agregar nueva materia</a>
       </div> <!-- col md 8 -->


      </div> <!-- row -->

      <?php include 'pie.php'; ?>