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
        $photo = $_POST['photo'];
        $year = Films::check_input($_POST['year'], "Введите год выхода фильма");
        $date = $_POST['date'];
        $IsActive = $_POST['IsActive'];
        if (preg_match("/^[A-Za-zА-Яа-я0-9ё\s,]+$/u", $name)) {


            $query = "INSERT INTO `films`(`title`, `description`, `photo`, `year`, `date`, `isActive`) VALUES (:Name,:description,:photo,:year,:date,:isActive)";
            $this->db->getInstance();
            $sql = $this->db->pdo->prepare($query);
            $sql->bindParam(":Name", $name);
            $sql->bindParam(":description", $description);
            $sql->bindParam(":photo", $photo);
            $sql->bindParam(":year", $year);
            $sql->bindParam(":date", $date);
            $sql->bindParam(":isActive", $IsActive);
            $sql->execute();
            if ($sql) {
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
        $pathArray = explode('/', $path);
        $magicNumber = 2;
        $args = array_splice($pathArray, $magicNumber +2);

        $sql = "SELECT * FROM `films` WHERE films.id =?";
        $query = $this->db->pdo->prepare($sql);
//        $query->bindParam(":id", $args, \PDO::PARAM_INT);
        $query->execute($args);
        WHILE ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
            $films[] = $row;
        }

        return $films;



    }
} 