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
    public function Detail($id)
    {
        $data['judul'] = 'Data Karyawan';
        $data['karyawan'] = $this->model('KaryawanModel')->getKaryawanById($id);
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
    public function Delete($id)
    {
        $data['Delete'] = $this->model('KaryawanModel')->DeleteKaryawan($id);
        if ($data['Delete'] > 0) {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        } else {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        }
    }
    public function getedit()
    {
        echo json_encode($this->model('KaryawanModel')->getKaryawanById($_POST['id']));
    }

    public function edit()
    {

        if ($this->model('KaryawanModel')->EditKaryawan($_POST) > 0) {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        } else {
            header("Location: " . BASEURL . "/karyawan");
            exit;
        }
    }
}
