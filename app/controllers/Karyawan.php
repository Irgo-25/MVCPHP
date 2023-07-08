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
    public function Add()
    {
        $data['Add'] = $this->model('KaryawanModel')->AddKaryawan($_POST);
        if ($data['Add'] > 0) {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        } else {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        }
    }
    public function Delete($nik)
    {
        $data['Delete'] = $this->model('KaryawanModel')->DeleteKaryawan($nik);
        if ($data['Delete'] > 0) {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        } else {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        }
    }
}
