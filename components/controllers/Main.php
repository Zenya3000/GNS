<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 01.12.15
 * Time: 11:12
 */

namespace components\controllers;


use system\Controller;

class Main extends Controller
{
    public function Index()
    {


        $this->model = new \components\model\Main();

        $res = $this->model->Cookie();

        $films = $this->model->Main();

        $this->view = new \components\view\Main();

        if ($res == false) {
            $this->view->Main($films);
        } else {
            $this->view->CookieActiveMain($films);
        }

    }
} 