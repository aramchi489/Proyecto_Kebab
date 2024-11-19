<?php

    class Direccion{
        public String $idDireccion;
        public String $idUsuario;
        public String $tipovia;
        public String $nomvia;
        public String $numvia;
        public String $escalera;
        public String $portal;
        public String $piso;
        public String $codlocalidad;
        public String $codprovincia;

        public function __construct($idDireccion,$idUsuario,$tipovia,$nomvia,$numvia,$codlocalidad,$codprovincia){
            $this->idDireccion=$idDireccion;
            $this->idUsuario=$idUsuario;
            $this->tipovia=$tipovia;
            $this->nomvia=$nomvia;
            $this->numvia=$numvia;
            $this->codlocalidad=$codlocalidad;
            $this->codprovincia=$codprovincia;
        }

        public static function constructDireccionCompleta($idDireccion,$idUsuario,$tipovia,$nomvia,$numvia,$escalera,$portal,$piso,$codlocalidad,$codprovincia){
            $this->idDireccion=$idDireccion;
            $this->idUsuario=$idUsuario;
            $this->tipovia=$tipovia;
            $this->nomvia=$nomvia;
            $this->numvia=$numvia;
            $this->escalera=$escalera;
            $this->portal=$portal;
            $this->piso=$piso;
            $this->codlocalidad=$codlocalidad;
            $this->codprovincia=$codprovincia;
        }
    
        public function getIdDireccion(){
            return $this->idDireccion;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario(String $idUsuario){
            return $this->idUsuario=$idUsuario;
        }
    
        public function getTipoVia(){
            return $this->tipovia;
        }
    
        public function setTipoVia(String $tipovia){
            $this->tipovia=$tipovia;
        }
    
        public function getNumVia(){
            return $this->numvia;
        }
    
        public function setNumvia(String $numvia){
            $this->numvia=$numvia;
        }
        public function getNomVia(){
            return $this->nomvia;
        }
    
        public function setNomvia(String $nomvia){
            $this->nomvia=$nomvia;
        }

        public function getEscalera(){
            return $this->escalera;
        }
    
        public function setEscalera(String $escalera){
            $this->escalera=$escalera;
        }

        public function getPortal(){
            return $this->portal;
        }
    
        public function setPortal(String $protal){
            $this->portal=$portal;
        }

        public function getCodLoc(){
            return $this->codlocalidad;
        }
    
        public function setCodLoc(int $codlocalidad){
            $this->codlocalidad=$codlocalidad;
        }

        public function getCodProv(){
            return $this->codprovincia;
        }
    
        public function setCodProv(int $codprovincia){
            $this->codprovincia=$codprovincia;
        }
    
        public function __toString(){
            return "Id de la Direccion: "+$idDireccion+";Direccion: "+$tipovia+" "+$nomvia+", nº"+$numvia;
        }
    }