<?php

class User {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        // Check if row exist
        $this->db->result();

        if ($this->db->rowCount > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Register user
    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}