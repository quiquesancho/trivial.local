<?php

    require_once __DIR__.'\..\..\bootstrap.php';
    require 'pregunta.php'; 

    function obtenerPreguntas(){

        $em = getEntityManager();
        //$dificultad = $_SESSION['dificultad'];

        $preguntas = $em->getRepository('pregunta')->findBy(array('dificultad'=>'facil'));

        return $preguntas;

    }

?>