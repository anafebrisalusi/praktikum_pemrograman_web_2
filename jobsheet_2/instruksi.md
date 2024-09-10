1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
  ![Screenshot 2024-09-10 221031](https://github.com/user-attachments/assets/f86d1199-977c-48e5-a966-e34850aacac3)

Penjelasan
  * Kelas adalah template atau cetak biru untuk membuat objek. Di sini, kita membuat kelas Mahasiswa.
Kelas Mahasiswa memiliki tiga atribut atau variabel: nama, nim, dan jurusan. Ini adalah data yang akan disimpan untuk setiap objek Mahasiswa.
  * Kelas ini juga memiliki metode tampilkanData() yang digunakan untuk menampilkan informasi tentang mahasiswa dalam format yang rapi.
  * Instansiasi adalah proses membuat objek dari kelas. Di sini, kita membuat objek mahasiswa1 dari kelas Mahasiswa dengan data spesifik: nama "Ana Febri Salusi", NIM "230202027", dan jurusan "Teknik Informatika".
  * Metode tampilkanData() dipanggil pada objek mahasiswa1 untuk menampilkan data mahasiswa dalam format yang telah ditentukan.
    
    Outputnya adalah sebagai berikut:
    
    ![Screenshot 2024-09-10 221643](https://github.com/user-attachments/assets/e989781d-775c-41f4-954f-49e817ddda9b)
    
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
  
4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
