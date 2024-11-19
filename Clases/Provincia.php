<?php
    class Provincia{
        public String $codprovincia;
        public String $nombre;

        public function __construct($codprovincia,$nombre){
            $this->codprovincia=$codprovincia;
            $this->nombre=$nombre;
        }

        public function getCodProv(){
            return $this->codprovincia;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre(String $nombre){
            $this->nombre=$nombre;
        }

        public function __toString(){
            return "Nombre: "+$nombre+" Código provincia: "+$codprovincia; 
        }
    }
