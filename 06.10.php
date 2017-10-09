<?php

//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
class Worker
{
    public $name = "Name";
    public $age = "Age";
    public $salary = "Salary";
}
//Создайте объект этого класса, затем установите поля в следующие значения :
//(не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
$worker1 = new Worker();
$worker1 -> name = "Ivan";
$worker1 -> age = "25";
$worker1 -> salary = "1000";
//Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
$worker2 = new Worker();
$worker2 -> name = "Vasya";
$worker2 -> age = "26";
$worker2 -> salary = "2000";
//Выведите на экран сумму зарплат Ивана и Васи.
echo $worker1->salary+$worker2->salary.PHP_EOL;
//Выведите на экран сумму возрастов Ивана и Васи.
echo $worker1->age+$worker2->age;

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
//и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
class Worker1
{
    private $name;
    private $age;
    private $salary;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->checkAge($age);
        $this->age = $age;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    private function checkAge($age){
        if($age <1 && $age>100){
            echo "Не верный".$this->name."(".$age.") возраст".PHP_EOL;
        }
    }
}
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
$worker1 = new Worker1();
$worker1->setName("Ivan");
$worker1->getName();
$worker1->setAge("25");
$worker1->getAge();
$worker1->setSalary("1000");
$worker1->getSalary();

$worker2 = new Worker1();
$worker2->setName("Vasya");
$worker2->getName();
$worker2->setAge("26");
$worker2->getAge();
$worker2->setSalary("2000");
$worker2->getSalary();
//Выведите на экран сумму зарплат Ивана и Васи.
echo $worker1->getSalary()+$worker2->getSalary().PHP_EOL;
//Выведите на экран сумму возрастов Ивана и Васи.
echo $worker1->getAge()+$worker2->getAge().'<br>';
//Дополните класс Worker из предыдущей задачи private методом checkAge,
//который будет проверять возраст на корректность (от 1 до 100 лет).
//Этот метод должен использовать метод setAge перед установкой нового возраста
//(если возраст не корректный - он не должен меняться).


//На __construct

//Сделайте класс Worker, в котором будут следующие private поля
// - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct
// при создании объекта (вот так: new Worker(имя, возраст) ).
class Worker2
{
    private $name;
    private $salary;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . $this->salary;
    }
}

$w = new Worker2("Dima", "1000");
//var_dump($w);
// Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
// Выведите на экран произведение его возраста и зарплаты.
echo $w->getName().'<br>';


//Наследование

//Сделайте класс User, в котором будут следующие protected поля
// - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
class User
{
    protected $name;
    protected $age;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
}
//Сделайте класс Worker, который наследует от класса User
// и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
class Worker3 extends User
{
    private $salary;

    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
}
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
$wor = new Worker3();
$wor->setName("Ivan");
$wor->setAge("25");
$wor->setSalary("1000");
// Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000.
$wor2 = new Worker3();
$wor2->setName("Vasya");
$wor2->setAge("26");
$wor2->setSalary("2000");
// Найдите сумму зарплата Ивана и Васи.
echo $wor->getSalary()+$wor2->getSalary().PHP_EOL;
//Сделайте класс Student, который наследует от класса User
// и вносит дополнительные private поля стипендия, курс,
// а также геттеры и сеттеры для них.

class Student extends User
{
    private $scholarship;
    private $course;

    public function getScholarship(){
        return $this->scholarship;
    }
    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }

    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
        $this->course = $course;
    }
}
$student = new Student();
$student->setName("Den");
$student->setScholarship("2500");
$student->setCourse("6");
//echo $student->getCourse();
//Сделайте класс Driver (Водитель),
// который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля:
// водительский стаж, категория вождения (A, B, C).
    class Driver extends Worker3
    {
    private $exp;
    private $category;

        public function getExp(){
            return $this->exp;
        }
        public function setExp($exp){
            $this->exp = $exp;
        }

        public function getCategory(){
            return $this->category;
        }
        public function setCategory($category){
            $this->category = $category;
        }
    }
$s = new Driver();
$s->setExp("5 year");
$s->setCategory("C");
//echo $s->getExp();