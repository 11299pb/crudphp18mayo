<?php
require 'conexion.php';

class Producto extends conexion{
    public $producto_id;
    public $producto_nombre;
    public $producto_precio;
    public $producto_situacion;


    public function __construct($args = [] )
    {  
        $this->producto_id = $args ['producto_id'] ??;
        $this->producto_nombre = $args ['producto_nombre'] ??;
        $this->producto_precio = $args ['producto_precio'] ??;
        $this->producto_situacion = $args ['producto_situacion'] ??;

    }

    public function guardar(){
        $sql = "INSERT INTO productos(producto_nombre, producto_precio) values ('$this->
    }
}