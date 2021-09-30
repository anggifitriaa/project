<?php
class database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "projek_anggi";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db,
        );
        if ($this->koneksi) {
            //echo "berhasil";
        } else {
            echo "koneksi database gagal";
        }
    }
}
// data tabel dosen & mahasiswa
// include 'login.php';
// include 'beranda.php';

//koneksi db
$db = new database();
