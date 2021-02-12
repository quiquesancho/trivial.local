<?php

require '../src/entities/modelo.php';

if(!isset($_SESSION["usuario"])){
    session_start();
    $usuario= $_POST['usuario'];
    $_SESSION["usuario"]=$usuario;
}
   
    $preguntas=(obtenerPreguntas());

    foreach ( $preguntas as $pregunta) {

         $img=$pregunta->getImagen();
         $id= $pregunta->getId();
         $question=$pregunta->getQuestion();
         $answers = [$pregunta->getAnswerOk(), $pregunta->getBadAnswer1(), $pregunta->getBadAnswer2(),$pregunta->getBadAnswer3()];
         $respuestaCorrecta=$pregunta->getAnswerOk();
       
       }


       shuffle($answers);

    
    require "plant_pregunta.php";

?>