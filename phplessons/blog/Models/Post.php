<?php

namespace Models;
use Core\Database;

class Post{
    public $db;
    public $id, $uid, $title, $content, $create_at;
    public function __construct()
    {
       $this->db = new Database(); 
    }

    // GET
    public function getPost($id)
    {
        $this->id = $id;
        $post = $this->db->query(
            'SELECT * FROM Posts WHERE Id = :Id',
            [
                ':Id' => $this->id
            ]
        )->find();
        dumpDie($post); 
    }

// SET

// Read

// Save
    }
