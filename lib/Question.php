<?php

class Question {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    // Get all questions
    public function getAllQuestions() {
        //echo 'hello';die();
        $this->db->query("SELECT * FROM questions");
        
        // Assign result set 
        $results = $this->db->resultSet();
        
        return $results;
    }

    public function getQuestion($id) {
        $this->db->query("SELECT * FROM questions WHERE id = :id");

        $this->db->bind(':id', $id);

        // Assign row
        $row = $this->db->single();

        return $row;
    }

    public function update($id, $data) {
        $this->db->query("UPDATE questions SET file_hash =:file_hash WHERE id = $id");
    
        //Bind data
        $this->db->bind(':file_hash', $data);

        //Execute
        if ($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}

