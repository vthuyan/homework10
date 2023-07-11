<?php
//Bai1
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape {
    public function __construct($radian) {
      $this->radian = $radian;
    }
    public function calculateArea() {
    return 3.14 * pow($this->radian, 2);
        }
  }
class Rectangle extends Shape {
 public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
}
public function calculateArea() {
return ($this->length + $this->width) * 2;
    }
}
$less1 = new Circle(10);
$less2 = new Rectangle(3, 4);
echo $less1->calculateArea()."<br>";
echo $less2->calculateArea();
//Bai2
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Gâu gâu!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meo meo!";
    }
}

// Sử dụng
$dog = new Dog();
$cat = new Cat();

$dog->makeSound() ; // Gâu gâu!
$cat->makeSound(); // Meo meo!
//Bai3
abstract class Employee {
    protected $name;
    protected $salary;

    abstract public function getRole();

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function getRole() {
        return "Manager";
    }

    public function getDepartment() {
        return $this->department;
    }
}

class Staff extends Employee {
    private $supervisor;

    public function __construct($name, $salary, $supervisor) {
        parent::__construct($name, $salary);
        $this->supervisor = $supervisor;
    }

    public function getRole() {
        return "Staff";
    }

    public function getSupervisor() {
        return $this->supervisor;
    }
}

// Sử dụng
$manager = new Manager("John Doe", 5000, "Sales");
$staff = new Staff("Jane Smith", 3000, "John Doe");

echo "Manager: " . $manager->getName() . ", Role: " . $manager->getRole() . ", Department: " . $manager->getDepartment() . ", Salary: $" . $manager->getSalary() . PHP_EOL;
echo "Staff: " . $staff->getName() . ", Role: " . $staff->getRole() . ", Supervisor: " . $staff->getSupervisor() . ", Salary: $" . $staff->getSalary() . PHP_EOL;
//Bai4
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Xe hơi khởi động bằng khóa điện tử.";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        echo "Xe máy khởi động bằng nút giữa ghi đông.";
    }
}

// Sử dụng
$car = new Car();
$motorcycle = new Motorcycle();

$car->start(); // Xe hơi khởi động bằng khóa điện tử.
$motorcycle->start(); // Xe máy khởi động bằng nút giữa ghi đông.

//Bai5
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        echo "Kết nối tới cơ sở dữ liệu MySQL.";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn MySQL: " . $sql;
    }

    public function disconnect() {
        echo "Ngắt kết nối từ cơ sở dữ liệu MySQL.";
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Kết nối tới cơ sở dữ liệu PostgreSQL.";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn PostgreSQL: " . $sql;
    }

    public function disconnect() {
        echo "Ngắt kết nối từ cơ sở dữ liệu PostgreSQL.";
    }
}

// Sử dụng
$mysqlDb = new MySQLDatabase();
$postgreDb = new PostgreSQLDatabase();

$mysqlDb->connect(); // Kết nối tới cơ sở dữ liệu MySQL.
$mysqlDb->query("SELECT * FROM users"); // Thực hiện truy vấn MySQL: SELECT * FROM users
$mysqlDb->disconnect(); // Ngắt kết nối từ cơ sở dữ liệu MySQL.

$postgreDb->connect(); // Kết nối tới cơ sở dữ liệu PostgreSQL.
$postgreDb->query("SELECT * FROM customers"); // Thực hiện truy vấn PostgreSQL: SELECT * FROM customers
$postgreDb->disconnect(); // Ngắt kết nối từ cơ sở dữ liệu PostgreSQL.

?>