<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 11.12.15
 * Time: 11:05
 */

namespace components\controllers;


use system\Controller;

class Films extends Controller
{
    function index()
    {

        $this->model = new \components\model\Main();
        $res = $this->model->Cookie();
        $this->model = new \components\model\Films();
        $films = $this->model->getAllFilms();

        $this->view = new \components\view\Films();
        if ($res == false) {
            $this->view->ShowAllFilms($films);
        } else {
            $this->view->CookieActiveMain($films);
        }
    }

    public function addFilm()
    {
        $this->model  = new \components\model\Films();
        $result = $this->model->AddFilm();

        $this->view = new \components\view\AddFilm();
        $this->view->ActionAddFilm($result);
    }

    public function notActive()
    {
        $this->model = new \components\model\Films();
        $films = $this->model->notActive();

        $this->view = new \components\view\Films();
        $this->view->notActive($films);
    }

    public function id()
    {
        $this->model = new \components\model\Main();
        $res = $this->model->Cookie();
        $this->model = new \components\model\Films();
        $films = $this->model->id();

        $this->view = new \components\view\Films();
        if ($res == false) {
            $this->view->id($films);
        } else {
            $this->view->CookieActiveMain($films);
        }
    }
} 