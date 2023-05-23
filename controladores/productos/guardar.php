<?php

require '../modelos/productos.php';

try{
    $producto = new Producto($_POST);
    $resultado = $producto->guardar();
    var_dump($resultado);
}catch (PDOExepcion $e) {
    echo $e->getMessage();
}
