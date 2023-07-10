<?php

class KaryawanModel
{
    private $tabel = 'data_karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKaryawan()
    {
        $this->db->query(' SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }
    public function getKaryawanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function AddKaryawan($data)
    {
        $query = "INSERT INTO data_karyawan 
                    VALUES ('', :nik, :nama, :umur, :dept, :jabatan, :alamat, :tanggal_masuk ) ";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('dept', $data['dept']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        // ekseskusi data
        $this->db->execute();
        // mengembalikan data true
        return $this->db->rowCount();
    }
    public function DeleteKaryawan($id)
    {
        $query = "DELETE FROM data_karyawan WHERE id = :id";
        // Melakukan Query ke Database
        $this->db->query($query);
        $this->db->bind('id', $id);
        // ekseskusi data
        $this->db->execute();
        //Mengembalikan Nilai true 
        return $this->db->rowCount();
    }
    public function EditKaryawan($data)
    {
        $query = "UPDATE data_karyawan SET
                    nik = :nik,
                    nama = :nama,
                    umur = :umur,
                    dept = :dept, 
                    jabatan = :jabatan,
                    alamat = :alamat,
                    tanggal_masuk = :tanggal_masuk
                    WHERE id = :id";


        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('dept', $data['dept']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
