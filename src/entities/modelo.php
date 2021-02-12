<?php

    require_once __DIR__.'\..\..\bootstrap.php';
    require 'pregunta.php';
    require 'alumno.php';

    function obtenerPreguntas($dificultad){

        $em = getEntityManager();
        

        $preguntas = $em->getRepository('pregunta')->findBy(array('dificultad'=>$dificultad));

        $preguntasFormuladas = [];

        foreach ( $preguntas as $pregunta) {

            $img=$pregunta->getImagen();
            $id= $pregunta->getId();
            $question=$pregunta->getQuestion();
            $answers = [$pregunta->getAnswerOk(), $pregunta->getBadAnswer1(), $pregunta->getBadAnswer2(), $pregunta->getBadAnswer3()];
            shuffle($answers);
            $respuestaCorrecta=$pregunta->getAnswerOk();

            $preguntaMod = [
                "imagen" => $img,
                "id" => $id,
                "question" => $question,
                "answers" => $answers,
                "respuestaCorrecta" => $respuestaCorrecta
            ];

            array_push($preguntasFormuladas, $preguntaMod);
          
       }

        return $preguntasFormuladas;

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