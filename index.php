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
    require 'controllers/home.controller.php';
    require 'controllers/customer.controller.php';
    //require models
    require 'models/home.model.php';
    require 'models/customer.model.php';
  
    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();
    if($controller){
        $controller->executeAction();
    }