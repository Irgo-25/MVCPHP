<?php
class Log extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login_registrasi/index');
        $this->view('templates/footer');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['login'] = $this->model('LoginModel')->getUser($username, $password);
        var_dump($data['login']);
    }
}
