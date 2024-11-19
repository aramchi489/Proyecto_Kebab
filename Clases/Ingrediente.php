<?php
class Ingrediente{
    public String $idIngrediente;
    public String $nombre;
    public String $foto;

    public function __construct($idIngrediente,$nombre,$foto){
        $this->idIngrediente=$idIngrediente;
        $this->nombre=$nombre;
        $this->foto=$foto;
    }

    public function getIdIngrediente(){
        return $this->idIngrediente;
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
        return "Id del Ingrediente: "+$idIngrediente+";Nombre: "+$nombre;
    }

}