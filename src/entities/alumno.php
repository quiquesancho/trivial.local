<?php

    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="alumnos")
     */

    class Alumno {
        /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
        private $id;
        /** @ORM\Column(type="string") **/
        private $nombre;
        /** @ORM\Column(type="integer") **/
        private $puntuacion;

        function __construct($id, $nombre, $puntuacion) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->puntuacion = $puntuacion;
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
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
        }

        /**
         * Get the value of puntuacion
         */ 
        public function getPuntuacion()
        {
                return $this->puntuacion;
        }

        /**
         * Set the value of puntuacion
         */ 
        public function setPuntuacion($puntuacion)
        {
                $this->puntuacion = $puntuacion;
        }
    }

?>