<?php

class game extends Controller
{
    public function index()
    {
        $data['title'] = 'List Game - GamePedia';
        $data['game'] = $this->model('Game_model')->getAllGame();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('game/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail - GamePedia';
        $data['game'] = $this->model('Game_model')->getGameById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('game/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Game_model')->tambahDataGame($_POST) > 0) {
            Flasher::setFlash('Success!', 'successfully added the game', 'success', 'bx bx-check-circle');
            header('Location:' . BASEURL . '/game');
            exit;
        } else {
            Flasher::setFlash('Error!', 'failed to add game', 'danger', 'bx bx-error-circle');
            header('Location:' . BASEURL . '/game');
        }
    }

    public function hapus($id)
    {
        if ($this->model('Game_model')->hapusDataGame($id) > 0) {
            Flasher::setFlash('Success!', 'game has been successfully deleted', 'success', 'bx bx-check-circle');
            header('Location:' . BASEURL . '/game');
            exit;
        } else {
            Flasher::setFlash('Error!', 'failed to delete the game', 'danger', 'bx bx-error-circle');
            header('Location:' . BASEURL . '/game');
        }
    }
}
