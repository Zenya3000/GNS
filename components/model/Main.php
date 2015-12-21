<?php

namespace components\model;



use system\Model;

class Main extends Model{
    function Main(){
        // Формируем список последних фильмов (6);


        $sql = "SELECT films.id, category.name as category, title, description, photo, year, date
                FROM films
                INNER JOIN filmscategory ON films.id = filmscategory.filmsid
                INNER JOIN category ON filmscategory.categoryid = category.id
                ORDER BY id DESC LIMIT 6";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();

        while($row = $query->fetch(\PDO::FETCH_ASSOC)){
            $array[] = $row;
        };
        return $array;
    }

    function Cookie(){

        $Name = $_COOKIE['name'];
        $id = $_COOKIE['id'];
        if(!isset($Name)){

            $sql = "SELECT Name, id from users where users.id = :id";
            $query = $this->db->pdo->prepare($sql);
//            $query->bindParam(":Name", $Name);
            $query->bindParam(":id", $id);
            $query->execute();

            while($row = $query->fetch(\PDO::FETCH_ASSOC)){
                $res[] = $row;
            }

            if(is_array($res)){
                return true;
            }

        } else {
            return false;
        }
    }
} 