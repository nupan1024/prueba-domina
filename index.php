<?php

require_once "Controllers/opcionesController.php";
$opciones = new opcionesController();

switch ($_POST['method']) {
    case 'opcion1':
        $opciones->opcion1();
        break;
    case 'opcion2':
        $opciones->opcion2();
        break;
    case 'opcion3':
        $opciones->opcion3();
        break;
    case 'opcion4':
        $opciones->opcion4();
        break;
    case 'opcion5':
        $opciones->opcion1();
        break;
}

$opciones->main();
