<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 05.12.15
 * Time: 22:39
 */
namespace components\model;


use system\Model;


class Users extends Model
{


    public function registrateUser()
    {
        $sql = "Select * from users where Mail = :Email";
        $query = $this->db->pdo->prepare($sql);
        $query->execute([":Email" => $_POST['Email']]);


        WHILE ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
            $array[] = $row;
        }


        if (isset($array)) {
            $user = "Пользователь с таким Емейлом уже существует!";
            echo $user;

        }
        $pass = md5($_POST['Pass']);
        $email = $_POST['Email'];

        $sql = "INSERT INTO `users` (`id`, `Mail`, `password`, `Name`, `cityid`) VALUES ('',:mail,:pass,:name,:city)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(":mail", $email, \PDO::PARAM_STR);
        $query->bindParam(":pass", $pass, \PDO::PARAM_STR);
        $query->bindParam(":name", $_POST['Name'], \PDO::PARAM_STR);
        $query->bindParam(":city", $_POST['city']);
        $query->execute();
        $idlogin = $this->db->pdo->lastInsertId();
        if ($query) {
            $_SESSION['bool'] = true;
            setcookie("statusAuth", true, time() + 60 * 60 * 24 * 365, '/');
            setcookie("id", $idlogin, time() + 60 * 60 * 24 * 365, '/');
            setcookie("Name", $_POST['Email'], time() + 60 * 60 * 24 * 365, '/');
            header("Refresh:1;url=../");
            echo "Авторизация прошла успешно... перемещаю :)";
        }

    }

}