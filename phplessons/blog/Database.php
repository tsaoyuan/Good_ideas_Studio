<?php
class Database{
    private $db;
    public function __construct()
    {
        $this->db = Conn::getInstance();
    }

    public function query($sql, $params = []){

        $statement = $this->db->prepare($sql);
        $statement->execute($params);
        return $statement;
    }
}