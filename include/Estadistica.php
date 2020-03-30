<?php

    class Estadistica {
        protected $nombreEquipo;
        protected $idJuego;
        protected $fechaInicio;
        protected $duracion;
        protected $nombrePrueba;
        protected $tiempoResolucion;
        protected $intentos;


        public function getnombrequipo() {return $this->nombreEquipo;}
        public function getidjuego() {return $this->idJuego;}
        public function getfechainicio() {return $this->fechaInicio;} 
        public function getduracion() {return $this->duracion;}
        public function getnombreprueba() {return $this->nombrePrueba;}
        public function gettiemporesolucion() {return $this->tiempoResolucion;}
        public function getintentos() {return $this->intentos;}

        

        public function __construct($row) {
            $this->nombreEquipo = $row[0];
            $this->idJuego = $row[1];
            $this->fechaInicio = $row[2];
            $this->duracion = $row[3];
            $this->nombrePrueba = $row[4];
            $this->tiempoResolucion = $row[5];
            $this->intentos = $row[6];

          
        }
    }

?>

