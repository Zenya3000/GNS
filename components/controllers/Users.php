<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 12.12.15
 * Time: 22:18
 */

namespace components\controllers;



use system\Controller;

class Users extends Controller{
    public function index()
    {

    }

    public function registration(){
        $this->model = new \components\model\registration();
        $city = $this->model->getCity();

        $this->view = new \components\view\Registration();
        $this->view->registration($city);

    }

    public function actionRegistration(){
        $this->model = new \components\model\Users();
        $this->model->registrateUser($_POST);


    }


} 