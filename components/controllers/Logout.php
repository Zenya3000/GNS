<?php

namespace components\controllers;


class Logout {
    public function index()
    {
        $_SESSION['bool']=true;
        setcookie("statusAuth", true, time() - 1000000, '/');
        setcookie("id", $_COOKIE['id'], time() - 1000000, '/');
        setcookie("Name", $_COOKIE['Name'], time() - 1000000, '/');
        header("Refresh:0;url=../GNS");

    }
} 