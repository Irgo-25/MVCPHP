<?php
class Registrasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Registrasi';
        $this->view('templates/header', $data);
        $this->view('login_registrasi/registrasi');
        $this->view('templates/footer');
    }
}
