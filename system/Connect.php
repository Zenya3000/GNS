<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 06.12.15
 * Time: 18:36
 */

namespace system;


class Connect
{
//Singleton
    private function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=gns;charset=utf8";
        $this->pdo = new \PDO($dsn, "root", "");
    }

    public static function getInstance()
    {
        static $instance;
        if ($instance === null) {
            $instance = new self();
        }
        return $instance;
    }


}