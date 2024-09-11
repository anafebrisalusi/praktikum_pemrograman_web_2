# Tugas
Buat proyek PHP dengan studi kasus sebagai berikut: 
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa. 
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan 
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya. 
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan 
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang 
berbeda. 
4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di 
kelas Mahasiswa. 
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan 
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing 
memiliki cara tersendiri untuk mengelola pengajuan jurnal. 
```
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
```
Penjelasan

1. Kelas Person
- Deskripsi: Kelas ini adalah kelas dasar (superclass) yang menyimpan atribut dan metode umum yang dimiliki oleh semua orang (seperti Dosen dan Mahasiswa).
- Atribut:
public $name: Atribut untuk menyimpan nama orang.
- Metode:
    - public function getName(): Mengembalikan nilai dari atribut name.
    - public function setName($name): Mengatur nilai dari atribut name.
2. Kelas Dosen dan Mahasiswa (Inheritance)
- Inheritance: Kelas Dosen dan Mahasiswa mewarisi dari Person, sehingga mereka memiliki atribut dan metode dari kelas Person.


Kelas Dosen
- Atribut Tambahan:
    - private $nidn: Atribut untuk menyimpan Nomor Induk Dosen Nasional (NIDN).
- Metode:
    - public function getRole(): Mengembalikan string "Dosen", yang menunjukkan peran sebagai dosen.
    - public function getNidn(): Mengembalikan nilai dari atribut nidn.
    - public function setNidn($nidn): Mengatur nilai dari atribut nidn.

Kelas Mahasiswa
- Atribut Tambahan:
    - private $nim: Atribut untuk menyimpan Nomor Induk Mahasiswa (NIM).
- Metode:
    - public function getRole(): Mengembalikan string "Mahasiswa", yang menunjukkan peran sebagai mahasiswa.
    - public function getNim(): Mengembalikan nilai dari atribut nim.
    - public function setNim($nim): Mengatur nilai dari atribut nim.
      
3. Kelas Abstrak Jurnal
Deskripsi: Kelas abstrak ini digunakan untuk mendefinisikan struktur dasar untuk kelas jurnal, yang akan diimplementasikan oleh kelas-kelas turunan.

- Atribut:
    - protected $title: Atribut untuk menyimpan judul jurnal. Atribut ini hanya bisa diakses oleh kelas itu sendiri dan kelas turunannya.
- Metode:
    - public function setTitle($title): Mengatur nilai dari atribut title.
    - abstract public function submit(): Metode abstrak yang harus diimplementasikan oleh kelas turunannya. Metode ini tidak memiliki implementasi di kelas abstrak dan harus didefinisikan di kelas konkret.
4. Kelas Turunan dari Jurnal
Kelas JurnalDosen
- Metode:
    - public function submit(): Mengimplementasikan metode submit() dari kelas abstrak Jurnal. Menampilkan pesan yang menunjukkan bahwa jurnal dosen telah diajukan.
      
Kelas JurnalMahasiswa
- Metode:
    - public function submit(): Mengimplementasikan metode submit() dari kelas abstrak Jurnal. Menampilkan pesan yang menunjukkan bahwa jurnal mahasiswa telah diajukan.
  ### Instanisiasi
```
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
```

  ### Output
  ![Screenshot 2024-09-10 202324](https://github.com/user-attachments/assets/7752dffc-1619-43e7-9476-734eea08dedd)

