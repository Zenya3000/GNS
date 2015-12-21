<?php
error_reporting(3);
function __autoload($ClassName){

    $ClassName = preg_replace("/\\\\/", "/", $ClassName);
    if(file_exists($ClassName . ".php")){
        include_once $ClassName . ".php";
    }

}
include("config.php");
$router = new \system\Router();
$router->loadPage();
