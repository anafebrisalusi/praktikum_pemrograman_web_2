<?php
//1. Membuat Class dan Object

//Class
class Mahasiswa {
    //atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama= $nama;
        $this->nim= $nim;
        $this->jurusan= $jurusan;
    }

    // metode tampilkan data()
    public function tampilkanData() {
        return 
        "Nama : {$this->nama} <br>
        NIM : {$this->nim} <br>
        Jurusan : {$this->jurusan}";
    }
}

// Instansiasi objek
$mahasiswa1= new Mahasiswa("Ana Febri Salusi", "230202027", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>