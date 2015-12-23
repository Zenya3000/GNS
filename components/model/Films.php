<?php

namespace components\model;


use system\Model;

class Films extends Model
{
    public function getAllFilms()
    {
        $sql = "SELECT * FROM `films` WHERE isActive = 1";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();

        WHILE ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
            $films[] = $row;
        }
        return $films;
    }

    public function notActive()
    {
        $sql = "SELECT * FROM `films` WHERE isActive = 0";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();

        WHILE ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
            $films[] = $row;
        }
        return $films;
    }

    function check_input($data, $problem = "")
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        if ($problem && strlen($data) == 0) {
            Films::show_error($problem);
        }
        return $data;
    }

    function show_error($myError)
    {
        ?>
        <html>
        <body>
        <p>Пожалуйста, исправьте следующую ошибку:</p>
        <?php echo $myError; ?>
        </body>
        </html>
        <?php
        exit();
    }

    function AddFilm()
    {

        $name = Films::check_input($_POST['Name'], "Введите название фильма");
        $description = Films::check_input($_POST['description'], "Введите описание");
        $avatar = explode("/", $_FILES['avatar']['type']);




        if ($avatar[1] == "jpeg" || $avatar[1] == "jpg"){
            copy($_FILES['avatar']['tmp_name'], "$_SERVER[DOCUMENT_ROOT] . /GNS/files/".$_FILES['avatar']['name']);
        } else {
            return "неверный формат изображения";
            die();
        }
        $avatarName = $_FILES['avatar']['name'];
        $year = Films::check_input($_POST['year'], "Введите год выхода фильма");
        $date = $_POST['date'];
        $IsActive = $_POST['IsActive'];
        if (preg_match("/^[A-Za-zА-Яа-я0-9ё\s,]+$/u", $name)) {


            $query = "INSERT INTO `films`(`title`, `description`, `photo`, `year`, `date`, `isActive`) VALUES (:Name,:description,:avatar,:year,:date,:isActive)";
            $this->db->getInstance();
            $sql = $this->db->pdo->prepare($query);
            $sql->bindParam(":Name", $name);
            $sql->bindParam(":description", $description);

            $sql->bindParam(":avatar", $avatarName);
            $sql->bindParam(":year", $year);
            $sql->bindParam(":date", $date);
            $sql->bindParam(":isActive", $IsActive);
            $sql->execute();
            if ($sql) {
                header("Refresh:3;url=../");
                return "Вы успешно добавили фильм!";

            } else {
                return "Ошибка при записи в базу данных!!";
            }
        } else {
            return "Данный формат имени не поддерживается";
        }


    }

    function id()
    {

        $path = $_SERVER['REQUEST_URI'];
        $res = explode('=', $path);
        $args = $res[1];


//        $pathArray = explode('/', $path);
//        $magicNumber = 2;
//        $args = array_splice($pathArray, $magicNumber +2);

        $sql = "SELECT * FROM `films` WHERE films.id =:args";
        $query = $this->db->pdo->prepare($sql);
        $query->bindParam(":args", $args, \PDO::PARAM_INT);
        $query->execute();
        if ($query) {


            WHILE ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
                $films[] = $row;
            }
        } else {
            echo "Запрос не отработал";
            die();
        }

        return $films;


    }
} 