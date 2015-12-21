<?php
/**
 * Created by PhpStorm.
 * User: ZZZ
 * Date: 15.12.15
 * Time: 22:06
 */

namespace components\model;



use system\Model;

class SignIn extends Model
{
    public function SignIn()
    {

        $login = $_POST['Email'];
        $pass = md5($_POST['Pass']);

        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $login)){
           $result = '<br />'. 'Вы ввели неверный формат для логина';
            return $result;
            die();
        }

        if($pass == ""){
            $result = '<br />'.'Поле пароля пустое, введите пароль';
            return $result;
         die();


        }

        $sql = "SELECT * from users where users.mail = :login and users.password = :pass";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(":login", $login);
        $query->bindParam(":pass", $pass);
        $query->execute();


        $array = $query->fetch(\PDO::FETCH_ASSOC);
            $_SESSION['bool']=true;
            setcookie("statusAuth", true, time() + 60*60*24*365, '/');


            setcookie("id", $array['id'], time() + 60*60*24*365, '/');
            setcookie("Name", $array['Name'], time() + 60*60*24*365, '/');
            header("Refresh:3;url=../");
           $result =  "Авторизация прошла успешно... перемещаю :)";
       return $result;

    }
} 