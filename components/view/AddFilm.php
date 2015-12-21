<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 19.12.15
 * Time: 21:58
 */

namespace components\view;


use system\View;

class AddFilm extends View{

    public function addFilm()
    {
        $this->loadHead();
        $this->loadCookieActiveMenu();
        include_once "pages/AddFilm.php";
        $this->loadFooter();
    }

    public function ActionAddFilm($result)
    {
        $this->loadHead();
        $this->loadCookieActiveMenu();
        include_once "pages/ActionAddFilm.php";
        $this->loadFooter();
    }
} 