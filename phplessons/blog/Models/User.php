<?php

namespace Models;
use Core\Database;

class User{
    public $db;
    protected $id, $uid, $role, $title, $content, $create_at;
    public function __construct()
    {
       $this->db = new Database(); 
    }

    // Read
    public function all(){

         $users = $this->db->query(
        //  $this->db->query(
            "SELECT * FROM Users"
        )->get();
        return $users;
        // return $this;

    }

    public function getPostsByCurrentUid($uid)
    {
        $this->uid = $uid;
        $posts = $this->db->query(
            "SELECT * FROM Posts WHERE uid = :uid",
            [
                ":uid" => $this->uid
            ]
        )->get();
        return $posts;
    }

    // role() 回傳 $uid 所屬的 role, 供各個需要 role 作為初始設定的 function 使用
    private function role($uid){

        $this->uid = $uid;
        $this->role = $_SESSION["role"];
        switch($this->role){
            case "Admin":
                return $this->role = "Admin";
            break;
            
            case "Regular":
                return $this->role = "Regular";
            break;

        }

    }

    // index.php: Posts
    public function getUsers($uid){
        $this->role($uid);

        switch($this->role){
            case "Admin":
                // $posts = $this->db->query(
                // "SELECT * FROM Posts"
                // )->get();
                
                return $this->all();
                // dumpDie($this->all());
            break;

            case "Regular":
                // $posts = $this->db->query(
                // "SELECT * FROM Posts WHERE uid = :uid",
                // [
                //     ":uid" => $this->uid
                // ]
                // )->get();
                
                return $this->getPostsByCurrentUid($uid);
                // dumpDie($this->getPostsByCurrentUid($uid));
            break;
        }
    }
