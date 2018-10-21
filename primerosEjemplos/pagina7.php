<?php

/*
require 'classes/Comun.php';
require 'classes/Readable.php';
require 'classes/Alumno.php';
require 'classes/AlumnoReadable.php';
require 'classes/Reader.php';
*/
require 'classes/Autoload.php';

$alumno = Reader::readObject('Alumno');

$alumnoReadable = new AlumnoReadable();
$alumnoReadable = Reader::readReadableObject($alumnoReadable);

echo '<pre>' . var_export($alumno, true) . '</pre>';
echo '<pre>' . var_export($alumnoReadable, true) . '</pre>';

echo $alumno;