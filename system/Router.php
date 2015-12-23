<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 30.11.15
 * Time: 23:15
 */

namespace system;


class Router {
function loadPage(){
    $path = $_SERVER['REQUEST_URI'];
    $pathArray = explode('/', $path);

    $magicNumber = 2;

    $ClassName = $pathArray[$magicNumber] ? ucfirst(strtolower($pathArray[$magicNumber])) : 'Main';
    $MethodName  = $pathArray[$magicNumber +1] ? $pathArray[$magicNumber +1]: "Index";
    if($MethodName!="index"){
       $pathMethod = explode('=',$pathArray[$magicNumber +1]);
       $MethodName = $pathMethod[0]?$pathMethod[0]: "index";

    }

    $args = array_splice($pathArray, $magicNumber +2);

//    $ClassName = "\\components\\controllers\\" . $ClassName;
//
//    if(class_exists($ClassName)){
//        $obj = new $ClassName();
//        if(method_exists($obj,$MethodName)){
//            $obj->$MethodName();
//        } else {
//            echo "ERROR 404. Method is not exists.";
//        }
//    }else{
//        echo "ERROR 404. Class is not exists";
//    }
    if ($ClassName != "api") {
    $ClassName = "\\components\\controllers\\" . $ClassName;

    if (class_exists($ClassName)) {
        $obj = new $ClassName();
        if (method_exists($obj, $MethodName)|| method_exists($obj, "__call")) {
            $obj->$MethodName($args);
        } else {
            echo "ERROR 404. Method is not exists.";
        }
    } else {
        echo "ERROR 404. Class is not exists";
    }
} else {

}
}
}