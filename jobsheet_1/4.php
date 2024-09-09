<?php
// 4. Polymorphism

// Membuat class Pengguna
class Pengguna {
    public $nama;

    // Constructor (Menginisialisasi class yang baru)
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur() umum untuk Pengguna
    public function aksesFitur() {
        return $this->nama;
    }
}

// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->mataKuliah = $mataKuliah;
    }

    // aksesFitur() untuk Dosen
    public function aksesFitur() {
        return "Nama Dosen: {$this->nama} <br> Mata Kuliah: {$this->mataKuliah}<br>";
    }
}

// Membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // aksesFitur() untuk Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan} <br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Yana Aprilia ", "Filsafat ");
$mahasiswa = new Mahasiswa("Ana Febri Salusi ", "230202027 ", "Teknik Informatika");

// Memanggil metode aksesFitur() dari masing-masing objek
echo $dosen->aksesFitur() . "<br>";      // Output: Nama Dosen: Yana Aprilia, Mata Kuliah: Filsafat
echo $mahasiswa->aksesFitur() . "<br>";  // Output: Nama Mahasiswa: Ana Febri Salusi, Jurusan: Teknik Informatika

?>
