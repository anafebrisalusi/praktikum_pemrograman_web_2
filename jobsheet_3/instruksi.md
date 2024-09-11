### Instruksi Kerja
1. Inheritance
- Buat kelas Person dengan atribut name dan metode getName().
- Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID().
2. Polymorphism
- Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.
- Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
3. Encapsulation
- Ubah atribut name dan studentID dalam kelas Student menjadi private.
- Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID.
4. Abstraction
- Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
- Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.


```
<?php

// Inheritance
class Person {
    public $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

// Polymorphism dan Encapsulation
class Student extends Person {
    private $studentID;

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName()
    public function getName() {
        return "Student Name: " . $this->name;
    }
}

// Polymorphism
class Teacher extends Person {
    public $teacherID;

    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName()
    public function getName() {
        return "Teacher Name: " . $this->name;
    }
}

// Abstraction
abstract class Course {
    protected $courseName;

    abstract public function getCourseDetails();

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName;
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName;
    }
}

// Contoh penggunaan
$student = new Student();
$student->setName("John Doe");
$student->setStudentID("12345");
echo $student->getName() . "<br>"; // Output: Student Name: John Doe
echo "Student ID: " . $student->getStudentID() . "<br>"; // Output: Student ID: 12345

$teacher = new Teacher();
$teacher->setName("Jane Smith");
$teacher->teacherID = "67890";
echo $teacher->getName() . "<br>"; // Output: Teacher Name: Jane Smith
echo "Teacher ID: " . $teacher->getTeacherID() . "<br>"; // Output: Teacher ID: 67890

$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseName("PHP Programming");
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Online Course: PHP Programming

$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseName("Data Structures");
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: Data Structures

?>


```

Penjelasan 
1. Inheritance (Pewarisan):
   
- Kelas Person adalah kelas induk yang memiliki atribut name. Dua kelas anak, yaitu Student dan Teacher, mewarisi atribut dan metode dari kelas Person. Artinya, Student dan Teacher otomatis memiliki atribut name dan metode getName() dari Person.

2. Polymorphism :

- Kelas Student dan Teacher mengoverride metode getName() dari Person, sehingga mereka memiliki cara yang berbeda untuk menampilkan nama. Student menampilkan "Student Name", sedangkan Teacher menampilkan "Teacher Name".
- Polimorfisme memungkinkan penggunaan nama metode yang sama, tetapi dengan perilaku yang berbeda di setiap kelas anak.
3. Encapsulation (Enkapsulasi):
- Atribut studentID di kelas Student adalah private, yang berarti tidak bisa diakses langsung dari luar kelas. Untuk mengakses atau mengubah nilai studentID, digunakan metode getter (getStudentID()) dan setter (setStudentID()).
Ini menjaga data tetap aman dan hanya bisa diubah melalui metode yang disediakan.
4. Abstraction (Abstraksi):
- Kelas Course adalah kelas abstrak yang mendefinisikan metode getCourseDetails(), tetapi tidak mengimplementasikannya.
- Kelas OnlineCourse dan OfflineCourse yang merupakan turunan dari Course mengimplementasikan metode getCourseDetails() sesuai dengan jenis kursus yang mereka wakili (online dan offline).
