<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'GamePedia';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
