<?php
//1. Membuat Class dan Object

//Class
class Mahasiswa {
    //atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // metode tampilkan data()
    public function tampilkanData() {
        return 
        "Nama : {$this->nama} <br>
        NIM : {$this->nim} <br>
        Jurusan : {$this->jurusan}";
    }
}

// Instansiasi objek 
$mahasiswa1 = new Mahasiswa();

// Mengisi data secara manual
$mahasiswa1->nama = "Ana Febri Salusi";
$mahasiswa1->nim = "230202027";
$mahasiswa1->jurusan = "Teknik Informatika";

// Tampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
