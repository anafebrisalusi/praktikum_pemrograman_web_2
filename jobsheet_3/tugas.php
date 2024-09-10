<?php
//1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.

//class induk person
class Person {
    public $name;

    public function __construct($name) {
        $this->name= $name;
    }

    public function getName() {
        return $this->name;
    }

}

/* 2. Gunakan konsep Inheritance untuk membuat hierarki 
kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang 
sesuai dengan perannya.
*/
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // metode getRole()
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

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // metode getRole()
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

    public function __construct($title) {
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

//Instansiasi
// Membuat objek Dosen
$dosen = new Dosen("Ana Febri S", "12345678");
echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Yana Aprilia", "2019234567");
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

// Mengelola jurnal dosen
$jurnalDosen = new JurnalDosen("Penelitian AI");
$jurnalDosen->submit();

// Mengelola jurnal mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Skripsi Data Mining");
$jurnalMahasiswa->submit();
?>