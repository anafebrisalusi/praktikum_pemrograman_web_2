<?php
//1. Membuat Class dan Object
class Mahasiswa { 
    // Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    //Metode atau function
     public function tampilkanData() {
        return "Nama : $this->nama, NIM : $this->nim, Jurusan : $this->jurusan";
     }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menetapkan nilai untuk atribut nama, nim, dan jurusan
$mahasiswa1->nama = "Ana Febri Salusi";
$mahasiswa1->nim = "230202027";
$mahasiswa1->jurusan = "Teknik Informatika";

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();



?>
