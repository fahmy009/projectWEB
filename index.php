<?php
  require_once('library/route.php');

  session_start();
  $router       = new route();
  $config       = array('route'=>$router	);
  $controller   = null;
  $function     = null;
  $uri          = $_SERVER['REQUEST_URI'];
  $uri          = explode('/',$uri);
  $uriFragment  = count($uri);
  if(!isset($_GET['c'])){
    include_once('controllers/c_user.php');
    $controller = new c_user($config);
    $controller->index();
  }else{
    $controllerName = $_GET['c'];
    $functionName   = $_GET['f'];
    include_once('controllers/'.$controllerName.'.php');
    $controller     = new $controllerName($config);
    $controller->$functionName();
  }



?>
