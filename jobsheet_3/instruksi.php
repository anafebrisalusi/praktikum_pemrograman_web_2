<?php

// Inheritance
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Polymorphism dan Encapsulation
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    // Override metode getName()
    public function getName() {
        return "Student Name: " . $this->name;
    }

    // Setter dan getter untuk name dan studentID
    public function setName($name) {
        $this->name = $name;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Polymorphism
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

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

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    abstract public function getCourseDetails();
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
$onlineCourse = new OnlineCourse("PHP Programming");
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Online Course: PHP Programming

$offlineCourse = new OfflineCourse("Data Structures");
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: Data Structures

?>
