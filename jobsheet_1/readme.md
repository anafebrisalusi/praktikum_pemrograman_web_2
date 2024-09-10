# Jobsheet 1 Implementasi Prinsip OOP dalam PHP

1. Membuat Class dan Object
  * Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
  * Buat metode tampilkanData() dalam class Mahasiswa.
  * Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
    ![Screenshot 2024-09-10 072707](https://github.com/user-attachments/assets/591234da-a802-4e9d-8c0a-a96172ff7cee)

    Penjelasan
    - Membuat kelas yang disebut Mahasiswa. Di dalam kelas ini, ada tiga atribut atau data yang mewakili setiap mahasiswa,       yaitu:
      $nama: Menyimpan nama mahasiswa.
      $nim: Menyimpan NIM (Nomor Induk Mahasiswa).
      $jurusan: Menyimpan jurusan tempat mahasiswa belajar.
    - Constructor adalah fungsi khusus yang akan dijalankan otomatis saat kita membuat objek baru dari kelas Mahasiswa. Fungsinya untuk        mengisi data (nama, NIM, dan jurusan) saat objek mahasiswa baru dibuat.
      Fungsi __construct($nama, $nim, $jurusan) menerima tiga parameter: nama mahasiswa, NIM, dan jurusan, kemudian menyimpan nilainya         ke atribut objek menggunakan $this->.
    - Metode tampilkanData() ini berfungsi untuk menampilkan data dari mahasiswa yang ada di atribut (nama, NIM, dan jurusan).
      Metode ini mengembalikan informasi mahasiswa dalam format teks.
    - Di sini kita membuat objek $mahasiswa dari kelas Mahasiswa. Untuk membuat objek ini, kita masukkan:
      Nama: "Ana Febri Salusi"
      NIM: "230202027"
      Jurusan: "Jurusan Komputer dan Bisnis".
      Setelah objek terbentuk, kita memanggil metode tampilkanData() untuk menampilkan informasi yang telah dimasukkan.

      Outputnya adalah sebagai berikut:
      
      ![Screenshot 2024-09-10 213215](https://github.com/user-attachments/assets/5c4a309d-23e8-43af-a2a4-220ba73bfaae)

2. Encapsulation
 * Ubah atribut dalam class Mahasiswa menjadi private.
 * Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
 * Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
   ![Screenshot 2024-09-10 073255](https://github.com/user-attachments/assets/76c29dea-693a-4297-ab77-90f0598faa96)
   ![Screenshot 2024-09-10 073441](https://github.com/user-attachments/assets/bf4b8d3f-83d9-48e9-9100-9f216ecc5ee5)

   Penjelasan
   - Atribut di dalam kelas ini adalah $nama, $nim, dan $jurusan. Mereka dibuat dengan akses privat menggunakan private. Artinya,      
     atribut ini tidak bisa diakses langsung dari luar kelas.
   - Metode getter digunakan untuk mengambil data mahasiswa (nama, NIM, dan jurusan). Karena atribut bersifat privat, kita harus    
     menggunakan metode ini untuk mengakses data dari luar kelas.
   - Metode setter digunakan untuk mengubah atau memperbarui nilai dari atribut $nama, $nim, dan $jurusan.
     Metode ini juga perlu digunakan karena atributnya privat, jadi kita tidak bisa langsung mengubahnya dari luar kelas. Melalui metode      setMahasiswa(), kita bisa mengubah data mahasiswa dengan memasukkan nilai baru untuk nama, NIM, dan jurusan.

     Outputnya adalah sebagai berikut:

     ![Screenshot 2024-09-10 213411](https://github.com/user-attachments/assets/bda0d955-837e-4cbb-a79b-19cd026cc4c2)

     
3. Inheritance
 * Buat class Pengguna dengan atribut nama dan metode getNama().
 * Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
 * Instansiasi objek dari class Dosen dan tampilkan data dosen.
   ![Screenshot 2024-09-10 074008](https://github.com/user-attachments/assets/ae379525-4b1c-4c8a-8f62-a65c262170b2)
   ![image](https://github.com/user-attachments/assets/ff2e6a04-b0b9-494a-a52b-0959ee55b046)

   Penjelasan
   - Dosen adalah kelas turunan dari Pengguna, jadi otomatis mewarisi atribut dan metode dari kelas Pengguna.
    Di kelas Dosen, ada tambahan atribut privat $mataKuliah.
   - Constructor di kelas Dosen menggunakan parent::__construct($nama) untuk memanggil constructor dari kelas induk (Pengguna), lalu menginisialisasi mataKuliah.
   - Metode tampilkanData() menampilkan nama dosen dan mata kuliah yang diajarkan.
  
     Outputnya adalah sebagai berikut:
     

4. Polymorphism
 * Buat class Pengguna dengan metode aksesFitur().
 * Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
   Mahasiswa.
 * Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
   ![Screenshot 2024-09-10 074632](https://github.com/user-attachments/assets/db066337-a268-4309-aa21-4cc858cb36f3)
   ![Screenshot 2024-09-10 074656](https://github.com/user-attachments/assets/ff33d458-6d84-410f-9af0-b03292f7a276)

   Penjelasan
   - Kelas Pengguna punya atribut nama dan metode aksesFitur(), yang pada dasarnya hanya menampilkan nama pengguna.
   - Kelas Dosen adalah turunan dari Pengguna dan menambahkan atribut baru mataKuliah.
   - Metode aksesFitur() di-override sehingga menampilkan nama dosen dan mata kuliah yang diajarkan.
   - Kelas Mahasiswa juga turunan dari Pengguna, tetapi memiliki atribut tambahan yaitu nim dan jurusan.
Seperti pada kelas Dosen, metode aksesFitur() di-override untuk menampilkan nama mahasiswa, NIM, dan jurusan.
   - Instansiasi Objek:
     Membuat dua objek, satu dari kelas Dosen dan satu dari kelas Mahasiswa.
Kemudian kita memanggil metode aksesFitur() untuk masing-masing objek, yang akan menampilkan informasi sesuai dengan peran masing-masing.

5. Abstraction
 * Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
 * Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
 * Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
   ![Screenshot 2024-09-10 074945](https://github.com/user-attachments/assets/b9f83bbb-ef40-4b8f-a7ea-8745d8b1b259)
   ![Screenshot 2024-09-10 075015](https://github.com/user-attachments/assets/2c36b370-2132-4915-99b2-fb64af11f1fb)

