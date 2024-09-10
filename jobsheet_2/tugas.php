<?php
// 1. Implementasi kelas Dosen dengan atribut nama, nip, dan mataKuliah
// class dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    //constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama= $nama;
        $this->nip= $nip;
        $this->mataKuliah= $mataKuliah;
    }

/* 2. Buat Metode tampilkanDosen() untuk 
menampilkan informasi dosen
*/
    public function tampilkanDosen() {
        return "Nama Dosen : {$this->nama} <br> NIP : {$this->nip} <br> Mata Kuliah : {$this->mataKuliah}<br>";
    }
}

/* 3. Buat objek dari kelas Dosen, 
dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
*/

$dosen1= new Dosen("Aprilia", "230202047", "Filsafat");
echo $dosen1->tampilkanDosen();
?>