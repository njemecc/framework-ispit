<?php

namespace app\core;


class Router{
public array $routes = [];  
public Request $request;


public function __construct(){
  $this->request = new Request();
}

public function get($path,$callback){
$this->routes["get"][$path] = $callback;
}

public function post($path,$callback){
  $this->routes["post"][$path] = $callback;
}

public function resolve(){
  $path = $this->request->path();
  $path = $this->request->method();

  $callback = $this->routes[$method][$path] ?? false;

  if (!$callback){
    echo $this->view("notFound");
  }
 
  echo $this->view(callback);
}

public function view($viewName)
{
  ob_start();
  include_once __DIR__ . "/../views/$viewName.php";
  return ob_get_clean;
}










}


?>