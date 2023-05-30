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
}
