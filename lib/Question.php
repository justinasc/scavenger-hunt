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

}

