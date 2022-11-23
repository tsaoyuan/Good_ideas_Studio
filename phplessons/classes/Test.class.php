<?php
class Test extends Dbh{

    public function getUsers(){
       $sql = 'SELECT * FROM user';
       $stmt = $this->connect()->query($sql);
       while($row = $stmt->fetch()){
         echo $row['User'].PHP_EOL; 
       }
    }
}