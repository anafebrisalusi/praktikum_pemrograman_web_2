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
$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseName("PHP Programming");
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Online Course: PHP Programming

$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseName("Data Structures");
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: Data Structures

?>
