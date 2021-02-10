<?php

    require_once __DIR__.'\..\..\bootstrap.php';
    require 'pregunta.php';
    require 'alumno.php';

    function obtenerPreguntas(){

        $em = getEntityManager();
        $dificultad = $_SESSION['dificultad'];

        $preguntas = $em->getRepository('pregunta')->findBy(array('dificultad'=>$dificultad));

        $preguntasRand = array_rand($preguntas,15);

        $preguntasJson = json_encode($preguntasRand);

        return $preguntasJson;

    }


    function registrarPuntuacion(){
        $nombre = $_POST['nombre'];
        $puntos = $_POST['puntos'];

        $alumno = new Alumno();

        $alumno->setNombre($nombre);
        $alumno->setPuntuacion($puntos);

        $em = getEntityManager();

        $em->persist($$alumno);

        $em->flush();

    }

    function mostrarPuntuaciones(){
        $em = getEntityManager();

        $alumnos = $em->getRepository('alumno')->findAll();

        $alumnosJson = json_encode($alumnos);

        return $alumnosJson;
    }

?>