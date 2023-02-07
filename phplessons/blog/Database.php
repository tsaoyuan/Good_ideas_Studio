<?php
class Database{
    private $db;
    public function __construct()
    {
        $this->db = Conn::getInstance();
    }

    public function query($sql, $params = []){

        try{
            $statement = $this->db->prepare($sql);
            $statement->execute($params);
            return $statement;
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}