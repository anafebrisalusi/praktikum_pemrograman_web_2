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
   ![Screenshot 2024-09-11 053317](https://github.com/user-attachments/assets/6a7f2a79-1679-4df2-9c74-3830d9689cd0)

   Penjelasan
   - Dosen adalah kelas turunan dari Pengguna, jadi otomatis mewarisi atribut dan metode dari kelas Pengguna.
    Di kelas Dosen, ada tambahan atribut privat $mataKuliah.
   - Constructor di kelas Dosen menggunakan parent::__construct($nama) untuk memanggil constructor dari kelas induk (Pengguna), lalu menginisialisasi mataKuliah.
   - Metode tampilkanData() menampilkan nama dosen dan mata kuliah yang diajarkan.
  
     Outputnya adalah sebagai berikut:

     ![Screenshot 2024-09-10 215234](https://github.com/user-attachments/assets/769a582a-6827-418e-bf0a-5a991de850ae)


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

    // Constructor (Menginisialisasi class yang baru)
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur() umum untuk Pengguna
    public function aksesFitur() {
        return $this->nama;
    }
}

// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->mataKuliah = $mataKuliah;
    }

    // aksesFitur() untuk Dosen
    public function aksesFitur() {
        return "Nama Dosen: {$this->nama} <br> Mata Kuliah: {$this->mataKuliah}<br>";
    }
}

// Membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // aksesFitur() untuk Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan} <br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Yana Aprilia ", "Filsafat ");
$mahasiswa = new Mahasiswa("Ana Febri Salusi ", "230202027 ", "Teknik Informatika");

// Memanggil metode aksesFitur() dari masing-masing objek
echo $dosen->aksesFitur() . "<br>";      // Output: Nama Dosen: Yana Aprilia, Mata Kuliah: Filsafat
echo $mahasiswa->aksesFitur() . "<br>";  // Output: Nama Mahasiswa: Ana Febri Salusi, Jurusan: Teknik Informatika

?>

```

   Penjelasan
   - Kelas Pengguna punya atribut nama dan metode aksesFitur(), yang pada dasarnya hanya menampilkan nama pengguna.
   - Kelas Dosen adalah turunan dari Pengguna dan menambahkan atribut baru mataKuliah.
   - Metode aksesFitur() di-override sehingga menampilkan nama dosen dan mata kuliah yang diajarkan.
   - Kelas Mahasiswa juga turunan dari Pengguna, tetapi memiliki atribut tambahan yaitu nim dan jurusan.
Seperti pada kelas Dosen, metode aksesFitur() di-override untuk menampilkan nama mahasiswa, NIM, dan jurusan.
   - Instansiasi Objek:
     Membuat dua objek, satu dari kelas Dosen dan satu dari kelas Mahasiswa.
Kemudian kita memanggil metode aksesFitur() untuk masing-masing objek, yang akan menampilkan informasi sesuai dengan peran masing-masing.

Outputnya adalah sebagai berikut:

![Screenshot 2024-09-10 215347](https://github.com/user-attachments/assets/ceddbdf1-209e-4971-8cf6-5fa342be9ba7)

5. Abstraction
 * Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
 * Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
 * Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
   ![Screenshot 2024-09-10 074945](https://github.com/user-attachments/assets/b9f83bbb-ef40-4b8f-a7ea-8745d8b1b259)
   ![Screenshot 2024-09-10 075015](https://github.com/user-attachments/assets/2c36b370-2132-4915-99b2-fb64af11f1fb)
   

   Penjelasan

  - Kelas Pengguna adalah kelas yang tidak bisa dibuat objek langsung, karena metode aksesFitur() didefinisikan sebagai abstrak. Artinya, kelas turunan wajib mengimplementasikan metode ini.
Kelas ini hanya punya atribut umum, yaitu nama, dan konstruktor untuk menginisialisasi atribut tersebut.
  - Kelas Dosen adalah turunan dari kelas abstrak Pengguna dan menambahkan atribut khusus, yaitu mataKuliah.
Kelas ini juga mengimplementasikan metode aksesFitur() untuk menampilkan data dosen, yaitu nama dan mata kuliah yang diajarkan.
- Kelas Mahasiswa sama seperti Dosen, kelas ini juga merupakan turunan dari Pengguna, tetapi dengan atribut khusus nim dan jurusan.
Kelas ini juga mengimplementasikan metode aksesFitur() untuk menampilkan data mahasiswa, termasuk NIM dan jurusan.
 Outputnya adalah sebagai berikut:

![Screenshot 2024-09-10 215359](https://github.com/user-attachments/assets/26083e25-8ba7-4f19-8d0c-2eaf20ed371e)
