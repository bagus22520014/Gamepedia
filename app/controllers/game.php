<?php

class game extends Controller
{
    public function index()
    {
        $data['title'] = 'List Game';
        $data['game'] = $this->model('Game_model')->getAllGame();
        $this->view('templates/header', $data);
        $this->view('game/index', $data);
        $this->view('templates/footer');
    }
}
