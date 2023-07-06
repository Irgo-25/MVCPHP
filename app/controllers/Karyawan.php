<?php
class Karyawan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $data['karyawan'] = $this->model('KaryawanModel')->getKaryawan();
        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }
}
