<?php
// 4. Polymorphism
// Membuat class Pengguna
class Pengguna {
    public $nama;

    // Metode aksesFitur() umum untuk Pengguna
    public function aksesFitur() {
        return $this->nama;
    }
}

// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    public $mataKuliah;

    // aksesFitur() untuk Dosen
    public function aksesFitur() {
        return "Nama Dosen: {$this->nama} <br> Mata Kuliah: {$this->mataKuliah}<br>";
    }
}

// Membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    public $nim;
    public $jurusan;

    // aksesFitur() untuk Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan} <br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$dosen->nama = "Yana Aprilia";
$dosen->mataKuliah = "Filsafat";

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Ana Febri Salusi";
$mahasiswa->nim = "230202027";
$mahasiswa->jurusan = "Teknik Informatika";

// Memanggil metode aksesFitur() dari masing-masing objek
echo $dosen->aksesFitur() . "<br>";      // Output: Nama Dosen: Yana Aprilia, Mata Kuliah: Filsafat
echo $mahasiswa->aksesFitur() . "<br>";  // Output: Nama Mahasiswa: Ana Febri Salusi, NIM: 230202027, Jurusan: Teknik Informatika

?>
