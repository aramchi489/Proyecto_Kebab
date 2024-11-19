<?php 

class Usuario{
    public String $idUsuario;
    public String $rol;
    public String $foto;
    public String $nombre;
    public String $ape1;
    public String $ape2;
    public String $contrasena;
    public String $monedero;

    public function __construct($idUsuario,$rol,$foto,$nombre,$ape1,$contrasena,$monedero){
        $this->idUsuario=$idUsuario;
        $this->rol=$rol;
        $this->foto=$foto;
        $this->nombre=$nombre;
        $this->ape1=$ape1;
        $this->contrasena=$contrasena;
        $this->monedero=$monedero;
    }

    public static function constructUsuarioCompleto($idUsuario,$rol,$foto,$nombre,$ape1,$ape2,$contrasena,$monedero){
        $this->idUsuario=$idUsuario;
        $this->rol=$rol;
        $this->foto=$foto;
        $this->nombre=$nombre;
        $this->ape1=$ape1;
        $this->ape2=$ape2;
        $this->contrasena=$contrasena;
        $this->monedero=$monedero;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setRol(String $rol){
        $this->rol=$rol;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto(String $foto){
        $this->foto=$foto;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(String $nombre){
        $this->nombre=$nombre;
    }

    public function __toString(){
        return "Id Usuario: "+$idUsuario+" Nombre completo: "+$nombre+" "+$ape1+" "+$ape2;
    }
}