<?php
// 5. Abstraction

// Membuat class abstrak Pengguna
abstract class Pengguna {
    public $nama;

    // Constructor (Menginisialisasi class yang baru)
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak aksesFitur() yang harus diimplementasikan di subclass
    abstract public function aksesFitur();
}

// Membuat class Dosen yang mengimplementasikan class abstrak Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi metode abstrak aksesFitur() untuk Dosen
    public function aksesFitur() {
        return "Nama Dosen: {$this->nama}<br> Mata Kuliah: {$this->mataKuliah}<br>";
    }
}

// Membuat class Mahasiswa yang mengimplementasikan class abstrak Pengguna
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Implementasi metode abstrak aksesFitur() untuk Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Yana Aprilia", "Filsafat");
$mahasiswa = new Mahasiswa("Ana Febri Salusi", "230202027", "Jurusan Komputer dan Bisnis");

// Memanggil metode aksesFitur() dari masing-masing objek
echo $dosen->aksesFitur() . "<br>";      // Output: Nama Dosen: Aprilia, Mata Kuliah: Filsafat
echo $mahasiswa->aksesFitur() . "<br>";  // Output: Nama Mahasiswa: Ana Febri Salusi, NIM: 230202027, Jurusan: Komputer dan Bisnis

?>
