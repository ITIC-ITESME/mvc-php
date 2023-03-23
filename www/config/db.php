<?php
class Conectar{
    public static function conexion(){
        $conexion= new mysqli("db", "root", "test", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
