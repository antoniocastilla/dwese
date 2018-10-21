<?php

$archivo = $_GET['archivo'];
header('Content-type: image/jpeg');
readfile('../../../privado/' . $archivo);