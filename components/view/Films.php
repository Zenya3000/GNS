<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 11.12.15
 * Time: 11:14
 */

namespace components\view;


use system\View;

class Films extends View
{
    public function ShowAllFilms($films)
    {

        $this->loadHead();
        $this->loadMenu();
        include_once("pages/main.php");
        $this->loadFooter();
    }

    public function CookieActiveMain($films)
    {
        $this->loadHead();
        $this->loadCookieActiveMenu();
        include_once "pages/main.php";
        $this->loadFooter();
    }

    public function notActive($films)
    {
        $this->loadHead();
        $this->loadCookieActiveMenu();
        include_once("pages/main.php");
        $this->loadFooter();
    }

    public function id($films)
    {
        $this->loadHead();
        $this->loadMenu();
        include_once("pages/main.php");
        $this->loadFooter();
    }
}