<?php
// 5. Abstraction
// Membuat class abstrak Pengguna
abstract class Pengguna {
    public $nama;

    // Metode abstrak aksesFitur() yang harus diimplementasikan di subclass
    abstract public function aksesFitur();
}

// Membuat class Dosen yang mengimplementasikan class abstrak Pengguna
class Dosen extends Pengguna {
    public $mataKuliah;

    // Implementasi metode abstrak aksesFitur() untuk Dosen
    public function aksesFitur() {
        return "Nama Dosen: {$this->nama}<br> Mata Kuliah: {$this->mataKuliah}<br>";
    }
}

// Membuat class Mahasiswa yang mengimplementasikan class abstrak Pengguna
class Mahasiswa extends Pengguna {
    public $nim;
    public $jurusan;

    // Implementasi metode abstrak aksesFitur() untuk Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa tanpa constructor
$dosen = new Dosen();
$dosen->nama = "Yana Aprilia";
$dosen->mataKuliah = "Filsafat";

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Ana Febri Salusi";
$mahasiswa->nim = "230202027";
$mahasiswa->jurusan = "Jurusan Komputer dan Bisnis";

// Memanggil metode aksesFitur() dari masing-masing objek
echo $dosen->aksesFitur() . "<br>";      // Output: Nama Dosen: Yana Aprilia, Mata Kuliah: Filsafat
echo $mahasiswa->aksesFitur() . "<br>";  // Output: Nama Mahasiswa: Ana Febri Salusi, NIM: 230202027, Jurusan: Komputer dan Bisnis
?>
