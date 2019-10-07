<?php
  // create a new class
  class Person{
    private $name; // properties
    private $email; // 'private' is an access modifier.  You can also have public/protected
    private static $ageLimit = 45; // static props are just default props that don't need setter/getters etc

    // constructor inits the listed props
    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
      echo __CLASS__.' created';
      echo '<br>';
    }
    // deletes the class object
    public function __deconstruct(){
      echo __CLASS__.' destroyed';
      echo '<br>';
    }
    // setter method
    public function setName($name) {
      $this->name = $name;
    }
    // getter method
    public function getName(){
      return $this->name;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email;
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }
  }

  $person1 = new Person('Billy Bob Thornton', 'bbthorn@gmail.com'); // instantiates new person object

  // We can't directly set the props of a class if they are set to private
  // $person1->name = "Billy Bob";
  // echo $person1->name;
  // Instead, we'll make a public function to reach in and change those props (line 7 & 11)
  // And then use those functions to set the props below
  // $person1->setName('Bob Bobberson');
  // echo $person1->getName();

  echo $person1->getName();
  echo '<br>';
  echo $person1->getEmail();
  echo '<br>';

  # We can access static props/methods from Person without instantiating an instance of the class
  echo Person::$ageLimit;
  echo '<br>';
  echo Person::getAgeLimit();
  echo '<br>';

  class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
      parent::__construct($name, $email, $balance);
      $this->balance = "$".$balance;
      echo 'A new '.__CLASS__.' has been created!';
      echo '<br>';
    }

    public function setBalance($balance) {
      $this->balance = $balance;
      echo '<br>';

    }

    public function getBalance(){
      return $this->balance;
      echo '<br>';

    }

  }

  $customer1 = new Customer("Willy Rogers", "another@email.com", 800);

  echo $customer1->getName();
  echo '<br>';
  echo $customer1->getEmail();
  echo '<br>';
  echo $customer1->getBalance();
  echo '<br>';

?>