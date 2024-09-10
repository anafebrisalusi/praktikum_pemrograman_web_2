## Class dan Object
Class adalah Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek. Didalam class ada atribut dan metode.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
objek.

Object adalah instansiasi dari kelas. Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
Contoh codingannya:
```
<?php
// Definisi Kelas

class Mobil {
    // Atribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this->merk= $merk;
        $this->warna= $warna;
    }

    // Metode atau Function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
} 

// Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();

?>
```
Penjelasan
1. Class Mobil:
Ini adalah template atau cetak biru yang mendefinisikan atribut dan metode untuk sebuah objek mobil.
- Atribut:
merk: merek mobil.
warna: warna mobil.
2. Instansiasi Objek Mobil:
- Objek baru dari class Mobil dibuat menggunakan new Mobil("Toyota", "Hitam").
- Objek ini diberi nilai atribut:
merk = "Toyota"
warna = "Hitam"
- Kemudian, metode deskripsi() dipanggil untuk menampilkan deskripsi mobil, yaitu "Mobil ini adalah Toyota berwarna Hitam."

## Atribut dan Metode
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

Contoh codingan :
```
<?php
// Menambah Atribut dan Metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul= $judul;
        $this->penulis= $penulis;
    }

    public function tampilkanInfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

$buku1= new Buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo();
?>
```

Aksebilitas
