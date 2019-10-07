<?php
  // create a new class
  class Person{
    public $name; // properties
    public $email; // 'public' is an access modifier.  You can also have private/protected
  }

  $person1 = new Person; // instantiates new person object

  $person1->name = "Billy Bob"; // set object props w/ '->'
  echo $person1->name;

?>