<?php
Class Conexion{
    private static ?PDO $con=null;

public static function getConection():PDO
{
    $usuario='root';
    $contraseña='root';
    if(self::$con==null)
    {
        self::$con = new PDO('mysql:host=localhost;dbname=php', $usuario, $contraseña);
    }
    return self::$con;
}
}