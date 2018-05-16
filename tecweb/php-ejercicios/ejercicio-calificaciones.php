<?php

    //arreglo de materias
    $materias = array();
    $materias[1] = $ar1 = array(76, 89, 65, 72);
    $materias[2] = $ar2 = array(42, 25, 99, 67);
    $materias[3] = $ar3 = array(98, 69, 44, 56);
    $materias[4] = $ar4 = array(66, 35, 76, 88);
    $promedioGeneral = 0;
   
    //imprimirCalificaciones();
    //echo 'El promedio es: ' . calcularPromedio($calificaciones);

    function imprimirPromedio()
    {
        global $promedioGeneral;
        $promedioGeneral = $promedioGeneral/4;
        //$promedio = calcularPromedio($calificaciones);
        echo <<< _HTML_
        <div class="alert alert-primary" role="alert">
          <strong> El promedio es: $promedioGeneral </strong>
        </div>
_HTML_;
    }

    function imprimirCalificaciones()
    {
        global $materias;
        global $ar1;
        global $ar2;
        global $ar3;
        global $ar4;
        global $promedioGeneral;
        $divisor = 1;

    /*    for($i = 1; $i <= count($calificaciones); $i++)
        {
            echo 'Parcial ' . $i . ' = ' . $calificaciones[$i] . '<br>';
        }   */

        echo '
        <table class="table table-stripped">
            <thead>
                <th> Materia </th>
                <th> P1 </th>
                <th> P2 </th>
                <th> P3 </th>
                <th> P4 </th>
                <th> Promedio </th>
            </thead>
            <tbody>';
            for($i = 1; $i <= count($materias); $i++)
            {
                echo '<tr>';
                echo '<td>' . $i . '</td>';     
                $prom = 0;
                
                for($y = 1 ; $y <= count($ar1); $y++)
                {
                    if($divisor == 1)
                    {
                        $prom += $ar1[$y-1];
                        echo '<td>' . $ar1[$y-1] . '</td>';
                    }
                    if($divisor == 2)
                    {
                        $prom += $ar2[$y-1];
                        echo '<td>' . $ar2[$y-1] . '</td>';
                    }
                    if($divisor == 3)
                    {
                        $prom += $ar3[$y-1];
                        echo '<td>' . $ar3[$y-1] . '</td>';
                    }
                    if($divisor == 4)
                    {
                        $prom += $ar4[$y-1];
                        echo '<td>' . $ar4[$y-1] . '</td>';
                    }
                } 

                $divisor += 1;
                $prom = $prom/4;
                $promedioGeneral += $prom;
                echo '<td>' . $prom . '</td>';                
                echo '<tr/>';
            }
            echo '
        </table>';
    }

    function calcularPromedio($arreglo)
    {
        $suma = 0;
        foreach ($arreglo as $elemento)
        {
            $suma += $elemento;
        }
        return $suma/count($arreglo);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Ejercicio Calificaciones </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  
  <body>

    <div class="container">
        <h1>Calificaciones</h1>
        <?php
            imprimirCalificaciones($ar1);
            imprimirPromedio();
        ?>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>