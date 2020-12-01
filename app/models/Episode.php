<?php

class Episode {
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM episodes ORDER BY id DESC";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM episodes WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);

        return $this->db->single();
    }
    

    public function add($title, $img, $iframe, $link)
    {
        $sql = "INSERT INTO episodes 
        (title, img, iframe, link) 
        values 
        (:title, :img, :iframe, :link)";

        $this->db->query($sql);

        $this->db->bind(':title', $title);
        $this->db->bind(':img', $img);
        $this->db->bind(':iframe', $iframe);
        $this->db->bind(':link', $link);

    
        return $this->db->execute();
    }

    public function edit($id, $title, $img, $iframe, $link)
    {
        $sql = "UPDATE episodes 
        SET  title=:title, img=:img, iframe=:iframe, link=:link
        WHERE id=:id";

        $this->db->query($sql);

        $this->db->bind(':title', $title);
        $this->db->bind(':img', $img);
        $this->db->bind(':iframe', $iframe);
        $this->db->bind(':link', $link);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM episodes WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }
}