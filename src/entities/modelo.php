<?php

    require_once '../../bootstrap.php';

    function obtenerPreguntas(){

        $em = getEntityManager();
        $dificultad = $_SESSION['dificultad'];

        $preguntas = $em->getRepository('preguntas')->findBy(array('dificultad',$dificultad));

        $seleccion = array_rand($preguntas,15);

        return $seleccion;

    }

?>