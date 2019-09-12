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

}

