<?php
    
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    
    // session starting
    session_start();
    
    //config file
    require 'config.php';
    //require classes
    require 'classes/Bootstrap.php';
    require 'classes/Controller.php';
    require 'classes/Model.php';
    //require controllers
    require 'controllers/home.php';
    //require models
    require 'models/home.php';
  
    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();
    if($controller){
        $controller->executeAction();
    }