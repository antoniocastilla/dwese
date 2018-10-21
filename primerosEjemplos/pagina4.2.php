<?php

/*if(isset($_GET['nombre'])) {
    echo $_GET['nombre'];
}
echo '<br>';
if(isset($_POST['nombre'])) {
    echo $_POST['nombre'];
}*/

require('classes/Reader.php');//1 mas correcta
require 'classes/Reader.php';//2 menos correcto
require_once 'classes/Reader.php';//no usar
require_once('classes/Reader.php');//no usar
include 'classes/Reader.php';//forma 5