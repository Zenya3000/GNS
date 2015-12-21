<?php

namespace system;


abstract class View {
    public function loadHead()
    {

        include_once "pages/head.php";
    }

    public function loadMenu()
    {
        include_once "pages/menu.php";
    }

    public function loadFooter()
    {
        include_once "pages/footer.php";
    }
    public function loadCookieActiveMenu(){
        include_once "pages/CookieActiveMenu.php";
    }

    public function loadMain()
    {
        include_once "pages/main.php";
    }
} 