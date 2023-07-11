<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dasboard';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/sidebar');
        $this->view('templates/footer');
    }
}
