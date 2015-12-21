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


    public function getCity()
    {


        $sql = "SELECT * from city";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
//        $city = $query->fetch(\PDO::FETCH_COLUMN, 0);
        While ($array = $query->fetch(\PDO::FETCH_ASSOC)) {
            $city[] = $array;
        };


        return ($city);

    }

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
            return $user;
        } else {
           $pass = md5($_POST['pass']);
            $sql = "INSERT INTO `users` (`id`, `Mail`, `password`, `Name`, `cityid`) VALUES ('',:mail,:pass,:name,:city)";
            $query = $this->db->pdo->prepare($sql);
                $query->bindParam(":mail", $_POST['Email']);
                $query->bindParam(":pass", $pass);
                $query->bindParam(":name", $_POST['Name']);
                $query->bindParam(":city", $_POST['city']);
            $query->execute();
            $idlogin = $this->db->pdo->lastInsertId();
            if($query){
            $_SESSION['bool']=true;
            setcookie("statusAuth", true, time() + 60*60*24*365, '/');
            setcookie("id", $idlogin, time() + 60*60*24*365, '/');
            setcookie("Name", $_POST['Email'], time() + 60*60*24*365, '/');
            header("Refresh:1;url=../");
          echo "Авторизация прошла успешно... перемещаю :)";
            }
        }
    }

}