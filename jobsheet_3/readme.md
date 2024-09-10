# Tugas

### 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
  ![Screenshot 2024-09-10 193658](https://github.com/user-attachments/assets/8787575f-2645-4804-8fa9-958323837a10)

Penjelasan 
- Person adalah kelas induk yang mendefinisikan atribut name dan memiliki metode getName().
- Kelas ini memiliki konstruktor (__construct()) yang menerima parameter name dan menyimpan nilainya dalam atribut $name.
- Metode getName() digunakan untuk mengembalikan nilai dari atribut name.
### 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
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
  
### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda. 
Polymorphism memungkinkan metode yang sama (yaitu getRole()) untuk berperilaku berbeda di setiap subclass. Dalam kelas Dosen dan Mahasiswa, metode getRole() mengembalikan peran masing-masing ("Dosen" untuk dosen dan "Mahasiswa" untuk mahasiswa).
### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
