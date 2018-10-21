<?php

//Ejemplo de Array :)

//Forma más antigua de declarara un array
$array1 = array();

//Esta es la forma más nueva
//Hay que tener cuidado por si nos vamos a una version
//anterior de PHP.
$array2 = [];


$array1[] = 'hola';//Lo mete en una posición
$array1[] = 1;//Segunda
$array1[] = 1.2;//Tercera
$array1[6] = 2;//Sexto indice
$array1[]= 4;//Séptimo indice
//unset($array1[2]);
//unset($array); borra el array entero

$array2[] = '1';
$array2[] = 'Mojito';

$array1[] = $array2;
$array1[8][] = 'JB'; //Añadimos contenido al array que ya está en el primero


//Lo hacemos asociativo
$array1['hola'] = 'nuevo hola';
$array1[] = 'nuevo hola2';
echo '<pre>' . var_export($array1, true) . '</pre>';

echo '<br>Vamos a sacar los keys: <br>';
$indices = array_keys($array1);
echo '<pre>' . var_export($indices, true) . '</pre>';

$cadena = 'asdasdasdasd;aleadklsjalsdkas;sniperrriano;xd;ma nege';
$cadenaSpliteada = explode(';',$cadena);
echo '<pre>' . var_export($cadenaSpliteada, true) . '</pre>';
$textoImplode = implode('#', $cadenaSpliteada);
echo '<pre>' . var_export($textoImplode, true) . '</pre>';

echo '<br> Vamos a Escribir un Array Literal';
$arrayLiteral1 = array(
        'nombre' => 'Pepe Perez',
        'curso' => '2DAW',
        'grupo' => 'A',
        'modulos'=> array(
                'dwes' => 'Desarrollo web en entorno servidor',
                'dewc' => 'Desarrollo weben entorno cliente',
                'etc' => 'Etcétera'
            ),
        'faltas' => array (
                '2018-09-24',
                '2018-10-03',
                '2018-11-10',
                '2018-12-03',
            )
);
    
    
echo 'El número de faltas es: ' . count($arrayLiteral1['faltas']) . '<br>';
echo 'La fecha de la segunda falta es: ' . $arrayLiteral1['faltas'][1] . '<br>';
echo 'La última falta es: ' . $arrayLiteral1['faltas'][count($arrayLiteral1['faltas'])-1] . '<br>';
echo '<hr><hr>';
echo '<pre>' . var_export($_SERVER, true) . '</pre>';