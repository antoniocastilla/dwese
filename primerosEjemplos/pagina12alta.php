<?php

require 'classes/Autoload.php';

// Cosas por hacer:
// [ ] - 1º: Comprobar si puedo hacerlo

$producto = Reader::readObject('Producto');

// [ ] - 2º Validar el producto

$sql = 'insert into producto values(null, :nombre, :precio, :observaciones)';
$db = new Database();
$resultado = 0;
if($db->connect()) {
    $conexion = $db->getConnection();
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue('nombre', $producto->getNombre());
    $sentencia->bindValue('precio', $producto->getPrecio());
    $sentencia->bindValue('observaciones', $producto->getObservaciones());
    if($sentencia->execute()) {
        $resultado = $conexion->lastInsertId();
    } else {
        //Solo usamos esto en etapa de desarollo, así cuando los usuarios la 
        //utilicen lo quitamos para que no vean errores que no entienden.
        //echo Util::varDump($sentencia->errorInfo());
    }
}
$url = 'pagina12.php?op=insertproducto&resultado=' . $resultado;
header('Location: ' . $url);

//<a href="<?= $url ?>">Seguir</a>