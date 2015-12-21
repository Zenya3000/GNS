<?php

namespace components\view;


use system\View;

class Registration extends View
{
    public function registration($city)
    {
        $this->loadHead();
        $this->loadMenu();
        include_once "pages/registration.php";
        $this->loadFooter();
    }


}