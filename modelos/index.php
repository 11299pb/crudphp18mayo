<?php
require './modelos/conexion.php';
$resultado = conexion::ejecutar("INSERT INTO productos(producto_nombre, producto_precio) values ('prueba', '5')");
echo "<pre>";
var_dump($resultado);
echo "</pre>";