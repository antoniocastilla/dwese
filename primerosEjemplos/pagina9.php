<?php

//echo '<pre>' . var_export($_FILES, true) . '</pre>';

//echo '<pre>' . var_export($_POST, true) . '</pre>';

require('classes/Upload.php');
$archivo = new Upload('archivo');
$archivo->setPolicy(Upload::POLICY_RENAME);
$r = $archivo->upload();
echo '<pre>' . var_export($r, true) . '</pre>';

/*
$r = false;
if(isset($_FILES['archivoquevoyasubir']) && $_FILES['archivoquevoyasubir']['name'] !== '' && $_FILES['archivoquevoyasubir']['error'] === 0) {
    $tipo = shell_exec('file --mime ' . $_FILES['archivoquevoyasubir']['tmp_name']);
    $size = $_FILES['archivoquevoyasubir']['size'];
    $destino = 'upload/' . $_POST['nombre'];
    if (strpos($tipo, 'image/') !== false && $size < 1024 * 1024) { // && file_exists($destino) === false) {
        $r = move_uploaded_file($_FILES['archivoquevoyasubir']['tmp_name'], $destino);
    }
}
echo '<pre>' . var_export($r, true) . '</pre>';*/