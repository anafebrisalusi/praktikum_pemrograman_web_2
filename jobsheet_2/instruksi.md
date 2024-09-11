1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
 ![image](https://github.com/user-attachments/assets/205e02cd-701c-4b19-99cd-c97a2262c4c4)

Penjelasan
  * Kelas adalah template atau cetak biru untuk membuat objek. Di sini, kita membuat kelas Mahasiswa.
Kelas Mahasiswa memiliki tiga atribut atau variabel: nama, nim, dan jurusan. Ini adalah data yang akan disimpan untuk setiap objek Mahasiswa.
  * Kelas ini juga memiliki metode tampilkanData() yang digunakan untuk menampilkan informasi tentang mahasiswa dalam format yang rapi.
  * Instansiasi adalah proses membuat objek dari kelas. Di sini, kita membuat objek mahasiswa1 dari kelas Mahasiswa dengan data spesifik: nama "Ana Febri Salusi", NIM "230202027", dan jurusan "Teknik Informatika".
  * Metode tampilkanData() dipanggil pada objek mahasiswa1 untuk menampilkan data mahasiswa dalam format yang telah ditentukan.
    
    Outputnya adalah sebagai berikut:
    
   ![Screenshot 2024-09-11 202613](https://github.com/user-attachments/assets/b4b8e991-f9e9-4bf7-98c9-2f06c8c644df)

    
2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
    ![Screenshot 2024-09-10 221944](https://github.com/user-attachments/assets/48ddcfc0-393b-4e6b-9204-d95a97298f8a)

Penjelasan 
- Constructor adalah metode khusus yang dijalankan secara otomatis ketika objek dibuat.
Di sini, __construct() adalah constructor dari kelas Mahasiswa. Ia menginisialisasi atribut nama, nim, dan jurusan dengan nilai yang diberikan saat objek dibuat.

  Outputnya adalah sebagai berikut:
  
  ![Screenshot 2024-09-10 222030](https://github.com/user-attachments/assets/b3ebe016-dcfd-4457-8365-9202352f9526)

3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
  ![Screenshot 2024-09-10 222433](https://github.com/user-attachments/assets/02e99435-e9a6-4a1a-b102-d04c06d8a7c2)

  Penjelasan
  - Metode updateJurusan digunakan untuk memperbarui nilai dari atribut jurusan.
Mengambil parameter $jurusan_baru dan mengubah nilai jurusan menjadi nilai baru yang diberikan.
    
  Outputnya adalah sebagai berikut:
  
  ![Screenshot 2024-09-10 222446](https://github.com/user-attachments/assets/b4de1531-6b09-42f7-8106-6c8259c6a215)

4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
``` <?php
//1. Membuat Class dan Object

//Class
class Mahasiswa {
    //atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama= $nama;
        $this->nim= $nim;
        $this->jurusan= $jurusan;
    }

    // metode tampilkan data()
    public function tampilkanData() {
        return 
        "Nama : {$this->nama} <br>
        NIM : {$this->nim} <br>
        Jurusan : {$this->jurusan} <br>";
    }

    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }

    // Metode setter untuk mengubah NIM mahasiswa
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek
$mahasiswa1= new Mahasiswa("Ana Febri Salusi", "230202027", "Teknik Informatika <br>");
echo $mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Sistem Informasi");
echo "Setelah perubahan jurusan: <br>";
echo $mahasiswa1->tampilkanData();

// Mengubah NIM menggunakan metode setNim()
$mahasiswa1->setNim("230202099") ;
echo "Setelah perubahan NIM: <br>";
echo $mahasiswa1->tampilkanData();
?>
```
Penjelasan 
- Metode setNim():
Mengubah nilai atribut nim menjadi nilai baru yang diberikan.
Ini adalah metode setter yang memungkinkan perubahan NIM mahasiswa setelah objek dibuat.

Outputnya adalah sebagai berikut:

  ![Screenshot 2024-09-10 223427](https://github.com/user-attachments/assets/b004fdf8-231d-4020-9426-1df7fae32344)
