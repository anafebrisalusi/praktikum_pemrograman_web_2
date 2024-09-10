# Tugas

### Mengimplementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
  ![Screenshot 2024-09-10 193658](https://github.com/user-attachments/assets/8787575f-2645-4804-8fa9-958323837a10)

Penjelasan 
- Person adalah kelas induk yang mendefinisikan atribut name dan memiliki metode getName().
- Kelas ini memiliki konstruktor (__construct()) yang menerima parameter name dan menyimpan nilainya dalam atribut $name.
- Metode getName() digunakan untuk mengembalikan nilai dari atribut name.
#### Mengggunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya. Kemudian menggunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa. Menerapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda. 
  ![Screenshot 2024-09-10 194748](https://github.com/user-attachments/assets/890c6627-ddae-4545-816b-e1861f16abd1)

  Penjelasan
- Kelas ini adalah subclass dari Person, mewarisi atribut dan metode dari Person.
- Atribut $nidn di-enkapsulasi menggunakan visibilitas private, sehingga hanya 
  bisa diakses melalui metode getter (getNidn()) dan setter (setNidn()).
- Konstruktor Dosen menggunakan parent::__construct($name) untuk memanggil 
  konstruktor kelas Person, dan juga menyimpan nilai $nidn.
  
  ![Screenshot 2024-09-10 194805](https://github.com/user-attachments/assets/ffae2b56-80b9-401e-a420-23edc4cc50b9)

  Penjelasan
- Mirip dengan Dosen, kelas ini juga adalah subclass dari Person dengan atribut 
  pribadi $nim, dan metode getter dan setter.
- Menggunakan metode getRole() untuk mengembalikan nilai "Mahasiswa", yang 
  menunjukkan penggunaan polymorphism.
### Membuat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
  ![Screenshot 2024-09-10 202255](https://github.com/user-attachments/assets/64d658cd-d431-46d9-bf08-96c534fa4758)
  
  Penjelasan 
- Jurnal adalah kelas abstrak, artinya tidak dapat diinstansiasi secara langsung. Kelas ini hanya digunakan sebagai dasar untuk subclass 
  lainnya (JurnalDosen dan JurnalMahasiswa).
- Kelas ini memiliki satu metode abstrak submit() yang harus diimplementasikan oleh setiap subclass.
- Class Dosen Kelas ini adalah turunan dari Jurnal dan mengimplementasikan metode submit() untuk menampilkan pesan bahwa jurnal dosen telah diajukan.
- JurnalMahasiswa Serupa dengan JurnalDosen, tetapi implementasi submit() menampilkan pesan untuk jurnal mahasiswa.

  ### Instanisiasi
  ![Screenshot 2024-09-10 202309](https://github.com/user-attachments/assets/dd169d04-e159-4140-98a0-27cea1c2d369)

  ### Output
  ![Screenshot 2024-09-10 202324](https://github.com/user-attachments/assets/7752dffc-1619-43e7-9476-734eea08dedd)

