<?php
    session_start();
    require_once "model/conn.model.php";
    if (isset($_REQUEST['c'])) {
        //requerir archivo
        $controller = strtolower($_REQUEST['c']);
        require_once "controller/$controller.controller.php";
        //requirir clase
        $controller = ucwords($controller)."Controller";
        $controller = new $controller;
        //preguntamos si hay accion si no hay por defecto es main
        $action = isset($_REQUEST['a']) ? $_REQUEST['a']:'main';
        call_user_func(array($controller,$action));
    }else{
        $controller = "views";
        //requerir archivo
        require_once "controller/$controller.controller.php";
        //requerir clase
        $controller = ucwords($controller)."Controller";
        $controller = new $controller;
        $controller->main();
    }
?>