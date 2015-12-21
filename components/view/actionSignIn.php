<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 16.12.15
 * Time: 17:39
 */

namespace components\view;


use system\View;

class actionSignIn extends View
{
    public function actionSignIn($res)
    {
        $this->loadHead();
        $this->loadMenu();
        include_once "pages/actionSignIn.php";
        $this->loadFooter();
    }
} 