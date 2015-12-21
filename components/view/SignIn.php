<?php


namespace components\view;


use system\View;

class SignIn extends View{

       public function SignIn()
    {
        $this->loadHead();
        $this->loadMenu();
        include_once "pages/SignIn.php";
        $this->loadFooter();
    }


} 