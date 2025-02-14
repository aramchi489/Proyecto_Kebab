<?php

class Kebab{
    public String $idKebab;
    public String $nombre;
    public String $foto;

    public function __construct($idKebab,$nombre,$foto){
        $this->idKebab=$idKebab;
        $this->nombre=$nombre;
        $this->foto=$foto;
    }

    public function getIdKebab(){
        return $this->idKebab;
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
        return "Id del Kebab: "+$idKebab+";Nombre: "+$nombre;
    }
}