<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 09.12.15
 * Time: 17:49
 */

namespace system;


abstract class Controller {
    protected  $model;
    protected  $view;
    abstract function index();

} 