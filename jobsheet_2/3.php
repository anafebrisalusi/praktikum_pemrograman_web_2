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
        Jurusan : {$this->jurusan} <br>";
    }

    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }
}

// Instansiasi objek
$mahasiswa1= new Mahasiswa("Ana Febri Salusi", "230202027", "Teknik Informatika <br>");
echo $mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Sistem Informasi");
echo "Setelah perubahan jurusan: <br>";
echo $mahasiswa1->tampilkanData();
?>