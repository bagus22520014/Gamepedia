<?php

class Game_model
{
    private $table = 'data_game';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGame()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGameById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
