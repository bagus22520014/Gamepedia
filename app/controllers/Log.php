<?php

class Log extends Controller
{
    public function index()
    {
        $data['title'] = 'GamePedia - Login';
        $this->view('login/index', $data);
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['login'] = $this->model('Log_model')->getUser($username, $password);
        session_start();
        if (empty($data['login'])) {
            header("Location: " . BASEURL . "/404/");
            exit();
        } else {
            foreach ($data['login'] as $row) {
                $_SESSION['nama'] = $row['nama'];
                header("Location: " . BASEURL);
                exit();
            }
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['nama']);
        session_destroy();
        header("Location: " . BASEURL);
    }
}
