<?php
// Class Pengguna
class Pengguna {
    public $nama;

    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen mewarisi Pengguna
class Dosen extends Pengguna {
    public $mataKuliah;

    public function getDataDosen() {
        return "Nama Dosen: " . $this->getNama() . ", Mata Kuliah: " . $this->mataKuliah;
    }
}

// Instansiasi objek Dosen dan set atribut
$dosen1 = new Dosen();
$dosen1->nama = "Dr. Budi";
$dosen1->mataKuliah = "Pemrograman PHP";

// Tampilkan data dosen
echo $dosen1->getDataDosen();
?>
