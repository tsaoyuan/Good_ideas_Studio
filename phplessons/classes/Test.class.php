<?php
class Test extends Dbh{

    public function getUsers(){
       $sql = 'SELECT * FROM users';
       $stmt = $this->connect()->query($sql);
       while($row = $stmt->fetch()){
         echo $row['Name'].'</br>'; 
       }
    }
    
    public function setUsersStmt($name, $email, $uid, $pwd){
        $sql = "INSERT INTO users(Name, Email, Uid, Pwd) VALUES(?, ?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $uid, $pwd]);
       }
}