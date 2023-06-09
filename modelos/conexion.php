<?php

abstract class Conexion{
    public static $conexion = null;

    private static function conectar (){
        try{
            self::$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
            //echo "conectado";
        }catch(PDOExepcion $e){
            echo "error de conexion de BD";
            echo "<br>";
            exit;
        }

        return self::$conexion;
    }

    public static function ejecutar($sql){
        self::conectar();
        $sentencia = self::$conexion->prepare($sql);
        $resultado = $sentencia->execute();
        return $resultado;

    }
}