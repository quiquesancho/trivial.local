<?php

    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="preguntas")
     */

    class Pregunta {
        /** @ORM\Id @ORM\Column(type="int") @ORM\GeneratedValue **/
        private $id;
        /** @ORM\Column(type="string") **/
        private $question;
        /** @ORM\Column(type="string") **/
        private $answerOk;
        /** @ORM\Column(type="string") **/
        private $badAnswer1;
        /** @ORM\Column(type="string") **/
        private $badAnswer2;
        /** @ORM\Column(type="string") **/
        private $badAnswer3;
        /** @ORM\Column(type="string") **/
        private $imagen;
        /** @ORM\Column(type="string") **/
        private $dificultad;

        function __construct($id, $question, $answerOk, $badAnswer1, $badAnswer2, $badAnswer3, $imagen, $dificultad){
            $this->id = $id;
            $this->question = $question;
            $this->answerOk = $answerOk;
            $this->badAnswer1 = $badAnswer1;
            $this->badAnswer2 = $badAnswer2;
            $this->badAnswer3 = $badAnswer3;
            $this->imagen = $imagen;
            $this->dificultad = $dificultad;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id)
        {
                $this->id = $id;

        }

        /**
         * Get the value of question
         */ 
        public function getQuestion()
        {
                return $this->question;
        }

        /**
         * Set the value of question
         */ 
        public function setQuestion($question)
        {
                $this->question = $question;
       
        }

        /**
         * Get the value of answerOk
         */ 
        public function getAnswerOk()
        {
                return $this->answerOk;
        }

        /**
         * Set the value of answerOk
         */ 
        public function setAnswerOk($answerOk)
        {
                $this->answerOk = $answerOk;
        }

        /**
         * Get the value of badAnswer1
         */ 
        public function getBadAnswer1()
        {
                return $this->badAnswer1;
        }

        /**
         * Set the value of badAnswer1
         */ 
        public function setBadAnswer1($badAnswer1)
        {
                $this->badAnswer1 = $badAnswer1;
        }

        /**
         * Get the value of badAnswer2
         */ 
        public function getBadAnswer2()
        {
                return $this->badAnswer2;
        }

        /**
         * Set the value of badAnswer2
         */ 
        public function setBadAnswer2($badAnswer2)
        {
                $this->badAnswer2 = $badAnswer2;
        }

        /**
         * Get the value of badAnswer3
         */ 
        public function getBadAnswer3()
        {
                return $this->badAnswer3;
        }

        /**
         * Set the value of badAnswer3
         */ 
        public function setBadAnswer3($badAnswer3)
        {
                $this->badAnswer3 = $badAnswer3;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;
        }

        /**
         * Get the value of dificultad
         */ 
        public function getDificultad()
        {
                return $this->dificultad;
        }

        /**
         * Set the value of dificultad
         */ 
        public function setDificultad($dificultad)
        {
                $this->dificultad = $dificultad;
        }
    }
