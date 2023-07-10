<?php
class Karyawan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $data['karyawan'] = $this->model('KaryawanModel')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }
    public function Detail($id_karyawan)
    {
        $data['judul'] = 'Data Karyawan';
        $data['karyawan'] = $this->model('KaryawanModel')->getKaryawanById($id_karyawan);
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
    public function getEdit()
    {
        echo json_encode($this->model('KaryawanModel')->getKaryawanById($_POST['id_karyawan']));
    }
    public function Edit()
    {
        $data['Edit'] = $this->model('KaryawanModel')->EditKaryawan($_POST);
        if ($data['Edit'] > 0) {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        } else {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        }
    }
}
