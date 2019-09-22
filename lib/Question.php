<?php

class Question {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    // Get all questions
    public function getAllQuestions() {
        //echo 'hello';die();
        $this->db->query("SELECT * FROM questions ORDER BY id ASC");
        
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
        $this->db->query("UPDATE questions SET file_hash =:file_hash, answer =:answer WHERE id = $id");
    
        //Bind data
        $this->db->bind(':file_hash', $data);
        $this->db->bind(':answer', 'y');

        //Execute
        if ($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function getNextQuestion($id) {
        $this->db->query("UPDATE questions SET answer =:answer WHERE id = $id");
        $this->db->bind(':answer', 'y');
        //Execute
        if ($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function resetQuestions() {
        $this->db->query("UPDATE questions SET answer =:answer, file_hash =:file_hash WHERE id > 1");
        $this->db->bind(':answer', 'n');
        $this->db->bind(':file_hash', NULL);
        //Execute
        if ($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function resetQuestion() {
        $this->db->query("UPDATE questions SET answer =:answer, file_hash =:file_hash WHERE id = 1");
        $this->db->bind(':answer', 'y');
        $this->db->bind(':file_hash', NULL);
        //Execute
        if ($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}

