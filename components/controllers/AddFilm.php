<?php


namespace components\controllers;


use system\Controller;

class AddFilm extends Controller{
    public function index()
    {
        $this->view = new \components\view\AddFilm();
        $this->view->addFilm();
    }


} 