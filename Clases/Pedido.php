<?php
    class Pedido{
        public String $idpedido;
        public DateTime $fechahora;
        public String $estado;
        public String $precio;
        public String $idUsuario;
        public String $idDireccion;

        public function __construct($idpedido,$fechahora,$estado,$precio,$idUsuario,$idDireccion){
            $this->idpedido=$idpedido;
            $this->fechahora=$fechahora;
            $this->estado=$estado;
            $this->precio=$precio;
            $this->idUsuario=$idUsuario;
            $this->idDireccion=$idDireccion;
        }

        public function getIdPed(){
            return $this->idpedido;
        }

        public function getFechahora(){
            return $this->fechahora;
        }

        public function setFechahora(DataTime $fechahora){
            $this->fechahora=$fechahora;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado(String $estado){
            $this->estado=$estado;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio(String $precio){
            $this->precio=$precio;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario(String $idUsuario){
            $this->idUsuario=$idUsuario;
        }

        public function getIdDireccion(){
            return $this->idDireccion;
        }

        public function setIdDireccion(String $idDireccion){
            $this->idDireccion=$idDireccion;
        }

        public function __toString(){
            return "ppapapapa";
        }
    }