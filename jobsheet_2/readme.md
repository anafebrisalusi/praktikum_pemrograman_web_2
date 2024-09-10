## Tugas
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
   ![Screenshot 2024-09-10 095845](https://github.com/user-attachments/assets/8e9bcdec-9b9e-4521-bcd8-28e097f6855a)

   Penjelasan
* Kelas Dosen didefinisikan dengan tiga atribut yang bersifat publik:
  - $nama: Menyimpan nama dosen.
   - $nip: Menyimpan NIP (Nomor Induk Pegawai) dari dosen.
   - $mataKuliah: Menyimpan mata kuliah yang diajarkan oleh dosen.
* Konstruktor (__construct):
   - Constructor adalah fungsi yang otomatis dijalankan ketika kita membuat objek baru dari kelas Dosen. Fungsinya untuk mengisi data       (nama, NIP, dan mata kuliah) ketika kita membuat dosen baru.
   - __construct($nama, $nip, $mataKuliah) menerima tiga parameter (nama, nip, mataKuliah), dan nilainya disimpan ke dalam variabel          kelas menggunakan $this-> untuk merujuk pada objek yang sedang dibuat.
3. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
   ![Screenshot 2024-09-10 100418](https://github.com/user-attachments/assets/611a42dc-fcf7-4f78-9418-a2dad72d693d)
* Fungsi tampilkanDosen() digunakan untuk menampilkan informasi lengkap dosen berupa nama, NIP, dan mata kuliah yang diampu.
* return mengembalikan data berupa teks, di mana setiap informasi dipisah dengan <br> agar tampil di baris yang berbeda saat diakses melalui halaman web.
4. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.

   ![Screenshot 2024-09-10 100736](https://github.com/user-attachments/assets/852eb15e-0710-44b9-924d-b8a758129e6b)
   
   Penjelasan:
* Di sini kita membuat objek bernama $dosen1 dari kelas Dosen. Untuk membuat objek ini, kita mengisi nama dosen, NIP, dan mata kuliah. Nilai yang dimasukkan adalah:
Nama: "Aprilia"
NIP: "230202047"
Mata Kuliah: "Filsafat"
* Setelah objek dibuat, kita memanggil metode tampilkanDosen() menggunakan $dosen1->tampilkanDosen(). Metode ini mengembalikan informasi lengkap dosen dalam bentuk teks, lalu kita gunakan echo untuk menampilkan hasilnya.
   
   Outputnya adalah sebagai berikut

   ![Screenshot 2024-09-10 100935](https://github.com/user-attachments/assets/df9ad357-0ab6-4603-8c4e-880d8cc010d9)
