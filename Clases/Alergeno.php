<?php

class Alergeno{
    public String $idAlergeno;
    public String $nombre;
    public String $foto;

    public function __construct($idAlergeno,$nombre,$foto){
        $this->idAlergeno=$idAlergeno;
        $this->nombre=$nombre;
        $this->foto=$foto;
    }

    public function getIdAlergeno(){
        return $this->idAlergeno;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(String $nombre){
        $this->nombre=$nombre;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto(String $foto){
        $this->foto=$foto;
    }

    public function __toString(){
        return "Id del Alérgeno: "+$idAlergeno+";Nombre: "+$nombre;
    }

}