<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php

    require '../src/entities/modelo.php';

    session_start();
    if(isset($_SESSION["indice"])){
        $_SESSION["indice"] =  $_SESSION["indice"] + 1;

        if($_SESSION["indice"] === count($_SESSION['preguntas'])){
            header('Location: plant_fin.php');
        }
    }

    if(isset($_POST['opcion'])){
        $opcion = $_POST['opcion'];
        if(comrpobarRespuesta($opcion, $_SESSION["respuestaOK"])){
            $_SESSION["marcador"] = $_SESSION["marcador"] + 1;
        }

    }

    if(isset($_POST['dificultad'])){
        $dificultad = $_POST['dificultad'];
    }

    if (!isset($_SESSION["usuario"])) {
        $usuario = $_POST['usuario'];
        $_SESSION["usuario"] = $usuario;
        $_SESSION["indice"] = 0;
        $_SESSION["marcador"] = 0;
        $_SESSION["preguntas"] = obtenerPreguntas($dificultad);
    }

    $preguntas = $_SESSION['preguntas'];

    $_SESSION["respuestaOK"] = $preguntas[$_SESSION["indice"]]['respuestaCorrecta'];

    ?>

</head>

<body>
    <style>
        button {
            width: 100px;
            height: 100px;

        }
    </style>
    <br>
    <div class="container">
        <div class="text-center">

            <h1> <img src="../assets/microscopio.svg" width="40" height="40">Pregunta número <?php echo $preguntas[$_SESSION["indice"]]['id']; ?> </h1>
            <p>Usuario: <?php echo $_SESSION['usuario']; ?></p>



            <h2>
                <?php echo $preguntas[$_SESSION["indice"]]['question']; ?>
            </h2>
            <hr>


            <img src="<?php echo $preguntas[$_SESSION["indice"]]['imagen'] ?>"></img>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row justify-content-center">
                    <button name="opcion" value="<?php echo $preguntas[$_SESSION["indice"]]['answers'][0]; ?>" class="col-4 m-3  btn btn-primary">
                        <img class="float-left" src="../assets/diamond.svg" width="30" height="30"> <?php echo $preguntas[$_SESSION["indice"]]['answers'][0]; ?>
                    </button>
                    
                    <button name="opcion" value="<?php echo $preguntas[$_SESSION["indice"]]['answers'][1]; ?>" class="col-4 m-3 btn btn-warning">
                        <img class="float-left" src="../assets/app.svg" width="30" height="30">
                        <?php echo $preguntas[$_SESSION["indice"]]['answers'][1]; ?>
                    </button>
                    
                </div>


                <div class="row justify-content-center">
                    <button name="opcion" value="<?php echo $preguntas[$_SESSION["indice"]]['answers'][2]; ?>" class="col-4 m-3 btn  btn-success">
                        <img class="float-left" src="../assets/heptagon.svg" width="30" height="30">
                        <?php echo $preguntas[$_SESSION["indice"]]['answers'][2]; ?>
                    </button>
                    
                    <button name="opcion" value="<?php echo $preguntas[$_SESSION["indice"]]['answers'][3]; ?>" class="col-4 m-3 btn btn-dark">
                        <img class="float-left" src="../assets/019triangle_99969.svg" width="30" height="30">
                        <?php echo $preguntas[$_SESSION["indice"]]['answers'][3]; ?>
                    </button>
                    
                </div>
        </div>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-
9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-
B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>