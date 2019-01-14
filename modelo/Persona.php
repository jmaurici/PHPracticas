<?php
//namespace Datos;
    class Persona
    {
        private $nif;
        private $nombre;
        private $fecha;
        private $ecivil; //'S,C,D,A'
        private $altura;
        protected static $contadorP=0;

        
        public  function __construct($nif, $nombre, $fecha, $ecivil, $altura)
        {

            $this->nif = $nif;
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->ecivil = $ecivil;
            $this->altura = $altura;

            self::$contadorP++;
        }
        

        public function getNif()
        {

            return $this->nif;
        }


        public function setNif($nif)
        {
            $this->nif = $nif;
        }


        public function getNombre()
        {
            return $this->nombre;
        }


        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }


        public function getFecha()
        {
            return $this->fecha;
        }

        /**
         * @param mixed $fecha
         */
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        /**
         * @return mixed
         */
        public function getEcivil()
        {
            return $this->ecivil;
        }

        /**
         * @param mixed $ecivil
         */
        public function setEcivil($ecivil)
        {
            $this->ecivil = $ecivil;
        }

        /**
         * @return mixed
         */
        public function getAltura()
        {
            return $this->altura;
        }

        /**
         * @param mixed $altura
         */
        public function setAltura($altura)
        {
            $this->altura = $altura;
        } // entero cms.



    }
