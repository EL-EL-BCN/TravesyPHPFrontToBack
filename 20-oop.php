<?php 
    class Person {
        public $name;
        public $email;


        // public access modifier - can be accessed from outside the class
        // private access modifier - can only be access from this class or any class that extends this class
    }

    // instantiate the Person Object
    $person1 = new Person;

    $person1->name = 'John Doe';

    echo $person1->name;
    echo "<br><br>";

    class People {
        private $name;
        private $email;

        // public access modifier - can be accessed from outside the class
        // private access modifier - can only be access from this class or any class that extends this class
    }

    // instantiate the Person Object
    $people1 = new People;

    // $people1->name = 'John Doe';

    // echo $people1->name;
    // Because People properties of name and email are provate we cannot access them from outside the class: Fatal error: Uncaught Error: Cannot access private property People::$name



class Human {
        private $name;
        private $email;
        public static $ageLimit = 40;
        private static $maxAge = 100;

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public static function getMaxAge() {
            return self::$maxAge.'<br>';
        }
    }

    // static property and static method
    echo Human::$ageLimit.'<br>';
    echo Human::getMaxAge();

    $human1 = new Human;

    $human1->setName('John Doe');

    echo $human1->getName();
    echo "<br><br>";
    



    class Dog {
        private $name;
        private $breed;

        public function __construct($name, $breed) {
            echo 'Dog Created<br>';
            $this->name = $name;
            $this->breed = $breed;
            echo  __CLASS__ . ' Class Created<br>';
        }

        public function __destruct() {
            echo __CLASS__ . ' Class Destroyed<br>';
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setBreed($breed) {
            $this->breed = $breed;
        }

        public function getBreed() {
            return $this->breed;
        }
    }

    $dog1 = new Dog('woof woof', 'huge mut');

    //$dog1->setName('woof woof');
    //echo $dog1->getName();
    //echo "<br><br>";

    echo $dog1->getName();
    echo "<br>";
    echo $dog1->getBreed();
    echo "<br><br>";


    class DogFood extends Dog {
        private $foodBrand;

        public function __construct($name, $breed, $foodBrand) {
            parent::__construct($name, $breed, $foodBrand);
            $this->foodbrand = $foodBrand;
            echo 'A new ' . __CLASS__ . ' has been created<br>';
        }

        public function setFoodBrand($foodBrand) {
            $this->foodBrand = $foodBrand;
        }

        public function getfoodBrand() {
            return $this->foodBrand.'<br>';
        }
    }

    $foodbrand2 = new DogFood('wolfie', 'poodle', 'premium K9 foods');

    echo $foodbrand2->getfoodBrand();
    echo "<br>";


?>