<?php
    class Localidad{
        public String $codlocalidad;
        public String $nombre;
        public String $codprovincia;

        public function __construct($codlocalidad,$nombre,$codprovincia){
            $this->codlocalidad=$codlocalidad;
            $this->nombre=$nombre;
            $this->codprovincia=$codprovincia;
        }

        public function getCodLoc(){
            return $this->codlocalidad;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre(String $nombre){
            $this->nombre=$nombre;
        }

        public function getCodProv(){
            return $this->codprovincia;
        }

        public function __toString(){
            return "Nombre: "+$nombre+" Código localidad: "+$codlocalidad+" Código provincia: "+$codprovincia; 
        }
    }