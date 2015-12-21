<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 09.12.15
 * Time: 18:04
 */

namespace components\view;


use system\View;

class Main extends View
{
    public function Main($films)
    {

        $this->loadHead();
        $this->loadMenu();
        include_once "pages/main.php";
        $this->loadFooter();
    }

    public function CookieActiveMain($films)
    {
        $this->loadHead();
        $this->loadCookieActiveMenu();
        include_once "pages/main.php";
        $this->loadFooter();
    }
} 