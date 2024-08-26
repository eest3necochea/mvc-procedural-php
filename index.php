<?php

//incluye el archivo de configuración para acceder a las constantes ej: APP_ROOT
require_once(dirname(__FILE__) . '/private/config/config.php');

//la pagina index.php va a funcionar como un router
//la estructura switch recibe por la url la variable 'view' con la semantica de la vista a rutear.

$request = $_SERVER['REQUEST_METHOD'];
$actividad = '';
$controlador = '';

//verifica que el metodo de la request sea tipo get
if ($request == 'GET') {
    //verifica que recibe un controlador en la variable 'controller' por ej: http://localhost/mvc-template/index.php?controller=formulario&activity=gestion
    if (isset($_GET['controller'])) {
        $controlador = trim($_GET['controller']);
        if (isset($_GET['activity'])) {
            $actividad = trim($_GET['activity']);
        }
    }

    switch ($controlador . '-' . $actividad) {
        case 'formulario-ingreso':
            require_once(APP_SRC . '/controller/ingreso/formularioController.php');
            break;

        default:
            //incluye la vista welcome
            require_once(APP_SRC . '/controller/index/welcomeController.php');
            break;
    }
}

//verifica que el metodo de la request sea tipo post
if ($request == 'POST') {
    //verifica que recibe un controlador en la variable 'controller' por ej: http://localhost/mvc-template/index.php?controller=formulario&activity=gestion
    if (isset($_GET['controller'])) {
        $controlador = trim($_GET['controller']);
        if (isset($_GET['activity'])) {
            $actividad = trim($_GET['activity']);
        }
    }

    switch ($controlador . '-' . $actividad) {
        case 'formulario-ingreso':
            //incluye la vista formulario
            require_once(APP_SRC . '/controller/ingreso/procesarFormularioController.php');
            break;
    }
}
