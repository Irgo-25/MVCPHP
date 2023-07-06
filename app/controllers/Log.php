<?php
class Log extends Controller
{


    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login_registrasi/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['login'] = $this->model('LoginModel')->getUser($username, $password);
        var_dump($data['login']);

        session_start();
        if ($data['login'] == null) {
            header("Location:" . BASEURL . "404");
        } else {
            foreach ($data['login'] as $login) :
                $_SESSION['id'] = $login['id'];
                header("Location:" . BASEURL . "karyawan");
            endforeach;
        }
    }
}
