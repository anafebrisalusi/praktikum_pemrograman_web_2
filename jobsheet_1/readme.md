# Jobsheet 1 Implementasi Prinsip OOP dalam PHP
1. Membuat Class dan Object
  * Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
  * Buat metode tampilkanData() dalam class Mahasiswa.
  * Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
    
```
<?php
//1. Membuat Class dan Object
class Mahasiswa { 
    // Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    //Metode atau function
     public function tampilkanData() {
        return "Nama : $this->nama, NIM : $this->nim, Jurusan : $this->jurusan";
     }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menetapkan nilai untuk atribut nama, nim, dan jurusan
$mahasiswa1->nama = "Ana Febri Salusi";
$mahasiswa1->nim = "230202027";
$mahasiswa1->jurusan = "Teknik Informatika";

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();



?>

```
Penjelasan
 * Class Mahasiswa:
Ini adalah blueprint atau cetak biru yang mendefinisikan atribut dan fungsi dari mahasiswa.
Atribut (atau properties) di dalamnya adalah nama, nim, dan jurusan.
* Metode tampilkanData():
 Fungsi ini digunakan untuk menampilkan data mahasiswa dalam format teks. Ini menggabungkan nilai atribut nama, nim, dan jurusan ke dalam satu string.
* Instansiasi Objek:
Kita membuat objek bernama $mahasiswa1 dari class Mahasiswa. Objek ini adalah representasi dari seorang mahasiswa dengan atribut nama, nim, dan jurusan.
Setelah membuat objek, kita menetapkan nilai-nilai untuk atribut nama, nim, dan jurusan.

* Outputnya adalah sebagai berikut:
      
![Screenshot 2024-09-11 182755](https://github.com/user-attachments/assets/8ee9695e-e3cd-4657-8ac1-f47e9011b1f1)


2. Encapsulation
 * Ubah atribut dalam class Mahasiswa menjadi private.
 * Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
 * Demonstrasikan akses ke atribut menggunakan metode getter dan setter.

```
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

```

   Penjelasan
- Class Mahasiswa:
Kita membuat sebuah class bernama Mahasiswa yang memiliki tiga atribut (variabel) yaitu nama, nim, dan jurusan. Ketiga atribut ini diatur sebagai private, artinya atribut tersebut hanya bisa diakses melalui metode yang ada di dalam class itu sendiri.
- Setter dan Getter:
Untuk bisa memberikan nilai dan mengambil nilai dari atribut nama, nim, dan jurusan, kita membuat setter dan getter. 
Setter digunakan untuk mengatur atau memberikan nilai atribut.
Getter digunakan untuk mengambil atau menampilkan nilai dari atribut tersebut.
- Metode tampilkanData():
Metode ini menggabungkan penggunaan getter untuk menampilkan data mahasiswa. Jadi, saat kita memanggil metode ini, ia akan menampilkan Nama, NIM, dan Jurusan mahasiswa.
- Instansiasi Objek:
Setelah class Mahasiswa dibuat, kita membuat objek dari class tersebut. Objek ini dinamai $mahasiswa1.
Lalu, kita menggunakan metode setter untuk mengisi nilai atribut seperti nama, NIM, dan jurusan.
- Menampilkan Data:
Terakhir, kita memanggil metode tampilkanData() untuk menampilkan informasi mahasiswa yang sudah diisi menggunakan setter.

   Outputnya adalah sebagai berikut:

    ![Screenshot 2024-09-11 184542](https://github.com/user-attachments/assets/48d33f05-61d9-45d5-adfa-a9571dcd1533)
     
3. Inheritance
 * Buat class Pengguna dengan atribut nama dan metode getNama().
 * Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
 * Instansiasi objek dari class Dosen dan tampilkan data dosen.
```
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
```
   Penjelasan
   
a. Kelas Pengguna:
- Atribut nama: Ini adalah variabel publik yang menyimpan nama pengguna.
- Metode getNama(): Metode ini mengembalikan nilai dari atribut nama. Dengan kata lain, metode ini digunakan untuk mengambil nama pengguna.
  
b. Kelas Dosen:
- Pewarisan: Kelas Dosen mewarisi dari kelas Pengguna dengan menggunakan keyword extends. Ini berarti bahwa kelas Dosen akan memiliki semua atribut dan metode dari kelas Pengguna.
- Atribut mataKuliah: Ini adalah variabel publik baru yang ditambahkan di kelas Dosen untuk menyimpan informasi tentang mata kuliah yang diajarkan oleh dosen.
  
c. Metode getDataDosen(): Metode ini mengembalikan string yang berisi nama dosen (menggunakan metode getNama() dari kelas Pengguna) dan mata kuliah yang diajarkan.

d. Instansiasi dan Penggunaan:
- Membuat Objek Dosen: new Dosen() membuat objek baru dari kelas Dosen.
- Menetapkan Atribut:
  - $dosen1->nama = "Dr. Budi"; menetapkan nama dosen ke "Dr. Budi".
  - $dosen1->mataKuliah = "Pemrograman PHP"; menetapkan mata kuliah yang diajarkan dosen ke "Pemrograman PHP".
    
     Outputnya adalah sebagai berikut:

     ![Screenshot 2024-09-11 192828](https://github.com/user-attachments/assets/81343070-0a64-4b3d-92cc-0d0444d50ca1)



4. Polymorphism
 * Buat class Pengguna dengan metode aksesFitur().
 * Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
   Mahasiswa.
 * Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
  ```
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

```

   Penjelasan
- Kelas Pengguna: Kelas dasar dengan atribut nama dan metode aksesFitur() yang mengembalikan nama pengguna.
- Kelas Dosen: Mewarisi dari Pengguna dan menambahkan atribut mataKuliah. Metode aksesFitur() di-override untuk menampilkan nama dosen dan mata kuliah.
- Kelas Mahasiswa: Juga mewarisi dari Pengguna dengan atribut tambahan nim dan jurusan. Metode aksesFitur() di-override untuk menampilkan nama mahasiswa, NIM, dan jurusan.
  
Outputnya adalah sebagai berikut:

![Screenshot 2024-09-10 215347](https://github.com/user-attachments/assets/ceddbdf1-209e-4971-8cf6-5fa342be9ba7)

5. Abstraction
 * Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
 * Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
 * Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
```
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

// Instansiasi objek dari class Dosen dan Mahasiswa
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
```
  

   Penjelasan

  - Kelas abstrak Pengguna: Merupakan kelas dasar yang memiliki atribut umum nama dan metode abstrak aksesFitur(). Kelas abstrak tidak bisa diinstansiasi langsung dan memaksa subclass untuk mengimplementasikan metode abstrak tersebut.

- Kelas Dosen dan Mahasiswa: Mewarisi dari kelas abstrak Pengguna dan memberikan implementasi spesifik untuk metode aksesFitur().
  - Dosen: Menampilkan nama dosen dan mata kuliah.
  - Mahasiswa: Menampilkan nama mahasiswa, NIM, dan jurusan.
- Instansiasi dan Pemanggilan Metode: Objek Dosen dan Mahasiswa diinstansiasi, atribut diatur, lalu metode aksesFitur() dipanggil untuk menampilkan informasi masing-masing.
 Outputnya adalah sebagai berikut:

![Screenshot 2024-09-10 215359](https://github.com/user-attachments/assets/26083e25-8ba7-4f19-8d0c-2eaf20ed371e)
