<?php

namespace Models;
use Core\Database;

class Post{
    public $db;
    protected $id, $uid, $role, $title, $content, $create_at;
    public function __construct()
    {
       $this->db = new Database(); 
    }

    // Read
    // for Role: Admin
    public function all(){

        $posts = $this->db->query(
            "SELECT * FROM Posts"
        )->get();
        return $posts;

    }

    // for Role: Regular
    public function getPostsByRole($uid, $role){

        $this->role = $role;
        $this->uid = $uid;

        switch($role){
            case "Admin":
                $posts = $this->db->query(
                "SELECT * FROM Posts"
                )->get();

            break;

            case "Regular":
                $posts = $this->db->query(
                "SELECT * FROM Posts WHERE uid = :uid",
                [
                    ":uid" => $this->uid
                ]
                )->get();
            break;
        }
        return $posts;
    }

    public function getPost($id)
    {
        $this->id = $id;
        $post = $this->db->query(
            'SELECT * FROM Posts WHERE Id = :Id',
            [
                ':Id' => $this->id
            ]
        // )->find();
        )->findOrFail();
        // dumpDie($post); 
        return $post;
    }

    // Save
    public function save($uid, $title)
    {
        $this->db->query("INSERT INTO `Posts` (`Uid`, `Title`) VALUES (:Uid, :Title)", [
            ":Uid" => $uid,
            ":Title" => $title
        ]);

        return $this;

    }

}
