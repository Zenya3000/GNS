<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 09.12.15
 * Time: 17:51
 */

namespace system;


abstract class Model {
    public $db;
    function __construct(){

        $this->db = Connect::getInstance();
    }

} 