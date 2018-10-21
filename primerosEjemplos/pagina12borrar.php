<?php

require 'classes/Autoload.php';

// Cosas por hacer:
// [ ] - 1º: Comprobar si puedo hacerlo
$id = Reader::read('id');

// [ ] - 2º Validar el id: que ha llegado (!null) y que es numérico

$sql = 'delete from producto where id = :id';
$db = new Database();
$resultado = 0;
if($db->connect()) {
    $conexion = $db->getConnection();
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue('id', $id);
    if($sentencia->execute()) {
        $resultado = $sentencia->rowCount();
    } else {
        //Solo usamos esto en etapa de desarollo, así cuando los usuarios la 
        //utilicen lo quitamos para que no vean errores que no entienden.
        echo Util::varDump($sentencia->errorInfo());
    }
}
$url = 'pagina12.php?op=deleteproducto&resultado=' . $resultado;
//header('Location: ' . $url);
?>
<a href="<?= $url ?>">Seguir</a>