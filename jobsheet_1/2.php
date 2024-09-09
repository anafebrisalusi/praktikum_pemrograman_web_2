<?php
//2. Encapsulation
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    private $nama;
    private $nim;
    private $jurusan;

    //inisilasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode getter
    public function getMahasiswa() {
        return "Nama: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
    
    //metode setter
    public function setMahasiswa($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

//instansiasi
$mahasiswa1 = new Mahasiswa("Ana Febri Salusi", "230202027", "Jurusan Komputer dan Bisnis");

//output metode getter
echo $mahasiswa1->getMahasiswa()."<br>"; 

$mahasiswa1->setMahasiswa("Yana Aprilia", "230202047", "Jurusan Komputer dan Bisnis");

//output metode setter
echo $mahasiswa1->getMahasiswa();  
?>