<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 06.12.15
 * Time: 23:34
 */




namespace components\view;


use system\view;

class Users extends view {
    public function registrationForm($city)
    {

        $this->loadHead();
        $this->loadMenu();
        include_once "pages/registration.php";
        $this->loadFooter();
    }
} 