<?php
namespace app\core;


class Request{

  public function all() : array{
    return $_REQUEST;
  }
 
  public function one($parametarName){

    return  $_REQUEST[$parametarName] ?? null;

  }
 
  
  public function __construct(){
 }
    public function method(){
      return strToLower($_SERVER["REQUEST_METHOD"]);
    }

  public function path(){
    $path = $_SERVER["REQUEST_URI"] ?? '/';
    $position = strpos($path,"?");

    if($position === false){
      return $path;
    }

    $path = substr($path,0,$position);

    return $path;
  }


















}






















?>