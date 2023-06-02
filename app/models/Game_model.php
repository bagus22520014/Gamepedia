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

    public function tambahDataGame($data)
    {
        $query = "INSERT INTO data_game
                    VALUES
                    ('', :judul, :release, :Genre, :Platform, :Pengembang, :Penerbit, :Gambar, :Metascore)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('release', $data['release']);
        $this->db->bind('Genre', $data['Genre']);
        $this->db->bind('Platform', $data['Platform']);
        $this->db->bind('Pengembang', $data['Pengembang']);
        $this->db->bind('Penerbit', $data['Penerbit']);
        $this->db->bind('Gambar', $data['Gambar']);
        $this->db->bind('Metascore', $data['Metascore']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGame($id)
    {
        $query = "DELETE FROM data_game WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
