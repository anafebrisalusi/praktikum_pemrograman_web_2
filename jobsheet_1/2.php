<?php
// Membuat class Mahasiswa dengan atribut private
class Mahasiswa {
    // Atribut private
    private $nama;
    private $nim;
    private $jurusan;

    // Setter untuk atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk atribut nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk atribut nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk atribut jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Getter untuk atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->getNama() . "<br>" .
               "NIM: " . $this->getNim() . "<br>" .
               "Jurusan: " . $this->getJurusan() . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menggunakan setter untuk mengisi nilai atribut
$mahasiswa1->setNama("Ana Febri Salusi");
$mahasiswa1->setNim("230202027");
$mahasiswa1->setJurusan("Teknik Informatika");

// Menampilkan data menggunakan metode tampilkanData()
echo $mahasiswa1->tampilkanData();
?>
