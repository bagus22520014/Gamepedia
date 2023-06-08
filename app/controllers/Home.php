<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'GamePedia';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
