<?php

error_reporting(E_ALL);
ini_set('display_errors',1);


if(!empty($_GET['esteEsta'])) {
    echo 'esteEsta está';
} else {
    echo 'esteEsta no está';
}
echo '<br>';

if(!empty($_GET['esteNoEsta'])) {
    echo 'esteNoEsta está';
} else {
    echo 'esteNoEsta no está';
}