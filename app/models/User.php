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
        $emailFound = $this->db->result();

        if ($emailFound) {
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

    // Login user
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $result = $this->db->result();
        $hashed_pw = $result->password;

        if (password_verify($password, $hashed_pw)) {
            return $result;
        } else {
            return false;
        }
    }

    // Get User by id
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);

        // Get row data
        $result = $this->db->result();
        return $result;
    }
}