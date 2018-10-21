<?php

require 'classes/Comun.php';//trait
require 'classes/Alumno.php';
require 'classes/Punto.php';

$p = new Punto(3, 4);
$p->introspeccion();//método del trait
$a = new Alumno('12345678i', 'pepe', 'perez', 1243, '2000-04-05', 'v', '958123344');
$a->introspeccion();//método del trait

exit;

$alumno = new Alumno();
$alumno2 = new Alumno('12345678H', 'Juanito', null, 1243);
$alumno3 = new Alumno('11223344Z', 'María', 'López');

$alumno->setNombre('Pepe');

echo $alumno . '<br>';
echo $alumno2 . '<br>';
echo $alumno3 . '<br>';

$p = new Punto();
$p->setX(1);
$p->setY(2);

$p->setX(1)->setY(2);

$miclase = 'Punto';
$p = new $miclase();

$mimetodo = 'getX';
echo $p->$mimetodo();
echo $p->getX();

if(class_exists($miclase)) {
    $p = new $miclase();
}

if(method_exists($p, $mimetodo)) {
    echo $p->$mimetodo();
}

if(method_exists($miclase, $mimetodo)) {
    echo $p->$mimetodo();
}