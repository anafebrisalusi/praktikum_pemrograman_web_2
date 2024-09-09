<?php
// 3. Enheritance
// Membuat class Pengguna
class Pengguna {
    public $nama;

    // Constructor (Menginisialisasi class yang baru)
    public function __construct($nama) {
        $this->nama= $nama;
    }

    // metode getNama()
    public function getNama(){
        return $this->nama;
    }
}
    // membuat class dosen yang mewarisi class pengguna
    class Dosen extends Pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

     // Menampilkan data dosen
     public function tampilkanData() {
        return "Nama Dosen: {$this->nama}<br> Mata Kuliah: {$this->mataKuliah}<br>";
    }

    }
//instansiasi class Dosen
$dosen = new Dosen("Ana Febri Salusi", "Bahasa Jawa");
echo $dosen->tampilkanData();
?>