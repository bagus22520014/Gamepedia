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
                    ('', :judul, :release_date, :Genre, :Platform, :Pengembang, :Penerbit, :Gambar, :Video, :Metascore)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('release_date', $data['release_date']);
        $this->db->bind('Genre', $data['Genre']);
        $this->db->bind('Platform', $data['Platform']);
        $this->db->bind('Pengembang', $data['Pengembang']);
        $this->db->bind('Penerbit', $data['Penerbit']);
        $this->db->bind('Gambar', $data['Gambar']);
        $this->db->bind('Video', $data['Video']);
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

    public function ubahDataGame($data)
    {
        $query = "UPDATE data_game SET
                    judul = :judul,
                    release_date = :release_date,
                    Genre = :Genre,
                    Platform = :Platform,
                    Pengembang = :Pengembang,
                    Penerbit = :Penerbit,
                    Gambar = :Gambar,
                    Video = :Video,
                    Metascore = :Metascore
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('release_date', $data['release_date']);
        $this->db->bind('Genre', $data['Genre']);
        $this->db->bind('Platform', $data['Platform']);
        $this->db->bind('Pengembang', $data['Pengembang']);
        $this->db->bind('Penerbit', $data['Penerbit']);
        $this->db->bind('Gambar', $data['Gambar']);
        $this->db->bind('Video', $data['Video']);
        $this->db->bind('Metascore', $data['Metascore']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataGame()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM data_game WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
