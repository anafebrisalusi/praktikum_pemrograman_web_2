<?php
// 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.

// Class induk Person
class Person {
    public $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

/* 2. Gunakan konsep Inheritance untuk membuat hierarki 
kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang 
sesuai dengan perannya.
*/
class Dosen extends Person {
    private $nidn;

    // Metode getRole()
    public function getRole() {
        return "Dosen";
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    // Metode getRole()
    public function getRole() {
        return "Mahasiswa";
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

/* 5. Buat kelas abstrak Jurnal dan implementasikan 
konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan 
JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan 
jurnal.
*/
abstract class Jurnal {
    protected $title;

    public function setTitle($title) {
        $this->title = $title;
    }

    abstract public function submit();
}

class JurnalDosen extends Jurnal {
    public function submit() {
        echo "Jurnal Dosen '{$this->title}' telah diajukan.<br>";
    }
}

class JurnalMahasiswa extends Jurnal {
    public function submit() {
        echo "Jurnal Mahasiswa '{$this->title}' telah diajukan.<br>";
    }
}

// Instansiasi
// Membuat objek Dosen
$dosen = new Dosen();
$dosen->setName("Ana Febri S");
$dosen->setNidn("12345678");
echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->setName("Yana Aprilia");
$mahasiswa->setNim("2019234567");
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

// Mengelola jurnal dosen
$jurnalDosen = new JurnalDosen();
$jurnalDosen->setTitle("Penelitian AI");
$jurnalDosen->submit();

// Mengelola jurnal mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa();
$jurnalMahasiswa->setTitle("Skripsi Data Mining");
$jurnalMahasiswa->submit();
?>
