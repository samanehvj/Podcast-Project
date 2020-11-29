<?php

class User {
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function get($email, $password)
    {
        $sql = "SELECT * FROM users 
        WHERE email=:email AND password=:password";
        $this->db->query($sql);

        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        return $this->db->single();
    }
}