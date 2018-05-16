<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')   {
        echo '<h1>Respuesta</h1>';
        $nombre = $_POST['name'];
        $color = $_POST['color'];

        if (strlen($nombre) > 0)    
        {
            echo 'Hola: ' . $nombre;
            echo '<br>';
            echo 'El color que has elegido es: ' . $color;
            echo '<br>';
        }   

        if(isset($_POST['radio']))
        {
            echo "Tu genero es: " . $_POST['radio'];  //  Se muestra el valor seleccionado
            echo '<br>';
        }

        if(!empty($_POST['check_list'])) 
        {
            // Se cuentan las opciones elegidas
            $checked_count = count($_POST['check_list']);
            echo "Has seleccionado ". $checked_count . " opcion(es): <br/>";
            // Se muestran cada uno de las opciones elegidas
            foreach($_POST['check_list'] as $selected) 
            {
                echo $selected;
                echo '<br>';
            }
        } 
    }
    else    {
        echo <<< _HTML_
        <div class="container mt-2 mb-2">
        <h1> Formulario </h1>
        <hr>
        <form action="" method="POST">
            <!-- Nombre -->
            <div class="row">
                <div class="col-md-4"><label for="name"> Nombre </label></div>
                <div class="col-md-8"><input type="text" class="form-control col md-12" name="name" id="name"></div>
            </div>

            <!-- Color-->
            <div class="row mt-3">
                <div class="col-md-4"><label for="color">Color Favorito</label></div>
                <div class="col-md-8"><select class="form-control col md-12" id="color" name="color">
                    <option>Rojo</option>
                    <option>Verde</option>
                    <option>Azul</option>
                </select></div>
            </div>
            
            <!-- Lenguaje Favorito-->
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="color">Lenguaje Favorito</label>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2 ml-4">
                            <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox1" value="HTML">
                            <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                        </div>
                        <div class="col-md-2">
                            <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox2" value="CSS">
                            <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                        </div>
                        <div class="col-md-2">
                            <input class="form-check-input" type="checkbox"name="check_list[]" id="inlineCheckbox3" value="PHP">
                            <label class="form-check-label" for="inlineCheckbox3">PHP</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Genero -->
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="color">Genero</label>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Hombre">
                                <label class="form-check-label" for="inlineRadio1">Hombre</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Mujer">
                                <label class="form-check-label" for="inlineRadio2">Mujer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </form>
    </div>
_HTML_;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulario </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>
<body>

    
    
</body>
</html>