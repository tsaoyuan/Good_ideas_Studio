<?php
class Database{
    private $db;
    private $statement;
    public function __construct()
    {
        $this->db = Conn::getInstance();
    }

    public function query($sql, $params = []){

        try{
            $this->statement = $this->db->prepare($sql);
            $this->statement->execute($params);
            // return $statement;
            return $this;
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function findOrFail(){
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}