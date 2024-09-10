# Jobsheet 1 Implementasi Prinsip OOP dalam PHP

1. Membuat Class dan Object
  * Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
  * Buat metode tampilkanData() dalam class Mahasiswa.
  * Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
    ![Screenshot 2024-09-10 072707](https://github.com/user-attachments/assets/591234da-a802-4e9d-8c0a-a96172ff7cee)

2. Encapsulation
 * Ubah atribut dalam class Mahasiswa menjadi private.
 * Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
 * Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
   ![Screenshot 2024-09-10 073255](https://github.com/user-attachments/assets/76c29dea-693a-4297-ab77-90f0598faa96)
   ![Screenshot 2024-09-10 073441](https://github.com/user-attachments/assets/bf4b8d3f-83d9-48e9-9100-9f216ecc5ee5)

3. Inheritance
 * Buat class Pengguna dengan atribut nama dan metode getNama().
 * Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
 * Instansiasi objek dari class Dosen dan tampilkan data dosen.
   ![Screenshot 2024-09-10 074008](https://github.com/user-attachments/assets/ae379525-4b1c-4c8a-8f62-a65c262170b2)
   ![image](https://github.com/user-attachments/assets/ff2e6a04-b0b9-494a-a52b-0959ee55b046)

4. Polymorphism
 * Buat class Pengguna dengan metode aksesFitur().
 * Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
   Mahasiswa.
 * Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
   ![Screenshot 2024-09-10 074632](https://github.com/user-attachments/assets/db066337-a268-4309-aa21-4cc858cb36f3)
   ![Screenshot 2024-09-10 074656](https://github.com/user-attachments/assets/ff33d458-6d84-410f-9af0-b03292f7a276)

5. Abstraction
 * Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
 * Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
 * Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.


