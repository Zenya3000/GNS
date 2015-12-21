<?php

namespace components\controllers;




use system\Controller;

class SignIn extends Controller{
    public function index()
    {
        $this->model = new \components\view\SignIn();
        $this->model->SignIn();

    }

    public function actionSignIn()
    {
        $this->model = new \components\model\SignIn();
        $res = $this->model->SignIn();

        $this->view = new \components\view\actionSignIn();
        $this->view->actionSignIn($res);


    }

} 