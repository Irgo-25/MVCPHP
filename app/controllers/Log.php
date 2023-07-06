<?php
class Log extends Controller
{


    public function index()
    {

        $data['judul'] = 'Login';
        $data['login'] = $this->model('LoginModel')->getUser();
        $this->view('templates/header', $data);
        $this->view('login_registrasi/index', $data);
        $this->view('templates/footer');
        var_dump($data['login']);
    }
    /*
    public function login()
    {
        $username = $_POST['username'];

        $data['login'] = $this->model('LoginModel')->getUser($username);
        $this->view('templates/header', $data);
        $this->view('login_registrasi/index', $data);
        $this->view('templates/footer');

        var_dump($data['login']);
    }
    */
}
