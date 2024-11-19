<?php
$base=$_SERVER['DOCUMENT_ROOT']."/PRIMERO/prueba_conexion";
//require_once "$base/clases/Coche.php";

Class RepoUsuarioTieneAlergia{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    

    public function createUsuarioTieneAlergia(): void{

    }

    public function readUsuarioTieneAlergia(String $marca, String $modelo){
        $stm=$this->con->prepare("select * from coche where marca=:marca and modelo=:modelo");
        $stm->execute([':marca'=>$marca,':modelo'=>$modelo]);
        $coche=null;
        $registro=$stm->fetch();
        if($registro)
        {
            $coche=new Coche("","","",0);
            $coche->marca=$registro['marca'];
            $coche->modelo=$registro['modelo'];
            $coche->combustible=$registro['combustible'];
            $coche->caballos=$registro['caballos'];
        }
        
        return $coche;
    }

    public function deleteUsuarioTieneAlergia(String $marca,String $modelo):void{
        $stm=$this->con->prepare("delete from coche where marca=:marca and modelo=:modelo");
        $stm->execute([':marca'=>$marca,':modelo'=>$modelo]);
        
    }

    public function updateUsuarioTieneAlergias():void{

    }
}