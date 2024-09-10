1. Inheritance (Pewarisan)
   
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.

Contoh coding:
```
<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name= $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName() . "says " . $dog->makeSound(); //output: Buddy says
?>
```
Penjelasan

Kelas Dog dan Cat mewarisi sifat (name) dari kelas Animal dan dapat memiliki
metode tambahan (makeSound()).

2. Polymorphism (Polimorfisme)
   
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

Contoh coding:
```
<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name= $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName() . "says " . $dog->makeSound() . "<br>"; //output: Buddy says


class printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

$printer= new Printer();
$printer->print($dog);
$printer->print($cat);
?>
```
Penjelasan

Metode print() di kelas Printer dapat menerima objek dari kelas Animal atau
turunannya (Dog atau Cat), menunjukkan bagaimana metode ini bekerja secara
berbeda berdasarkan objek yang diterima.

3. Encapsulation (Enkapsulasi)
   
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.

Contoh coding:
```
<?php

class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "current Balance: " . $account->getBalance();

?>
```
Penjelasan:

Atribut balance di kelas BankAccount dienkapsulasi dengan tingkat akses private,
dan interaksi hanya dilakukan melalui metode deposit(), withdraw(), dan
getBalance().

4. Abstraction (Abstraksi)
   
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.
Contoh coding:
```
<?php

abstract class Shape {
    abstract public function  area();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area();

$circle = new Circle(7);
echo "Area of Circle: " . $circle->area();
?>
```
Penjelasan:

Kelas abstrak Shape mendefinisikan metode area() yang harus diimplementasikan
oleh kelas turunan seperti Rectangle dan Circle.
