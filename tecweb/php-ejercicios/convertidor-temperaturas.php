<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')   
    {
        echo '<h1>Respuesta</h1>';
        $temperatura = $_POST['temperatura'];
        echo $temperatura . '<br>';
        $radio = $_POST['radio'];
        $conversion = 0;
        
        if($radio == "C-F")
        {
            $conversion = $temperatura * 1.8 + 32;
            echo "Esa temperatura en Farenheit es: " . $conversion;            
        }
        else
        {
            $conversion = ($temperatura - 32) * .5556;
            echo "Esa temperatura en Centigrados es: " . $conversion;
        }
    }
    else    {
        echo <<< _HTML_
        <div class="container mt-4 mb-4">
        <h1 class="text-center mt-4 mb-4"> Convertidor de Temperatura </h1>
        <hr>
        <form action="" method="POST">

            <!-- Temperatura -->
            <div class="row mt-4">
                <div class="col-md-3"></div>
                <div class="col md-3"><label for="temperatura">Temperatura </label></div>
                <div class="col-md-3"><input type="text" class="form-control col md-12" name="temperatura" id="temperatura"></div>
                <div class="col-md-3"></div>                
            </div>

            <!-- Escoger C/F -->
            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <label for="color">Seleccionar conversion</label>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="C-F">
                                <label class="form-check-label" for="inlineRadio1">°C → °F</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="F-C">
                                <label class="form-check-label" for="inlineRadio2">°F → °C</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>

            <!-- Boton -->
            <div class="row mt-5">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-5">Convertir</button>                    
                </div>
                <div class="col-md-5"></div>                
            </div>

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