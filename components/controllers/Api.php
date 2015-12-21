<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 21.12.15
 * Time: 15:15
 */

namespace components\controllers;


use system\Controller;

class Api extends Controller
{

    public function index()
    {
        echo "Its API for best site :)";
    }

    public function getUsers()
    {
        $array = [1, 2, 3, 4, 5];
        print_r($array);

    }

    public function getCity()
    {
        $this->model = new \components\model\registration();
        $city = $this->getCity();
        return $city;

    }



   public function __call($name, $args)
   {
       $MethodName = $name . ucfirst($args[0][0]);
       $params = array_splice($args[0], 1);
       print_r($params);
       if (method_exists($this, $MethodName)) {
           $result = $this->$MethodName($params);

           echo json_encode($result);
       }
       else {
           echo "404";
       }

   }
} 