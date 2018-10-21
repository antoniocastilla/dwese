<?php

require 'classes/Autoload.php';

//listar productos: select * from producto;

$servidor = 'localhost';
$baseDatos = 'nombrebd';
$usuario = 'usuariobd';
$clave = 'clavebd';

try {
    $conexion = new PDO(
      'mysql:host=' . $servidor . ';dbname=' . $baseDatos,
      $usuario,
      $clave,
      array(
        PDO::ATTR_PERSISTENT => true,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8')
    );
    echo 'conectado<br>';
    
    $sql = 'select * from producto';
    $sql = 'SELECT "abc",  id, nombre, precio, observaciones FROM producto';
    $sentencia = $conexion->prepare($sql);
    $resultado = $sentencia->execute();
    while($fila = $sentencia->fetch() ) {
        $producto1 = new Producto();
        $producto2 = new Producto();
        $producto1->set($fila);
        echo '<pre>' . var_export($producto1, true) . '</pre>';
        $producto2->fetch($fila, 1);
        echo '<pre>' . var_export($producto2, true) . '</pre>';
    }
    $sentencia->closeCursor();
    
    $conexion = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}