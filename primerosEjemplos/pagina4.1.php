<?php

var_dump($_GET);
echo '<hr>';
echo '<pre>' . var_export($_GET,true) . '</pre>';
echo '<hr>';

/*Prueba
var_dump($_GET);
echo '<hr>';
echo '<pre>' . var_export($_SERVER,true) . '</pre>';
echo '<hr>';
*/

/*
if (isset($_GET['fumador'])){
    echo 'alex es un fumeta';

} else {
    echo 'alex no es fumeta';
}


$extra = '';
if (isset($_GET['extra'])){
    $extra = $_GET['extra'];
    foreach($extra as $indice => $valor){
        echo '<br>El valor de extra en la posicion '. $indice . ' es: ' . $valor;
    }
    echo  'el valor de extra es: ' . $extra;
}
*/