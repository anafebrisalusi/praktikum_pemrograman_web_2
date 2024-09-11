<?php
// 1. Implementasi kelas Dosen dengan atribut nama, nip, dan mataKuliah
// class Dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama Dosen : {$this->nama} <br> NIP : {$this->nip} <br> Mata Kuliah : {$this->mataKuliah}<br>";
    }
}

/* 2. Buat objek dari kelas Dosen, 
dan set atribut secara manual
*/
$dosen1 = new Dosen();
$dosen1->nama = "Aprilia";
$dosen1->nip = "230202047";
$dosen1->mataKuliah = "Filsafat";

// Tampilkan informasi dosen
echo $dosen1->tampilkanDosen();
?>
