<?php
//1. Membuat Class dan Object
class Mahasiswa { 
    // Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor (Menginisialisasi class yang baru)
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode atau function
     public function tampilkanData() {
        return "Nama : $this->nama, NIM : $this->nim, Jurusan : $this->jurusan";
     }
}

//instansiasi objek
$mahasiswa1 = new Mahasiswa("Ana Febri Salusi", "230202027", "Jurusan Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();



?>