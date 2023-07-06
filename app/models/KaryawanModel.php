<?php

class KaryawanModel
{
    private $tabel = 'data_karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKaryawan()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }
}
