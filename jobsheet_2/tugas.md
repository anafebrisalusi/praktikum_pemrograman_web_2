## Tugas
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```
<?php
// 1. Implementasi kelas Dosen dengan atribut nama, nip, dan mataKuliah
// class Dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;
```
   Penjelasan
* Kelas Dosen didefinisikan dengan tiga atribut yang bersifat publik:
  - $nama: Menyimpan nama dosen.
   - $nip: Menyimpan NIP (Nomor Induk Pegawai) dari dosen.
   - $mataKuliah: Menyimpan mata kuliah yang diajarkan oleh dosen.
     
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```
// Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama Dosen : {$this->nama} <br> NIP : {$this->nip} <br> Mata Kuliah : {$this->mataKuliah}<br>";
    }
}
```
* Fungsi tampilkanDosen() digunakan untuk menampilkan informasi lengkap dosen berupa nama, NIP, dan mata kuliah yang diampu.

3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.

```
$dosen1 = new Dosen();
$dosen1->nama = "Aprilia";
$dosen1->nip = "230202047";
$dosen1->mataKuliah = "Filsafat";

// Tampilkan informasi dosen
echo $dosen1->tampilkanDosen();
?>
```
   Penjelasan:
* Di sini kita membuat objek bernama $dosen1 dari kelas Dosen. Untuk membuat objek ini, kita mengisi nama dosen, NIP, dan mata kuliah. Nilai yang dimasukkan adalah:
Nama: "Aprilia"
NIP: "230202047"
Mata Kuliah: "Filsafat"
* Setelah objek dibuat, kita memanggil metode tampilkanDosen() menggunakan $dosen1->tampilkanDosen(). Metode ini mengembalikan informasi lengkap dosen dalam bentuk teks, lalu kita gunakan echo untuk menampilkan hasilnya.
   
   Outputnya adalah sebagai berikut

   ![Screenshot 2024-09-10 100935](https://github.com/user-attachments/assets/df9ad357-0ab6-4603-8c4e-880d8cc010d9)
