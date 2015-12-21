<?php

namespace components\model;


use system\Model;

class registration extends Model{
    public function getCity()
    {


        $sql = "SELECT * from city";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();

        While ($array = $query->fetch(\PDO::FETCH_ASSOC)) {
            $city[] = $array;
        };


        return ($city);
}
}